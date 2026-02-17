@extends('layouts.app')

@section('title', 'لوحة تحكم البائع')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Welcome Section -->
    <div class="bg-gradient-to-r from-green-600 to-green-700 rounded-xl shadow-lg p-4 sm:p-6 md:p-8 mb-6 md:mb-8 text-white">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-2">
                    <i class="fas fa-store ml-2 sm:ml-3"></i>
                    <span class="block sm:inline">لوحة تحكم</span>
                    <span class="hidden sm:inline">{{ $seller->store_name }}</span>
                </h1>
                <p class="text-green-100 text-base sm:text-lg">مرحباً بك يا {{ $seller->name }}</p>
            </div>
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-reverse sm:space-x-4">
                <a href="{{ route('products.create') }}" class="bg-white text-green-600 hover:bg-green-50 px-4 sm:px-6 py-2 sm:py-3 rounded-lg transition font-semibold shadow-md text-center sm:text-left">
                    <i class="fas fa-plus ml-2"></i>
                    <span class="block sm:inline">إضافة منتج</span>
                </a>
                <form action="{{ route('seller.logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 sm:px-6 py-2 sm:py-3 rounded-lg transition font-semibold shadow-md text-center sm:text-left">
                        <i class="fas fa-sign-out-alt ml-2"></i>
                        <span class="block sm:inline">تسجيل خروج</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-6 md:mb-8">
        <div class="bg-white rounded-xl shadow-lg p-4 md:p-6 border-l-4 border-green-500">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div class="flex-1">
                    <p class="text-gray-600 text-sm font-medium">إجمالي الإيرادات</p>
                    <p class="text-xl sm:text-2xl md:text-3xl font-bold text-green-600 mt-2">{{ number_format($totalRevenue, 2) }} درهم</p>
                    <p class="text-xs text-gray-500 mt-1">إجمالي المبيعات</p>
                </div>
                <div class="bg-green-100 p-3 sm:p-4 rounded-full">
                    <i class="fas fa-money-bill-wave text-green-600 text-lg sm:text-xl md:text-2xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-4 md:p-6 border-l-4 border-blue-500">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div class="flex-1">
                    <p class="text-gray-600 text-sm font-medium">عدد المنتجات</p>
                    <p class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-600 mt-2">{{ $totalProducts }}</p>
                    <p class="text-xs text-gray-500 mt-1">المنتجات المتاحة</p>
                </div>
                <div class="bg-blue-100 p-3 sm:p-4 rounded-full">
                    <i class="fas fa-box text-blue-600 text-lg sm:text-xl md:text-2xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-4 md:p-6 border-l-4 border-yellow-500">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div class="flex-1">
                    <p class="text-gray-600 text-sm font-medium">المنتجات منخفضة المخزون</p>
                    <p class="text-xl sm:text-2xl md:text-3xl font-bold text-yellow-600 mt-2">{{ $lowStockProducts }}</p>
                    <p class="text-xs text-gray-500 mt-1">أقل من 10 قطعة</p>
                </div>
                <div class="bg-yellow-100 p-3 sm:p-4 rounded-full">
                    <i class="fas fa-exclamation-triangle text-yellow-600 text-lg sm:text-xl md:text-2xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-4 md:p-6 border-l-4 border-red-500">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div class="flex-1">
                    <p class="text-gray-600 text-sm font-medium">المنتجات النافدة</p>
                    <p class="text-xl sm:text-2xl md:text-3xl font-bold text-red-600 mt-2">{{ $outOfStockProducts }}</p>
                    <p class="text-xs text-gray-500 mt-1">الكمية صفر</p>
                </div>
                <div class="bg-red-100 p-3 sm:p-4 rounded-full">
                    <i class="fas fa-times-circle text-red-600 text-lg sm:text-xl md:text-2xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="p-4 md:p-6">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 md:mb-6 gap-4">
                <h2 class="text-xl sm:text-2xl font-bold text-gray-800">
                    <i class="fas fa-box-open ml-2 sm:ml-3 text-green-600"></i>
                    منتجاتك
                </h2>
                <a href="{{ route('products.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 sm:px-6 py-2 sm:py-3 rounded-lg transition font-semibold shadow-md text-center">
                    <i class="fas fa-plus ml-2"></i>
                    <span class="block sm:inline">إضافة منتج جديد</span>
                </a>
            </div>

            @if($products->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    @foreach($products as $product)
                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-lg transition-shadow">
                            <div class="flex flex-col">
                                @if($product->image_url)
                                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-32 sm:h-40 object-cover rounded-lg mb-4">
                                @else
                                    <div class="w-full h-32 sm:h-40 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                                        <i class="fas fa-image text-gray-400 text-3xl"></i>
                                    </div>
                                @endif
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
