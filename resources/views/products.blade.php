<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>المنتجات | إدارة البقالة</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
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

<body class="bg-background-light dark:bg-background-dark font-display text-[#111811]">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar Navigation -->
        <aside class="w-64 bg-white/90 border-r border-[#dce5dc] backdrop-blur-md flex flex-col justify-between py-6 px-4">
            <div class="flex flex-col gap-8">
                <div class="flex items-center gap-3 px-2">
                    <div class="size-10 bg-primary rounded-lg flex items-center justify-center text-white">
                        <span class="material-symbols-outlined">local_grocery_store</span>
                    </div>
                    <div>
                        <h1 class="text-base font-bold leading-tight">إدارة البقالة</h1>
                        <p class="text-xs text-[#638863]">مدير المتجر</p>
                    </div>
                </div>
                <nav class="flex flex-col gap-1">
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[#638863] hover:bg-primary/10 hover:text-[#111811] transition-colors" href="#">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="text-sm font-medium">لوحة التحكم</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-primary/15 text-[#111811] font-semibold border-r-4 border-primary" href="#">
                        <span class="material-symbols-outlined">inventory_2</span>
                        <span class="text-sm">المنتجات</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[#638863] hover:bg-primary/10 hover:text-[#111811] transition-colors" href="#">
                        <span class="material-symbols-outlined">category</span>
                        <span class="text-sm font-medium">المخزون</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[#638863] hover:bg-primary/10 hover:text-[#111811] transition-colors" href="#">
                        <span class="material-symbols-outlined">shopping_cart</span>
                        <span class="text-sm font-medium">الطلبات</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[#638863] hover:bg-primary/10 hover:text-[#111811] transition-colors" href="#">
                        <span class="material-symbols-outlined">analytics</span>
                        <span class="text-sm font-medium">التقارير</span>
                    </a>
                </nav>
            </div>
            <div class="flex flex-col gap-4">
                <div class="bg-background-light p-4 rounded-xl border border-[#dce5dc]">
                    <p class="text-xs text-[#638863] mb-2 font-medium">حد التخزين</p>
                    <div class="w-full bg-[#dce5dc] h-1.5 rounded-full mb-2">
                        <div class="bg-primary h-full w-[72%] rounded-full"></div>
                    </div>
                    <p class="text-[10px] text-[#111811] font-bold">تم استخدام 72% من 500GB</p>
                </div>
                <button class="flex items-center justify-center gap-2 w-full py-2.5 rounded-xl border border-[#dce5dc] text-sm font-bold text-[#111811] hover:bg-[#f0f4f0] transition-colors">
                    <span class="material-symbols-outlined text-sm">logout</span>
                    تسجيل الخروج
                </button>
            </div>
        </aside>
        <!-- Main Content Area -->
        <main class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Header -->
            <header class="h-16 bg-white/90 backdrop-blur-md border-b border-[#dce5dc] shadow-sm flex items-center justify-between px-8 shrink-0">
                <div class="flex items-center gap-4 flex-1">
                    <h2 class="text-xl font-bold text-[#111811]">المنتجات</h2>
                    <div class="h-6 w-px bg-[#dce5dc]"></div>
                    <div class="relative w-full max-w-md">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#638863] text-xl">search</span>
                        <input class="w-full h-11 pl-10 pr-4 bg-background-light border-none rounded-lg focus:ring-2 focus:ring-primary/50 text-sm placeholder:text-[#638863]" placeholder="ابحث بالاسم أو الفئة..." type="text" />
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <button class="size-10 flex items-center justify-center rounded-lg bg-background-light text-[#638863] hover:bg-[#f0f4f0] transition-colors relative">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="absolute top-2 right-2.5 size-2 bg-red-500 rounded-full border-2 border-white"></span>
                    </button>
                    <button class="bg-primary text-[#111811] h-11 px-6 rounded-lg font-bold text-sm flex items-center gap-2 shadow-sm hover:brightness-105 transition-all">
                        <span class="material-symbols-outlined">add</span>
                        إضافة منتج
                    </button>
                    <div class="size-10 rounded-full bg-cover bg-center border border-[#dce5dc]" data-alt="صورة ملف المستخدم" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCf-O6ieAq1GvR0YAYhKzD5hboiup0MJRILSJ_hFtmmnsEi5s0Jo1BOQIb_WPLJyZNgyzUm9UbgPYK2pJnkMaZb_ciAdCgX4qu68YFgF8xDkRTpxmMbU35r79HrI3pFkOgIrA6Nh32mgD5SgFxXiUrsFFL7ICENe3UBNvIfPVo7uIBV8GB4kXN6pNSUa6ktvdYGrlvtP6EYvm8iIDPy0CL2OP68SOEjNuh1KbZXkYPPmv2zJ_UKlQ3fbmk1-Zi09l-lF-UDTh85XQ')"></div>
                </div>
            </header>
            <!-- Scrollable Content -->
            <div class="flex-1 overflow-y-auto p-8">
                <!-- Filters/Stats Row -->
                <div class="grid grid-cols-4 gap-4 mb-6">
                    <div class="bg-white p-4 rounded-xl border border-[#dce5dc] flex items-center gap-4">
                        <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">inventory</span>
                        </div>
                        <div>
                            <p class="text-xs text-[#638863] font-medium uppercase tracking-wider">إجمالي العناصر</p>
                            <p class="text-xl font-bold">1,284</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-[#dce5dc] flex items-center gap-4">
                        <div class="size-12 rounded-lg bg-yellow-100 flex items-center justify-center text-yellow-600">
                            <span class="material-symbols-outlined">warning</span>
                        </div>
                        <div>
                            <p class="text-xs text-[#638863] font-medium uppercase tracking-wider">مخزون منخفض</p>
                            <p class="text-xl font-bold text-yellow-600">12</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-[#dce5dc] flex items-center gap-4">
                        <div class="size-12 rounded-lg bg-blue-100 flex items-center justify-center text-blue-600">
                            <span class="material-symbols-outlined">category</span>
                        </div>
                        <div>
                            <p class="text-xs text-[#638863] font-medium uppercase tracking-wider">الفئات</p>
                            <p class="text-xl font-bold text-blue-600">18</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-[#dce5dc] flex items-center gap-4">
                        <div class="size-12 rounded-lg bg-green-100 flex items-center justify-center text-green-600">
                            <span class="material-symbols-outlined">trending_up</span>
                        </div>
                        <div>
                            <p class="text-xs text-[#638863] font-medium uppercase tracking-wider">متوفر</p>
                            <p class="text-xl font-bold text-green-600">98%</p>
                        </div>
                    </div>
                </div>
                <!-- Table Container -->
                <div class="bg-white rounded-xl border border-[#dce5dc] overflow-hidden shadow-sm">
                    <div class="overflow-x-auto">
                        <table class="w-full text-right border-collapse">
                            <thead>
                                <tr class="bg-background-light border-b border-[#dce5dc]">
                                    <th class="px-6 py-4 text-xs font-bold text-[#638863] uppercase tracking-wider">اسم المنتج</th>
                                    <th class="px-6 py-4 text-xs font-bold text-[#638863] uppercase tracking-wider">الفئة</th>
                                    <th class="px-6 py-4 text-xs font-bold text-[#638863] uppercase tracking-wider">السعر</th>
                                    <th class="px-6 py-4 text-xs font-bold text-[#638863] uppercase tracking-wider">الكمية</th>
                                    <th class="px-6 py-4 text-xs font-bold text-[#638863] uppercase tracking-wider">الحالة</th>
                                    <th class="px-6 py-4 text-xs font-bold text-[#638863] uppercase tracking-wider text-right">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-[#dce5dc]">
                                <!-- Row 1 -->
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 rounded bg-background-light flex items-center justify-center overflow-hidden">
                                                <img class="w-full h-full object-cover" data-alt="صورة مصغرة لموز عضوي" src="https://lh3.googleusercontent.com/aida-public/AB6AXuByUdW64WIORa1m_kD2UuBTclYvdEDW-MVdJe65qg-V1RgprGduwPdiKgLpEZBSGnnBIAfPRzJVGoh5A3-s2IQ8B25HlZT35QKAvd6rub4oQ-LQbL09pi32qUJbGGpWY-YFcxJPDyIb8i3_vQjAgMySQf1PHrfXbGGKlii1EjZj931O8NRXNvalIYUKALveaWWKTy9uew_TWnk2ydwBoIhKTEXBSkIgkvooruQcNJA2D2h_NvwaR9oQs7O_W2st3QCKEzhoSyuUFA" />
                                            </div>
                                            <span class="font-semibold text-[#111811]">موز عضوي</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 rounded-full bg-background-light text-[#111811] text-xs font-medium">خضار وفواكه</span>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-[#111811]">$1.99</td>
                                    <td class="px-6 py-4 text-[#638863]">45 كغ</td>
                                    <td class="px-6 py-4">
                                        <span class="flex items-center gap-1.5 text-xs font-bold text-primary uppercase">
                                            <span class="size-1.5 rounded-full bg-primary"></span>
                                            متوفر
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-2 rounded-lg text-[#638863] hover:text-primary hover:bg-primary/10 transition-all">
                                                <span class="material-symbols-outlined text-lg">edit</span>
                                            </button>
                                            <button class="p-2 rounded-lg text-[#638863] hover:text-red-600 hover:bg-red-50 transition-all">
                                                <span class="material-symbols-outlined text-lg">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 rounded bg-background-light flex items-center justify-center overflow-hidden">
                                                <img class="w-full h-full object-cover" data-alt="صورة مصغرة لعلبة حليب كامل" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNcPIIDpHNwxWAeX3UAa8HW14hDjN49l4KxBqtS3lpCfwj7LmnrcNnZwq_TxDlYK_-crgB9QuBaxYqD0AUp34lnyKutz_d81Cb3R1AyZRQsCDI8UxSm2iDIITC8m9525Fr-wTkCk0VH_LpMrDrgDbyMhKVUyTKPBsovJfNpByb62PT24Ec1E5BOggZyojVjGHHqZVgh8ExHvt5JOd7k3nH6G41h0nKPMugRGqn-XGsemmTVhMYQZrnR16c-2qe7RKgnqLuU9uBcA" />
                                            </div>
                                            <span class="font-semibold text-[#111811]">حليب كامل (1 لتر)</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 rounded-full bg-background-light text-[#111811] text-xs font-medium">الألبان</span>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-[#111811]">$3.50</td>
                                    <td class="px-6 py-4 text-red-500 font-medium">4 وحدات</td>
                                    <td class="px-6 py-4">
                                        <span class="flex items-center gap-1.5 text-xs font-bold text-red-500 uppercase">
                                            <span class="size-1.5 rounded-full bg-red-500"></span>
                                            مخزون منخفض
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-2 rounded-lg text-[#638863] hover:text-primary hover:bg-primary/10 transition-all">
                                                <span class="material-symbols-outlined text-lg">edit</span>
                                            </button>
                                            <button class="p-2 rounded-lg text-[#638863] hover:text-red-600 hover:bg-red-50 transition-all">
                                                <span class="material-symbols-outlined text-lg">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 3 -->
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 rounded bg-background-light flex items-center justify-center overflow-hidden">
                                                <img class="w-full h-full object-cover" data-alt="صورة مصغرة للأفوكادو" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwuugr8rMABsVq294rsGOHHS1PKOoiev3vFHWS1JzIOF7bqgvJjosRQFwuPdlR3wytjH7gElprYWiFZUD3c8cwKTIVRzRfgwcjBFzyQajTpt8OZwV_IPNJT8OuC6iCel0SxzXw0EJHo4T4fOOA_lJGeztAd2V7ZWMQG9_O4p9Ux5p5L6dbHNCPGWhKzpVGhw70VUz9Zu1ZlxqCnSFtTxcI-2HCfxLKPolYY2E2Vc_u_vr8hrR7LRJ9r2oi-EHMskEpiWJ6t2DJXw" />
                                            </div>
                                            <span class="font-semibold text-[#111811]">أفوكادو (بالجملة)</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 rounded-full bg-background-light text-[#111811] text-xs font-medium">خضار وفواكه</span>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-[#111811]">$0.99</td>
                                    <td class="px-6 py-4 text-[#638863]">28 وحدة</td>
                                    <td class="px-6 py-4">
                                        <span class="flex items-center gap-1.5 text-xs font-bold text-primary uppercase">
                                            <span class="size-1.5 rounded-full bg-primary"></span>
                                            متوفر
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-2 rounded-lg text-[#638863] hover:text-primary hover:bg-primary/10 transition-all">
                                                <span class="material-symbols-outlined text-lg">edit</span>
                                            </button>
                                            <button class="p-2 rounded-lg text-[#638863] hover:text-red-600 hover:bg-red-50 transition-all">
                                                <span class="material-symbols-outlined text-lg">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 4 -->
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 rounded bg-background-light flex items-center justify-center overflow-hidden">
                                                <img class="w-full h-full object-cover" data-alt="صورة مصغرة لزبادي يوناني" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTQFEao5iokCjJzihWPD-q76aFou3L0P-lj0jEhHZ3ySazfbf9PUvF7gjb0gQZ5ub9Ya9khBEQrU-mNvdh_dHjrhj51kU_aHnnE5giuz02lOvGvB1dcVSJiKEG3_2DstSViZO5kTxMsIvFVY5E7tL4ZTzkIUj4PGe-53hv0_pqwsyJhdCuTMkkO_NqoX0Wz-K-iiElu8PXsw1u8h1-K8TO1laPBhjviZZwGEIDgd3ULAZMJ-ptlfiq7Fd7oAy7NLwuvCdpgSivBQ" />
                                            </div>
                                            <span class="font-semibold text-[#111811]">زبادي يوناني</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 rounded-full bg-background-light text-[#111811] text-xs font-medium">الألبان</span>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-[#111811]">$4.25</td>
                                    <td class="px-6 py-4 text-yellow-600 font-medium">8 وحدات</td>
                                    <td class="px-6 py-4">
                                        <span class="flex items-center gap-1.5 text-xs font-bold text-yellow-600 uppercase">
                                            <span class="size-1.5 rounded-full bg-yellow-600"></span>
                                            إعادة طلب
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-2 rounded-lg text-[#638863] hover:text-primary hover:bg-primary/10 transition-all">
                                                <span class="material-symbols-outlined text-lg">edit</span>
                                            </button>
                                            <button class="p-2 rounded-lg text-[#638863] hover:text-red-600 hover:bg-red-50 transition-all">
                                                <span class="material-symbols-outlined text-lg">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination -->
                    <div class="px-6 py-4 bg-background-light/30 border-t border-[#dce5dc] flex items-center justify-between">
                        <p class="text-xs text-[#638863] font-medium">عرض 1 إلى 10 من 1,284 نتيجة</p>
                        <div class="flex items-center gap-1">
                            <button class="size-8 flex items-center justify-center rounded-lg text-[#111811] hover:bg-[#f0f4f0] transition-colors">
                                <span class="material-symbols-outlined text-lg">chevron_left</span>
                            </button>
                            <button class="size-8 flex items-center justify-center rounded-lg bg-primary text-[#111811] font-bold text-xs">1</button>
                            <button class="size-8 flex items-center justify-center rounded-lg text-[#111811] hover:bg-[#f0f4f0] transition-colors text-xs font-medium">2</button>
                            <button class="size-8 flex items-center justify-center rounded-lg text-[#111811] hover:bg-[#f0f4f0] transition-colors text-xs font-medium">3</button>
                            <span class="px-1 text-[#638863]">...</span>
                            <button class="size-8 flex items-center justify-center rounded-lg text-[#111811] hover:bg-[#f0f4f0] transition-colors text-xs font-medium">129</button>
                            <button class="size-8 flex items-center justify-center rounded-lg text-[#111811] hover:bg-[#f0f4f0] transition-colors">
                                <span class="material-symbols-outlined text-lg">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
