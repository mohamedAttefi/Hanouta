@extends('layouts.app')

@section('title', 'لوحة تحكم البائع')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Welcome Section -->
    <div class="bg-gradient-to-r from-green-600 to-green-700 rounded-xl shadow-lg p-8 mb-8 text-white">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-4xl font-bold mb-2">
                    <i class="fas fa-store ml-3"></i>
                    لوحة تحكم {{ $seller->store_name }}
                </h1>
                <p class="text-green-100 text-lg">مرحباً بك يا {{ $seller->name }}</p>
            </div>
            <div class="flex space-x-reverse space-x-4">
                <a href="{{ route('products.create') }}" class="bg-white text-green-600 hover:bg-green-50 px-6 py-3 rounded-lg transition font-semibold shadow-md">
                    <i class="fas fa-plus ml-2"></i>
                    إضافة منتج
                </a>
                <form action="{{ route('seller.logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-6 py-3 rounded-lg transition font-semibold shadow-md">
                        <i class="fas fa-sign-out-alt ml-2"></i>
                        تسجيل خروج
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">إجمالي الإيرادات</p>
                    <p class="text-3xl font-bold text-green-600 mt-2">{{ number_format($totalRevenue, 2) }} درهم</p>
                    <p class="text-xs text-gray-500 mt-1">إجمالي المبيعات</p>
                </div>
                <div class="bg-green-100 p-4 rounded-full">
                    <i class="fas fa-money-bill-wave text-green-600 text-2xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">الكمية المباعة</p>
                    <p class="text-3xl font-bold text-blue-600 mt-2">{{ $totalSold }} قطعة</p>
                    <p class="text-xs text-gray-500 mt-1">إجمالي المنتجات المباعة</p>
                </div>
                <div class="bg-blue-100 p-4 rounded-full">
                    <i class="fas fa-shopping-cart text-blue-600 text-2xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-purple-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">عدد المنتجات</p>
                    <p class="text-3xl font-bold text-purple-600 mt-2">{{ $totalProducts }} منتج</p>
                    <p class="text-xs text-gray-500 mt-1">إجمالي المنتجات</p>
                </div>
                <div class="bg-purple-100 p-4 rounded-full">
                    <i class="fas fa-box text-purple-600 text-2xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-orange-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">متوسط السعر</p>
                    <p class="text-3xl font-bold text-orange-600 mt-2">{{ $totalProducts > 0 && $totalSold > 0 ? number_format($totalRevenue / $totalSold, 2) : '0.00' }} درهم</p>
                    <p class="text-xs text-gray-500 mt-1">متوسط سعر المنتج</p>
                </div>
                <div class="bg-orange-100 p-4 rounded-full">
                    <i class="fas fa-chart-line text-orange-600 text-2xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="bg-gradient-to-r from-gray-50 to-gray-100 px-8 py-6 border-b">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-bold text-gray-800">
                    <i class="fas fa-th-large ml-3"></i>
                    منتجاتي
                </h2>
                <div class="text-sm text-gray-600">
                    {{ $products->total() }} منتج
                </div>
            </div>
        </div>
        
        <div class="p-6">
            @forelse($products as $product)
                <div class="bg-gray-50 rounded-lg p-6 mb-6 hover:shadow-md transition-shadow">
                    <div class="flex gap-6">
                        <!-- Product Image -->
                        <div class="flex-shrink-0">
                            @if($product->image_url)
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" 
                                     class="w-32 h-32 rounded-lg object-cover shadow-md">
                            @else
                                <div class="w-32 h-32 bg-gradient-to-br from-gray-200 to-gray-300 rounded-lg flex items-center justify-center shadow-md">
                                    <i class="fas fa-image text-gray-500 text-3xl"></i>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Product Info -->
                        <div class="flex-grow">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $product->name }}</h3>
                                    <p class="text-gray-600 mb-3">{{ Str::limit($product->description, 100) }}</p>
                                    <div class="flex gap-4 text-sm">
                                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full font-medium">
                                            <i class="fas fa-layer-group ml-1"></i>
                                            {{ $product->category }}
                                        </span>
                                        <span class="{{ $product->in_stock ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }} px-3 py-1 rounded-full font-medium">
                                            <i class="fas fa-{{ $product->in_stock ? 'check' : 'times' }} ml-1"></i>
                                            {{ $product->in_stock ? 'متوفر' : 'نفد من المخزون' }}
                                        </span>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <p class="text-2xl font-bold text-green-600">{{ number_format($product->price, 2) }} درهم</p>
                                    <p class="text-sm text-gray-500">السعر</p>
                                </div>
                            </div>
                            
                            <!-- Stats Row -->
                            <div class="grid grid-cols-3 gap-4 mb-4">
                                <div class="bg-white rounded-lg p-3 text-center">
                                    <p class="text-sm text-gray-600">الكمية</p>
                                    <p class="text-lg font-bold text-gray-800">{{ $product->quantity }}</p>
                                </div>
                                <div class="bg-white rounded-lg p-3 text-center">
                                    <p class="text-sm text-gray-600">المباع</p>
                                    <p class="text-lg font-bold text-blue-600">{{ $product->sold_quantity }}</p>
                                </div>
                                <div class="bg-white rounded-lg p-3 text-center">
                                    <p class="text-sm text-gray-600">الإيرادات</p>
                                    <p class="text-lg font-bold text-green-600">{{ number_format($product->total_revenue, 2) }} درهم</p>
                                </div>
                            </div>
                            
                            <!-- Actions -->
                            <div class="flex gap-3 items-center">
                                <form action="{{ route('products.recordSale', $product) }}" method="POST" class="flex items-center gap-2">
                                    @csrf
                                    <input type="number" name="quantity" value="1" min="1" max="{{ $product->quantity }}" 
                                           class="w-20 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" 
                                           @if($product->quantity == 0) disabled @endif>
                                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition font-medium" 
                                            @if($product->quantity == 0) disabled @endif>
                                        <i class="fas fa-shopping-cart ml-2"></i>
                                        بيع
                                    </button>
                                </form>
                                
                                <a href="{{ route('products.edit', $product) }}" 
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition font-medium">
                                    <i class="fas fa-edit ml-2"></i>
                                    تعديل
                                </a>
                                
                                <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition font-medium" 
                                            onclick="return confirm('هل أنت متأكد من حذف هذا المنتج؟')">
                                        <i class="fas fa-trash ml-2"></i>
                                        حذف
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center py-16">
                    <i class="fas fa-box-open text-gray-300 text-6xl mb-6"></i>
                    <h3 class="text-2xl font-bold text-gray-600 mb-4">لا توجد منتجات</h3>
                    <p class="text-gray-500 mb-6">ابدأ بإضافة منتجاتك الأولى لعرضها هنا</p>
                    <a href="{{ route('products.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg transition font-semibold text-lg">
                        <i class="fas fa-plus ml-2"></i>
                        إضافة أول منتج
                    </a>
                </div>
            @endforelse
        </div>
        
        <!-- Pagination -->
        @if($products->hasPages())
            <div class="bg-gray-50 px-8 py-6 border-t">
                {{ $products->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
