<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Pengaturan - Alfin Aquatic</title>
    
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
        
        /* Professional Dark Mode Styles (Midnight Deep) */
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
        .dark .bg-slate-50 { background-color: #1a1d23 !important; }
        .dark .bg-slate-100 { background-color: #1f242d !important; }

        /* Text Colors */
        .dark .text-slate-800, .dark .text-slate-700, .dark h1, .dark h2, .dark h3 { color: #f8fafc !important; }
        .dark .text-slate-500 { color: #94a3b8 !important; }
        .dark .text-slate-400 { color: #64748b !important; }
        .dark select { background-color: #1f242d !important; color: #f8fafc !important; border: 1px solid rgba(255, 255, 255, 0.1) !important; }

        /* Modal Adjustment */
        .dark #changePasswordModal .bg-white { background-color: #1a1d23 !important; }
        .dark #changePasswordModal input { background-color: #0f1115 !important; border-color: #2d333b !important; color: white; }

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
        
        .settings-item-enter {
            animation: slideUp 0.5s ease-out backwards;
        }
        .settings-item-enter:nth-child(1) { animation-delay: 0.1s; }
        .settings-item-enter:nth-child(2) { animation-delay: 0.15s; }
        .settings-item-enter:nth-child(3) { animation-delay: 0.2s; }
        .settings-item-enter:nth-child(4) { animation-delay: 0.25s; }
        .settings-item-enter:nth-child(5) { animation-delay: 0.3s; }
        .settings-item-enter:nth-child(6) { animation-delay: 0.35s; }
        .settings-item-enter:nth-child(7) { animation-delay: 0.4s; }
        
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
        
        /* Toggle Switch */
        .toggle-checkbox:checked {
            right: 0;
            border-color: #059669;
        }
        .toggle-checkbox:checked + .toggle-label {
            background-color: #059669;
        }
    </style>
</head>
<body class="text-slate-800 antialiased wave-pattern">
    
    <!-- ==================== MOBILE VIEW (< 768px) ==================== -->
    <div class="md:hidden max-w-[414px] mx-auto min-h-screen bg-gradient-to-b from-slate-50 to-white relative shadow-2xl overflow-hidden">
        
        <!-- ==================== HEADER SECTION ==================== -->
        <header class="bg-gradient-to-r from-emerald-600 via-teal-600 to-emerald-700 px-5 pt-12 pb-6 rounded-b-3xl shadow-soft relative overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 bg-cyan-400/20 rounded-full blur-2xl animate-float-delayed"></div>
            
            <div class="relative z-10">
                <!-- Top Bar with Back Button -->
                <div class="flex justify-between items-center mb-4">
                    <button onclick="window.location.href='<?php echo e(route('dashboard')); ?>'" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center text-white hover:bg-white/30 transition-all btn-press">
                        <i class="fas fa-arrow-left text-sm"></i>
                    </button>
                    <div class="flex items-center gap-2">
                        <button class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center text-white hover:bg-white/30 transition-all btn-press relative">
                            <i class="fas fa-bell text-sm"></i>
                            <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-emerald-600"></span>
                        </button>
                    </div>
                </div>
                
                <!-- Title Section -->
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-gear text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-white text-lg font-bold">Pengaturan</h1>
                        <p class="text-emerald-100 text-xs font-medium">Atur preferensi sistem</p>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- ==================== SCROLLABLE CONTENT ==================== -->
        <main class="px-5 py-6 pb-24 space-y-6 hide-scrollbar overflow-y-auto" style="height: calc(100vh - 100px);">
            
            <!-- ==================== PROFIL SECTION ==================== -->
            <section class="animate-slide-up" style="animation-delay: 0.1s;">
                <h2 class="text-slate-800 text-sm font-bold flex items-center gap-2 mb-3">
                    <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                    Profil
                </h2>
                
                <div class="glass-card rounded-2xl p-4 shadow-card">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white shadow-lg">
                            <i class="fas fa-user text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-slate-800"><?php echo e($user->name); ?></h3>
                            <p class="text-xs text-slate-500"><?php echo e($user->email); ?></p>
                            <p class="text-xs text-emerald-600 mt-1"><?php echo e(ucfirst($user->role ?? 'Administrator')); ?></p>
                        </div>
                        <button class="px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-600 text-xs font-semibold hover:bg-emerald-100 transition-colors btn-press">
                            Edit
                        </button>
                    </div>
                </div>
            </section>
            
            <!-- ==================== PENGATURAN AKUN ==================== -->
            <section class="animate-slide-up" style="animation-delay: 0.15s;">
                <h2 class="text-slate-800 text-sm font-bold flex items-center gap-2 mb-3">
                    <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                    Pengaturan Akun
                </h2>
                
                <div class="glass-card rounded-2xl shadow-card divide-y divide-slate-100">
                    <!-- Ubah Password -->
                    <div onclick="document.getElementById('changePasswordModal').classList.remove('hidden')" class="flex items-center gap-4 p-4 settings-item-enter btn-press cursor-pointer hover:bg-slate-50 transition-colors">
                        <div class="w-10 h-10 rounded-xl bg-teal-100 flex items-center justify-center text-teal-600">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-slate-800">Ubah Password</h3>
                            <p class="text-xs text-slate-500">Perbarui kata sandi akun Anda</p>
                        </div>
                        <i class="fas fa-chevron-right text-slate-400"></i>
                    </div>

                    <!-- Email & Notifikasi -->
                    <div class="flex items-center gap-4 p-4 settings-item-enter btn-press cursor-pointer hover:bg-slate-50 transition-colors">
                        <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-slate-800">Email & Notifikasi</h3>
                            <p class="text-xs text-slate-500">Kelola notifikasi email</p>
                        </div>
                        <i class="fas fa-chevron-right text-slate-400"></i>
                    </div>

                    <!-- Privasi & Keamanan -->
                    <div class="flex items-center gap-4 p-4 settings-item-enter btn-press cursor-pointer hover:bg-slate-50 transition-colors">
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-slate-800">Privasi & Keamanan</h3>
                            <p class="text-xs text-slate-500">Atur privasi dan keamanan akun</p>
                        </div>
                        <i class="fas fa-chevron-right text-slate-400"></i>
                    </div>
                </div>
            </section>
            
            <!-- ==================== PENGATURAN APLIKASI ==================== -->
            <section class="animate-slide-up" style="animation-delay: 0.2s;">
                <h2 class="text-slate-800 text-sm font-bold flex items-center gap-2 mb-3">
                    <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                    Pengaturan Aplikasi
                </h2>
                
                <div class="glass-card rounded-2xl shadow-card divide-y divide-slate-100">
                    <!-- Tema Aplikasi -->
                    <div class="flex items-center gap-4 p-4 settings-item-enter">
                        <div class="w-10 h-10 rounded-xl bg-purple-100 flex items-center justify-center text-purple-600">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-slate-800">Tema Aplikasi</h3>
                            <p class="text-xs text-slate-500">Pilih tema tampilan</p>
                        </div>
                        <select id="themeSelect" class="text-xs bg-slate-100 border-none rounded-lg px-2 py-1.5 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                            <option>Terang</option>
                            <option>Gelap</option>
                            <option>Sistem</option>
                        </select>
                    </div>

                    <!-- Bahasa -->
                    <div class="flex items-center gap-4 p-4 settings-item-enter">
                        <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600">
                            <i class="fas fa-language"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-slate-800">Bahasa</h3>
                            <p class="text-xs text-slate-500">Pilih bahasa aplikasi</p>
                        </div>
                        <select id="langSelect" class="text-xs bg-slate-100 border-none rounded-lg px-2 py-1.5 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                            <option>Indonesia</option>
                            <option>English</option>
                        </select>
                    </div>
                    
                    <!-- Ukuran Font -->
                    <div class="flex items-center gap-4 p-4 settings-item-enter">
                        <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600">
                            <i class="fas fa-text-height"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-slate-800">Ukuran Font</h3>
                            <p class="text-xs text-slate-500">Sesuaikan ukuran teks</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <button id="fontDecrease" class="w-8 h-8 rounded-lg bg-slate-100 text-slate-600 hover:bg-emerald-100 hover:text-emerald-600 transition-colors btn-press">A-</button>
                            <span id="fontSizeDisplay" class="text-sm font-medium">100%</span>
                            <button id="fontIncrease" class="w-8 h-8 rounded-lg bg-slate-100 text-slate-600 hover:bg-emerald-100 hover:text-emerald-600 transition-colors btn-press">A+</button>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- ==================== INFORMASI APLIKASI ==================== -->
            <section class="animate-slide-up" style="animation-delay: 0.3s;">
                <h2 class="text-slate-800 text-sm font-bold flex items-center gap-2 mb-3">
                    <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                    Informasi Aplikasi
                </h2>
                
                <div class="glass-card rounded-2xl p-4 shadow-card">
                    <div class="flex items-center gap-3 mb-4 pb-4 border-b border-slate-100">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white">
                            <i class="fas fa-fish text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-800">Alfin Aquatic</h3>
                            <p class="text-xs text-slate-500">Sistem Manajemen Ikan Koi</p>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-500">Versi Aplikasi</span>
                            <span class="font-semibold text-slate-800">v2.5.0</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-500">Terakhir Update</span>
                            <span class="font-semibold text-slate-800">17 Mar 2026</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-500">Lisensi</span>
                            <span class="font-semibold text-emerald-600">Premium</span>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- ==================== PUSAT BANTUAN ==================== -->
            <section class="animate-slide-up" style="animation-delay: 0.35s;">
                <h2 class="text-slate-800 text-sm font-bold flex items-center gap-2 mb-3">
                    <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                    Pusat Bantuan
                </h2>
                
                <div class="glass-card rounded-2xl shadow-card divide-y divide-slate-100">
                    <!-- FAQ -->
                    <div class="flex items-center gap-4 p-4 settings-item-enter btn-press cursor-pointer hover:bg-slate-50 transition-colors">
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-slate-800">FAQ</h3>
                            <p class="text-xs text-slate-500">Pertanyaan yang sering diajukan</p>
                        </div>
                        <i class="fas fa-chevron-right text-slate-400"></i>
                    </div>
                    
                    <!-- Hubungi Kami -->
                    <div class="flex items-center gap-4 p-4 settings-item-enter btn-press cursor-pointer hover:bg-slate-50 transition-colors">
                        <div class="w-10 h-10 rounded-xl bg-teal-100 flex items-center justify-center text-teal-600">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-slate-800">Hubungi Kami</h3>
                            <p class="text-xs text-slate-500">Dapatkan bantuan dari tim support</p>
                        </div>
                        <i class="fas fa-chevron-right text-slate-400"></i>
                    </div>
                    
                    <!-- Tutorial -->
                    <div class="flex items-center gap-4 p-4 settings-item-enter btn-press cursor-pointer hover:bg-slate-50 transition-colors">
                        <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600">
                            <i class="fas fa-play-circle"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-slate-800">Tutorial</h3>
                            <p class="text-xs text-slate-500">Panduan penggunaan aplikasi</p>
                        </div>
                        <i class="fas fa-chevron-right text-slate-400"></i>
                    </div>
                </div>
            </section>

        </main>
        
        <!-- ==================== BOTTOM NAVIGATION ==================== -->
        <nav class="fixed bottom-0 left-0 right-0 bg-white/95 backdrop-blur-xl border-t border-slate-200 px-6 py-3 pb-6 z-40 max-w-[414px] mx-auto shadow-soft">
            <div class="flex justify-around items-center">
                <a href="<?php echo e(route('dashboard')); ?>" class="flex flex-col items-center gap-1.5 nav-item text-slate-400 hover:text-emerald-600 transition-all duration-300 btn-press">
                    <div class="nav-icon w-10 h-10 rounded-full flex items-center justify-center hover:bg-emerald-50">
                        <i class="fas fa-home text-base"></i>
                    </div>
                    <span class="text-[9px] font-medium">Dashboard</span>
                </a>
                
                <a href="<?php echo e(route('ikan.index')); ?>" class="flex flex-col items-center gap-1.5 nav-item text-slate-400 hover:text-emerald-600 transition-all duration-300 btn-press">
                    <div class="nav-icon w-10 h-10 rounded-full flex items-center justify-center hover:bg-emerald-50">
                        <i class="fas fa-fish text-base"></i>
                    </div>
                    <span class="text-[9px] font-medium">Ikan</span>
                </a>
                
                <div class="relative -top-6">
                    <button class="w-14 h-14 rounded-full bg-gradient-to-r from-emerald-500 via-teal-500 to-emerald-600 text-white shadow-lg shadow-emerald-500/40 flex items-center justify-center text-xl btn-press hover:scale-110 hover:shadow-floating hover:rotate-90 transition-all duration-300">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                
                <a href="<?php echo e(route('kolam.index')); ?>" class="flex flex-col items-center gap-1.5 nav-item text-slate-400 hover:text-emerald-600 transition-all duration-300 btn-press">
                    <div class="nav-icon w-10 h-10 rounded-full flex items-center justify-center hover:bg-emerald-50">
                        <i class="fas fa-water text-base"></i>
                    </div>
                    <span class="text-[9px] font-medium">Kolam</span>
                </a>
                
                <a href="<?php echo e(route('akun')); ?>" class="flex flex-col items-center gap-1.5 nav-item nav-item-active transition-all duration-300 btn-press">
                    <div class="nav-icon w-10 h-10 rounded-full flex items-center justify-center bg-gradient-to-br from-emerald-100 to-emerald-200">
                        <i class="fas fa-user text-base text-emerald-600"></i>
                    </div>
                    <span class="text-[9px] font-semibold text-emerald-600">Akun</span>
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
                        <a href="<?php echo e(url('/')); ?>" class="w-9 h-9 rounded-lg bg-emerald-100 flex items-center justify-center text-emerald-600 hover:bg-emerald-200 hover:text-emerald-700 transition-colors flex-shrink-0">
                            <i class="fas fa-arrow-left text-sm"></i>
                        </a>
                        <div class="flex-1 min-w-0">
                            <img src="<?php echo e(asset('images/alfin2.png')); ?>" alt="Logo" class="w-36 h-auto object-contain">
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
                    <a href="<?php echo e(route('dashboard')); ?>" class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all sidebar-link">
                        <i class="fas fa-home w-5"></i>
                        <span>Dashboard</span>
                    </a>
                    
                    <a href="<?php echo e(route('ikan.index')); ?>" class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all sidebar-link">
                        <i class="fas fa-fish w-5"></i>
                        <span>Data Ikan</span>
                    </a>
                    
                    <a href="<?php echo e(route('kolam.index')); ?>" class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all sidebar-link">
                        <i class="fas fa-water w-5"></i>
                        <span>Data Kolam</span>
                    </a>
                    
                    <a href="<?php echo e(route('akun')); ?>" class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all sidebar-link">
                        <i class="fas fa-user w-5"></i>
                        <span>Akun Admin</span>
                    </a>

                    <a href="<?php echo e(route('pengaturan')); ?>" class="flex items-center gap-3 px-4 py-3.5 rounded-xl bg-gradient-to-r from-emerald-50 to-teal-50 text-emerald-700 font-semibold transition-all sidebar-link active">
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
                            <p class="text-sm font-semibold text-slate-800"><?php echo e(Auth::user()->name); ?></p>
                            <p class="text-[10px] text-slate-500"><?php echo e(Auth::user()->email); ?></p>
                        </div>
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-500 flex items-center justify-center hover:bg-red-100 transition-colors">
                                <i class="fas fa-sign-out-alt text-xs"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </aside>
            
            <!-- Main Content Desktop -->
            <main class="desktop-main flex-1 p-8 overflow-y-auto">
                <div class="max-w-4xl mx-auto space-y-6">
                    
                    <!-- Top Header -->
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h1 class="text-2xl font-bold text-slate-800 flex items-center gap-3">
                                <i class="fas fa-gear text-emerald-600"></i>
                                Pengaturan
                            </h1>
                            <p class="text-slate-500 text-sm mt-1">Atur preferensi sistem dan aplikasi</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <button class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors relative">
                                <i class="fas fa-bell"></i>
                                <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Grid 2 Kolom untuk Desktop -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <!-- Kolom Kiri -->
                        <div class="space-y-6">
                            
                            <!-- Profil Section -->
                            <div class="glass-card rounded-2xl p-6 shadow-card">
                                <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2 mb-4">
                                    <span class="w-1 h-6 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                                    Profil
                                </h2>
                                <div class="flex items-center gap-4">
                                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white shadow-lg">
                                        <i class="fas fa-user text-3xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-slate-800 text-lg">Admin Alfin</h3>
                                        <p class="text-sm text-slate-500">admin@alfinaquatic.com</p>
                                        <p class="text-sm text-emerald-600 mt-1">Administrator</p>
                                    </div>
                                    <button class="px-4 py-2 rounded-lg bg-emerald-50 text-emerald-600 text-sm font-semibold hover:bg-emerald-100 transition-colors btn-press">
                                        Edit
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Pengaturan Akun -->
                            <div class="glass-card rounded-2xl p-6 shadow-card">
                                <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2 mb-4">
                                    <span class="w-1 h-6 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                                    Pengaturan Akun
                                </h2>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-50 transition-colors btn-press cursor-pointer">
                                        <div class="w-10 h-10 rounded-xl bg-teal-100 flex items-center justify-center text-teal-600">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="font-semibold text-slate-800">Ubah Password</h3>
                                            <p class="text-xs text-slate-500">Perbarui kata sandi akun Anda</p>
                                        </div>
                                        <i class="fas fa-chevron-right text-slate-400"></i>
                                    </div>
                                    <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-50 transition-colors btn-press cursor-pointer">
                                        <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="font-semibold text-slate-800">Email & Notifikasi</h3>
                                            <p class="text-xs text-slate-500">Kelola notifikasi email</p>
                                        </div>
                                        <i class="fas fa-chevron-right text-slate-400"></i>
                                    </div>
                                    <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-50 transition-colors btn-press cursor-pointer">
                                        <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="font-semibold text-slate-800">Privasi & Keamanan</h3>
                                            <p class="text-xs text-slate-500">Atur privasi dan keamanan akun</p>
                                        </div>
                                        <i class="fas fa-chevron-right text-slate-400"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Informasi Aplikasi -->
                            <div class="glass-card rounded-2xl p-6 shadow-card">
                                <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2 mb-4">
                                    <span class="w-1 h-6 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                                    Informasi Aplikasi
                                </h2>
                                <div class="flex items-center gap-3 mb-4 pb-4 border-b border-slate-100">
                                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white">
                                        <i class="fas fa-fish text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-slate-800">Alfin Aquatic</h3>
                                        <p class="text-xs text-slate-500">Sistem Manajemen Ikan Koi</p>
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-slate-500">Versi Aplikasi</span>
                                        <span class="font-semibold text-slate-800">v2.5.0</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-slate-500">Terakhir Update</span>
                                        <span class="font-semibold text-slate-800">17 Mar 2026</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-slate-500">Lisensi</span>
                                        <span class="font-semibold text-emerald-600">Premium</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <!-- Kolom Kanan -->
                        <div class="space-y-6">
                            
                            <!-- Pengaturan Aplikasi -->
                            <div class="glass-card rounded-2xl p-6 shadow-card">
                                <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2 mb-4">
                                    <span class="w-1 h-6 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                                    Pengaturan Aplikasi
                                </h2>
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-xl bg-purple-100 flex items-center justify-center text-purple-600">
                                                <i class="fas fa-palette"></i>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-800">Tema Aplikasi</p>
                                                <p class="text-xs text-slate-500">Pilih tema tampilan</p>
                                            </div>
                                        </div>
                                        <select id="themeSelectDesktop" class="text-sm bg-slate-100 border-none rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                                            <option>Terang</option>
                                            <option>Gelap</option>
                                            <option>Sistem</option>
                                        </select>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600">
                                                <i class="fas fa-language"></i>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-800">Bahasa</p>
                                                <p class="text-xs text-slate-500">Pilih bahasa aplikasi</p>
                                            </div>
                                        </div>
                                        <select id="langSelectDesktop" class="text-sm bg-slate-100 border-none rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                                            <option>Indonesia</option>
                                            <option>English</option>
                                        </select>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600">
                                                <i class="fas fa-text-height"></i>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-800">Ukuran Font</p>
                                                <p class="text-xs text-slate-500">Sesuaikan ukuran teks</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <button id="fontDecreaseDesktop" class="w-8 h-8 rounded-lg bg-slate-100 text-slate-600 hover:bg-emerald-100 hover:text-emerald-600 transition-colors btn-press">A-</button>
                                            <span id="fontSizeDisplayDesktop" class="text-sm font-medium">100%</span>
                                            <button id="fontIncreaseDesktop" class="w-8 h-8 rounded-lg bg-slate-100 text-slate-600 hover:bg-emerald-100 hover:text-emerald-600 transition-colors btn-press">A+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Pusat Bantuan -->
                            <div class="glass-card rounded-2xl p-6 shadow-card">
                                <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2 mb-4">
                                    <span class="w-1 h-6 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                                    Pusat Bantuan
                                </h2>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-50 transition-colors btn-press cursor-pointer">
                                        <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                                            <i class="fas fa-question-circle"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="font-semibold text-slate-800">FAQ</h3>
                                            <p class="text-xs text-slate-500">Pertanyaan yang sering diajukan</p>
                                        </div>
                                        <i class="fas fa-chevron-right text-slate-400"></i>
                                    </div>
                                    <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-50 transition-colors btn-press cursor-pointer">
                                        <div class="w-10 h-10 rounded-xl bg-teal-100 flex items-center justify-center text-teal-600">
                                            <i class="fas fa-headset"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="font-semibold text-slate-800">Hubungi Kami</h3>
                                            <p class="text-xs text-slate-500">Dapatkan bantuan dari tim support</p>
                                        </div>
                                        <i class="fas fa-chevron-right text-slate-400"></i>
                                    </div>
                                    <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-50 transition-colors btn-press cursor-pointer">
                                        <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600">
                                            <i class="fas fa-play-circle"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="font-semibold text-slate-800">Tutorial</h3>
                                            <p class="text-xs text-slate-500">Panduan penggunaan aplikasi</p>
                                        </div>
                                        <i class="fas fa-chevron-right text-slate-400"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
    
    <!-- Script untuk pengaturan fungsional -->
    <script>
        // Fungsi untuk menerapkan Tema
        function applyTheme(theme) {
            const html = document.documentElement;
            if (theme === 'Gelap') {
                html.classList.add('dark');
                document.body.classList.add('dark-bg'); // Tambahan jika perlu bg khusus
            } else if (theme === 'Terang') {
                html.classList.remove('dark');
            } else { // Sistem
                if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    html.classList.add('dark');
                } else {
                    html.classList.remove('dark');
                }
            }
        }

        // Font size functionality for both mobile and desktop
        let fontSize = parseInt(localStorage.getItem('fontSize')) || 100;
        const fontSizeMobile = document.getElementById('fontSizeDisplay');
        const fontSizeDesktop = document.getElementById('fontSizeDisplayDesktop');
        
        function updateFontSize(size) {
            if (fontSizeMobile) fontSizeMobile.textContent = size + '%';
            if (fontSizeDesktop) fontSizeDesktop.textContent = size + '%';
            document.body.style.fontSize = size + '%';
            localStorage.setItem('fontSize', size);
        }
        
        updateFontSize(fontSize);
        
        ['fontDecrease', 'fontDecreaseDesktop'].forEach(id => {
            const btn = document.getElementById(id);
            if (btn) btn.addEventListener('click', () => {
                if (fontSize > 80) { fontSize -= 10; updateFontSize(fontSize); }
            });
        });
        
        ['fontIncrease', 'fontIncreaseDesktop'].forEach(id => {
            const btn = document.getElementById(id);
            if (btn) btn.addEventListener('click', () => {
                if (fontSize < 150) { fontSize += 10; updateFontSize(fontSize); }
            });
        });

        // Theme functionality
        const themeSelect = document.getElementById('themeSelect');
        const themeSelectDesktop = document.getElementById('themeSelectDesktop');
        const savedTheme = localStorage.getItem('theme') || 'Terang';
        
        if (themeSelect) themeSelect.value = savedTheme;
        if (themeSelectDesktop) themeSelectDesktop.value = savedTheme;
        applyTheme(savedTheme);
        
        [themeSelect, themeSelectDesktop].forEach(select => {
            if (select) select.addEventListener('change', function() {
                localStorage.setItem('theme', this.value);
                if (themeSelect) themeSelect.value = this.value;
                if (themeSelectDesktop) themeSelectDesktop.value = this.value;
                applyTheme(this.value);
            });
        });

        // Language functionality (Simple Reload for now)
        const langSelect = document.getElementById('langSelect');
        const langSelectDesktop = document.getElementById('langSelectDesktop');
        const savedLang = localStorage.getItem('language') || 'Indonesia';
        
        if (langSelect) langSelect.value = savedLang;
        if (langSelectDesktop) langSelectDesktop.value = savedLang;
        
        [langSelect, langSelectDesktop].forEach(select => {
            if (select) select.addEventListener('change', function() {
                localStorage.setItem('language', this.value);
                if (langSelect) langSelect.value = this.value;
                if (langSelectDesktop) langSelectDesktop.value = this.value;
                
                // Alert simulasi fungsionalitas bahasa
                alert('Bahasa diubah ke ' + this.value + '. Halaman akan memuat ulang.');
                location.reload(); 
            });
        });
    </script>

    <!-- ==================== CHANGE PASSWORD MODAL ==================== -->
    <div id="changePasswordModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
        <div class="h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md overflow-hidden animate-scale-in">
            <!-- Header -->
            <div class="bg-gradient-to-r from-emerald-600 to-teal-600 px-6 py-4 flex items-center justify-between">
                <h3 class="text-lg font-bold text-white flex items-center gap-2">
                    <i class="fas fa-lock"></i> Ubah Password
                </h3>
                <button onclick="document.getElementById('changePasswordModal').classList.add('hidden')" class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center text-white hover:bg-white/30 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Form -->
            <form action="<?php echo e(route('login')); ?>" method="POST" class="p-6 space-y-4">
                <?php echo csrf_field(); ?>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Password Saat Ini</label>
                    <input type="password" name="current_password" required
                           class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 transition-all">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Password Baru</label>
                    <input type="password" name="new_password" required minlength="8"
                           class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 transition-all">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Konfirmasi Password</label>
                    <input type="password" name="new_password_confirmation" required minlength="8"
                           class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 transition-all">
                </div>
                <div class="flex gap-3 pt-2">
                    <button type="button" onclick="document.getElementById('changePasswordModal').classList.add('hidden')"
                            class="flex-1 py-3 rounded-xl bg-slate-100 text-slate-600 font-semibold hover:bg-slate-200 transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                            class="flex-1 py-3 rounded-xl bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-semibold shadow-md hover:shadow-lg transition-all">
                        <i class="fas fa-save mr-1"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
        </div>
    </div>

</body>
</html>
<?php /**PATH C:\xampp1\htdocs\projek-ikan-koki\resources\views/auth/pengaturan.blade.php ENDPATH**/ ?>