<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'تطبيق البقالة')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <nav class="bg-green-600 text-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-reverse space-x-4">
                    <h1 class="text-2xl font-bold">
                        <i class="fas fa-shopping-cart ml-2"></i>
                        تطبيق البقالة
                    </h1>
                </div>
                <div class="flex items-center space-x-reverse space-x-6">
                    <a href="{{ route('home') }}" class="hover:text-green-200 transition">
                        <i class="fas fa-home ml-1"></i>
                        الرئيسية
                    </a>
                    @if(Auth::guard('seller')->check())
                        <a href="{{ route('seller.dashboard') }}" class="hover:text-green-200 transition">
                            <i class="fas fa-store ml-1"></i>
                            لوحة التحكم
                        </a>
                        <form action="{{ route('seller.logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="hover:text-green-200 transition">
                                <i class="fas fa-sign-out-alt ml-1"></i>
                                تسجيل خروج
                            </button>
                        </form>
                    @else
                        <a href="{{ route('seller.login') }}" class="hover:text-green-200 transition">
                            <i class="fas fa-sign-in-alt ml-1"></i>
                            دخول البائعين
                        </a>
                        <a href="{{ route('seller.register') }}" class="bg-green-700 hover:bg-green-800 px-4 py-2 rounded transition">
                            <i class="fas fa-user-plus ml-1"></i>
                            تسجيل بائع
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                <i class="fas fa-check-circle ml-2"></i>
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} تطبيق البقالة. جميع الحقوق محفوظة.</p>
        </div>
    </footer>
</body>
</html>
