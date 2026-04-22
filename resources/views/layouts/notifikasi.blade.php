<!DOCTYPE html>
<html lang="id">
<head>
    <script>
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
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Data Kolam - Alfin Aquatic</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
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
                            50: '#ecfdf5', 100: '#d1fae5', 200: '#a7f3d0', 300: '#6ee7b7', 400: '#34d399',
                            500: '#10b981', 600: '#059669', 700: '#047857', 800: '#065f46', 900: '#064e3b',
                        },
                        teal: {
                            50: '#f0fdfa', 100: '#ccfbf1', 200: '#99f6e4', 300: '#5eead4', 400: '#2dd4bf',
                            500: '#14b8a6', 600: '#0d9488', 700: '#0f766e', 800: '#115e59', 900: '#134e4a',
                        },
                        cyan: {
                            50: '#ecfeff', 100: '#cffafe', 200: '#a5f3fc', 300: '#67e8f9', 400: '#22d3ee',
                            500: '#06b6d4', 600: '#059669', 700: '#047857', 800: '#065f46', 900: '#064e3b',
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
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes scaleIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
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

        /* Override Mobile Gradients */
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

        /* Desktop Adjustments */
        .dark aside { 
            background: #16191e !important; 
            border-right: 1px solid rgba(255, 255, 255, 0.05) !important; 
        }
        .dark .sidebar-link:hover { background: #1f242d !important; }
        .dark .sidebar-link.active { background: linear-gradient(to right, #064e3b, #065f46) !important; color: #34d399 !important; }
        .dark .bg-slate-50, .dark .bg-slate-100 { background-color: #1a1d23 !important; }
        .dark .bg-blue-50, .dark .bg-emerald-50, .dark .bg-teal-50, .dark .bg-cyan-50 { background-color: rgba(255,255,255,0.05) !important; }
        .dark header.bg-white\/95 { background-color: rgba(15, 17, 21, 0.95) !important; border-bottom-color: rgba(255,255,255,0.05); }

        /* Text Colors */
        .dark .text-slate-800, .dark .text-slate-700, .dark h1, .dark h2, .dark h3 { color: #f8fafc !important; }
        .dark .text-slate-500 { color: #94a3b8 !important; }
        .dark .text-slate-400 { color: #64748b !important; }
        .dark select, .dark input { background-color: #1f242d !important; color: #f8fafc !important; border: 1px solid rgba(255, 255, 255, 0.1) !important; }

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
        .stat-card-enter:nth-child(1) { animation-delay: 0.1s; }
        .stat-card-enter:nth-child(2) { animation-delay: 0.2s; }
        .stat-card-enter:nth-child(3) { animation-delay: 0.3s; }
        .stat-card-enter:nth-child(4) { animation-delay: 0.4s; }
        
        .pond-card-enter {
            animation: slideUp 0.5s ease-out backwards;
        }
        .pond-card-enter:nth-child(1) { animation-delay: 0.1s; }
        .pond-card-enter:nth-child(2) { animation-delay: 0.15s; }
        .pond-card-enter:nth-child(3) { animation-delay: 0.2s; }
        .pond-card-enter:nth-child(4) { animation-delay: 0.25s; }
        .pond-card-enter:nth-child(5) { animation-delay: 0.3s; }
        
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
    </style>
</head>
<body class="dark:bg-gray-900 dark:text-white">
    
    <!-- ==================== MOBILE VIEW ==================== -->
    <div class="md:hidden max-w-[414px] mx-auto min-h-screen bg-gradient-to-b from-slate-50 to-white relative shadow-2xl overflow-hidden dark:bg-gray-900">
        
        <!-- Header -->
        <header class="bg-gradient-to-r from-emerald-600 via-teal-600 to-emerald-700 px-5 pt-12 pb-6 rounded-b-3xl shadow-soft relative overflow-hidden dark:from-emerald-700 dark:via-teal-700 dark:to-cyan-700">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-3xl dark:bg-emerald-800/20"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 bg-cyan-400/20 rounded-full blur-2xl dark:bg-cyan-800/20"></div>
            
            <div class="relative z-10">
                <div class="flex justify-between items-center mb-4">
                    <button onclick="window.location.href='{{ route('dashboard') }}'" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center text-white hover:bg-white/30 transition-all dark:bg-gray-700 dark:border-gray-600">
                        <i class="fas fa-arrow-left text-sm"></i>
                    </button>
                    <div class="flex items-center gap-2">
                        <button class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center text-white hover:bg-white/30 transition-all relative dark:bg-gray-700 dark:border-gray-600">
                            <i class="fas fa-bell text-sm"></i>
                            <span class="notif-badge"></span>
                        </button>
                    </div>
                </div>
                
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center text-white shadow-lg dark:bg-gray-700 dark:border-gray-600">
                        <i class="fas fa-bell text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-white text-lg font-bold dark:text-gray-200">Notifikasi</h1>
                        <p class="text-emerald-100 text-xs font-medium">Pemberitahuan dan peringatan</p>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Main Content -->
        <main class="px-5 py-6 pb-24 space-y-5">
            
            <!-- Filter Tab -->
            <div class="bg-white rounded-2xl p-1 shadow-card flex dark:bg-gray-800 dark:border-gray-700">
                <button class="flex-1 py-2 rounded-xl bg-emerald-500 text-white text-sm font-semibold">Semua</button>
                <button class="flex-1 py-2 rounded-xl text-slate-600 text-sm font-medium hover:bg-slate-100 transition dark:text-gray-300 dark:hover:bg-gray-700">Belum Dibaca</button>
                <button class="flex-1 py-2 rounded-xl text-slate-600 text-sm font-medium hover:bg-slate-100 transition dark:text-gray-300 dark:hover:bg-gray-700">Penting</button>
            </div>
            
            <!-- Info Ringkasan -->
            <div class="flex justify-between items-center">
                <p class="text-xs text-slate-500 dark:text-slate-400">3 notifikasi belum dibaca</p>
                <button class="text-xs text-emerald-600 font-semibold hover:text-emerald-700 transition dark:text-emerald-400">Tandai Semua Dibaca</button>
            </div>
            
            <!-- List Notifikasi -->
            <div class="space-y-3">
                
                <!-- Notifikasi 1: Stok Menipis (Penting) -->
                <div class="bg-white rounded-2xl p-4 shadow-card border-l-4 border-red-500 relative dark:bg-gray-800 dark:border-red-600">
                    <div class="flex gap-3">
                        <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-red-600 flex-shrink-0 dark:bg-red-700 dark:text-red-300">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <h3 class="font-semibold text-slate-800 dark:text-gray-200">Stok Ikan Menipis</h3>
                                <span class="text-[9px] bg-red-100 text-red-600 px-2 py-0.5 rounded-full dark:bg-red-700 dark:text-red-300">Penting</span>
                            </div>
                            <p class="text-xs text-slate-600 mt-1 dark:text-slate-300">Oranda Red Cap tersisa 5 ekor. Segera lakukan penambahan stok.</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-[9px] text-slate-400">10 menit yang lalu"></span>
                                <span class="w-2 h-2 bg-red-500 rounded-full dark:bg-red-400"></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Notifikasi 2: Kualitas Air (Penting) -->
                <div class="bg-white rounded-2xl p-4 shadow-card border-l-4 border-amber-500 dark:bg-gray-800 dark:border-amber-600">
                    <div class="flex gap-3">
                        <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center text-amber-600 flex-shrink-0 dark:bg-amber-700 dark:text-amber-300">
                            <i class="fas fa-water"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <h3 class="font-semibold text-slate-800 dark:text-gray-200">Peringatan Kualitas Air</h3>
                                <span class="text-[9px] bg-amber-100 text-amber-600 px-2 py-0.5 rounded-full dark:bg-amber-700 dark:text-amber-300">Penting</span>
                            </div>
                            <p class="text-xs text-slate-600 mt-1 dark:text-slate-300">pH air di Kolam A1 mencapai 8.5 (di atas normal). Segera lakukan pengecekan.</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-[9px] text-slate-400">1 jam yang lalu"></span>
                                <span class="w-2 h-2 bg-amber-500 rounded-full dark:bg-amber-400"></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Notifikasi 3: Penjualan -->
                <div class="bg-white rounded-2xl p-4 shadow-card border-l-4 border-emerald-500 dark:bg-gray-800 dark:border-emerald-600">
                    <div class="flex gap-3">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 flex-shrink-0 dark:bg-emerald-700 dark:text-emerald-300">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <h3 class="font-semibold text-slate-800 dark:text-gray-200">Transaksi Penjualan</h3>
                                <span class="text-[9px] bg-emerald-100 text-emerald-600 px-2 py-0.5 rounded-full dark:bg-emerald-700 dark:text-emerald-300">Info</span>
                            </div>
                            <p class="text-xs text-slate-600 mt-1 dark:text-slate-300">Penjualan 5 ekor Oranda Red Cap sebesar Rp 750.000</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-[9px] text-slate-400">3 jam yang lalu"></span>
                                <span class="w-2 h-2 bg-emerald-500 rounded-full dark:bg-emerald-400"></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Notifikasi 4: Ikan Mati -->
                <div class="bg-white rounded-2xl p-4 shadow-card border-l-4 border-slate-500 opacity-75 dark:bg-gray-800 dark:border-slate-600 dark:opacity-75">
                    <div class="flex gap-3">
                        <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 flex-shrink-0 dark:bg-slate-700 dark:text-slate-300">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <h3 class="font-semibold text-slate-800 dark:text-gray-200">Kematian Ikan</h3>
                                <span class="text-[9px] bg-slate-200 text-slate-600 px-2 py-0.5 rounded-full dark:bg-slate-700 dark:text-slate-300">Info</span>
                            </div>
                            <p class="text-xs text-slate-600 mt-1 dark:text-slate-300">2 ekor Ranchu Black di Kolam B2 ditemukan mati.</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-[9px] text-slate-400">Kemarin"></span>
                                <span class="w-2 h-2 bg-slate-400 rounded-full dark:bg-slate-500"></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Notifikasi 5: Stok Bertambah -->
                <div class="bg-white rounded-2xl p-4 shadow-card border-l-4 border-emerald-500 opacity-75 dark:bg-gray-800 dark:border-emerald-600 dark:opacity-75">
                    <div class="flex gap-3">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 flex-shrink-0 dark:bg-emerald-700 dark:text-emerald-300">
                            <i class="fas fa-plus-circle"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <h3 class="font-semibold text-slate-800 dark:text-gray-200">Penambahan Stok</h3>
                                <span class="text-[9px] bg-emerald-100 text-emerald-600 px-2 py-0.5 rounded-full dark:bg-emerald-700 dark:text-emerald-300">Info</span>
                            </div>
                            <p class="text-xs text-slate-600 mt-1 dark:text-slate-300">10 ekor Oranda Red Cap ditambahkan ke Kolam A1.</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-[9px] text-slate-400">2 hari lalu"></span>
                                <span class="w-2 h-2 bg-slate-400 rounded-full dark:bg-slate-500"></span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- Tombol Muat Lagi -->
            <button class="w-full py-3 rounded-xl bg-slate-100 text-slate-600 font-semibold hover:bg-slate-200 transition-all dark:bg-gray-700 dark:text-gray-300">
                <i class="fas fa-sync-alt mr-1"></i> Muat Lebih Banyak
            </button>
            
        </main>
        
        <!-- Bottom Navigation -->
        <nav class="fixed bottom-0 left-0 right-0 bg-white/95 backdrop-blur-xl border-t border-slate-200 px-6 py-3 pb-6 z-40 max-w-[414px] mx-auto shadow-soft dark:bg-gray-900/80 dark:border-gray-700">
            <div class="flex justify-around items-center">
                <a href="{{ route('dashboard') }}" class="flex flex-col items-center gap-1.5 text-slate-400 hover:text-emerald-600 transition-all">
                    <i class="fas fa-home text-base"></i><span class="text-[9px] font-medium">Dashboard</span>
                </a>
                <a href="{{ route('ikan.index') }}" class="flex flex-col items-center gap-1.5 text-slate-400 hover:text-emerald-600 transition-all">
                    <i class="fas fa-fish text-base"></i><span class="text-[9px] font-medium">Ikan</span>
                </a>
                <div class="relative -top-6">
                    <button class="w-14 h-14 rounded-full bg-gradient-to-r from-emerald-500 via-teal-500 to-emerald-600 text-white shadow-lg flex items-center justify-center text-xl">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <a href="{{ route('kolam.index') }}" class="flex flex-col items-center gap-1.5 text-slate-400 hover:text-emerald-600 transition-all">
                    <i class="fas fa-water text-base"></i><span class="text-[9px] font-medium">Kolam</span>
                </a>
                <a href="{{ route('akun') }}" class="flex flex-col items-center gap-1.5 text-slate-400 hover:text-emerald-600 transition-all">
                    <i class="fas fa-user text-base"></i><span class="text-[9px] font-medium">Akun</span>
                </a>
            </div>
        </nav>
    </div>
    
    <!-- ==================== DESKTOP VIEW ==================== -->
    <div class="hidden md:block">
        <div class="flex min-h-screen bg-gradient-to-br from-slate-50 via-white to-emerald-50">
            <!-- Sidebar -->
            <aside class="sidebar-width bg-white border-r border-slate-200 flex flex-col fixed h-full shadow-elegant z-50">
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
                <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
                    <a href="{{ route('dashboard') }}" class="sidebar-link"><i class="fas fa-home w-5"></i><span>Dashboard</span></a>
                    <a href="{{ route('ikan.index') }}" class="sidebar-link"><i class="fas fa-fish w-5"></i><span>Data Ikan</span></a>
                    <a href="{{ route('kolam.index') }}" class="sidebar-link"><i class="fas fa-water w-5"></i><span>Data Kolam</span></a>
                    <a href="{{ route('laporan-stok') }}" class="sidebar-link"><i class="fas fa-chart-pie w-5"></i><span>Laporan Stok</span></a>
                    <a href="{{ route('notifikasi') }}" class="sidebar-link"><i class="fas fa-bell w-5"></i><span>Notifikasi</span></a>
                    <a href="{{ route('akun') }}" class="sidebar-link"><i class="fas fa-user w-5"></i><span>Akun Admin</span></a>
                </nav>
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
                            <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-500 hover:bg-red-100 transition-colors">
                                <i class="fas fa-sign-out-alt text-xs"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </aside>
            
            <!-- Main Content -->
            <main class="desktop-main flex-1 p-8 overflow-y-auto">
                <div class="max-w-4xl mx-auto">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h1 class="text-2xl font-bold text-slate-800 flex items-center gap-3">
                                <i class="fas fa-bell text-emerald-600"></i> Notifikasi
                            </h1>
                            <p class="text-slate-500 text-sm mt-1">Pemberitahuan dan peringatan sistem</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-sm bg-red-50 text-red-600 px-3 py-1 rounded-full">3 belum dibaca</span>
                            <button class="px-4 py-2 rounded-lg bg-emerald-50 text-emerald-600 text-sm font-semibold hover:bg-emerald-100 transition-all">
                                Tandai Semua Dibaca
                            </button>
                            <button class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-emerald-50 transition-colors">
                                <i class="fas fa-bell"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Filter Tabs -->
                    <div class="flex gap-2 mb-6">
                        <button class="px-5 py-2 rounded-full bg-emerald-500 text-white text-sm font-semibold">Semua</button>
                        <button class="px-5 py-2 rounded-full bg-white border border-slate-200 text-slate-600 text-sm font-medium hover:bg-slate-50 transition">Belum Dibaca</button>
                        <button class="px-5 py-2 rounded-full bg-white border border-slate-200 text-slate-600 text-sm font-medium hover:bg-slate-50 transition">Penting</button>
                        <button class="px-5 py-2 rounded-full bg-white border border-slate-200 text-slate-600 text-sm font-medium hover:bg-slate-50 transition">Info</button>
                    </div>
                    
                    <!-- List Notifikasi Desktop -->
                    <div class="space-y-3">
                        
                        <!-- Notifikasi 1 -->
                        <div class="bg-white rounded-2xl p-5 shadow-card border-l-4 border-red-500 flex gap-4 hover:shadow-lg transition">
                            <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center text-red-600 flex-shrink-0">
                                <i class="fas fa-exclamation-triangle text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="font-semibold text-slate-800 text-lg">Stok Ikan Menipis</span>
                                        <span class="ml-3 text-xs bg-red-100 text-red-600 px-2 py-1 rounded-full">Penting</span>
                                    </div>
                                    <span class="text-xs text-slate-400">10 menit lalu</span>
                                </div>
                                <p class="text-slate-600 mt-2">Oranda Red Cap di Kolam A1 tersisa 5 ekor. Segera lakukan penambahan stok untuk menghindari kehabisan.</p>
                                <div class="flex gap-3 mt-3">
                                    <button class="text-sm text-emerald-600 font-semibold hover:text-emerald-700">Lihat Detail</button>
                                    <button class="text-sm text-slate-500 hover:text-slate-700">Tandai Dibaca</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Notifikasi 2 -->
                        <div class="bg-white rounded-2xl p-5 shadow-card border-l-4 border-amber-500 flex gap-4 hover:shadow-lg transition">
                            <div class="w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center text-amber-600 flex-shrink-0">
                                <i class="fas fa-water text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="font-semibold text-slate-800 text-lg">Peringatan Kualitas Air</span>
                                        <span class="ml-3 text-xs bg-amber-100 text-amber-600 px-2 py-1 rounded-full">Penting</span>
                                    </div>
                                    <span class="text-xs text-slate-400">1 jam lalu</span>
                                </div>
                                <p class="text-slate-600 mt-2">pH air di Kolam A1 mencapai 8.5 (di atas normal). Segera lakukan pengecekan dan perbaikan kualitas air.</p>
                                <div class="flex gap-3 mt-3">
                                    <button class="text-sm text-emerald-600 font-semibold hover:text-emerald-700">Lihat Detail</button>
                                    <button class="text-sm text-slate-500 hover:text-slate-700">Tandai Dibaca</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Notifikasi 3 -->
                        <div class="bg-white rounded-2xl p-5 shadow-card border-l-4 border-emerald-500 flex gap-4 hover:shadow-lg transition">
                            <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 flex-shrink-0">
                                <i class="fas fa-shopping-cart text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="font-semibold text-slate-800 text-lg">Transaksi Penjualan</span>
                                        <span class="ml-3 text-xs bg-emerald-100 text-emerald-600 px-2 py-1 rounded-full">Info</span>
                                    </div>
                                    <span class="text-xs text-slate-400">3 jam lalu</span>
                                </div>
                                <p class="text-slate-600 mt-2">Penjualan 5 ekor Oranda Red Cap sebesar Rp 750.000 berhasil dicatat.</p>
                                <div class="flex gap-3 mt-3">
                                    <button class="text-sm text-emerald-600 font-semibold hover:text-emerald-700">Lihat Detail</button>
                                    <button class="text-sm text-slate-500 hover:text-slate-700">Tandai Dibaca</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Notifikasi 4 -->
                        <div class="bg-white rounded-2xl p-5 shadow-card border-l-4 border-slate-500 flex gap-4 hover:shadow-lg transition opacity-75">
                            <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 flex-shrink-0">
                                <i class="fas fa-times-circle text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="font-semibold text-slate-800 text-lg">Kematian Ikan</span>
                                        <span class="ml-3 text-xs bg-slate-200 text-slate-600 px-2 py-1 rounded-full">Info</span>
                                    </div>
                                    <span class="text-xs text-slate-400">Kemarin</span>
                                </div>
                                <p class="text-slate-600 mt-2">2 ekor Ranchu Black di Kolam B2 ditemukan mati. Data telah dicatat.</p>
                                <div class="flex gap-3 mt-3">
                                    <button class="text-sm text-emerald-600 font-semibold hover:text-emerald-700">Lihat Detail</button>
                                    <button class="text-sm text-slate-500 hover:text-slate-700">Tandai Dibaca</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Tombol Muat Lagi -->
                    <div class="text-center mt-6">
                        <button class="px-6 py-3 rounded-xl bg-slate-100 text-slate-600 font-semibold hover:bg-slate-200 transition-all">
                            <i class="fas fa-sync-alt mr-2"></i> Muat Lebih Banyak
                        </button>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
