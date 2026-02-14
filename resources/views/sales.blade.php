<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>إدارة البقالة - المبيعات</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
                        "display": ["Inter"]
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

<body class="bg-background-light dark:bg-background-dark text-[#112111] dark:text-white font-display">
    <div class="flex min-h-screen">
        <!-- Sidebar Navigation -->
        <aside class="w-64 bg-white/90 dark:bg-[#1a2e1a]/90 border-r border-[#e0e7e0] dark:border-[#2d402d] backdrop-blur-md flex flex-col fixed h-full">
            <div class="p-6 flex items-center gap-3">
                <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white">
                    <span class="material-symbols-outlined">shopping_basket</span>
                </div>
                <div>
                    <h1 class="text-sm font-bold leading-tight">مدير البقالة</h1>
                    <p class="text-xs text-gray-500 dark:text-gray-400">مسؤول المتجر</p>
                </div>
            </div>
            <nav class="flex-1 px-4 py-4 space-y-2">
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-600 dark:text-gray-300 hover:bg-primary/10 hover:text-[#112111] dark:hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="text-sm font-medium">لوحة التحكم</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-primary/15 text-[#112111] dark:text-white font-semibold border-r-4 border-primary" href="#">
                    <span class="material-symbols-outlined">receipt_long</span>
                    <span class="text-sm font-medium">المبيعات</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-600 dark:text-gray-300 hover:bg-primary/10 hover:text-[#112111] dark:hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">inventory_2</span>
                    <span class="text-sm font-medium">المخزون</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-600 dark:text-gray-300 hover:bg-primary/10 hover:text-[#112111] dark:hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">bar_chart</span>
                    <span class="text-sm font-medium">التقارير</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-600 dark:text-gray-300 hover:bg-primary/10 hover:text-[#112111] dark:hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <span class="text-sm font-medium">الإعدادات</span>
                </a>
            </nav>
            <div class="p-4 border-t border-[#e0e7e0] dark:border-[#2d402d]">
                <div class="flex items-center gap-3 p-2">
                    <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-sm">person</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-xs font-semibold truncate">Alex Johnson</p>
                        <p class="text-[10px] text-gray-500">تسجيل الخروج</p>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 ml-64 p-8">
            <header class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-3xl font-black tracking-tight">المبيعات</h2>
                    <p class="text-gray-500 dark:text-gray-400 mt-1">إدارة المعاملات وعرض أداء اليوم.</p>
                </div>
                <div class="flex gap-4">
                    <div class="bg-white dark:bg-[#1a2e1a] p-4 rounded-xl shadow-sm border border-[#e0e7e0] dark:border-[#2d402d] flex items-center gap-4">
                        <div class="p-2 bg-primary/10 rounded-lg">
                            <span class="material-symbols-outlined text-primary">payments</span>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-wider text-gray-500 font-bold">إجمالي اليوم</p>
                            <p class="text-xl font-black">$1,248.50</p>
                        </div>
                    </div>
                </div>
            </header>
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                <!-- Sale Form Card -->
                <section class="xl:col-span-1">
                    <div class="bg-white dark:bg-[#1a2e1a] rounded-xl shadow-sm border border-[#e0e7e0] dark:border-[#2d402d] overflow-hidden">
                        <div class="p-6 border-b border-[#e0e7e0] dark:border-[#2d402d]">
                            <h3 class="font-bold text-lg flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">add_shopping_cart</span>
                                عملية بيع جديدة
                            </h3>
                        </div>
                        <div class="p-6 space-y-5">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-gray-700 dark:text-gray-300">اختر المنتج</label>
                                <div class="relative">
                                    <select class="w-full bg-gray-50 dark:bg-[#112111] border border-[#dce5dc] dark:border-[#2d402d] rounded-lg px-4 py-3 text-sm focus:ring-primary focus:border-primary appearance-none">
                                        <option value="">ابحث عن عنصر...</option>
                                        <option>موز عضوي (لكل كغ)</option>
                                        <option>حليب كامل (1 لتر)</option>
                                        <option>خبز ساوردو</option>
                                        <option>بيض بلدي (علبة 12)</option>
                                        <option>زبادي يوناني (500غ)</option>
                                    </select>
                                    <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">expand_more</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-gray-700 dark:text-gray-300">الكمية</label>
                                <div class="flex items-center gap-3">
                                    <input class="flex-1 bg-gray-50 dark:bg-[#112111] border border-[#dce5dc] dark:border-[#2d402d] rounded-lg px-4 py-3 text-sm focus:ring-primary focus:border-primary" placeholder="0.00" step="0.1" type="number" />
                                    <div class="flex gap-1">
                                        <button class="w-10 h-10 flex items-center justify-center border border-[#dce5dc] dark:border-[#2d402d] rounded-lg hover:bg-gray-100 dark:hover:bg-[#253d25]">
                                            <span class="material-symbols-outlined text-sm">remove</span>
                                        </button>
                                        <button class="w-10 h-10 flex items-center justify-center border border-[#dce5dc] dark:border-[#2d402d] rounded-lg hover:bg-gray-100 dark:hover:bg-[#253d25]">
                                            <span class="material-symbols-outlined text-sm">add</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <button class="w-full bg-primary hover:bg-[#16cc16] text-[#112111] font-bold py-4 rounded-lg transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined">check_circle</span>
                                    تأكيد البيع
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 p-4 bg-primary/5 rounded-xl border border-primary/10 flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary">info</span>
                        <p class="text-xs leading-relaxed text-[#2d4a2d] dark:text-gray-300">
                            <strong>نصيحة سريعة:</strong> استخدم أيقونة ماسح الباركود في حقل البحث لإضافة العناصر بسرعة عبر مسح UPC.
                        </p>
                    </div>
                </section>
                <!-- Sales History Section -->
                <section class="xl:col-span-2">
                    <div class="bg-white dark:bg-[#1a2e1a] rounded-xl shadow-sm border border-[#e0e7e0] dark:border-[#2d402d] overflow-hidden h-full flex flex-col">
                        <div class="p-6 border-b border-[#e0e7e0] dark:border-[#2d402d] flex justify-between items-center">
                            <h3 class="font-bold text-lg flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">history</span>
                                آخر المعاملات
                            </h3>
                            <div class="flex gap-2">
                                <button class="p-2 text-gray-500 hover:bg-gray-100 dark:hover:bg-[#253d25] rounded-lg transition-colors">
                                    <span class="material-symbols-outlined">filter_list</span>
                                </button>
                                <button class="p-2 text-gray-500 hover:bg-gray-100 dark:hover:bg-[#253d25] rounded-lg transition-colors">
                                    <span class="material-symbols-outlined">download</span>
                                </button>
                            </div>
                        </div>
                        <div class="overflow-x-auto flex-1">
                            <table class="w-full text-right border-collapse">
                                <thead>
                                    <tr class="bg-gray-50 dark:bg-[#112111] text-[#638863] text-xs uppercase tracking-wider font-bold">
                                        <th class="px-6 py-4">المنتج</th>
                                        <th class="px-6 py-4">الكمية</th>
                                        <th class="px-6 py-4">الإجمالي</th>
                                        <th class="px-6 py-4">التاريخ والوقت</th>
                                        <th class="px-6 py-4">الحالة</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-[#e0e7e0] dark:divide-[#2d402d]">
                                    <tr class="hover:bg-gray-50/50 dark:hover:bg-[#253d25]/30 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-8 rounded bg-gray-100 dark:bg-[#2d402d] flex items-center justify-center">
                                                    <span class="material-symbols-outlined text-xs text-gray-500">nutrition</span>
                                                </div>
                                                <span class="font-medium text-sm">موز عضوي</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm">1.5 كغ</td>
                                        <td class="px-6 py-4 text-sm font-bold text-primary">$4.50</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">24 أكتوبر، 02:45 م</td>
                                        <td class="px-6 py-4">
                                            <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-600 text-[10px] font-bold rounded uppercase">مكتملة</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50/50 dark:hover:bg-[#253d25]/30 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-8 rounded bg-gray-100 dark:bg-[#2d402d] flex items-center justify-center">
                                                    <span class="material-symbols-outlined text-xs text-gray-500">egg</span>
                                                </div>
                                                <span class="font-medium text-sm">بيض بلدي (علبة 12)</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm">2 وحدات</td>
                                        <td class="px-6 py-4 text-sm font-bold text-primary">$12.00</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">24 أكتوبر، 02:30 م</td>
                                        <td class="px-6 py-4">
                                            <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-600 text-[10px] font-bold rounded uppercase">مكتملة</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50/50 dark:hover:bg-[#253d25]/30 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-8 rounded bg-gray-100 dark:bg-[#2d402d] flex items-center justify-center">
                                                    <span class="material-symbols-outlined text-xs text-gray-500">water_drop</span>
                                                </div>
                                                <span class="font-medium text-sm">حليب كامل (1 لتر)</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm">1 وحدة</td>
                                        <td class="px-6 py-4 text-sm font-bold text-primary">$3.25</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">24 أكتوبر، 02:15 م</td>
                                        <td class="px-6 py-4">
                                            <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-600 text-[10px] font-bold rounded uppercase">مكتملة</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50/50 dark:hover:bg-[#253d25]/30 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-8 rounded bg-gray-100 dark:bg-[#2d402d] flex items-center justify-center">
                                                    <span class="material-symbols-outlined text-xs text-gray-500">bakery_dining</span>
                                                </div>
                                                <span class="font-medium text-sm">خبز ساوردو</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm">1 وحدة</td>
                                        <td class="px-6 py-4 text-sm font-bold text-primary">$6.50</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">24 أكتوبر، 01:50 م</td>
                                        <td class="px-6 py-4">
                                            <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-600 text-[10px] font-bold rounded uppercase">مكتملة</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50/50 dark:hover:bg-[#253d25]/30 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-8 rounded bg-gray-100 dark:bg-[#2d402d] flex items-center justify-center">
                                                    <span class="material-symbols-outlined text-xs text-gray-500">nest_eco_leaf</span>
                                                </div>
                                                <span class="font-medium text-sm">سبانخ (حزمة)</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm">3 وحدات</td>
                                        <td class="px-6 py-4 text-sm font-bold text-primary">$7.50</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">24 أكتوبر، 01:20 م</td>
                                        <td class="px-6 py-4">
                                            <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-600 text-[10px] font-bold rounded uppercase">مكتملة</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="p-4 border-t border-[#e0e7e0] dark:border-[#2d402d] bg-gray-50/50 dark:bg-[#112111]/50 flex justify-between items-center text-xs text-gray-500">
                            <span>عرض 5 من 48 معاملة اليوم</span>
                            <div class="flex gap-2">
                                <button class="px-3 py-1 border border-[#dce5dc] dark:border-[#2d402d] rounded hover:bg-gray-100 dark:hover:bg-[#253d25] transition-colors disabled:opacity-50">السابق</button>
                                <button class="px-3 py-1 border border-[#dce5dc] dark:border-[#2d402d] rounded hover:bg-gray-100 dark:hover:bg-[#253d25] transition-colors">التالي</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>

</html>
