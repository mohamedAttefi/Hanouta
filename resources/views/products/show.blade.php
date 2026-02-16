@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        @if($product->image_url)
            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
        @else
            <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                <i class="fas fa-image text-gray-400 text-6xl"></i>
            </div>
        @endif
        
        <div class="p-6">
            <div class="flex justify-between items-start mb-4">
                <h1 class="text-3xl font-bold text-gray-800">{{ $product->name }}</h1>
                <span class="px-3 py-1 {{ $product->in_stock ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }} rounded-full text-sm font-semibold">
                    {{ $product->in_stock ? 'متوفر' : 'نفد من المخزون' }}
                </span>
            </div>
            
            <div class="text-gray-600 mb-6">
                <p class="text-lg leading-relaxed">{{ $product->description }}</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="bg-gray-50 p-4 rounded">
                    <h3 class="font-semibold text-gray-700 mb-2">
                        <i class="fas fa-tag ml-2 text-green-600"></i>
                        السعر
                    </h3>
                    <p class="text-2xl font-bold text-green-600">{{ number_format($product->price, 2) }} درهم</p>
                </div>
                
                <div class="bg-gray-50 p-4 rounded">
                    <h3 class="font-semibold text-gray-700 mb-2">
                        <i class="fas fa-layer-group ml-2 text-blue-600"></i>
                        الفئة
                    </h3>
                    <p class="text-lg">{{ $product->category }}</p>
                </div>
                
                <div class="bg-gray-50 p-4 rounded">
                    <h3 class="font-semibold text-gray-700 mb-2">
                        <i class="fas fa-box ml-2 text-orange-600"></i>
                        الكمية المتاحة
                    </h3>
                    <p class="text-lg">{{ $product->quantity }} قطعة</p>
                </div>
                
                <div class="bg-gray-50 p-4 rounded">
                    <h3 class="font-semibold text-gray-700 mb-2">
                        <i class="fas fa-calendar ml-2 text-purple-600"></i>
                        تاريخ الإضافة
                    </h3>
                    <p class="text-lg">{{ $product->created_at->format('Y-m-d') }}</p>
                </div>
            </div>
            
            <div class="flex justify-between items-center">
                <div class="flex space-x-reverse space-x-4">
                    <a href="{{ route('products.edit', $product) }}" 
                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded transition">
                        <i class="fas fa-edit ml-2"></i>
                        تعديل المنتج
                    </a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من حذف هذا المنتج؟')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded transition">
                            <i class="fas fa-trash ml-2"></i>
                            حذف المنتج
                        </button>
                    </form>
                </div>
                
                <a href="{{ route('products.index') }}" 
                   class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded transition">
                    <i class="fas fa-arrow-left ml-2"></i>
                    العودة للقائمة
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
