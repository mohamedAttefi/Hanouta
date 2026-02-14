<!DOCTYPE html>

<html class="light" lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>الفئات - مدير البقالة</title>
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

<body class="bg-background-light dark:bg-background-dark font-display text-[#111811]">
    <div class="flex min-h-screen">
        <!-- Sidebar Navigation -->
        <aside class="w-64 bg-white/90 dark:bg-[#1a2e1a]/90 border-r border-[#dce5dc] dark:border-[#2a3d2a] backdrop-blur-md flex flex-col fixed h-full">
            <div class="p-6 flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white">
                    <span class="material-symbols-outlined">local_grocery_store</span>
                </div>
                <div>
                    <h1 class="text-base font-bold leading-tight">مدير البقالة</h1>
                    <p class="text-xs text-[#638863] font-medium">مسؤول المتجر</p>
                </div>
            </div>
            <nav class="flex-1 px-4 mt-4 space-y-1">
                <a class="flex items-center gap-3 px-3 py-2.5 text-[#111811] dark:text-gray-200 hover:bg-primary/10 hover:text-[#111811] rounded-xl transition-colors" href="#">
                    <span class="material-symbols-outlined text-[22px]">dashboard</span>
                    <span class="text-sm font-medium">لوحة التحكم</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 text-[#111811] dark:text-gray-200 hover:bg-primary/10 hover:text-[#111811] rounded-xl transition-colors" href="#">
                    <span class="material-symbols-outlined text-[22px]">inventory_2</span>
                    <span class="text-sm font-medium">المنتجات</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 bg-primary/15 text-[#111811] dark:text-white rounded-xl font-semibold border-r-4 border-primary transition-colors" href="#">
                    <span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">category</span>
                    <span class="text-sm font-semibold">الفئات</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 text-[#111811] dark:text-gray-200 hover:bg-primary/10 hover:text-[#111811] rounded-xl transition-colors" href="#">
                    <span class="material-symbols-outlined text-[22px]">inventory</span>
                    <span class="text-sm font-medium">المخزون</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 text-[#111811] dark:text-gray-200 hover:bg-primary/10 hover:text-[#111811] rounded-xl transition-colors" href="#">
                    <span class="material-symbols-outlined text-[22px]">bar_chart</span>
                    <span class="text-sm font-medium">التقارير</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 text-[#111811] dark:text-gray-200 hover:bg-primary/10 hover:text-[#111811] rounded-xl transition-colors" href="#">
                    <span class="material-symbols-outlined text-[22px]">settings</span>
                    <span class="text-sm font-medium">الإعدادات</span>
                </a>
            </nav>
            <div class="p-4 border-t border-[#dce5dc] dark:border-[#2a3d2a]">
                <div class="flex items-center gap-3 p-2">
                    <div class="w-8 h-8 rounded-full bg-cover bg-center" data-alt="صورة ملف مدير المتجر" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAIHnAeWA2QCahSnFob5bCL6EaFkcFauqgEQ1QP7pOzgMOxCJxfj1rMztEF795XSAvDCIpfzwMtiJSBCMGhaRYzqKbjgAtYvCyOyetoppl0RptkwpRXsK8rScYfFGdmuVFmaoKlwmGuYW7mkkPPt0aR00Ju87p2zMkEQlVVRHqWGhwgMDFFHIdpeUmS7xfqGMLmizVSErqDNxde7HxsAglwFmWBpAZLZbfVo3t1ruFPh1vjRWp4Ybm49k2HIyY7fKixAYbwq8qtwQ')"></div>
                    <div class="flex-1 overflow-hidden">
                        <p class="text-xs font-bold truncate">Alex Thompson</p>
                        <p class="text-[10px] text-[#638863] truncate">alex.t@grocery.com</p>
                    </div>
                    <span class="material-symbols-outlined text-sm cursor-pointer">logout</span>
                </div>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="ml-64 flex-1 p-8">
            <div class="max-w-5xl mx-auto">
                <!-- Header Section -->
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                    <div>
                        <h2 class="text-3xl font-black tracking-tight text-[#111811] dark:text-white">الفئات</h2>
                        <p class="text-[#638863] text-sm mt-1">نظم منتجات المتجر حسب الأقسام والأنواع.</p>
                    </div>
                    <button class="flex items-center justify-center gap-2 bg-primary hover:bg-primary/90 text-[#111811] px-6 py-3 rounded-xl font-bold transition-all shadow-sm">
                        <span class="material-symbols-outlined">add</span>
                        <span>إضافة فئة</span>
                    </button>
                </div>
                <!-- Stats Overview (Small) -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white dark:bg-[#1a2e1a] p-4 rounded-xl border border-[#dce5dc] dark:border-[#2a3d2a]">
                        <p class="text-[#638863] text-xs font-semibold uppercase tracking-wider">إجمالي الفئات</p>
                        <p class="text-2xl font-black mt-1">24</p>
                    </div>
                    <div class="bg-white dark:bg-[#1a2e1a] p-4 rounded-xl border border-[#dce5dc] dark:border-[#2a3d2a]">
                        <p class="text-[#638863] text-xs font-semibold uppercase tracking-wider">العناصر النشطة</p>
                        <p class="text-2xl font-black mt-1">1,402</p>
                    </div>
                    <div class="bg-white dark:bg-[#1a2e1a] p-4 rounded-xl border border-[#dce5dc] dark:border-[#2a3d2a]">
                        <p class="text-[#638863] text-xs font-semibold uppercase tracking-wider">فئات فارغة</p>
                        <p class="text-2xl font-black mt-1">0</p>
                    </div>
                </div>
                <!-- Categories Table Container -->
                <div class="bg-white dark:bg-[#1a2e1a] rounded-xl border border-[#dce5dc] dark:border-[#2a3d2a] overflow-hidden shadow-sm">
                    <div class="overflow-x-auto">
                        <table class="w-full text-right border-collapse">
                            <thead>
                                <tr class="bg-background-light dark:bg-[#223622] border-bottom border-[#dce5dc] dark:border-[#2a3d2a]">
                                    <th class="px-6 py-4 text-xs font-bold text-[#638863] uppercase tracking-wider w-[60%]">اسم الفئة</th>
                                    <th class="px-6 py-4 text-xs font-bold text-[#638863] uppercase tracking-wider text-right">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-[#dce5dc] dark:divide-[#2a3d2a]">
                                <!-- Row 1 -->
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-4">
                                            <div class="w-10 h-10 rounded-lg bg-[#e8fbe8] dark:bg-[#2a402a] flex items-center justify-center text-primary">
                                                <span class="material-symbols-outlined">eco</span>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-[#111811] dark:text-white">منتجات طازجة</p>
                                                <p class="text-xs text-[#638863]">فواكه، خضروات، أعشاب</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <div class="flex justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
                                            <button class="p-2 hover:bg-white dark:hover:bg-[#2a3d2a] rounded-lg transition-colors text-[#111811] dark:text-white">
                                                <span class="material-symbols-outlined text-[20px]">edit</span>
                                            </button>
                                            <button class="p-2 hover:bg-red-50 dark:hover:bg-red-950/30 text-red-500 rounded-lg transition-colors">
                                                <span class="material-symbols-outlined text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-4">
                                            <div class="w-10 h-10 rounded-lg bg-[#e8fbe8] dark:bg-[#2a402a] flex items-center justify-center text-primary">
                                                <span class="material-symbols-outlined">egg</span>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-[#111811] dark:text-white">الألبان والبيض</p>
                                                <p class="text-xs text-[#638863]">حليب، جبن، زبدة، بيض</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <div class="flex justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
                                            <button class="p-2 hover:bg-white dark:hover:bg-[#2a3d2a] rounded-lg transition-colors text-[#111811] dark:text-white">
                                                <span class="material-symbols-outlined text-[20px]">edit</span>
                                            </button>
                                            <button class="p-2 hover:bg-red-50 dark:hover:bg-red-950/30 text-red-500 rounded-lg transition-colors">
                                                <span class="material-symbols-outlined text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 3 -->
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-4">
                                            <div class="w-10 h-10 rounded-lg bg-[#e8fbe8] dark:bg-[#2a402a] flex items-center justify-center text-primary">
                                                <span class="material-symbols-outlined">local_bar</span>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-[#111811] dark:text-white">المشروبات</p>
                                                <p class="text-xs text-[#638863]">عصائر، مشروبات غازية، ماء، قهوة</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <div class="flex justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
                                            <button class="p-2 hover:bg-white dark:hover:bg-[#2a3d2a] rounded-lg transition-colors text-[#111811] dark:text-white">
                                                <span class="material-symbols-outlined text-[20px]">edit</span>
                                            </button>
                                            <button class="p-2 hover:bg-red-50 dark:hover:bg-red-950/30 text-red-500 rounded-lg transition-colors">
                                                <span class="material-symbols-outlined text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 4 -->
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-4">
                                            <div class="w-10 h-10 rounded-lg bg-[#e8fbe8] dark:bg-[#2a402a] flex items-center justify-center text-primary">
                                                <span class="material-symbols-outlined">bakery_dining</span>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-[#111811] dark:text-white">المخبوزات</p>
                                                <p class="text-xs text-[#638863]">خبز، معجنات، كعك</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <div class="flex justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
                                            <button class="p-2 hover:bg-white dark:hover:bg-[#2a3d2a] rounded-lg transition-colors text-[#111811] dark:text-white">
                                                <span class="material-symbols-outlined text-[20px]">edit</span>
                                            </button>
                                            <button class="p-2 hover:bg-red-50 dark:hover:bg-red-950/30 text-red-500 rounded-lg transition-colors">
                                                <span class="material-symbols-outlined text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 5 -->
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-4">
                                            <div class="w-10 h-10 rounded-lg bg-[#e8fbe8] dark:bg-[#2a402a] flex items-center justify-center text-primary">
                                                <span class="material-symbols-outlined">ac_unit</span>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-[#111811] dark:text-white">الأطعمة المجمدة</p>
                                                <p class="text-xs text-[#638863]">آيس كريم، وجبات، خضار مجمدة</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <div class="flex justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
                                            <button class="p-2 hover:bg-white dark:hover:bg-[#2a3d2a] rounded-lg transition-colors text-[#111811] dark:text-white">
                                                <span class="material-symbols-outlined text-[20px]">edit</span>
                                            </button>
                                            <button class="p-2 hover:bg-red-50 dark:hover:bg-red-950/30 text-red-500 rounded-lg transition-colors">
                                                <span class="material-symbols-outlined text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination (Added for completeness) -->
                    <div class="px-6 py-4 bg-background-light/50 dark:bg-[#223622]/30 flex items-center justify-between border-t border-[#dce5dc] dark:border-[#2a3d2a]">
                        <p class="text-xs text-[#638863]">عرض 5 من 24 فئة</p>
                        <div class="flex gap-2">
                            <button class="px-3 py-1 text-xs font-semibold bg-white dark:bg-[#1a2e1a] border border-[#dce5dc] dark:border-[#2a3d2a] rounded hover:bg-gray-50 transition-colors">السابق</button>
                            <button class="px-3 py-1 text-xs font-semibold bg-white dark:bg-[#1a2e1a] border border-[#dce5dc] dark:border-[#2a3d2a] rounded hover:bg-gray-50 transition-colors">التالي</button>
                        </div>
                    </div>
                </div>
                <!-- Footer / Help -->
                <div class="mt-12 text-center">
                    <p class="text-sm text-[#638863]">تحتاج مساعدة في إدارة الفئات؟ <a class="text-primary font-bold hover:underline" href="#">عرض الوثائق</a></p>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
