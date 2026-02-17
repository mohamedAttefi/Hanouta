@extends('layouts.app')

@section('title', 'تطبيق البقالة')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-green-600 via-green-700 to-green-800 rounded-2xl shadow-2xl p-8 md:p-12 mb-8 md:mb-12 text-white">
        <div class="text-center">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 md:mb-6">
                <i class="fas fa-shopping-cart mb-4 md:mb-6 text-4xl md:text-5xl"></i>
                تطبيق البقالة
            </h1>
            <p class="text-lg sm:text-xl md:text-2xl mb-6 md:mb-8 text-green-100">
                نظام متكامل لإدارة متجرك الإلكتروني
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                @if(!Auth::guard('seller')->check())
                    <a href="{{ route('seller.login') }}" class="bg-white text-green-600 hover:bg-green-50 px-6 sm:px-8 py-3 sm:py-4 rounded-lg transition font-semibold shadow-lg text-center">
                        <i class="fas fa-sign-in-alt ml-2"></i>
                        <span class="block sm:inline">دخول البائعين</span>
                    </a>
                    <a href="{{ route('seller.register') }}" class="bg-green-700 hover:bg-green-800 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg transition font-semibold shadow-lg text-center">
                        <i class="fas fa-user-plus ml-2"></i>
                        <span class="block sm:inline">تسجيل بائع جديد</span>
                    </a>
                @else
                    <a href="{{ route('seller.dashboard') }}" class="bg-white text-green-600 hover:bg-green-50 px-6 sm:px-8 py-3 sm:py-4 rounded-lg transition font-semibold shadow-lg text-center">
                        <i class="fas fa-store ml-2"></i>
                        <span class="block sm:inline">لوحة التحكم</span>
                    </a>
                @endif
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-8 md:mb-12">
        <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 text-center hover:shadow-xl transition-shadow">
            <div class="bg-green-100 w-16 h-16 md:w-20 md:h-20 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                <i class="fas fa-box text-green-600 text-2xl md:text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">إدارة المنتجات</h3>
            <p class="text-gray-600 mb-4">أضف وعدل منتجاتك بسهولة</p>
            <ul class="text-right text-gray-600 space-y-2">
                <li><i class="fas fa-check text-green-500 ml-2"></i>إضافة منتجات جديدة</li>
                <li><i class="fas fa-check text-green-500 ml-2"></i>تعديل الأسعار والكميات</li>
                <li><i class="fas fa-check text-green-500 ml-2"></i>إدارة المخزون</li>
            </ul>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 text-center hover:shadow-xl transition-shadow">
            <div class="bg-blue-100 w-16 h-16 md:w-20 md:h-20 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                <i class="fas fa-chart-line text-blue-600 text-2xl md:text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">متابعة المبيعات</h3>
            <p class="text-gray-600 mb-4">تتبع أداء مبيعاتك اليومية</p>
            <ul class="text-right text-gray-600 space-y-2">
                <li><i class="fas fa-check text-blue-500 ml-2"></i>سجل المبيعات</li>
                <li><i class="fas fa-check text-blue-500 ml-2"></i>إحصائيات مفصلة</li>
                <li><i class="fas fa-check text-blue-500 ml-2"></i>تقارير الأداء</li>
            </ul>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 text-center hover:shadow-xl transition-shadow">
            <div class="bg-yellow-100 w-16 h-16 md:w-20 md:h-20 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                <i class="fas fa-mobile-alt text-yellow-600 text-2xl md:text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">سهولة الاستخدام</h3>
            <p class="text-gray-600 mb-4">واجهة بسيطة ومتجاوبة</p>
            <ul class="text-right text-gray-600 space-y-2">
                <li><i class="fas fa-check text-yellow-500 ml-2"></i>تصميم متجاوب</li>
                <li><i class="fas fa-check text-yellow-500 ml-2"></i>دعم كامل للهاتف</li>
                <li><i class="fas fa-check text-yellow-500 ml-2"></i>سريع وخفيف</li>
            </ul>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 text-center hover:shadow-xl transition-shadow">
            <div class="bg-purple-100 w-16 h-16 md:w-20 md:h-20 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                <i class="fas fa-shield-alt text-purple-600 text-2xl md:text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">آمن وموثوق</h3>
            <p class="text-gray-600 mb-4">حماية كاملة لبياناتك</p>
            <ul class="text-right text-gray-600 space-y-2">
                <li><i class="fas fa-check text-purple-500 ml-2"></i>تشفير البيانات</li>
                <li><i class="fas fa-check text-purple-500 ml-2"></i>نسخ احتياطي</li>
                <li><i class="fas fa-check text-purple-500 ml-2"></i>دعم فني</li>
            </ul>
        </div>
    </div>

    <!-- Products Preview -->
    @if(isset($products) && $products->count() > 0)
        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8 md:mb-12">
            <div class="p-6 md:p-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6 text-center">
                    <i class="fas fa-star text-yellow-500 ml-3"></i>
                    منتجات مميزة
                </h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                    @foreach($products->take(8) as $product)
                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-lg transition-shadow">
                            @if($product->image_url)
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-24 sm:h-32 object-cover rounded-lg mb-3">
                            @else
                                <div class="w-full h-24 sm:h-32 bg-gray-200 rounded-lg mb-3 flex items-center justify-center">
                                    <i class="fas fa-image text-gray-400 text-xl"></i>
                                </div>
                            @endif
                            
                            <h4 class="text-base sm:text-lg font-bold text-gray-800 mb-2">{{ $product->name }}</h4>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-lg font-bold text-green-600">{{ number_format($product->price, 2) }} درهم</span>
                                <span class="px-2 py-1 rounded-full text-xs font-semibold {{ $product->in_stock ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $product->in_stock ? 'متوفر' : 'نفد' }}
                                </span>
                            </div>
                            <p class="text-gray-600 text-sm line-clamp-2">{{ $product->description }}</p>
                        </div>
                    @endforeach
                </div>
                
                @if($products->count() > 8)
                    <div class="text-center mt-6">
                        <a href="{{ route('home') }}" class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg transition font-semibold">
                            <i class="fas fa-eye ml-2"></i>
                            عرض جميع المنتجات
                        </a>
                    </div>
                @endif
            </div>
        </div>
    @endif

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl p-8 md:p-12 text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 md:mb-6">
            جاهز لبدء إدارة متجرك؟
        </h2>
        <p class="text-gray-600 text-lg mb-6 md:mb-8">
            انضم الآن واستمتع بسهولة إدارة متجرك الإلكتروني
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            @if(!Auth::guard('seller')->check())
                <a href="{{ route('seller.login') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg transition font-semibold shadow-lg text-center">
                    <i class="fas fa-sign-in-alt ml-2"></i>
                    <span class="block sm:inline">تسجيل الدخول الآن</span>
                </a>
                <a href="{{ route('seller.register') }}" class="bg-green-700 hover:bg-green-800 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg transition font-semibold shadow-lg text-center">
                    <i class="fas fa-user-plus ml-2"></i>
                    <span class="block sm:inline">إنشاء حساب جديد</span>
                </a>
            @else
                <a href="{{ route('seller.dashboard') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg transition font-semibold shadow-lg text-center">
                    <i class="fas fa-tachometer-alt ml-2"></i>
                    <span class="block sm:inline">الذهاب للوحة التحكم</span>
                </a>
            @endif
        </div>
    </div>
</div>
@endsection
