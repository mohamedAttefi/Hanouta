<?php

namespace App\Services;

use App\Models\Seller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class SellerService
{
    /**
     * Register a new seller with transaction support.
     */
    public function registerSeller(array $data): Seller
    {
        try {
            DB::beginTransaction();
            
            $seller = Seller::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'] ?? null,
                'store_name' => $data['store_name'],
                'address' => $data['address'] ?? null,
                'password' => Hash::make($data['password']),
                'is_active' => true,
            ]);
            
            DB::commit();
            
            Log::info('Seller registered successfully', [
                'seller_id' => $seller->id,
                'email' => $seller->email,
                'store_name' => $seller->store_name
            ]);
            
            return $seller;
            
        } catch (\Exception $e) {
            DB::rollBack();
            
            Log::error('Failed to register seller', [
                'email' => $data['email'] ?? null,
                'store_name' => $data['store_name'] ?? null,
                'error' => $e->getMessage()
            ]);
            
            throw $e;
        }
    }
    
    /**
     * Authenticate seller with rate limiting.
     */
    public function authenticateSeller(array $credentials): ?Seller
    {
        try {
            $seller = Seller::where('email', $credentials['email'])->first();
            
            if (!$seller || !$seller->is_active) {
                Log::warning('Authentication attempt failed - seller not found or inactive', [
                    'email' => $credentials['email']
                ]);
                
                return null;
            }
            
            if (!Hash::check($credentials['password'], $seller->password)) {
                Log::warning('Authentication attempt failed - invalid password', [
                    'seller_id' => $seller->id,
                    'email' => $seller->email
                ]);
                
                return null;
            }
            
            Log::info('Seller authenticated successfully', [
                'seller_id' => $seller->id,
                'email' => $seller->email
            ]);
            
            return $seller;
            
        } catch (\Exception $e) {
            Log::error('Authentication error', [
                'email' => $credentials['email'] ?? null,
                'error' => $e->getMessage()
            ]);
            
            return null;
        }
    }
    
    /**
     * Update seller profile with transaction support.
     */
    public function updateSellerProfile(Seller $seller, array $data): Seller
    {
        try {
            DB::beginTransaction();
            
            // Handle password update if provided
            if (isset($data['password'])) {
                $data['password'] = Hash::make($data['password']);
            } else {
                unset($data['password']);
            }
            
            $seller->update($data);
            
            DB::commit();
            
            Log::info('Seller profile updated successfully', [
                'seller_id' => $seller->id,
                'updated_fields' => array_keys($data)
            ]);
            
            return $seller;
            
        } catch (\Exception $e) {
            DB::rollBack();
            
            Log::error('Failed to update seller profile', [
                'seller_id' => $seller->id,
                'error' => $e->getMessage()
            ]);
            
            throw $e;
        }
    }
    
    /**
     * Deactivate seller account with transaction support.
     */
    public function deactivateSeller(Seller $seller): bool
    {
        try {
            DB::beginTransaction();
            
            $seller->update(['is_active' => false]);
            
            // Clear seller's cache
            $this->clearSellerCache($seller->id);
            
            DB::commit();
            
            Log::info('Seller deactivated successfully', [
                'seller_id' => $seller->id,
                'email' => $seller->email
            ]);
            
            return true;
            
        } catch (\Exception $e) {
            DB::rollBack();
            
            Log::error('Failed to deactivate seller', [
                'seller_id' => $seller->id,
                'error' => $e->getMessage()
            ]);
            
            throw $e;
        }
    }
    
    /**
     * Get seller dashboard data with caching.
     */
    public function getDashboardData(Seller $seller): array
    {
        $cacheKey = "seller_dashboard_{$seller->id}";
        
        return Cache::remember($cacheKey, 300, function () use ($seller) {
            $products = $seller->products();
            
            return [
                'seller' => $seller,
                'total_revenue' => $products->sum('total_revenue'),
                'total_sold' => $products->sum('sold_quantity'),
                'total_products' => $products->count(),
                'active_products' => $products->where('in_stock', true)->count(),
                'low_stock_products' => $products->where('quantity', '<=', 5)->where('quantity', '>', 0)->count(),
                'recent_products' => $products->latest()->take(5)->get(),
                'top_selling_products' => $products->orderBy('sold_quantity', 'desc')->take(5)->get(),
            ];
        });
    }
    
    /**
     * Get seller performance metrics with caching.
     */
    public function getPerformanceMetrics(Seller $seller): array
    {
        $cacheKey = "seller_metrics_{$seller->id}";
        
        return Cache::remember($cacheKey, 600, function () use ($seller) {
            $products = $seller->products();
            
            $totalRevenue = $products->sum('total_revenue');
            $totalSold = $products->sum('sold_quantity');
            $totalProducts = $products->count();
            
            return [
                'average_price' => $totalSold > 0 ? $totalRevenue / $totalSold : 0,
                'conversion_rate' => $totalProducts > 0 ? ($products->where('sold_quantity', '>', 0)->count() / $totalProducts) * 100 : 0,
                'stock_efficiency' => $totalProducts > 0 ? ($products->where('in_stock', true)->count() / $totalProducts) * 100 : 0,
                'revenue_per_product' => $totalProducts > 0 ? $totalRevenue / $totalProducts : 0,
            ];
        });
    }
    
    /**
     * Search sellers with caching.
     */
    public function searchSellers(string $query, int $limit = 10)
    {
        $cacheKey = "sellers_search_" . md5($query) . "_{$limit}";
        
        return Cache::remember($cacheKey, 600, function () use ($query, $limit) {
            return Seller::where('is_active', true)
                ->where(function ($q) use ($query) {
                    $q->where('store_name', 'like', "%{$query}%")
                      ->orWhere('name', 'like', "%{$query}%");
                })
                ->with('products')
                ->take($limit)
                ->get();
        });
    }
    
    /**
     * Clear seller-specific cache.
     */
    public function clearSellerCache(int $sellerId): void
    {
        Cache::forget("seller_dashboard_{$sellerId}");
        Cache::forget("seller_metrics_{$sellerId}");
        
        // Clear products cache
        for ($page = 1; $page <= 10; $page++) {
            Cache::forget("seller_products_{$sellerId}_page_{$page}");
        }
    }
    
    /**
     * Validate seller data for registration.
     */
    public function validateSellerData(array $data): array
    {
        $errors = [];
        
        // Check if email already exists
        if (Seller::where('email', $data['email'])->exists()) {
            $errors['email'] = 'البريد الإلكتروني مسجل بالفعل';
        }
        
        // Check if store name already exists
        if (Seller::where('store_name', $data['store_name'])->exists()) {
            $errors['store_name'] = 'اسم المتجر مسجل بالفعل';
        }
        
        // Validate phone format if provided
        if (isset($data['phone']) && $data['phone']) {
            if (!preg_match('/^[+]?[0-9\s\-\(\)]+$/', $data['phone'])) {
                $errors['phone'] = 'رقم الهاتف غير صالح';
            }
        }
        
        return $errors;
    }
}
