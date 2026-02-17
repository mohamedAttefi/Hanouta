@extends('layouts.app')

@section('title', 'المنتجات')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 md:mb-8 gap-4">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">المنتجات</h1>
        <a href="{{ route('products.create') }}" class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white px-4 sm:px-6 py-2 sm:py-3 rounded-lg transition font-semibold shadow-md text-center">
            <i class="fas fa-plus ml-2"></i>
            <span class="block sm:inline">إضافة منتج</span>
        </a>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-6 md:mb-8">
        <div class="bg-white p-4 md:p-6 rounded-lg shadow">
            <div class="flex items-center">
                <div class="bg-green-100 p-3 rounded-full ml-3">
                    <i class="fas fa-box text-green-600 text-lg"></i>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-600">إجمالي العناصر</p>
                    <p class="text-xl sm:text-2xl font-bold text-gray-900">{{ $products->total() }}</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-4 md:p-6 rounded-lg shadow">
            <div class="flex items-center">
                <div class="bg-yellow-100 p-3 rounded-full ml-3">
                    <i class="fas fa-exclamation-triangle text-yellow-600 text-lg"></i>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-600">مخزون منخفض</p>
                    <p class="text-xl sm:text-2xl font-bold text-yellow-600">{{ $products->where('quantity', '<', 10)->count() }}</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-4 md:p-6 rounded-lg shadow">
            <div class="flex items-center">
                <div class="bg-blue-100 p-3 rounded-full ml-3">
                    <i class="fas fa-layer-group text-blue-600 text-lg"></i>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-600">الفئات</p>
                    <p class="text-xl sm:text-2xl font-bold text-blue-600">{{ \App\Models\Product::distinct('category')->count() }}</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-4 md:p-6 rounded-lg shadow lg:col-span-2">
            <div class="flex items-center">
                <div class="bg-green-100 p-3 rounded-full ml-3">
                    <i class="fas fa-check-circle text-green-600 text-lg"></i>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-600">متوفر</p>
                    <p class="text-xl sm:text-2xl font-bold text-green-600">{{ $products->where('quantity', '>', 0)->count() }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Search and Filters -->
    <div class="bg-white rounded-lg shadow p-4 md:p-6 mb-6 md:mb-8">
        <div class="flex flex-col sm:flex-row gap-4">
            <div class="flex-1">
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">search</span>
                    <input type="text" placeholder="ابحث بالاسم أو الفئة..." 
                           class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                </div>
            </div>
            <div class="flex flex-wrap gap-2">
                <select class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">جميع الفئات</option>
                    <option value="خضروات">خضروات</option>
                    <option value="فواكه">فواكه</option>
                    <option value="ألبان">ألبان</option>
                    <option value="لحوم">لحوم</option>
                    <option value="مخبوزات">مخبوزات</option>
                </select>
                <select class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">السعر</option>
                    <option value="low">منخفض إلى مرتفع</option>
                    <option value="high">مرتفع إلى منخفض</option>
                </select>
                <select class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">الحالة</option>
                    <option value="1">متوفر</option>
                    <option value="0">نفد</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-4 md:p-6">
            @forelse ($products as $product)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6">
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-lg transition-all hover:scale-105">
                        <div class="flex flex-col">
                            @if($product->image_url)
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-32 sm:h-40 object-cover rounded-lg mb-4">
                            @else
                                <div class="w-full h-32 sm:h-40 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                                    <i class="fas fa-image text-gray-400 text-2xl"></i>
                                </div>
                            @endif
                            
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">{{ $product->name }}</h3>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="px-2 py-1 rounded-full bg-gray-100 text-gray-800 text-xs font-medium">{{ $product->category }}</span>
                                    <span class="text-lg font-bold text-green-600">{{ number_format($product->price, 2) }} درهم</span>
                                </div>
                                
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-sm text-gray-600">الكمية:</span>
                                    <span class="text-sm font-semibold {{ $product->quantity > 10 ? 'text-green-600' : ($product->quantity > 0 ? 'text-yellow-600' : 'text-red-600') }}">
                                        {{ $product->quantity }}
                                    </span>
                                </div>
                                
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-sm text-gray-600">الحالة:</span>
                                    @if ($product->quantity > 10)
                                        <span class="flex items-center gap-1 text-xs font-bold text-green-600 uppercase">
                                            <span class="w-2 h-2 rounded-full bg-green-600"></span>
                                            متوفر
                                        </span>
                                    @elseif ($product->quantity > 0)
                                        <span class="flex items-center gap-1 text-xs font-bold text-yellow-600 uppercase">
                                            <span class="w-2 h-2 rounded-full bg-yellow-600"></span>
                                            منخفض
                                        </span>
                                    @else
                                        <span class="flex items-center gap-1 text-xs font-bold text-red-600 uppercase">
                                            <span class="w-2 h-2 rounded-full bg-red-600"></span>
                                            نفد
                                        </span>
                                    @endif
                                </div>
                                
                                <!-- Actions -->
                                <div class="flex gap-2 pt-3 border-t border-gray-200">
                                    <a href="{{ route('products.show', $product) }}" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-lg transition text-center">
                                        <i class="fas fa-eye ml-2"></i>
                                        <span class="block sm:inline">عرض</span>
                                    </a>
                                    <a href="{{ route('products.edit', $product) }}" class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-lg transition text-center">
                                        <i class="fas fa-edit ml-2"></i>
                                        <span class="block sm:inline">تعديل</span>
                                    </a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="flex-1" onsubmit="return confirm('هل أنت متأكد من حذف هذا المنتج؟')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg transition text-center">
                                            <i class="fas fa-trash ml-2"></i>
                                            <span class="block sm:inline">حذف</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-12">
                        <i class="fas fa-box-open text-gray-400 text-6xl mb-6"></i>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">لا توجد منتجات حالياً</h3>
                        <p class="text-gray-600 mb-6">ابدأ بإضافة منتج جديد لإدارة مخزونك</p>
                        <a href="{{ route('products.create') }}" class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg transition font-semibold shadow-lg">
                            <i class="fas fa-plus ml-2"></i>
                            إضافة منتج
                        </a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Pagination -->
    @if ($products->hasPages())
        <div class="mt-6 md:mt-8 flex justify-center">
            {{ $products->links() }}
        </div>
    @endif
</div>
@endsection
