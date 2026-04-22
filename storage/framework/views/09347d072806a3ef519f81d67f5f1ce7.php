<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Detail Ikan - Alfin Aquatic</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
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
        
        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            border-radius: 0.75rem;
            color: #64748b;
            transition: all 0.2s;
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
        
        <!-- ==================== HEADER ==================== -->
        <header class="bg-gradient-to-r from-emerald-600 via-teal-600 to-emerald-700 px-5 pt-12 pb-6 rounded-b-3xl shadow-soft relative overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 bg-cyan-400/20 rounded-full blur-2xl animate-float-delayed"></div>
            
            <div class="relative z-10">
                <!-- Top Bar with Back Button -->
                <div class="flex justify-between items-center mb-4">
                    <button onclick="window.location.href='<?php echo e(route('ikan.index')); ?>'" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center text-white hover:bg-white/30 transition-all btn-press">
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
                        <i class="fas fa-fish text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-white text-lg font-bold">Detail Ikan</h1>
                        <p class="text-emerald-100 text-xs font-medium">Informasi lengkap ikan</p>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- ==================== SCROLLABLE CONTENT ==================== -->
        <main class="px-5 py-6 pb-24 space-y-6 hide-scrollbar overflow-y-auto" style="height: calc(100vh - 100px);">
            
            <!-- ==================== FOTO & STATUS ==================== -->
            <section class="animate-slide-up" style="animation-delay: 0.1s;">
                <div class="glass-card rounded-2xl p-6 shadow-card">
                    <div class="flex flex-col items-center">
                        <!-- Foto Ikan -->
                        <div class="relative mb-4">
                            <div class="w-32 h-32 rounded-2xl bg-gradient-to-br from-orange-400 to-red-500 flex items-center justify-center text-white shadow-xl">
                                <i class="fas fa-fish text-5xl"></i>
                            </div>
                            <span class="absolute -top-2 -right-2 px-3 py-1 rounded-full text-[10px] font-bold <?php echo e($ikan->status_kesehatan == 'Stabil' ? 'bg-emerald-100 text-emerald-700 border border-emerald-200' : ($ikan->status_kesehatan == 'Observasi' ? 'bg-amber-100 text-amber-700 border border-amber-200' : 'bg-red-100 text-red-700 border border-red-200')); ?> shadow-md">
                                <i class="fas fa-<?php echo e($ikan->status_kesehatan == 'Stabil' ? 'check-circle' : ($ikan->status_kesehatan == 'Observasi' ? 'exclamation-circle' : 'triangle-exclamation')); ?> mr-1"></i><?php echo e($ikan->status_kesehatan); ?>

                            </span>
                        </div>

                        <!-- Nama Ikan -->
                        <h2 class="text-2xl font-bold text-slate-800 mb-1"><?php echo e($ikan->jenis_ikan); ?></h2>

                        <!-- Jenis & Ukuran -->
                        <div class="flex items-center gap-3 text-sm text-slate-500 mb-4">
                            <span class="flex items-center gap-1"><i class="fas fa-tag text-emerald-500"></i> <?php echo e($ikan->jenis_ikan); ?></span>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ikan->ukuran): ?>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span class="flex items-center gap-1"><i class="fas fa-ruler text-emerald-500"></i> <?php echo e($ikan->ukuran); ?></span>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        <!-- Info Grid -->
                        <div class="grid grid-cols-3 gap-3 w-full mt-2">
                            <div class="text-center p-3 bg-slate-50 rounded-xl">
                                <p class="text-xs text-slate-500">Harga</p>
                                <p class="font-bold text-emerald-600">Rp <?php echo e(number_format($ikan->harga, 0, ',', '.')); ?></p>
                            </div>
                            <div class="text-center p-3 bg-slate-50 rounded-xl">
                                <p class="text-xs text-slate-500">Stok</p>
                                <p class="font-bold text-slate-800"><?php echo e(number_format($ikan->stok)); ?></p>
                            </div>
                            <div class="text-center p-3 bg-slate-50 rounded-xl">
                                <p class="text-xs text-slate-500">Ukuran</p>
                                <p class="font-bold text-slate-800"><?php echo e($ikan->ukuran ?? '-'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- ==================== INFORMASI KOLAM ==================== -->
            <section class="animate-slide-up" style="animation-delay: 0.15s;">
                <h2 class="text-slate-800 text-sm font-bold flex items-center gap-2 mb-3">
                    <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                    Lokasi Kolam
                </h2>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ikan->kolam): ?>
                <div class="glass-card rounded-2xl p-4 shadow-card card-hover">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white shadow-lg">
                            <i class="fas fa-water text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-slate-800"><?php echo e($ikan->kolam->nama_kolam); ?></h3>
                            <p class="text-xs text-slate-500 mb-1">Kapasitas <?php echo e(number_format($ikan->kolam->kapasitas)); ?> ekor</p>
                            <div class="flex items-center gap-2">
                                <span class="text-xs <?php echo e($ikan->kolam->status == 'aktif' ? 'bg-emerald-50 text-emerald-600' : 'bg-slate-100 text-slate-600'); ?> px-2 py-0.5 rounded-full"><?php echo e(ucfirst($ikan->kolam->status)); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <div class="glass-card rounded-2xl p-4 shadow-card">
                    <div class="flex items-center justify-center gap-3 py-6">
                        <div class="w-14 h-14 rounded-xl bg-slate-100 flex items-center justify-center text-slate-400">
                            <i class="fas fa-water text-2xl"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-600">Belum ada kolam</p>
                            <p class="text-xs text-slate-400">Ikan ini belum dialokasikan ke kolam</p>
                        </div>
                    </div>
                </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </section>
            
            <!-- ==================== DESKRIPSI ==================== -->
            <section class="animate-slide-up" style="animation-delay: 0.2s;">
                <h2 class="text-slate-800 text-sm font-bold flex items-center gap-2 mb-3">
                    <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                    Deskripsi
                </h2>
                
                <div class="glass-card rounded-2xl p-4 shadow-card">
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Oranda Red Cap adalah varian ikan koki dengan ciri khas kepala berwarna merah menyala. 
                        Memiliki tubuh bulat dan sirip yang indah. Sangat populer di kalangan penghobi ikan hias.
                    </p>
                </div>
            </section>
            
            <!-- ==================== TOMBOL AKSI ==================== -->
            <section class="animate-slide-up" style="animation-delay: 0.25s;">

                <!-- Tombol Pindah Kolam -->
                <button onclick="window.location.href='<?php echo e(route('pindah-ikan')); ?>'" class="w-full py-3 rounded-xl bg-gradient-to-r from-teal-500 to-emerald-600 text-white font-semibold shadow-md shadow-teal-500/30 hover:shadow-lg hover:scale-[1.02] transition-all btn-press flex items-center justify-center gap-2">
                    <i class="fas fa-exchange-alt"></i>
                    <span>Pindah Kolam</span>
                </button>

            </section>
            
            <!-- ==================== RIWAYAT STOK ==================== -->
            <section class="animate-slide-up" style="animation-delay: 0.3s;">
                <h2 class="text-slate-800 text-sm font-bold flex items-center gap-2 mb-3">
                    <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                    Riwayat Stok
                </h2>

                <div class="glass-card rounded-2xl p-4 shadow-card">
                    <div class="space-y-3">
                        <!-- Item Pembelian (Stok Awal) -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600">
                                    <i class="fas fa-plus-circle text-xs"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-slate-800">Pembelian</p>
                                    <p class="text-xs text-slate-500"><?php echo e(number_format($ikan->stok)); ?> ekor</p>
                                </div>
                            </div>
                            <span class="text-xs text-slate-400"><?php echo e($ikan->created_at ? $ikan->created_at->diffForHumans() : '-'); ?></span>
                        </div>
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
                
                <a href="<?php echo e(route('ikan.index')); ?>" class="flex flex-col items-center gap-1.5 nav-item nav-item-active transition-all duration-300 btn-press">
                    <div class="nav-icon w-10 h-10 rounded-full flex items-center justify-center">
                        <i class="fas fa-fish text-base"></i>
                    </div>
                    <span class="text-[9px] font-semibold">Ikan</span>
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
                
                <a href="<?php echo e(route('akun')); ?>" class="flex flex-col items-center gap-1.5 nav-item text-slate-400 hover:text-emerald-600 transition-all duration-300 btn-press">
                    <div class="nav-icon w-10 h-10 rounded-full flex items-center justify-center hover:bg-emerald-50">
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
                    
                    <a href="<?php echo e(route('ikan.index')); ?>" class="flex items-center gap-3 px-4 py-3.5 rounded-xl bg-gradient-to-r from-emerald-50 to-teal-50 text-emerald-700 font-semibold transition-all sidebar-link active">
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

                    <a href="<?php echo e(route('pengaturan')); ?>" class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-slate-600 hover:bg-slate-50 transition-all sidebar-link">
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
                <div class="max-w-5xl mx-auto">
                    
                    <!-- Top Header -->
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h1 class="text-2xl font-bold text-slate-800 flex items-center gap-3">
                                <i class="fas fa-fish text-emerald-600"></i>
                                Detail Ikan
                            </h1>
                            <p class="text-slate-500 text-sm mt-1">Informasi lengkap tentang ikan Oranda Red Cap</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <button class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors relative">
                                <i class="fas fa-bell"></i>
                                <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Grid 2 Kolom -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        
                        <!-- Kolom Kiri (Foto & Info Utama) -->
                        <div class="md:col-span-1">
                            <div class="glass-card rounded-2xl p-6 shadow-card sticky top-24">
                                <div class="flex flex-col items-center">
                                    <div class="relative mb-4">
                                        <div class="w-40 h-40 rounded-2xl bg-gradient-to-br from-orange-400 to-red-500 flex items-center justify-center text-white shadow-xl">
                                            <i class="fas fa-fish text-6xl"></i>
                                        </div>
                                        <span class="absolute -top-2 -right-2 px-3 py-1 rounded-full text-xs font-bold <?php echo e($ikan->status_kesehatan == 'Stabil' ? 'bg-emerald-100 text-emerald-700 border border-emerald-200' : ($ikan->status_kesehatan == 'Observasi' ? 'bg-amber-100 text-amber-700 border border-amber-200' : 'bg-red-100 text-red-700 border border-red-200')); ?> shadow-md">
                                            <?php echo e($ikan->status_kesehatan); ?>

                                        </span>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-800"><?php echo e($ikan->jenis_ikan); ?></h2>
                                    <p class="text-emerald-600 font-medium mt-1"><?php echo e($ikan->jenis_ikan); ?><?php echo e($ikan->ukuran ? ' • ' . $ikan->ukuran : ''); ?></p>

                                    <div class="w-full grid grid-cols-3 gap-2 mt-4">
                                        <div class="text-center p-2 bg-slate-50 rounded-lg">
                                            <p class="text-xs text-slate-500">Harga</p>
                                            <p class="font-bold text-emerald-600">Rp <?php echo e(number_format($ikan->harga, 0, ',', '.')); ?></p>
                                        </div>
                                        <div class="text-center p-2 bg-slate-50 rounded-lg">
                                            <p class="text-xs text-slate-500">Stok</p>
                                            <p class="font-bold"><?php echo e(number_format($ikan->stok)); ?></p>
                                        </div>
                                        <div class="text-center p-2 bg-slate-50 rounded-lg">
                                            <p class="text-xs text-slate-500">Ukuran</p>
                                            <p class="font-bold"><?php echo e($ikan->ukuran ?? '-'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Kolom Kanan -->
                        <div class="md:col-span-2 space-y-6">
                            
                            <!-- Lokasi Kolam -->
                            <div class="glass-card rounded-2xl p-6 shadow-card">
                                <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2 mb-4">
                                    <span class="w-1 h-6 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                                    Lokasi Kolam
                                </h2>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ikan->kolam): ?>
                                <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl">
                                    <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white shadow-lg">
                                        <i class="fas fa-water text-2xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-slate-800 text-lg"><?php echo e($ikan->kolam->nama_kolam); ?></h3>
                                        <p class="text-sm text-slate-500 mb-2">Kapasitas <?php echo e(number_format($ikan->kolam->kapasitas)); ?> ekor</p>
                                        <div class="flex items-center gap-3">
                                            <span class="text-xs <?php echo e($ikan->kolam->status == 'aktif' ? 'bg-emerald-50 text-emerald-600' : 'bg-slate-100 text-slate-600'); ?> px-2 py-1 rounded-full"><?php echo e(ucfirst($ikan->kolam->status)); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div class="flex items-center justify-center gap-3 p-6 bg-slate-50 rounded-xl">
                                    <div class="w-16 h-16 rounded-xl bg-slate-100 flex items-center justify-center text-slate-400">
                                        <i class="fas fa-water text-2xl"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-600">Belum ada kolam</p>
                                        <p class="text-xs text-slate-400">Ikan ini belum dialokasikan ke kolam</p>
                                    </div>
                                </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                            
                            <!-- Deskripsi -->
                            <div class="glass-card rounded-2xl p-6 shadow-card">
                                <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2 mb-4">
                                    <span class="w-1 h-6 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                                    Deskripsi
                                </h2>
                                <p class="text-slate-600 leading-relaxed">
                                    Oranda Red Cap adalah varian ikan koki dengan ciri khas kepala berwarna merah menyala. 
                                    Memiliki tubuh bulat dan sirip yang indah. Sangat populer di kalangan penghobi ikan hias.
                                    Ikan ini berasal dari China dan telah dibudidayakan selama puluhan tahun.
                                </p>
                            </div>
                            
                            <!-- Tombol Aksi Desktop -->
                            <div class="space-y-3">
                                <!-- Tombol Pindah Kolam -->
                                <button onclick="window.location.href='<?php echo e(route('pindah-ikan')); ?>'" class="w-full py-3 rounded-xl bg-gradient-to-r from-teal-500 to-emerald-600 text-white font-semibold shadow-md shadow-teal-500/30 hover:shadow-lg hover:scale-[1.02] transition-all btn-press">
                                    <i class="fas fa-exchange-alt mr-2"></i> Pindah Kolam
                                </button>
                            </div>
                            
                            <!-- Riwayat Stok Desktop -->
                            <div class="glass-card rounded-2xl p-6 shadow-card">
                                <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2 mb-4">
                                    <span class="w-1 h-6 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                                    Riwayat Stok
                                </h2>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600">
                                                <i class="fas fa-plus-circle"></i>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-800">Pembelian</p>
                                                <p class="text-sm text-slate-500"><?php echo e(number_format($ikan->stok)); ?> ekor</p>
                                            </div>
                                        </div>
                                        <span class="text-xs text-slate-400"><?php echo e($ikan->created_at ? $ikan->created_at->diffForHumans() : '-'); ?></span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </main>
        </div>
    </div>

</body>
</html>
<?php /**PATH C:\xampp1\htdocs\projek-ikan-koki\resources\views/auth/detail-ikan.blade.php ENDPATH**/ ?>