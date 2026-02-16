<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Seller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductService
{
    /**
     * Create a new product for a seller with transaction support.
     */
    public function createProduct(Seller $seller, array $data): Product
    {
        try {
            DB::beginTransaction();
            
            $product = $seller->products()->create(array_merge($data, [
                'seller_id' => $seller->id,
                'in_stock' => $data['quantity'] > 0,
            ]));
            
            // Clear seller's products cache
            $this->clearSellerProductsCache($seller->id);
            
            DB::commit();
            
            Log::info('Product created successfully', [
                'product_id' => $product->id,
                'seller_id' => $seller->id,
                'product_name' => $product->name_ar
            ]);
            
            return $product;
            
        } catch (\Exception $e) {
            DB::rollBack();
            
            Log::error('Failed to create product', [
                'seller_id' => $seller->id,
                'error' => $e->getMessage(),
                'data' => $data
            ]);
            
            throw $e;
        }
    }
    
    /**
     * Update a product with transaction support.
     */
    public function updateProduct(Product $product, array $data): Product
    {
        try {
            DB::beginTransaction();
            
            $data['in_stock'] = ($data['quantity'] ?? $product->quantity) > 0;
            
            $product->update($data);
            
            // Clear relevant caches
            $this->clearProductCache($product->id);
            $this->clearSellerProductsCache($product->seller_id);
            
            DB::commit();
            
            Log::info('Product updated successfully', [
                'product_id' => $product->id,
                'seller_id' => $product->seller_id,
                'product_name' => $product->name_ar
            ]);
            
            return $product;
            
        } catch (\Exception $e) {
            DB::rollBack();
            
            Log::error('Failed to update product', [
                'product_id' => $product->id,
                'error' => $e->getMessage(),
                'data' => $data
            ]);
            
            throw $e;
        }
    }
    
    /**
     * Record a sale with transaction support and inventory management.
     */
    public function recordSale(Product $product, int $quantity): array
    {
        try {
            DB::beginTransaction();
            
            // Check if enough quantity is available
            if ($product->quantity < $quantity) {
                throw new \Exception('Insufficient product quantity');
            }
            
            $revenue = $product->price * $quantity;
            
            // Update product
            $product->sold_quantity += $quantity;
            $product->total_revenue += $revenue;
            $product->quantity -= $quantity;
            
            if ($product->quantity <= 0) {
                $product->in_stock = false;
                $product->quantity = 0;
            }
            
            $product->save();
            
            // Clear relevant caches
            $this->clearProductCache($product->id);
            $this->clearSellerProductsCache($product->seller_id);
            
            DB::commit();
            
            Log::info('Sale recorded successfully', [
                'product_id' => $product->id,
                'seller_id' => $product->seller_id,
                'quantity' => $quantity,
                'revenue' => $revenue
            ]);
            
            return [
                'success' => true,
                'quantity_sold' => $quantity,
                'revenue' => $revenue,
                'remaining_quantity' => $product->quantity
            ];
            
        } catch (\Exception $e) {
            DB::rollBack();
            
            Log::error('Failed to record sale', [
                'product_id' => $product->id,
                'quantity' => $quantity,
                'error' => $e->getMessage()
            ]);
            
            throw $e;
        }
    }
    
    /**
     * Get seller's products with caching.
     */
    public function getSellerProducts(Seller $seller, int $perPage = 10)
    {
        $cacheKey = "seller_products_{$seller->id}_page_" . request('page', 1);
        
        return Cache::remember($cacheKey, 300, function () use ($seller, $perPage) {
            return $seller->products()->latest()->paginate($perPage);
        });
    }
    
    /**
     * Get all products with caching and relationships.
     */
    public function getAllProducts(int $perPage = 12)
    {
        $cacheKey = "all_products_page_" . request('page', 1);
        
        return Cache::remember($cacheKey, 600, function () use ($perPage) {
            return Product::with('seller')->latest()->paginate($perPage);
        });
    }
    
    /**
     * Get products by category with caching.
     */
    public function getProductsByCategory(string $category, int $perPage = 12)
    {
        $cacheKey = "products_category_{$category}_page_" . request('page', 1);
        
        return Cache::remember($cacheKey, 600, function () use ($category, $perPage) {
            return Product::with('seller')
                ->where('category', $category)
                ->latest()
                ->paginate($perPage);
        });
    }
    
    /**
     * Get seller statistics with caching.
     */
    public function getSellerStatistics(Seller $seller): array
    {
        $cacheKey = "seller_stats_{$seller->id}";
        
        return Cache::remember($cacheKey, 300, function () use ($seller) {
            $products = $seller->products();
            
            return [
                'total_revenue' => $products->sum('total_revenue'),
                'total_sold' => $products->sum('sold_quantity'),
                'total_products' => $products->count(),
                'active_products' => $products->where('in_stock', true)->count(),
                'low_stock_products' => $products->where('quantity', '<=', 5)->where('quantity', '>', 0)->count(),
            ];
        });
    }
    
    /**
     * Delete a product with transaction support.
     */
    public function deleteProduct(Product $product): bool
    {
        try {
            DB::beginTransaction();
            
            $productId = $product->id;
            $sellerId = $product->seller_id;
            
            $product->delete();
            
            // Clear relevant caches
            $this->clearProductCache($productId);
            $this->clearSellerProductsCache($sellerId);
            
            DB::commit();
            
            Log::info('Product deleted successfully', [
                'product_id' => $productId,
                'seller_id' => $sellerId
            ]);
            
            return true;
            
        } catch (\Exception $e) {
            DB::rollBack();
            
            Log::error('Failed to delete product', [
                'product_id' => $product->id,
                'error' => $e->getMessage()
            ]);
            
            throw $e;
        }
    }
    
    /**
     * Clear product-specific cache.
     */
    private function clearProductCache(int $productId): void
    {
        Cache::forget("product_{$productId}");
    }
    
    /**
     * Clear seller's products cache.
     */
    private function clearSellerProductsCache(int $sellerId): void
    {
        // Clear all paginated results
        for ($page = 1; $page <= 10; $page++) {
            Cache::forget("seller_products_{$sellerId}_page_{$page}");
        }
        
        // Clear statistics
        Cache::forget("seller_stats_{$sellerId}");
    }
    
    /**
     * Clear all products cache (for global operations).
     */
    public function clearAllProductsCache(): void
    {
        // Clear all paginated results
        for ($page = 1; $page <= 10; $page++) {
            Cache::forget("all_products_page_{$page}");
        }
        
        // Clear category caches
        $categories = ['خضروات', 'فواكه', 'ألبان', 'لحوم', 'مخبوزات', 'مشروبات', 'أخرى'];
        foreach ($categories as $category) {
            for ($page = 1; $page <= 10; $page++) {
                Cache::forget("products_category_{$category}_page_{$page}");
            }
        }
    }
}
