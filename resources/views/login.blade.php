<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>تسجيل الدخول - مدير متجر البقالة</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#19e619",
                        "background-light": "#f6f8f6",
                        "background-dark": "#112111",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col font-display">
    <!-- Top Navigation Bar -->
    <header class="w-full bg-white/90 dark:bg-background-dark/90 backdrop-blur-xl border-b border-primary/10 shadow-sm fixed top-0 z-50">
        <div class="max-w-7xl mx-auto h-16 px-6 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="bg-primary p-2 rounded-xl flex items-center justify-center text-background-dark shadow-sm shadow-primary/30">
                    <span class="material-symbols-outlined text-2xl">local_grocery_store</span>
                </div>
                <h2 class="text-slate-900 dark:text-white text-lg font-bold tracking-tight">مدير متجر البقالة</h2>
            </div>
            <button class="flex items-center gap-2 px-4 py-2 text-sm font-semibold text-slate-600 dark:text-slate-300 bg-slate-50/80 dark:bg-slate-800/60 hover:bg-slate-100/80 dark:hover:bg-slate-800 rounded-full transition-colors">
                <span class="material-symbols-outlined text-lg">help</span>
                <span>الدعم</span>
            </button>
        </div>
    </header>
    <!-- Main Content Area -->
    <main class="flex-1 flex items-center justify-center p-6 pt-24">
        <div class="w-full max-w-md">
            <!-- Login Card -->
            <div class="bg-white dark:bg-slate-900 rounded-xl shadow-xl shadow-primary/5 border border-slate-100 dark:border-slate-800 overflow-hidden">
                <div class="p-8">
                    <div class="text-center mb-10">
                        <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-2">صفحة تسجيل الدخول</h1>
                        <p class="text-slate-500 dark:text-slate-400">مرحبًا بعودتك، يرجى تسجيل الدخول إلى حسابك</p>
                    </div>
                    <form class="space-y-6">
                        @csrf
                        <!-- Email Field -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">البريد الإلكتروني</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-xl">mail</span>
                                </div>
                                <input class="w-full pl-11 pr-4 py-3.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="أدخل بريدك الإلكتروني" type="email" />
                            </div>
                        </div>
                        <!-- Password Field -->
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">كلمة المرور</label>
                                <a class="text-xs font-semibold text-primary hover:underline" href="#">هل نسيت كلمة المرور؟</a>
                            </div>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-xl">lock</span>
                                </div>
                                <input class="w-full pl-11 pr-12 py-3.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="أدخل كلمة المرور" type="password" />
                                <button class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors" type="button">
                                    <span class="material-symbols-outlined text-xl">visibility</span>
                                </button>
                            </div>
                        </div>
                        <!-- Remember Me -->
                        <div class="flex items-center gap-2">
                            <input class="w-4 h-4 text-primary bg-slate-50 border-slate-200 rounded focus:ring-primary/20 focus:ring-offset-0" id="remember" type="checkbox" />
                            <label class="text-sm text-slate-600 dark:text-slate-400" for="remember">تذكر هذا الجهاز</label>
                        </div>
                        <!-- Login Button -->
                        <button class="w-full bg-primary hover:bg-primary/90 text-background-dark font-bold py-4 rounded-lg shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2">
                            <span>تسجيل الدخول</span>
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                        <div class="relative my-6">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-slate-200 dark:border-slate-700"></div>
                            </div>
                            <div class="relative flex justify-center text-xs">
                                <span class="bg-white dark:bg-slate-900 px-2 text-slate-400">
                                    أو
                                </span>
                            </div>
                        </div>

                        <a href="/auth/google"
                            class="w-full flex items-center justify-center gap-3 border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-700 dark:text-white font-semibold py-3 rounded-lg transition">

                            <!-- Google SVG -->
                            <svg class="w-5 h-5" viewBox="0 0 48 48">
                                <path fill="#EA4335" d="M24 9.5c3.54 0 6.36 1.53 7.82 2.82l5.76-5.76C34.64 3.64 29.74 1.5 24 1.5 14.82 1.5 6.9 6.98 3.26 14.44l6.68 5.18C11.82 13.36 17.42 9.5 24 9.5z" />
                                <path fill="#4285F4" d="M46.5 24c0-1.64-.15-3.22-.44-4.74H24v9h12.66c-.55 2.96-2.22 5.48-4.74 7.18l7.36 5.72C43.9 37.02 46.5 31.02 46.5 24z" />
                                <path fill="#FBBC05" d="M9.94 28.62A14.48 14.48 0 0 1 9.5 24c0-1.6.28-3.14.78-4.62l-6.68-5.18A22.46 22.46 0 0 0 1.5 24c0 3.6.86 7.01 2.38 10.02l6.06-5.4z" />
                                <path fill="#34A853" d="M24 46.5c6.48 0 11.92-2.14 15.9-5.82l-7.36-5.72c-2.04 1.36-4.66 2.16-8.54 2.16-6.58 0-12.18-3.86-14.06-9.12l-6.06 5.4C6.9 41.02 14.82 46.5 24 46.5z" />
                            </svg>

                            تسجيل الدخول عبر Google
                        </a>

                    </form>
                    <div class="mt-8 pt-8 border-t border-slate-100 dark:border-slate-800 text-center">
                        <p class="text-sm text-slate-500 dark:text-slate-400">
                            جديد على النظام؟
                            <a class="text-primary font-semibold hover:underline" href="{{ route('show.register') }}">إنشاء حساب</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Footer Section -->
            <footer class="mt-8 text-center text-slate-400 dark:text-slate-600 text-xs">
                <p>© 2024 أنظمة إدارة متاجر البقالة • الإصدار 1.4.2</p>
                <div class="mt-2 flex justify-center gap-4">
                    <a class="hover:text-primary" href="#">سياسة الخصوصية</a>
                    <span>•</span>
                    <a class="hover:text-primary" href="#">شروط الخدمة</a>
                </div>
            </footer>
        </div>
    </main>
    <!-- Background Decorative Elements -->
    <div class="fixed top-0 left-0 w-full h-full -z-10 pointer-events-none overflow-hidden opacity-20">
        <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-primary/20 blur-[120px] rounded-full"></div>
        <div class="absolute -bottom-[10%] -right-[10%] w-[40%] h-[40%] bg-primary/10 blur-[120px] rounded-full"></div>
    </div>
</body>

</html>
