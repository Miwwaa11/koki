<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Dashboard - Alfin Aquatic</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Google Sans Flex', 'sans-serif'],
                    },
                    colors: {
                        emerald: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            200: '#a7f3d0',
                            300: '#6ee7b7',
                            400: '#34d399',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b',
                        },
                        teal: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            200: '#99f6e4',
                            300: '#5eead4',
                            400: '#2dd4bf',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0f766e',
                            800: '#115e59',
                            900: '#134e4a',
                        },
                        cyan: {
                            50: '#ecfeff',
                            100: '#cffafe',
                            200: '#a5f3fc',
                            300: '#67e8f9',
                            400: '#22d3ee',
                            500: '#06b6d4',
                        }
                    },
                    boxShadow: {
                        'soft': '0 2px 15px -3px rgba(5, 150, 105, 0.07), 0 10px 20px -2px rgba(5, 150, 105, 0.04)',
                        'glow': '0 0 20px rgba(5, 150, 105, 0.15)',
                        'floating': '0 15px 35px -10px rgba(5, 150, 105, 0.25)',
                        'card': '0 4px 20px rgba(0, 0, 0, 0.05)',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out 2s infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'scale-in': 'scaleIn 0.3s ease-out',
                    }
                }
            }
        }
    </script>

    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        body {
            font-family: 'Google Sans Flex', sans-serif;
            background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
            -webkit-tap-highlight-color: transparent;
            transition: background 0.3s ease, color 0.3s ease;
        }

        /* Dark Mode Overrides */
        .dark body,
        .dark .md\:hidden,
        .dark .flex.min-h-screen,
        .dark main,
        .dark .desktop-main {
            background: #0f1115 !important;
            background-image: none !important;
            color: #e2e8f0;
        }

        .dark .wave-pattern {
            background-image: none !important;
        }

        .dark .glass-card {
            background: #16191e !important;
            border: 1px solid rgba(255, 255, 255, 0.03) !important;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4) !important;
        }

        .dark .bg-gradient-to-b,
        .dark .bg-gradient-to-br {
            background: #0f1115 !important;
        }

        .dark header {
            background: linear-gradient(135deg, #064e3b 0%, #065f46 100%) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .dark nav.fixed {
            background: rgba(26, 29, 35, 0.9) !important;
            border-top: 1px solid rgba(255, 255, 255, 0.05) !important;
            backdrop-filter: blur(20px) !important;
        }

        .dark aside {
            background: #16191e !important;
            border-right: 1px solid rgba(255, 255, 255, 0.05) !important;
        }

        .dark .sidebar-link:hover {
            background: #1f242d !important;
        }

        .dark .sidebar-link.active {
            background: linear-gradient(to right, #064e3b, #065f46) !important;
            color: #34d399 !important;
        }

        .dark .bg-slate-50 {
            background-color: #1a1d23 !important;
        }

        .dark .bg-slate-100 {
            background-color: #1f242d !important;
        }

        .dark .text-slate-800,
        .dark .text-slate-700,
        .dark h1,
        .dark h2,
        .dark h3 {
            color: #f8fafc !important;
        }

        .dark .text-slate-500 {
            color: #94a3b8 !important;
        }

        .dark .text-slate-400 {
            color: #64748b !important;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.8);
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .btn-press:active {
            transform: scale(0.96);
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(5, 150, 105, 0.15);
        }

        .gradient-text {
            background: linear-gradient(135deg, #059669 0%, #0d9488 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-item-active {
            color: #059669;
        }

        .nav-item-active .nav-icon {
            background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
        }

        .wave-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0h60v60H0z' fill='%23f8fafc'/%3E%3Cpath d='M0 30c15 0 15-10 30-10s15 10 30 10v30H0z' fill-opacity='0.03' fill='%23059669'/%3E%3C/svg%3E");
        }

        .stat-card-enter {
            animation: slideUp 0.6s ease-out backwards;
        }

        .stat-card-enter:nth-child(1) {
            animation-delay: 0.1s;
        }

        .stat-card-enter:nth-child(2) {
            animation-delay: 0.2s;
        }

        .stat-card-enter:nth-child(3) {
            animation-delay: 0.3s;
        }

        .stat-card-enter:nth-child(4) {
            animation-delay: 0.4s;
        }

        .activity-item-enter {
            animation: slideUp 0.5s ease-out backwards;
        }

        .activity-item-enter:nth-child(1) {
            animation-delay: 0.1s;
        }

        .activity-item-enter:nth-child(2) {
            animation-delay: 0.2s;
        }

        .activity-item-enter:nth-child(3) {
            animation-delay: 0.3s;
        }

        .activity-item-enter:nth-child(4) {
            animation-delay: 0.4s;
        }

        .activity-item-enter:nth-child(5) {
            animation-delay: 0.5s;
        }

        /* Responsive Breakpoints */
        @media (min-width: 768px) {
            .mobile-only {
                display: none !important;
            }

            .desktop-only {
                display: block !important;
            }
        }

        @media (max-width: 767px) {
            .desktop-only {
                display: none !important;
            }

            .mobile-only {
                display: block !important;
            }
        }

        /* Desktop Sidebar */
        .sidebar-width {
            width: 280px;
        }

        /* Desktop Main Content */
        .desktop-main {
            margin-left: 280px;
        }

        @media (max-width: 1024px) {
            .desktop-main {
                margin-left: 0;
            }

            .sidebar-width {
                width: 100%;
            }
        }

        /* Sidebar link styles */
        .sidebar-link {
            color: #64748b;
        }

        .sidebar-link:hover {
            background-color: #f8fafc;
            color: #059669;
        }

        .sidebar-link.active {
            background: linear-gradient(to right, #ecfdf5, #d1fae5);
            color: #059669;
            font-weight: 600;
        }
    </style>
</head>

<body class="text-slate-800 antialiased wave-pattern">

    <!-- ==================== MOBILE VIEW (< 768px) ==================== -->
    <div class="md:hidden max-w-[414px] mx-auto min-h-screen bg-gradient-to-b from-slate-50 to-white relative shadow-2xl overflow-hidden">

        <!-- ==================== HEADER DASHBOARD ==================== -->
        <header class="bg-gradient-to-r from-emerald-600 via-teal-600 to-emerald-700 px-5 pt-12 pb-6 rounded-b-3xl shadow-soft relative overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 bg-cyan-400/20 rounded-full blur-2xl animate-float-delayed"></div>

            <div class="relative z-10">
                <!-- Top Bar -->
                <div class="flex justify-between items-center mb-5">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center text-white shadow-lg">
                            <i class="fas fa-fish text-xl"></i>
                        </div>
                        <div>
                            <p class="text-emerald-100 text-xs font-medium mb-0.5" id="greetingText">Selamat datang,</p>
                            <h1 class="text-white text-lg font-bold">Admin Alfin 👋</h1>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center text-white hover:bg-white/30 transition-all btn-press relative">
                            <i class="fas fa-bell text-sm"></i>
                            <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-emerald-600"></span>
                        </button>
                        <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm border-2 border-white/30 overflow-hidden">
                            <img src="https://ui-avatars.com/api/?name=Admin+Alfin&background=ffffff&color=059669&size=128" alt="Admin" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Date Display -->
                <div class="bg-white/15 backdrop-blur-md rounded-2xl px-4 py-3 border border-white/20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-calendar-alt text-emerald-200 text-sm"></i>
                            <span class="text-white text-sm font-medium" id="currentDate">Senin, 1 Maret 2026</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-clock text-emerald-200 text-sm"></i>
                            <span class="text-white text-sm font-medium" id="currentTime">08:30</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== SCROLLABLE CONTENT ==================== -->
        <main class="px-5 py-6 pb-24 space-y-6 hide-scrollbar overflow-y-auto" style="height: calc(100vh - 200px);">

            <!-- ==================== RINGKASAN DATA (SUMMARY CARDS) ==================== -->
            <section>
                <h2 class="text-slate-800 text-sm font-bold mb-4 flex items-center gap-2">
                    <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                    Ringkasan Data
                </h2>

                <div class="grid grid-cols-2 gap-3">
                    <!-- Card 1: Total Ikan -->
                    <div class="glass-card rounded-2xl p-4 shadow-card border-l-4 border-emerald-500 card-hover stat-card-enter cursor-pointer btn-press">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-fish text-sm"></i>
                            </div>
                            <span class="text-[10px] font-semibold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full">+{{ $totalIkan }} ekor</span>
                        </div>
                        <p class="text-[10px] text-slate-500 font-medium uppercase tracking-wider mb-1">Total Ikan</p>
                        <p class="text-2xl font-extrabold gradient-text">{{ number_format($totalIkan) }}</p>
                        <p class="text-[9px] text-slate-400 mt-1">ekor aktif</p>
                    </div>

                    <!-- Card 2: Jumlah Kolam -->
                    <div class="glass-card rounded-2xl p-4 shadow-card border-l-4 border-teal-500 card-hover stat-card-enter cursor-pointer btn-press">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-teal-400 to-teal-600 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-water text-sm"></i>
                            </div>
                            <span class="text-[10px] font-semibold text-teal-600 bg-teal-50 px-2 py-1 rounded-full">{{ $jumlahKolam }} unit</span>
                        </div>
                        <p class="text-[10px] text-slate-500 font-medium uppercase tracking-wider mb-1">Jumlah Kolam</p>
                        <p class="text-2xl font-extrabold gradient-text">{{ number_format($jumlahKolam) }}</p>
                        <p class="text-[9px] text-slate-400 mt-1">unit tersedia</p>
                    </div>

                    <!-- Card 3: Ikan Baru -->
                    <div class="glass-card rounded-2xl p-4 shadow-card border-l-4 border-cyan-500 card-hover stat-card-enter cursor-pointer btn-press">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-cyan-400 to-cyan-600 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-seedling text-sm"></i>
                            </div>
                            <span class="text-[10px] font-semibold text-cyan-600 bg-cyan-50 px-2 py-1 rounded-full">Minggu Ini</span>
                        </div>
                        <p class="text-[10px] text-slate-500 font-medium uppercase tracking-wider mb-1">Ikan Baru</p>
                        <p class="text-2xl font-extrabold gradient-text">{{ number_format($ikanBaru) }}</p>
                        <p class="text-[9px] text-slate-400 mt-1">ekor masuk</p>
                    </div>

                    <!-- Card 4: Kolam Aktif -->
                    <div class="glass-card rounded-2xl p-4 shadow-card border-l-4 border-emerald-600 card-hover stat-card-enter cursor-pointer btn-press">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-500 to-emerald-700 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-check-circle text-sm"></i>
                            </div>
                            <span class="text-[10px] font-semibold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full">{{ $jumlahKolam > 0 ? round(($kolamAktif / $jumlahKolam) * 100) : 0 }}%</span>
                        </div>
                        <p class="text-[10px] text-slate-500 font-medium uppercase tracking-wider mb-1">Kolam Aktif</p>
                        <p class="text-2xl font-extrabold gradient-text">{{ number_format($kolamAktif) }}</p>
                        <p class="text-[9px] text-slate-400 mt-1">dari total</p>
                    </div>
                </div>
            </section>

            <!-- ==================== GRAFIK MINI (OVERVIEW) ==================== -->
            <section class="glass-card rounded-2xl p-5 shadow-card card-hover">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-slate-800 text-sm font-bold flex items-center gap-2">
                        <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                        Populasi Ikan Minggu Ini
                    </h2>
                    <select class="text-[10px] font-medium text-slate-600 bg-slate-100 border-none rounded-lg px-3 py-1.5 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                        <option>7 Hari</option>
                        <option>14 Hari</option>
                        <option>30 Hari</option>
                    </select>
                </div>
                <div class="h-40">
                    <canvas id="populationChart"></canvas>
                </div>
                <div class="flex justify-between mt-4 pt-4 border-t border-slate-100">
                    <div class="text-center">
                        <p class="text-[9px] text-slate-400 mb-1">Rata-rata</p>
                        <p class="text-sm font-bold text-emerald-600">{{ $populasiIkan->count() > 0 ? round($populasiIkan->avg('total')) : 0 }} ekor</p>
                    </div>
                    <div class="text-center">
                        <p class="text-[9px] text-slate-400 mb-1">Tertinggi</p>
                        <p class="text-sm font-bold text-teal-600">{{ $populasiIkan->count() > 0 ? $populasiIkan->max('total') : 0 }} ekor</p>
                    </div>
                    <div class="text-center">
                        <p class="text-[9px] text-slate-400 mb-1">Terendah</p>
                        <p class="text-sm font-bold text-cyan-600">{{ $populasiIkan->count() > 0 ? $populasiIkan->min('total') : 0 }} ekor</p>
                    </div>
                </div>
            </section>

            <!-- ==================== AKTIVITAS TERBARU ==================== -->
            <section>
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-slate-800 text-sm font-bold flex items-center gap-2">
                        <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                        Aktivitas Terbaru
                    </h2>
                    <button class="text-[10px] font-semibold text-emerald-600 hover:text-emerald-700 transition-colors">
                        Lihat Semua
                    </button>
                </div>

                <div class="glass-card rounded-2xl p-4 shadow-card">
                    <div class="space-y-3" id="activityList">
                        @forelse($aktivitasTerbaru as $aktivitas)
                        <div class="flex items-start gap-3 pb-3 border-b border-slate-100 activity-item-enter">
                            <div class="w-9 h-9 rounded-full bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white flex-shrink-0 shadow-md">
                                <i class="fas fa-fish text-xs"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-semibold text-slate-800 truncate">{{ $aktivitas->jenis_ikan ?? 'Ikan' }} - Stok: {{ $aktivitas->stok }} ekor</p>
                                <p class="text-[10px] text-slate-400 mt-0.5">{{ $aktivitas->kolam ? $aktivitas->kolam->nama : 'Tanpa Kolam' }} • {{ $aktivitas->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-8">
                            <i class="fas fa-inbox text-4xl text-slate-300 mb-3"></i>
                            <p class="text-sm text-slate-400">Belum ada aktivitas</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </section>

            <!-- ==================== SHORTCUT ACTION (QUICK ACTIONS) ==================== -->
            <section>
                <h2 class="text-slate-800 text-sm font-bold mb-4 flex items-center gap-2">
                    <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                    Aksi Cepat
                </h2>

                <div class="grid grid-cols-2 gap-3">
                    <button class="glass-card rounded-2xl p-4 shadow-card card-hover btn-press text-center group relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-teal-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="relative z-10">
                            <div class="w-12 h-12 mx-auto rounded-xl bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white shadow-lg mb-2 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                <i class="fas fa-fish text-lg"></i>
                            </div>
                            <p class="text-[10px] font-bold text-slate-700">Tambah Ikan</p>
                        </div>
                    </button>

                    <button class="glass-card rounded-2xl p-4 shadow-card card-hover btn-press text-center group relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-emerald-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="relative z-10">
                            <div class="w-12 h-12 mx-auto rounded-xl bg-gradient-to-br from-cyan-400 to-cyan-600 flex items-center justify-center text-white shadow-lg mb-2 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                <i class="fas fa-list text-lg"></i>
                            </div>
                            <p class="text-[10px] font-bold text-slate-700">Semua Data</p>
                        </div>
                    </button>
                </div>
            </section>

        </main>

        <!-- ==================== BOTTOM NAVIGATION (MOBILE) ==================== -->
        <nav class="fixed bottom-0 left-0 right-0 bg-white/95 backdrop-blur-xl border-t border-slate-200 px-6 py-3 pb-6 z-40 max-w-[414px] mx-auto shadow-soft">
            <div class="flex justify-around items-center">
                <!-- Dashboard (Active) -->
                <a href="{{ route('dashboard') }}" class="flex flex-col items-center gap-1.5 nav-item nav-item-active transition-all duration-300 btn-press">
                    <div class="nav-icon w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300">
                        <i class="fas fa-home text-base"></i>
                    </div>
                    <span class="text-[9px] font-semibold">Dashboard</span>
                </a>

                <!-- Ikan -->
                <a href="{{ route('ikan.index') }}" class="flex flex-col items-center gap-1.5 nav-item text-slate-400 hover:text-emerald-600 transition-all duration-300 btn-press">
                    <div class="nav-icon w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:bg-emerald-50">
                        <i class="fas fa-fish text-base"></i>
                    </div>
                    <span class="text-[9px] font-medium">Ikan</span>
                </a>

                <!-- Kolam -->
                <a href="{{ route('kolam.index') }}" class="flex flex-col items-center gap-1.5 nav-item text-slate-400 hover:text-emerald-600 transition-all duration-300 btn-press">
                    <div class="nav-icon w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:bg-emerald-50">
                        <i class="fas fa-water text-base"></i>
                    </div>
                    <span class="text-[9px] font-medium">Kolam</span>
                </a>

                <!-- Akun -->
                <a href="{{ route('akun') }}" class="flex flex-col items-center gap-1.5 nav-item text-slate-400 hover:text-emerald-600 transition-all duration-300 btn-press">
                    <div class="nav-icon w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:bg-emerald-50">
                        <i class="fas fa-user text-base"></i>
                    </div>
                    <span class="text-[9px] font-medium">Akun</span>
                </a>
            </div>
        </nav>

    </div>

    <!-- ==================== DESKTOP VIEW (≥ 768px) ==================== -->
    <div class="hidden md:block">
        <div class="flex min-h-screen bg-gradient-to-br from-slate-50 via-white to-emerald-50">

            <!-- ==================== SIDEBAR ==================== -->
            <aside class="sidebar-width bg-white border-r border-slate-200 flex flex-col fixed h-full shadow-elegant z-50">
                <!-- Logo -->
                <div class="px-5 py-4 border-b border-slate-100">
                    <div class="flex items-center gap-3">
                        <a href="{{ url('/') }}" class="w-9 h-9 rounded-lg bg-emerald-100 flex items-center justify-center text-emerald-600 hover:bg-emerald-200 hover:text-emerald-700 transition-colors flex-shrink-0">
                            <i class="fas fa-arrow-left text-sm"></i>
                        </a>
                        <div class="flex-1 min-w-0">
                            <img src="{{ asset('images/alfin2.png') }}" alt="Logo" class="w-36 h-auto object-contain">
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl bg-gradient-to-r from-emerald-50 to-teal-50 text-emerald-700 font-semibold transition-all sidebar-link active">
                        <i class="fas fa-home w-5"></i>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('ikan.index') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all sidebar-link">
                        <i class="fas fa-fish w-5"></i>
                        <span>Data Ikan</span>
                    </a>

                    <a href="{{ route('kolam.index') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all sidebar-link">
                        <i class="fas fa-water w-5"></i>
                        <span>Data Kolam</span>
                    </a>

                    <a href="{{ route('akun') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all sidebar-link">
                        <i class="fas fa-user w-5"></i>
                        <span>Akun Admin</span>
                    </a>

                    <a href="{{ route('pengaturan') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all sidebar-link">
                        <i class="fas fa-gear w-5"></i>
                        <span>Pengaturan</span>
                    </a>
                </nav>

                <!-- User Profile -->
                <div class="p-4 border-t border-slate-100">
                    <div class="flex items-center gap-3 px-4 py-3 rounded-xl bg-slate-50">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white">
                            <i class="fas fa-user text-sm"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-slate-800">{{ Auth::user()->name }}</p>
                            <p class="text-[10px] text-slate-500">{{ Auth::user()->email }}</p>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-500 flex items-center justify-center hover:bg-red-100 transition-colors">
                                <i class="fas fa-sign-out-alt text-xs"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </aside>

            <!-- Main Content Desktop -->
            <main class="desktop-main flex-1 p-8 overflow-y-auto">
                <div class="max-w-6xl mx-auto">
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h1 class="text-2xl font-bold text-slate-800">Dashboard Overview</h1>
                            <p class="text-slate-500 text-sm mt-1">Pantau usaha budidaya ikan koi Anda</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <button class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors">
                                <i class="fas fa-bell"></i>
                            </button>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Grid (4 columns on desktop) -->
                    <div class="grid grid-cols-4 gap-6 mb-8">
                        <div class="glass-card rounded-2xl p-6 shadow-card border-l-4 border-emerald-500 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-fish"></i>
                                </div>
                                <span class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full">+{{ $totalIkan }} ekor</span>
                            </div>
                            <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mb-2">Total Ikan</p>
                            <p class="text-3xl font-extrabold gradient-text">{{ number_format($totalIkan) }}</p>
                        </div>

                        <div class="glass-card rounded-2xl p-6 shadow-card border-l-4 border-teal-500 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-400 to-teal-600 flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-water"></i>
                                </div>
                                <span class="text-xs font-semibold text-teal-600 bg-teal-50 px-3 py-1 rounded-full">{{ $jumlahKolam }} unit</span>
                            </div>
                            <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mb-2">Jumlah Kolam</p>
                            <p class="text-3xl font-extrabold gradient-text">{{ number_format($jumlahKolam) }}</p>
                        </div>

                        <div class="glass-card rounded-2xl p-6 shadow-card border-l-4 border-cyan-500 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-cyan-400 to-cyan-600 flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <span class="text-xs font-semibold text-cyan-600 bg-cyan-50 px-3 py-1 rounded-full">Minggu Ini</span>
                            </div>
                            <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mb-2">Ikan Baru</p>
                            <p class="text-3xl font-extrabold gradient-text">{{ number_format($ikanBaru) }}</p>
                        </div>

                        <div class="glass-card rounded-2xl p-6 shadow-card border-l-4 border-emerald-600 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-emerald-700 flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <span class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full">{{ $kolamAktif }}/{{ $jumlahKolam }} aktif</span>
                            </div>
                            <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mb-2">Kolam Aktif</p>
                            <p class="text-3xl font-extrabold gradient-text">{{ $kolamAktif }}/{{ $jumlahKolam }}</p>
                        </div>
                    </div>

                    <!-- Chart & Activities Grid -->
                    <div class="grid grid-cols-3 gap-6">
                        <!-- Chart (2 columns) -->
                        <div class="col-span-2 glass-card rounded-2xl p-6 shadow-card">
                            <h2 class="text-slate-800 font-bold mb-4">Populasi Ikan - 30 Hari Terakhir</h2>
                            <div class="h-64">
                                <canvas id="populationChartDesktop"></canvas>
                            </div>
                        </div>

                        <!-- Activities (1 column) -->
                        <div class="glass-card rounded-2xl p-6 shadow-card">
                            <h2 class="text-slate-800 font-bold mb-4">Aktivitas Terbaru</h2>
                            <div class="space-y-4">
                                @forelse($aktivitasTerbaru as $aktivitas)
                                <div class="flex items-start gap-3 pb-3 border-b border-slate-100">
                                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white flex-shrink-0">
                                        <i class="fas fa-fish text-xs"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-slate-800">{{ $aktivitas->jenis_ikan ?? 'Ikan' }} - Stok: {{ $aktivitas->stok }} ekor</p>
                                        <p class="text-[10px] text-slate-400">{{ $aktivitas->kolam ? $aktivitas->kolam->nama : 'Tanpa Kolam' }} • {{ $aktivitas->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                @empty
                                <div class="text-center py-8">
                                    <i class="fas fa-inbox text-4xl text-slate-300 mb-3"></i>
                                    <p class="text-sm text-slate-400">Belum ada aktivitas</p>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Theme Initialization Logic
        (function() {
            const savedTheme = localStorage.getItem('theme') || 'Terang';
            const html = document.documentElement;
            if (savedTheme === 'Gelap') {
                html.classList.add('dark');
            } else if (savedTheme === 'Terang') {
                html.classList.remove('dark');
            } else if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                html.classList.add('dark');
            }
        })();

        // ==================== SET GREETING & DATE/TIME ====================
        function updateDateTime() {
            const now = new Date();
            const hour = now.getHours();
            let greeting = 'Selamat datang';
            if (hour < 11) greeting = 'Selamat pagi';
            else if (hour < 15) greeting = 'Selamat siang';
            else if (hour < 18) greeting = 'Selamat sore';
            else greeting = 'Selamat malam';

            document.getElementById('greetingText').textContent = greeting + ',';

            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            document.getElementById('currentDate').textContent = now.toLocaleDateString('id-ID', options);

            const timeString = now.toLocaleTimeString('id-ID', {
                hour: '2-digit',
                minute: '2-digit'
            });
            document.getElementById('currentTime').textContent = timeString;
        }
        updateDateTime();
        setInterval(updateDateTime, 1000);

        // ==================== ANIMATE STATS ====================
        function animateValue(id, start, end, duration) {
            const obj = document.getElementById(id);
            const range = end - start;
            const increment = end > start ? 1 : -1;
            const stepTime = Math.abs(Math.floor(duration / range));
            let current = start;

            const timer = setInterval(() => {
                current += increment;
                obj.textContent = current.toLocaleString('id-ID');
                if (current >= end) {
                    obj.textContent = end.toLocaleString('id-ID');
                    clearInterval(timer);
                }
            }, stepTime > 0 ? stepTime : 10);
        }

        // Start animation after page load
        setTimeout(() => {
            animateValue('statTotalIkan', 0, 245, 1500);
            animateValue('statJumlahKolam', 0, 8, 1500);
            animateValue('statIkanBaru', 0, 32, 1500);
            animateValue('statKolamAktif', 0, 7, 1500);
        }, 500);

        // ==================== CHART.JS CONFIGURATION ====================
        function initChart() {
            const ctx = document.getElementById('populationChart');
            if (!ctx) return;

            const gradient = ctx.getContext('2d').createLinearGradient(0, 0, 0, 200);
            gradient.addColorStop(0, 'rgba(5, 150, 105, 0.4)');
            gradient.addColorStop(1, 'rgba(5, 150, 105, 0.0)');

            // Data dari database
            const chartData = @json($populasiIkan);
            const labels = chartData.length > 0 ? chartData.map(item => {
                const date = new Date(item.date);
                return date.toLocaleDateString('id-ID', {
                    weekday: 'short'
                });
            }) : ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'];
            const data = chartData.length > 0 ? chartData.map(item => item.total) : [0, 0, 0, 0, 0, 0, 0];

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Populasi Ikan',
                        data: data,
                        borderColor: '#059669',
                        backgroundColor: gradient,
                        borderWidth: 3,
                        tension: 0.4,
                        fill: true,
                        pointBackgroundColor: '#ffffff',
                        pointBorderColor: '#059669',
                        pointBorderWidth: 2,
                        pointRadius: 5,
                        pointHoverRadius: 7
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(5, 150, 105, 0.9)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            padding: 12,
                            cornerRadius: 8,
                            callbacks: {
                                label: (context) => context.parsed.y + ' ekor'
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: '#f1f5f9',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#94a3b8',
                                font: {
                                    size: 10
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                color: '#94a3b8',
                                font: {
                                    size: 10
                                }
                            }
                        }
                    }
                }
            });
        }

        function initChartDesktop() {
            const ctx = document.getElementById('populationChartDesktop');
            if (!ctx) return;

            const gradient = ctx.getContext('2d').createLinearGradient(0, 0, 0, 300);
            gradient.addColorStop(0, 'rgba(5, 150, 105, 0.4)');
            gradient.addColorStop(1, 'rgba(5, 150, 105, 0.0)');

            // Data dari database
            const chartData = @json($populasiIkan);
            const labels = chartData.length > 0 ? chartData.map(item => {
                const date = new Date(item.date);
                return date.toLocaleDateString('id-ID', {
                    day: 'numeric',
                    month: 'short'
                });
            }) : ['1 Mar', '5 Mar', '10 Mar', '15 Mar', '20 Mar', '25 Mar', '30 Mar'];
            const data = chartData.length > 0 ? chartData.map(item => item.total) : [0, 0, 0, 0, 0, 0, 0];

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Populasi Ikan',
                        data: data,
                        borderColor: '#059669',
                        backgroundColor: gradient,
                        borderWidth: 3,
                        tension: 0.4,
                        fill: true,
                        pointBackgroundColor: '#ffffff',
                        pointBorderColor: '#059669',
                        pointBorderWidth: 2,
                        pointRadius: 6,
                        pointHoverRadius: 8
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(5, 150, 105, 0.9)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            padding: 12,
                            cornerRadius: 8
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: '#f1f5f9',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#94a3b8',
                                font: {
                                    size: 11
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                color: '#94a3b8',
                                font: {
                                    size: 11
                                }
                            }
                        }
                    }
                }
            });
        }

        // Initialize charts
        document.addEventListener('DOMContentLoaded', () => {
            initChart();
            initChartDesktop();
        });
    </script>
</body>

</html>