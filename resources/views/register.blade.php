<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>إنشاء حساب - مدير متجر البقالة</title>
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
            <!-- Register Card -->
            <div class="bg-white dark:bg-slate-900 rounded-xl shadow-xl shadow-primary/5 border border-slate-100 dark:border-slate-800 overflow-hidden">
                <div class="p-8">
                    <div class="text-center mb-10">
                        <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-2">إنشاء حساب جديد</h1>
                        <p class="text-slate-500 dark:text-slate-400">أدخل بياناتك لإنشاء حساب والوصول إلى لوحة التحكم</p>
                    </div>
                    <form class="space-y-6" method="POST" action="/register">
                        @csrf
                        <!-- Name Field -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">الاسم الكامل</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-xl">person</span>
                                </div>
                                <input name="name" class="w-full pl-11 pr-4 py-3.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="أدخل اسمك الكامل" type="text" />
                            </div>
                        </div>
                        <!-- Email Field -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">البريد الإلكتروني</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-xl">mail</span>
                                </div>
                                <input name="email" class="w-full pl-11 pr-4 py-3.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="أدخل بريدك الإلكتروني" type="email" />
                            </div>
                        </div>
                        <!-- Password Field -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">كلمة المرور</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-xl">lock</span>
                                </div>
                                <input name="password" class="w-full pl-11 pr-12 py-3.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="أدخل كلمة المرور" type="password" />
                                <button class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors" type="button">
                                    <span class="material-symbols-outlined text-xl">visibility</span>
                                </button>
                            </div>
                        </div>
                        <!-- Confirm Password Field -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">تأكيد كلمة المرور</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-xl">lock</span>
                                </div>
                                <input name="password_confirmation" class="w-full pl-11 pr-12 py-3.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="أعد إدخال كلمة المرور" type="password" />
                                <button class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors" type="button">
                                    <span class="material-symbols-outlined text-xl">visibility</span>
                                </button>
                            </div>
                        </div>
                        <!-- Register Button -->
                        <button class="w-full bg-primary hover:bg-primary/90 text-background-dark font-bold py-4 rounded-lg shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2">
                            <span>إنشاء الحساب</span>
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </form>
                    <div class="mt-8 pt-8 border-t border-slate-100 dark:border-slate-800 text-center">
                        <p class="text-sm text-slate-500 dark:text-slate-400">
                            لديك حساب بالفعل؟
                            <a class="text-primary font-semibold hover:underline" href="/">تسجيل الدخول</a>
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
