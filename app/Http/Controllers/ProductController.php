<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Seller;
use App\Services\ProductService;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\RecordSaleRequest;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
        $this->middleware('auth:seller')->except(['index', 'show', 'byCategory']);
    }

    /**
     * Display a listing of all products.
     */
    public function index()
    {
        try {
            $products = $this->productService->getAllProducts();
            return view('products.index', compact('products'));
        } catch (\Exception $e) {
            \Log::error('Failed to load products index', ['error' => $e->getMessage()]);
            return back()->with('error', 'فشل في تحميل المنتجات');
        }
    }

    /**
     * Display products by category.
     */
    public function byCategory($category)
    {
        try {
            $products = $this->productService->getProductsByCategory($category);
            return view('products.index', compact('products', 'category'));
        } catch (\Exception $e) {
            \Log::error('Failed to load products by category', ['category' => $category, 'error' => $e->getMessage()]);
            return back()->with('error', 'فشل في تحميل منتجات الفئة');
        }
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created product.
     */
    public function store(StoreProductRequest $request)
    {
        try {
            $seller = Auth::guard('seller')->user();
            $product = $this->productService->createProduct($seller, $request->validated());
            
            return redirect()->route('seller.dashboard')
                ->with('success', 'تم إضافة المنتج بنجاح');
                
        } catch (\Exception $e) {
            \Log::error('Failed to create product', ['error' => $e->getMessage()]);
            return back()->withInput()->with('error', 'فشل في إضافة المنتج');
        }
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        try {
            return view('products.show', compact('product'));
        } catch (\Exception $e) {
            \Log::error('Failed to show product', ['product_id' => $product->id, 'error' => $e->getMessage()]);
            return back()->with('error', 'فشل في عرض المنتج');
        }
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        $this->authorize('update', $product);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified product.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        try {
            $this->authorize('update', $product);
            
            $updatedProduct = $this->productService->updateProduct($product, $request->validated());
            
            return redirect()->route('seller.dashboard')
                ->with('success', 'تم تحديث المنتج بنجاح');
                
        } catch (\Exception $e) {
            \Log::error('Failed to update product', ['product_id' => $product->id, 'error' => $e->getMessage()]);
            return back()->withInput()->with('error', 'فشل في تحديث المنتج');
        }
    }

    /**
     * Remove the specified product.
     */
    public function destroy(Product $product)
    {
        try {
            $this->authorize('delete', $product);
            
            $this->productService->deleteProduct($product);
            
            return redirect()->route('seller.dashboard')
                ->with('success', 'تم حذف المنتج بنجاح');
                
        } catch (\Exception $e) {
            \Log::error('Failed to delete product', ['product_id' => $product->id, 'error' => $e->getMessage()]);
            return back()->with('error', 'فشل في حذف المنتج');
        }
    }

    /**
     * Record a sale for the product.
     */
    public function recordSale(RecordSaleRequest $request, Product $product)
    {
        try {
            $this->authorize('update', $product);
            
            $result = $this->productService->recordSale($product, $request->validated()['quantity']);
            
            return redirect()->route('seller.dashboard')
                ->with('success', "تم تسجيل بيع {$result['quantity_sold']} قطعة من {$product->name}");
                
        } catch (\Exception $e) {
            \Log::error('Failed to record sale', ['product_id' => $product->id, 'error' => $e->getMessage()]);
            return back()->with('error', 'فشل في تسجيل البيع');
        }
    }
}
