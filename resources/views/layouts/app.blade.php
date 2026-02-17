<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'تطبيق البقالة')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    screens: {
                        'xs': '320px',
                        'sm': '640px',
                        'md': '768px',
                        'lg': '1024px',
                        'xl': '1280px',
                        '2xl': '1536px',
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom responsive styles */
        @media (max-width: 640px) {
            .mobile-menu {
                display: none;
            }
            .mobile-menu.active {
                display: block;
            }
            .mobile-hidden {
                display: none !important;
            }
            .mobile-full {
                width: 100% !important;
            }
        }
        
        /* Ensure proper RTL on mobile */
        @media (max-width: 768px) {
            .mobile-rtl {
                text-align: right;
                direction: rtl;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Mobile Menu Button -->
    <div class="lg:hidden fixed top-0 left-0 right-0 bg-green-600 text-white z-50">
        <div class="flex justify-between items-center p-4">
            <h1 class="text-lg font-bold">
                <i class="fas fa-shopping-cart ml-2"></i>
                تطبيق البقالة
            </h1>
            <button onclick="toggleMobileMenu()" class="text-white hover:text-green-200 transition">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </div>
    
    <!-- Mobile Navigation -->
    <div id="mobileMenu" class="lg:hidden fixed inset-0 bg-green-600 text-white z-40 mobile-menu">
        <div class="flex flex-col h-full p-4 space-y-4">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-xl font-bold">
                    <i class="fas fa-shopping-cart ml-2"></i>
                    تطبيق البقالة
                </h1>
                <button onclick="toggleMobileMenu()" class="text-white hover:text-green-200 transition">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <a href="{{ route('home') }}" class="block py-3 px-4 rounded-lg hover:bg-green-700 transition text-white">
                <i class="fas fa-home ml-2"></i>
                الرئيسية
            </a>
            
            @if(Auth::guard('seller')->check())
                <a href="{{ route('seller.dashboard') }}" class="block py-3 px-4 rounded-lg hover:bg-green-700 transition text-white">
                    <i class="fas fa-store ml-2"></i>
                    لوحة التحكم
                </a>
                <form action="{{ route('seller.logout') }}" method="POST" class="block">
                    @csrf
                    <button type="submit" class="w-full text-left py-3 px-4 rounded-lg hover:bg-green-700 transition text-white">
                        <i class="fas fa-sign-out-alt ml-2"></i>
                        تسجيل خروج
                    </button>
                </form>
            @else
                <a href="{{ route('seller.login') }}" class="block py-3 px-4 rounded-lg hover:bg-green-700 transition text-white">
                    <i class="fas fa-sign-in-alt ml-2"></i>
                    دخول البائعين
                </a>
                <a href="{{ route('seller.register') }}" class="block py-3 px-4 rounded-lg bg-green-700 hover:bg-green-800 transition text-white text-center">
                    <i class="fas fa-user-plus ml-2"></i>
                    تسجيل بائع
                </a>
            @endif
        </div>
    </div>

    <!-- Desktop Navigation -->
    <nav class="bg-green-600 text-white shadow-lg hidden lg:block">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-reverse space-x-4">
                    <h1 class="text-xl md:text-2xl font-bold">
                        <i class="fas fa-shopping-cart ml-2"></i>
                        <span class="hidden sm:inline">تطبيق البقالة</span>
                        <span class="sm:hidden">البقالة</span>
                    </h1>
                </div>
                <div class="flex items-center space-x-reverse space-x-4 md:space-x-6">
                    <a href="{{ route('home') }}" class="hover:text-green-200 transition text-sm md:text-base">
                        <i class="fas fa-home ml-1"></i>
                        <span class="hidden sm:inline">الرئيسية</span>
                    </a>
                    @if(Auth::guard('seller')->check())
                        <a href="{{ route('seller.dashboard') }}" class="hover:text-green-200 transition text-sm md:text-base">
                            <i class="fas fa-store ml-1"></i>
                            <span class="hidden sm:inline">لوحة التحكم</span>
                        </a>
                        <form action="{{ route('seller.logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="hover:text-green-200 transition text-sm md:text-base">
                                <i class="fas fa-sign-out-alt ml-1"></i>
                                <span class="hidden sm:inline">تسجيل خروج</span>
                            </button>
                        </form>
                    @else
                        <a href="{{ route('seller.login') }}" class="hover:text-green-200 transition text-sm md:text-base">
                            <i class="fas fa-sign-in-alt ml-1"></i>
                            <span class="hidden sm:inline">دخول البائعين</span>
                        </a>
                        <a href="{{ route('seller.register') }}" class="bg-green-700 hover:bg-green-800 px-2 sm:px-4 py-2 rounded transition text-sm md:text-base">
                            <i class="fas fa-user-plus ml-1"></i>
                            <span class="hidden sm:inline">تسجيل بائع</span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content with proper spacing for mobile -->
    <main class="container mx-auto px-4 py-8 pt-20 lg:pt-8">
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
            <p class="text-sm md:text-base">&copy; {{ date('Y') }} تطبيق البقالة. جميع الحقوق محفوظة.</p>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('active');
        }
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('mobileMenu');
            const menuButton = event.target.closest('button');
            
            if (!menu.contains(event.target) && !menuButton) {
                menu.classList.remove('active');
            }
        });
    </script>
</body>
</html>
