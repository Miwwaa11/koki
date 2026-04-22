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
                        'elegant': '0 10px 15px -3px rgba(0, 0, 0, 0.05)',
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Google Sans Flex', sans-serif;
            overflow-x: hidden;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            background-color: white;
        }

        .card-hover {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-4px);
        }

        .btn-press {
            transition: all 0.1s ease;
        }

        .btn-press:active {
            transform: scale(0.95);
        }

        .sidebar-width {
            width: 280px;
        }

        .nav-icon {
            transition: all 0.3s ease;
        }

        .nav-item-active .nav-icon {
            background-color: rgba(5, 150, 105, 0.1);
            color: #059669;
        }

        .sidebar-link.active {
            background: linear-gradient(to right, rgba(5, 150, 105, 0.1), rgba(20, 184, 166, 0.1));
            color: #059669;
        }

        .gradient-text {
            background: linear-gradient(135deg, #059669, #0d9488);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .desktop-main {
            margin-left: 280px;
        }

        @media (max-width: 767px) {
            .desktop-main {
                margin-left: 0;
            }
        }

        /* Dark Mode Support */
        .dark .glass-card {
            background: rgba(30, 41, 59, 0.8);
        }
    </style>
</head>
<body class="bg-slate-50">
    <!-- ==================== MOBILE VIEW (< 768px) ==================== -->
    <div class="md:hidden">
        <!-- Top Navigation Mobile -->
        <nav class="bg-white border-b border-slate-200 px-6 py-4 sticky top-0 z-40 shadow-soft">
            <div class="flex justify-between items-center">
                <img src="{{ asset('images/alfin2.png') }}" alt="Logo" class="w-32 h-auto object-contain">
                <div class="flex items-center gap-2">
                    <button class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors">
                        <i class="fas fa-bell"></i>
                    </button>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-red-50 hover:text-red-600 transition-colors">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Main Content Mobile -->
        <main class="pb-24 px-4 pt-4">
            @yield('content')
        </main>
        
        <!-- Bottom Navigation Mobile -->
        <nav class="fixed bottom-0 left-0 right-0 bg-white/95 backdrop-blur-xl border-t border-slate-200 px-6 py-3 pb-6 z-40 max-w-[414px] mx-auto shadow-soft">
            <div class="flex justify-around items-center">
                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}" class="flex flex-col items-center gap-1.5 nav-item text-slate-400 hover:text-emerald-600 transition-all duration-300 btn-press {{ request()->routeIs('dashboard') ? 'nav-item-active' : '' }}">
                    <div class="nav-icon w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300">
                        <i class="fas fa-home text-base"></i>
                    </div>
                    <span class="text-[9px] font-semibold">Dashboard</span>
                </a>
                
                <!-- Ikan -->
                <a href="{{ route('ikan.index') }}" class="flex flex-col items-center gap-1.5 nav-item text-slate-400 hover:text-emerald-600 transition-all duration-300 btn-press {{ request()->routeIs('ikan.*') ? 'nav-item-active' : '' }}">
                    <div class="nav-icon w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:bg-emerald-50">
                        <i class="fas fa-fish text-base"></i>
                    </div>
                    <span class="text-[9px] font-medium">Ikan</span>
                </a>
                
                <!-- Kolam -->
                <a href="{{ route('kolam.index') }}" class="flex flex-col items-center gap-1.5 nav-item text-slate-400 hover:text-emerald-600 transition-all duration-300 btn-press {{ request()->routeIs('kolam.*') ? 'nav-item-active' : '' }}">
                    <div class="nav-icon w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:bg-emerald-50">
                        <i class="fas fa-water text-base"></i>
                    </div>
                    <span class="text-[9px] font-medium">Kolam</span>
                </a>
                
                <!-- Akun -->
                <a href="{{ route('akun') }}" class="flex flex-col items-center gap-1.5 nav-item text-slate-400 hover:text-emerald-600 transition-all duration-300 btn-press {{ request()->routeIs('akun') ? 'nav-item-active' : '' }}">
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
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl {{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-emerald-50 to-teal-50 text-emerald-700 font-semibold' : 'text-slate-600 hover:bg-slate-50' }} transition-all sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="fas fa-home w-5"></i>
                        <span>Dashboard</span>
                    </a>
                    
                    <a href="{{ route('ikan.index') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl {{ request()->routeIs('ikan.*') ? 'bg-gradient-to-r from-emerald-50 to-teal-50 text-emerald-700 font-semibold' : 'text-slate-600 hover:bg-slate-50' }} transition-all sidebar-link {{ request()->routeIs('ikan.*') ? 'active' : '' }}">
                        <i class="fas fa-fish w-5"></i>
                        <span>Data Ikan</span>
                    </a>
                    
                    <a href="{{ route('kolam.index') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl {{ request()->routeIs('kolam.*') ? 'bg-gradient-to-r from-emerald-50 to-teal-50 text-emerald-700 font-semibold' : 'text-slate-600 hover:bg-slate-50' }} transition-all sidebar-link {{ request()->routeIs('kolam.*') ? 'active' : '' }}">
                        <i class="fas fa-water w-5"></i>
                        <span>Data Kolam</span>
                    </a>
                    
                    <a href="{{ route('akun') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl {{ request()->routeIs('akun') ? 'bg-gradient-to-r from-emerald-50 to-teal-50 text-emerald-700 font-semibold' : 'text-slate-600 hover:bg-slate-50' }} transition-all sidebar-link {{ request()->routeIs('akun') ? 'active' : '' }}">
                        <i class="fas fa-user w-5"></i>
                        <span>Akun Admin</span>
                    </a>

                    <a href="{{ route('pengaturan') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl {{ request()->routeIs('pengaturan') ? 'bg-gradient-to-r from-emerald-50 to-teal-50 text-emerald-700 font-semibold' : 'text-slate-600 hover:bg-slate-50' }} transition-all sidebar-link {{ request()->routeIs('pengaturan') ? 'active' : '' }}">
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
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

</body>
</html>
