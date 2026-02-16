@extends('layouts.app')

@section('title', 'تسجيل دخول البائعين')

@section('content')
<div class="max-w-md mx-auto mt-8">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">
            <i class="fas fa-store ml-2 text-green-600"></i>
            تسجيل دخول البائعين
        </h1>

        <form action="{{ route('seller.login') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">
                    البريد الإلكتروني
                </label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    كلمة المرور
                </label>
                <input type="password" name="password" required
                       class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" 
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded transition">
                <i class="fas fa-sign-in-alt ml-2"></i>
                تسجيل الدخول
            </button>
        </form>

        <div class="text-center mt-6">
            <p class="text-gray-600">
                ليس لديك حساب؟
                <a href="{{ route('seller.register') }}" class="text-green-600 hover:text-green-700 font-semibold">
                    سجل الآن
                </a>
            </p>
            <p class="mt-2">
                <a href="{{ route('home') }}" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-arrow-left ml-1"></i>
                    العودة للرئيسية
                </a>
            </p>
        </div>
    </div>
</div>
@endsection
