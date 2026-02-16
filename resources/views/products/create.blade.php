@extends('layouts.app')

@section('title', 'إضافة منتج جديد')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">
        <i class="fas fa-plus-circle ml-3 text-green-600"></i>
        إضافة منتج جديد
    </h1>

    <div class="bg-white rounded-lg shadow-md p-6">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="md:col-span-2">
                    <label class="block text-gray-700 font-semibold mb-2">
                        اسم المنتج بالعربية *
                    </label>
                    <input type="text" name="name_ar" value="{{ old('name_ar') }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-gray-700 font-semibold mb-2">
                        اسم المنتج بالإنجليزية
                    </label>
                    <input type="text" name="name_en" value="{{ old('name_en') }}"
                           class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-gray-700 font-semibold mb-2">
                        الوصف بالعربية
                    </label>
                    <textarea name="description_ar" rows="3" 
                              class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('description_ar') }}</textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-gray-700 font-semibold mb-2">
                        الوصف بالإنجليزية
                    </label>
                    <textarea name="description_en" rows="3"
                              class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('description_en') }}</textarea>
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-2">
                        السعر بالدرهم *
                    </label>
                    <input type="number" name="price" value="{{ old('price') }}" step="0.01" min="0" required
                           class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-2">
                        الفئة *
                    </label>
                    <select name="category" required
                            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                        <option value="">اختر الفئة</option>
                        <option value="خضروات" {{ old('category') == 'خضروات' ? 'selected' : '' }}>خضروات</option>
                        <option value="فواكه" {{ old('category') == 'فواكه' ? 'selected' : '' }}>فواكه</option>
                        <option value="ألبان" {{ old('category') == 'ألبان' ? 'selected' : '' }}>ألبان</option>
                        <option value="لحوم" {{ old('category') == 'لحوم' ? 'selected' : '' }}>لحوم</option>
                        <option value="مخبوزات" {{ old('category') == 'مخبوزات' ? 'selected' : '' }}>مخبوزات</option>
                        <option value="مشروبات" {{ old('category') == 'مشروبات' ? 'selected' : '' }}>مشروبات</option>
                        <option value="أخرى" {{ old('category') == 'أخرى' ? 'selected' : '' }}>أخرى</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-gray-700 font-semibold mb-2">
                        رابط الصورة
                    </label>
                    <input type="url" name="image_url" value="{{ old('image_url') }}"
                           placeholder="https://example.com/image.jpg"
                           class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-2">
                        الكمية *
                    </label>
                    <input type="number" name="quantity" value="{{ old('quantity', 0) }}" min="0" required
                           class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="in_stock" value="1" checked
                           class="ml-2 h-4 w-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
                    <label class="text-gray-700 font-semibold">متوفر في المخزون</label>
                </div>
            </div>

            <div class="flex justify-end space-x-reverse space-x-4 mt-6">
                <a href="{{ route('products.index') }}" 
                   class="px-6 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded transition">
                    إلغاء
                </a>
                <button type="submit" 
                        class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded transition">
                    <i class="fas fa-save ml-2"></i>
                    حفظ المنتج
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
