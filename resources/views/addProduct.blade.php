<!DOCTYPE html>

<html class="light" lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>إضافة/تعديل منتج - المقر الرئيسي لـ Green Grocer</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
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

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar Navigation -->
        <aside class="w-72 bg-white/90 dark:bg-slate-900/90 border-r border-slate-200/70 dark:border-slate-800/70 backdrop-blur-md flex flex-col">
            <div class="p-6 flex items-center gap-3">
                <div class="size-10 rounded-xl bg-primary flex items-center justify-center text-white">
                    <span class="material-symbols-outlined">eco</span>
                </div>
                <div>
                    <h1 class="text-lg font-bold leading-tight">Green Grocer</h1>
                    <p class="text-xs text-slate-500 font-medium">المقر الرئيسي لإدارة المتجر</p>
                </div>
            </div>
            <nav class="flex-1 px-4 py-4 space-y-1">
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-slate-900 dark:hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="font-medium">لوحة التحكم</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/15 text-slate-900 dark:text-white font-semibold border-r-4 border-primary transition-colors" href="#">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">inventory_2</span>
                    <span class="font-medium">المخزون</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-slate-900 dark:hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">shopping_cart</span>
                    <span class="font-medium">الطلبات</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-slate-900 dark:hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">group</span>
                    <span class="font-medium">العملاء</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-slate-900 dark:hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">analytics</span>
                    <span class="font-medium">التقارير</span>
                </a>
            </nav>
            <div class="p-4 border-t border-slate-200 dark:border-slate-800">
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-slate-900 dark:hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <span class="font-medium">الإعدادات</span>
                </a>
                <div class="mt-4 flex items-center gap-3 px-4 py-2">
                    <div class="size-8 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden">
                        <img class="w-full h-full object-cover" data-alt="صورة ملف مدير المتجر" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGlGASZPY-E3JFFAYyy_zT6_5XYZ9VaRQKPeD85waFeL6afPNKMXPj7MrNT40hhHWQ4CFPtVIVjf-pb43RriAcX09IeSKddqFOeP2JigZhWE1rhNpLclFO66sOcUEGKWckF0ZJdjp5pOarldWJ57T-DVOALFVFdJEB1dPS8v7fRl_gOD4fHeNRXJ0jfl8v_3XbbmaM92N-zAOofB2aBVDkQfyCs6b6knUV_BO72d2xnn_WLE8137hobXGHkG-jS3FRcDLr2AJmBw" />
                    </div>
                    <div class="text-sm">
                        <p class="font-semibold">Alex Miller</p>
                        <p class="text-xs text-slate-500">مسؤول</p>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Main Content Area -->
        <main class="flex-1 overflow-y-auto">
            <!-- Header / Breadcrumbs -->
            <header class="px-8 py-6 flex flex-col gap-1">
                <nav class="flex items-center gap-2 text-sm text-slate-500 mb-2">
                    <a class="hover:text-primary" href="#">المخزون</a>
                    <span class="material-symbols-outlined text-xs">chevron_right</span>
                    <span class="text-slate-900 dark:text-white font-medium">إضافة منتج</span>
                </nav>
                <div class="flex justify-between items-center">
                    <h2 class="text-3xl font-black tracking-tight text-slate-900 dark:text-white">إضافة/تعديل منتج</h2>
                </div>
            </header>
            <div class="px-8 pb-12">
                <div class="max-w-4xl mx-auto">
                    <!-- Form Card -->
                    <div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
                        <div class="p-8 space-y-8">
                            <!-- Product Image Upload Section -->
                            <div class="flex flex-col @md:flex-row gap-6 items-start">
                                <div class="w-full @md:w-1/3">
                                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">صورة المنتج</label>
                                    <div class="aspect-square rounded-xl bg-slate-50 dark:bg-slate-800 border-2 border-dashed border-slate-200 dark:border-slate-700 flex flex-col items-center justify-center gap-3 group cursor-pointer hover:border-primary/50 transition-colors">
                                        <div class="size-12 rounded-full bg-white dark:bg-slate-900 shadow-sm flex items-center justify-center text-slate-400 group-hover:text-primary transition-colors">
                                            <span class="material-symbols-outlined text-3xl">add_a_photo</span>
                                        </div>
                                        <div class="text-center px-4">
                                            <p class="text-xs font-medium text-slate-600 dark:text-slate-400">انقر للتحميل أو اسحب وأفلت</p>
                                            <p class="text-[10px] text-slate-400 mt-1">PNG وJPG حتى 10MB</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Basic Info -->
                                <div class="w-full @md:w-2/3 space-y-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="product-name">اسم المنتج</label>
                                        <input class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" id="product-name" placeholder="مثال: تفاح جالا عضوي" type="text" />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="category">الفئة</label>
                                        <select class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpolyline%20points%3D%226%209%2012%2015%2018%209%22%3E%3C%2Fpolyline%3E%3C%2Fsvg%3E')] bg-[length:20px] bg-[right_1rem_center] bg-no-repeat" id="category">
                                            <option disabled="" selected="" value="">اختر فئة</option>
                                            <option value="fruits">فواكه طازجة</option>
                                            <option value="vegetables">خضروات</option>
                                            <option value="dairy">الألبان والبيض</option>
                                            <option value="bakery">المخبوزات</option>
                                            <option value="meat">اللحوم والمأكولات البحرية</option>
                                            <option value="pantry">أساسيات المخزن</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr class="border-slate-100 dark:border-slate-800" />
                            <!-- Pricing and Stock -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-6">
                                    <h3 class="text-base font-bold text-slate-900 dark:text-white flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary">payments</span>
                                        التسعير
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="price">السعر الأساسي</label>
                                            <div class="relative">
                                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-medium">$</span>
                                                <input class="w-full pl-8 pr-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" id="price" placeholder="0.00" step="0.01" type="number" />
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 px-1">
                                            <input class="size-4 rounded text-primary focus:ring-primary border-slate-300" id="taxable" type="checkbox" />
                                            <label class="text-sm text-slate-600 dark:text-slate-400" for="taxable">تطبيق ضريبة المبيعات القياسية</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-6">
                                    <h3 class="text-base font-bold text-slate-900 dark:text-white flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary">inventory</span>
                                        حالة المخزون
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="quantity">كمية المخزون</label>
                                            <input class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" id="quantity" placeholder="0" type="number" />
                                        </div>
                                        <div>
                                            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="sku">رمز SKU (وحدة حفظ المخزون)</label>
                                            <input class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" id="sku" placeholder="ABC-12345-XY" type="text" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Description -->
                            <div class="space-y-4">
                                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="description">وصف المنتج (اختياري)</label>
                                <textarea class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all resize-none" id="description" placeholder="صف ميزات المنتج أو مصدره أو معلوماته الغذائية..." rows="4"></textarea>
                            </div>
                        </div>
                        <!-- Action Footer -->
                        <div class="px-8 py-6 bg-slate-50 dark:bg-slate-800/50 border-t border-slate-200 dark:border-slate-800 flex items-center justify-end gap-4">
                            <button class="px-6 py-2.5 rounded-lg border border-slate-300 dark:border-slate-600 text-slate-700 dark:text-slate-300 font-semibold hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors" type="button">
                                إلغاء
                            </button>
                            <button class="px-10 py-2.5 rounded-lg bg-primary text-white font-bold hover:bg-opacity-90 shadow-lg shadow-primary/20 transition-all flex items-center gap-2" type="submit">
                                <span class="material-symbols-outlined text-xl">save</span>
                                حفظ المنتج
                            </button>
                        </div>
                    </div>
                    <!-- Informational Alert -->
                    <div class="mt-8 p-4 rounded-xl bg-primary/10 border border-primary/20 flex gap-4">
                        <span class="material-symbols-outlined text-primary shrink-0">info</span>
                        <div class="text-sm text-slate-700 dark:text-slate-300">
                            <p class="font-bold mb-1">تنبيهات المخزون</p>
                            <p>سيتم تمييز هذا المنتج تلقائيًا على أنه «مخزون منخفض» عندما ينخفض المخزون إلى أقل من 5 وحدات. يمكنك تغيير ذلك في <a class="text-primary hover:underline font-medium" href="#">إعدادات الإشعارات</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
