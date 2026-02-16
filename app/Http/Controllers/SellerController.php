<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Services\SellerService;
use App\Services\ProductService;
use App\Http\Requests\RegisterSellerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
    protected SellerService $sellerService;
    protected ProductService $productService;

    public function __construct(SellerService $sellerService, ProductService $productService)
    {
        $this->sellerService = $sellerService;
        $this->productService = $productService;
    }

    /**
     * Show the seller registration form.
     */
    public function showRegisterForm()
    {
        return view('seller.register');
    }

    /**
     * Register a new seller.
     */
    public function register(RegisterSellerRequest $request)
    {
        try {
            $seller = $this->sellerService->registerSeller($request->validated());
            
            Auth::guard('seller')->login($seller);

            return redirect()->route('seller.dashboard')
                ->with('success', 'تم تسجيل حساب البائع بنجاح');
                
        } catch (\Exception $e) {
            \Log::error('Failed to register seller', ['error' => $e->getMessage()]);
            return back()->withInput()->with('error', 'فشل في تسجيل الحساب');
        }
    }

    /**
     * Show the seller login form.
     */
    public function showLoginForm()
    {
        return view('seller.login');
    }

    /**
     * Authenticate seller.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {
            $credentials = $request->only('email', 'password');
            $seller = $this->sellerService->authenticateSeller($credentials);

            if ($seller) {
                Auth::guard('seller')->login($seller, $request->boolean('remember'));
                $request->session()->regenerate();
                
                return redirect()->route('seller.dashboard')
                    ->with('success', 'تم تسجيل الدخول بنجاح');
            }

            return back()->withErrors([
                'email' => 'بيانات الاعتماد غير صحيحة',
            ])->withInput($request->except('password'));

        } catch (\Exception $e) {
            \Log::error('Login error', ['email' => $request->email, 'error' => $e->getMessage()]);
            return back()->with('error', 'حدث خطأ أثناء تسجيل الدخول');
        }
    }

    /**
     * Display the seller dashboard.
     */
    public function dashboard()
    {
        try {
            $seller = Auth::guard('seller')->user();
            $dashboardData = $this->sellerService->getDashboardData($seller);
            $products = $this->productService->getSellerProducts($seller);
            
            return view('seller.dashboard', array_merge($dashboardData, [
                'products' => $products,
                'totalRevenue' => $dashboardData['total_revenue'],
                'totalSold' => $dashboardData['total_sold'],
                'totalProducts' => $dashboardData['total_products']
            ]));
            
        } catch (\Exception $e) {
            \Log::error('Failed to load dashboard', ['error' => $e->getMessage()]);
            return back()->with('error', 'فشل في تحميل لوحة التحكم');
        }
    }

    /**
     * Logout the seller.
     */
    public function logout(Request $request)
    {
        try {
            $seller = Auth::guard('seller')->user();
            
            Auth::guard('seller')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            \Log::info('Seller logged out', ['seller_id' => $seller->id ?? null]);

            return redirect()->route('seller.login')
                ->with('success', 'تم تسجيل الخروج بنجاح');
                
        } catch (\Exception $e) {
            \Log::error('Logout error', ['error' => $e->getMessage()]);
            return redirect()->route('home')->with('error', 'حدث خطأ أثناء تسجيل الخروج');
        }
    }
}
