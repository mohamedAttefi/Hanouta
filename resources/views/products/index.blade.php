@extends('layouts.app')

@section('title', 'المنتجات')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">
        <i class="fas fa-shopping-basket ml-3 text-green-600"></i>
        {{ isset($category) ? "منتجات $category" : 'جميع المنتجات' }}
    </h1>
    
    <div class="flex flex-wrap gap-2 mb-6">
        <a href="{{ route('home') }}" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded transition">
            الكل
        </a>
        <a href="{{ route('products.byCategory', 'خضروات') }}" class="px-4 py-2 bg-green-100 hover:bg-green-200 rounded transition">
            خضروات
        </a>
        <a href="{{ route('products.byCategory', 'فواكه') }}" class="px-4 py-2 bg-red-100 hover:bg-red-200 rounded transition">
            فواكه
        </a>
        <a href="{{ route('products.byCategory', 'ألبان') }}" class="px-4 py-2 bg-blue-100 hover:bg-blue-200 rounded transition">
            ألبان
        </a>
        <a href="{{ route('products.byCategory', 'لحوم') }}" class="px-4 py-2 bg-orange-100 hover:bg-orange-200 rounded transition">
            لحوم
        </a>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    @forelse($products as $product)
        <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition">
            @if($product->image_url)
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-t-lg">
            @else
                <div class="w-full h-48 bg-gray-200 rounded-t-lg flex items-center justify-center">
                    <i class="fas fa-image text-gray-400 text-4xl"></i>
                </div>
            @endif
            
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $product->name }}</h3>
                <p class="text-gray-600 text-sm mb-3">{{ $product->description }}</p>
                
                <div class="flex justify-between items-center mb-3">
                    <span class="text-2xl font-bold text-green-600">{{ number_format($product->price, 2) }} درهم</span>
                    <span class="text-sm {{ $product->in_stock ? 'text-green-500' : 'text-red-500' }}">
                        {{ $product->in_stock ? 'متوفر' : 'نفد من المخزون' }}
                    </span>
                </div>
                
                <div class="text-sm text-gray-500 mb-3">
                    <i class="fas fa-layer-group ml-1"></i>
                    {{ $product->category }}
                    @if($product->quantity > 0)
                        <span class="mr-3">
                            <i class="fas fa-box ml-1"></i>
                            الكمية: {{ $product->quantity }}
                        </span>
                    @endif
                    @if($product->seller)
                        <span class="mr-3">
                            <i class="fas fa-store ml-1"></i>
                            {{ $product->seller->store_name }}
                        </span>
                    @endif
                </div>
                
                <div class="flex space-x-reverse space-x-2">
                    <a href="{{ route('products.show', $product) }}" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-center py-2 rounded transition">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('products.edit', $product) }}" class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white text-center py-2 rounded transition">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من حذف هذا المنتج؟')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="flex-1 bg-red-500 hover:bg-red-600 text-white py-2 rounded transition">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-full text-center py-12">
            <i class="fas fa-box-open text-gray-300 text-6xl mb-4"></i>
            <p class="text-gray-500 text-lg">لا توجد منتجات متاحة</p>
        </div>
    @endforelse
</div>

{{ $products->links() }}
@endsection
