<!DOCTYPE html>

<html class="light" lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>لوحة إدارة متجر البقالة</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
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

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar Navigation -->
        <aside class="w-64 flex-shrink-0 bg-white/90 dark:bg-slate-900/90 border-r border-slate-200/70 dark:border-slate-800/70 backdrop-blur-md flex flex-col">
            <div class="p-6 flex items-center gap-3">
                <div class="size-10 rounded-lg bg-primary flex items-center justify-center text-white shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined">storefront</span>
                </div>
                <div>
                    <h1 class="font-bold text-lg leading-tight">FreshMart</h1>
                    <p class="text-xs text-slate-500 font-medium">بوابة الإدارة</p>
                </div>
            </div>
            <nav class="flex-1 px-4 py-4 space-y-2">
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/15 text-slate-900 dark:text-white font-semibold border-r-4 border-primary transition-colors" href="#">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="font-semibold text-sm">لوحة التحكم</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-slate-900 dark:hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">inventory_2</span>
                    <span class="font-semibold text-sm">المنتجات</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-slate-900 dark:hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">category</span>
                    <span class="font-semibold text-sm">الفئات</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-slate-900 dark:hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">payments</span>
                    <span class="font-semibold text-sm">المبيعات</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-slate-900 dark:hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">group</span>
                    <span class="font-semibold text-sm">العملاء</span>
                </a>
            </nav>
            <div class="p-4 border-t border-slate-200 dark:border-zinc-800">
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-red-600 dark:text-red-400 hover:bg-red-50/80 dark:hover:bg-red-900/20 transition-colors" href="#">
                    <span class="material-symbols-outlined">logout</span>
                    <span class="font-semibold text-sm">تسجيل الخروج</span>
                </a>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 flex flex-col overflow-y-auto">
            <!-- Header -->
            <header class="h-16 flex items-center justify-between px-8 bg-white/90 dark:bg-slate-900/90 backdrop-blur-md sticky top-0 z-10 border-b border-slate-200/70 dark:border-slate-800/70 shadow-sm">
                <div class="flex items-center gap-4">
                    <h2 class="text-xl font-bold">لوحة التحكم</h2>
                </div>
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <span class="material-symbols-outlined p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-zinc-800 rounded-full cursor-pointer">notifications</span>
                        <span class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border-2 border-white dark:border-zinc-900"></span>
                    </div>
                    <div class="flex items-center gap-2 pl-4 border-l border-slate-200 dark:border-zinc-800">
                        <div class="size-8 rounded-full bg-slate-200 dark:bg-zinc-700 bg-cover bg-center" data-alt="صورة ملف المسؤول" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCEZSP6aw91Vwh_klyANduqSQ8o6OJ7Y3IRxtQYbptA-RwcT1QhhG7A9S9lczskadixN4x59Y7Rr62sSQeOPIeZp3WOcNk5rx0JB_O8W74Caf422sAySiS7MfDADgYBlF-XRnuGWD6FPCBgxpxlBR3GEntOHISk8HPqjHqxwYA7iWDQqlNrnSSTKFUOnX6NLJPJMw4-tZFifPaW0eomHbfURoP96gseXxNRrLYf8s6z-OSE9hkbBuCcX6rCFnAVzDWgcpMJhyVFFg')"></div>
                        <span class="text-sm font-semibold">{{ Auth::user()->name }}</span>
                    </div>
                </div>
            </header>
            <div class="p-8 space-y-8">
                <!-- Summary Cards -->
                <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-primary/10 rounded-lg text-primary">
                                <span class="material-symbols-outlined">inventory</span>
                            </div>
                            <span class="text-xs font-bold text-primary bg-primary/10 px-2 py-1 rounded-full">+2.5%</span>
                        </div>
                        <h3 class="text-slate-500 text-sm font-medium">إجمالي المنتجات</h3>
                        <p class="text-3xl font-black mt-1">{{ $Products->count() }}</p>
                    </div>
                    <div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-blue-500/10 rounded-lg text-blue-500">
                                <span class="material-symbols-outlined">trending_up</span>
                            </div>
                            <span class="text-xs font-bold text-blue-500 bg-blue-500/10 px-2 py-1 rounded-full">+12.4%</span>
                        </div>
                        <h3 class="text-slate-500 text-sm font-medium">إجمالي مبيعات اليوم</h3>
                        <p class="text-3xl font-black mt-1">$4,250.00</p>
                    </div>
                    <div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm hover:shadow-md transition-shadow border-l-4 border-l-red-500">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-red-500/10 rounded-lg text-red-500">
                                <span class="material-symbols-outlined">warning</span>
                            </div>
                            <span class="text-xs font-bold text-red-500 bg-red-500/10 px-2 py-1 rounded-full">عاجل</span>
                        </div>
                        <h3 class="text-slate-500 text-sm font-medium">منتجات منخفضة المخزون</h3>
                        <p class="text-3xl font-black mt-1">12</p>
                    </div>
                </section>
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                    <!-- Recent Sales Table -->
                    <section class="xl:col-span-2 bg-white dark:bg-zinc-900 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-slate-100 dark:border-zinc-800 flex items-center justify-between">
                            <h3 class="font-bold text-lg">آخر المبيعات</h3>
                            <button class="text-primary text-sm font-bold hover:underline">عرض كل المبيعات</button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-right">
                                <thead class="bg-slate-50 dark:bg-zinc-800/50 text-slate-500 text-xs uppercase tracking-wider font-bold">
                                    <tr>
                                        <th class="px-6 py-4">المعرف</th>
                                        <th class="px-6 py-4">العميل</th>
                                        <th class="px-6 py-4">المبلغ</th>
                                        <th class="px-6 py-4 text-center">الحالة</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-zinc-800">
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-zinc-800/30 transition-colors">
                                        <td class="px-6 py-4 text-sm font-medium text-slate-500">#8842</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="size-8 rounded-full bg-slate-100 dark:bg-zinc-800 flex items-center justify-center font-bold text-xs text-slate-600">JD</div>
                                                <span class="text-sm font-semibold">John Doe</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-bold">$120.50</td>
                                        <td class="px-6 py-4">
                                            <span class="flex items-center justify-center mx-auto w-fit px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">مكتملة</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-zinc-800/30 transition-colors">
                                        <td class="px-6 py-4 text-sm font-medium text-slate-500">#8841</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="size-8 rounded-full bg-slate-100 dark:bg-zinc-800 flex items-center justify-center font-bold text-xs text-slate-600">JS</div>
                                                <span class="text-sm font-semibold">Jane Smith</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-bold">$45.00</td>
                                        <td class="px-6 py-4">
                                            <span class="flex items-center justify-center mx-auto w-fit px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400">قيد الانتظار</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-zinc-800/30 transition-colors">
                                        <td class="px-6 py-4 text-sm font-medium text-slate-500">#8840</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="size-8 rounded-full bg-slate-100 dark:bg-zinc-800 flex items-center justify-center font-bold text-xs text-slate-600">RB</div>
                                                <span class="text-sm font-semibold">Robert Brown</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-bold">$210.20</td>
                                        <td class="px-6 py-4">
                                            <span class="flex items-center justify-center mx-auto w-fit px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">مكتملة</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-zinc-800/30 transition-colors">
                                        <td class="px-6 py-4 text-sm font-medium text-slate-500">#8839</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="size-8 rounded-full bg-slate-100 dark:bg-zinc-800 flex items-center justify-center font-bold text-xs text-slate-600">LL</div>
                                                <span class="text-sm font-semibold">Lucy Lane</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-bold">$15.75</td>
                                        <td class="px-6 py-4">
                                            <span class="flex items-center justify-center mx-auto w-fit px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">مكتملة</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-zinc-800/30 transition-colors">
                                        <td class="px-6 py-4 text-sm font-medium text-slate-500">#8838</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="size-8 rounded-full bg-slate-100 dark:bg-zinc-800 flex items-center justify-center font-bold text-xs text-slate-600">MR</div>
                                                <span class="text-sm font-semibold">Mike Ross</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-bold">$89.00</td>
                                        <td class="px-6 py-4">
                                            <span class="flex items-center justify-center mx-auto w-fit px-3 py-1 rounded-full text-xs font-bold bg-slate-100 text-slate-700 dark:bg-zinc-800 dark:text-slate-400">ملغاة</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <!-- Low Stock Table -->
                    <section class="bg-white dark:bg-zinc-900 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-slate-100 dark:border-zinc-800 flex items-center justify-between">
                            <h3 class="font-bold text-lg">تنبيهات المخزون</h3>
                            <span class="bg-red-500 text-white text-[10px] uppercase px-2 py-0.5 rounded-full font-black">12 حرجة</span>
                        </div>
                        <div class="p-4 space-y-4">
                            <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-zinc-800/50 rounded-lg border border-slate-100 dark:border-zinc-800">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded-lg bg-white dark:bg-zinc-900 border border-slate-100 dark:border-zinc-800 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-orange-400">egg</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold">بيض عضوي</p>
                                        <p class="text-[10px] text-slate-500 font-medium">الكمية: 4 متبقية</p>
                                    </div>
                                </div>
                                <button class="bg-primary text-white text-xs font-bold px-4 py-2 rounded-lg hover:brightness-90 transition-all shadow-md shadow-primary/20">إعادة التزويد</button>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-zinc-800/50 rounded-lg border border-slate-100 dark:border-zinc-800">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded-lg bg-white dark:bg-zinc-900 border border-slate-100 dark:border-zinc-800 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-green-500">eco</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold">أفوكادو</p>
                                        <p class="text-[10px] text-slate-500 font-medium">الكمية: 8 متبقية</p>
                                    </div>
                                </div>
                                <button class="bg-primary text-white text-xs font-bold px-4 py-2 rounded-lg hover:brightness-90 transition-all shadow-md shadow-primary/20">إعادة التزويد</button>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-zinc-800/50 rounded-lg border border-slate-100 dark:border-zinc-800">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded-lg bg-white dark:bg-zinc-900 border border-slate-100 dark:border-zinc-800 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-blue-400">water_drop</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold">ماء نقي</p>
                                        <p class="text-[10px] text-slate-500 font-medium">الكمية: 2 متبقية</p>
                                    </div>
                                </div>
                                <button class="bg-primary text-white text-xs font-bold px-4 py-2 rounded-lg hover:brightness-90 transition-all shadow-md shadow-primary/20">إعادة التزويد</button>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-zinc-800/50 rounded-lg border border-slate-100 dark:border-zinc-800">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded-lg bg-white dark:bg-zinc-900 border border-slate-100 dark:border-zinc-800 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-red-400">bakery_dining</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold">خبز قمح كامل</p>
                                        <p class="text-[10px] text-slate-500 font-medium">الكمية: 0 متبقية</p>
                                    </div>
                                </div>
                                <button class="bg-primary text-white text-xs font-bold px-4 py-2 rounded-lg hover:brightness-90 transition-all shadow-md shadow-primary/20">إعادة التزويد</button>
                            </div>
                            <button class="w-full py-3 text-sm font-bold text-slate-500 hover:text-slate-900 dark:hover:text-white flex items-center justify-center gap-2 border-2 border-dashed border-slate-200 dark:border-zinc-800 rounded-lg mt-2">
                                <span class="material-symbols-outlined text-lg">list</span>
                                عرض كل التنبيهات
                            </button>
                        </div>
                    </section>
                </div>
                <!-- Action Button Floating (Mobile Friendly or Quick Access) -->
                <div class="fixed bottom-8 right-8">
                    <button class="flex items-center gap-2 bg-primary text-white font-bold py-4 px-6 rounded-full shadow-2xl shadow-primary/40 hover:scale-105 active:scale-95 transition-all">
                        <span class="material-symbols-outlined">add</span>
                        منتج جديد
                    </button>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
