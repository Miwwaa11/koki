<!DOCTYPE html>
<html lang="id">
<head>
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme') || 'Terang';
            if (savedTheme === 'Gelap' || (savedTheme === 'Sistem' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
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
<body class="text-slate-800 antialiased wave-pattern">
    
    <!-- ==================== MOBILE VIEW (< 768px) ==================== -->
    <div class="md:hidden max-w-[414px] mx-auto min-h-screen bg-gradient-to-b from-slate-50 to-white relative shadow-2xl overflow-hidden">
        
        <!-- ==================== HEADER ==================== -->
        <header class="bg-gradient-to-r from-emerald-600 via-teal-600 to-emerald-700 px-5 pt-12 pb-6 rounded-b-3xl shadow-soft relative overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 bg-cyan-400/20 rounded-full blur-2xl animate-float-delayed"></div>
            
            <div class="relative z-10">
                <!-- Top Bar with Back Button (optional) -->
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
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-water text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-white text-lg font-bold">Data Kolam</h1>
                        <p class="text-emerald-100 text-xs font-medium">Monitoring & manajemen kolam</p>
                    </div>
                </div>
                
                <!-- Search Bar -->
                <div class="relative">
                    <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-emerald-200"></i>
                    <input type="text" 
                           placeholder="Cari kolam..." 
                           class="w-full bg-white/20 backdrop-blur-md border border-white/30 rounded-2xl py-3.5 pl-12 pr-4 text-white placeholder-emerald-200/70 focus:outline-none focus:bg-white/30 focus:border-white/50 transition-all font-medium">
                </div>
            </div>
        </header>
        
        <!-- ==================== SCROLLABLE CONTENT ==================== -->
        <main class="px-5 py-6 pb-24 space-y-6 hide-scrollbar overflow-y-auto" style="height: calc(100vh - 100px);">
            
            <!-- ==================== RINGKASAN DATA KOLAM (GRID 2 KOLOM) ==================== -->
            <section class="animate-slide-up" style="animation-delay: 0.1s;">
                <h2 class="text-slate-800 text-sm font-bold flex items-center gap-2 mb-3">
                    <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                    Ringkasan Kolam
                </h2>

                <div class="grid grid-cols-2 gap-3">
                    <!-- Card 1: Total Kolam -->
                    <div class="glass-card rounded-2xl p-4 shadow-card border-l-4 border-emerald-500 card-hover stat-card-enter btn-press cursor-pointer">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-water text-sm"></i>
                            </div>
                            <span class="text-[10px] font-semibold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full">Total</span>
                        </div>
                        <p class="text-[9px] text-slate-500 font-medium uppercase tracking-wider mb-1">Total Kolam</p>
                        <p class="text-2xl font-extrabold gradient-text"><?php echo e($kolams->count()); ?></p>
                        <p class="text-[8px] text-slate-400 mt-1">unit</p>
                    </div>

                    <!-- Card 2: Kolam Aktif -->
                    <div class="glass-card rounded-2xl p-4 shadow-card border-l-4 border-teal-500 card-hover stat-card-enter btn-press cursor-pointer">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-teal-400 to-teal-600 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-check-circle text-sm"></i>
                            </div>
                            <span class="text-[10px] font-semibold text-teal-600 bg-teal-50 px-2 py-1 rounded-full">Aktif</span>
                        </div>
                        <p class="text-[9px] text-slate-500 font-medium uppercase tracking-wider mb-1">Kolam Aktif</p>
                        <p class="text-2xl font-extrabold gradient-text"><?php echo e($kolams->where('status', 'aktif')->count()); ?></p>
                        <p class="text-[8px] text-slate-400 mt-1">unit</p>
                    </div>

                    <!-- Card 3: Kapasitas Terpakai -->
                    <div class="glass-card rounded-2xl p-4 shadow-card border-l-4 border-cyan-500 card-hover stat-card-enter btn-press cursor-pointer">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-cyan-400 to-cyan-600 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-chart-pie text-sm"></i>
                            </div>
                            <span class="text-[10px] font-semibold text-cyan-600 bg-cyan-50 px-2 py-1 rounded-full"><?php echo e($kolams->sum('kapasitas') > 0 ? round(($kolams->sum('total_ikan') / $kolams->sum('kapasitas')) * 100) : 0); ?>%</span>
                        </div>
                        <p class="text-[9px] text-slate-500 font-medium uppercase tracking-wider mb-1">Kapasitas</p>
                        <p class="text-2xl font-extrabold gradient-text"><?php echo e($kolams->sum('total_ikan')); ?></p>
                        <p class="text-[8px] text-slate-400 mt-1">ekor / <?php echo e($kolams->sum('kapasitas')); ?></p>
                    </div>

                    <!-- Card 4: Perlu Perhatian -->
                    <div class="glass-card rounded-2xl p-4 shadow-card border-l-4 border-amber-500 card-hover stat-card-enter btn-press cursor-pointer">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-exclamation-triangle text-sm"></i>
                            </div>
                            <span class="text-[10px] font-semibold text-amber-600 bg-amber-50 px-2 py-1 rounded-full"><?php echo e($kolams->where('status', 'nonaktif')->count()); ?></span>
                        </div>
                        <p class="text-[9px] text-slate-500 font-medium uppercase tracking-wider mb-1">Perlu Perhatian</p>
                        <p class="text-2xl font-extrabold gradient-text"><?php echo e($kolams->where('status', 'nonaktif')->count()); ?></p>
                        <p class="text-[8px] text-slate-400 mt-1">kolam</p>
                    </div>
                </div>
            </section>

            <!-- ==================== LIST DATA KOLAM ==================== -->
            <section class="animate-slide-up" style="animation-delay: 0.2s;">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-slate-800 text-sm font-bold flex items-center gap-2">
                        <span class="w-1 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                        Daftar Kolam
                    </h2>
                    <span class="text-[10px] text-slate-400 font-medium bg-slate-100 px-2 py-1 rounded-md"><?php echo e($kolams->where('status', 'aktif')->count()); ?> Aktif</span>
                </div>

                <div class="space-y-3">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $kolams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kolam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <!-- Pond Card: <?php echo e($kolam->nama_kolam); ?> -->
                    <div class="glass-card rounded-2xl p-4 shadow-card card-hover btn-press pond-card-enter border-l-4 <?php echo e($kolam->status == 'aktif' ? 'border-emerald-500' : 'border-slate-300 opacity-80'); ?>">
                        <div class="flex items-start justify-between mb-2">
                            <div>
                                <h3 class="font-bold text-slate-800 text-base"><?php echo e($kolam->nama_kolam); ?></h3>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="px-2.5 py-1 rounded-full text-[8px] font-bold <?php echo e($kolam->status == 'aktif' ? 'bg-emerald-100 text-emerald-700 border border-emerald-200' : 'bg-slate-200 text-slate-600 border border-slate-300'); ?> flex items-center gap-1">
                                        <i class="fas fa-circle text-[6px]"></i> <?php echo e(ucfirst($kolam->status)); ?>

                                    </span>
                                    <span class="text-[9px] text-slate-500 flex items-center gap-1">
                                        <i class="fas fa-fish text-emerald-500"></i> <?php echo e($kolam->total_ikan ?? 0); ?> ekor
                                    </span>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-[9px] text-slate-500 block">Kapasitas</span>
                                <span class="text-xs font-bold text-slate-800"><?php echo e($kolam->total_ikan ?? 0); ?>/<?php echo e($kolam->kapasitas); ?></span>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 text-[10px] text-slate-500 mb-4">
                            <span class="flex items-center gap-1"><i class="fas fa-map-marker-alt text-emerald-500"></i> <?php echo e($kolam->lokasi ?? 'Umum'); ?></span>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($kolam->ukuran): ?>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span class="flex items-center gap-1"><i class="fas fa-ruler text-emerald-500"></i> <?php echo e($kolam->ukuran); ?></span>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($kolam->suhu !== null): ?>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span class="flex items-center gap-1"><i class="fas fa-temperature-half text-red-500"></i> <?php echo e(number_format($kolam->suhu, 1)); ?>°C</span>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        <!-- Progress Bar -->
                        <div class="w-full h-1.5 bg-slate-100 rounded-full mb-4">
                            <div class="h-1.5 <?php echo e($kolam->status == 'aktif' ? 'bg-emerald-500' : 'bg-slate-300'); ?> rounded-full" style="width: <?php echo e($kolam->kapasitas > 0 ? (($kolam->total_ikan ?? 0) / $kolam->kapasitas) * 100 : 0); ?>%"></div>
                        </div>

                        <!-- Actions -->
                        <div class="flex gap-2">
                            <a href="<?php echo e(route('kolam.show', $kolam->id)); ?>" class="flex-1 py-2.5 rounded-xl bg-slate-50 text-slate-600 text-xs font-bold hover:bg-emerald-50 hover:text-emerald-600 transition-colors btn-press text-center">
                                <i class="fas fa-eye mr-1"></i> Lihat Detail
                            </a>
                            <a href="<?php echo e(route('kolam.edit', $kolam->id)); ?>" class="flex-1 py-2.5 rounded-xl bg-slate-50 text-slate-600 text-xs font-bold hover:bg-teal-50 hover:text-teal-600 transition-colors btn-press text-center">
                                <i class="fas fa-edit mr-1"></i> Edit
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="text-center py-12">
                        <i class="fas fa-inbox text-5xl text-slate-300 mb-4"></i>
                        <p class="text-sm text-slate-400 font-medium">Belum ada data kolam</p>
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

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
    <div class="hidden md:flex min-h-screen bg-gradient-to-br from-slate-50 via-white to-emerald-50">
        
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
                    
                    <a href="<?php echo e(route('kolam.index')); ?>" class="flex items-center gap-3 px-4 py-3.5 rounded-xl bg-gradient-to-r from-emerald-50 to-teal-50 text-emerald-700 font-semibold transition-all sidebar-link active">
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
        <main class="desktop-main flex-1 flex flex-col min-h-screen">
            <!-- Top Header Desktop -->
            <header class="bg-white/95 backdrop-blur-xl sticky top-0 z-40 px-8 py-5 shadow-soft border-b border-slate-100">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold text-slate-800 flex items-center gap-3">
                            <i class="fas fa-water text-emerald-600"></i>
                            Data Kolam
                        </h1>
                        <p class="text-slate-500 text-sm mt-1">Monitoring & manajemen kolam ikan</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <button class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors relative">
                            <i class="fas fa-bell"></i>
                            <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>

                    </div>
                </div>
            </header>
            
            <!-- Content Area Desktop -->
            <div class="flex-1 p-8 overflow-y-auto">
                <div class="max-w-7xl mx-auto space-y-6">
                    
                    <!-- Ringkasan Data Desktop (4 kolom) -->
                    <div class="grid grid-cols-4 gap-6">
                        <div class="glass-card rounded-2xl p-6 shadow-card border-l-4 border-emerald-500 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-water"></i>
                                </div>
                                <span class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full">Total</span>
                            </div>
                            <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mb-2">Total Kolam</p>
                            <p class="text-3xl font-extrabold gradient-text"><?php echo e($kolams->count()); ?></p>
                            <p class="text-[10px] text-slate-400 mt-1">unit</p>
                        </div>

                        <div class="glass-card rounded-2xl p-6 shadow-card border-l-4 border-teal-500 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-400 to-teal-600 flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <span class="text-xs font-semibold text-teal-600 bg-teal-50 px-2 py-1 rounded-full">Aktif</span>
                            </div>
                            <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mb-2">Kolam Aktif</p>
                            <p class="text-3xl font-extrabold gradient-text"><?php echo e($kolams->where('status', 'aktif')->count()); ?></p>
                            <p class="text-[10px] text-slate-400 mt-1">unit</p>
                        </div>

                        <div class="glass-card rounded-2xl p-6 shadow-card border-l-4 border-cyan-500 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-cyan-400 to-cyan-600 flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                                <span class="text-xs font-semibold text-cyan-600 bg-cyan-50 px-2 py-1 rounded-full"><?php echo e($kolams->sum('kapasitas') > 0 ? round(($kolams->sum('total_ikan') / $kolams->sum('kapasitas')) * 100) : 0); ?>%</span>
                            </div>
                            <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mb-2">Kapasitas</p>
                            <p class="text-3xl font-extrabold gradient-text"><?php echo e($kolams->sum('total_ikan')); ?></p>
                            <p class="text-[10px] text-slate-400 mt-1">ekor / <?php echo e($kolams->sum('kapasitas')); ?></p>
                        </div>

                        <div class="glass-card rounded-2xl p-6 shadow-card border-l-4 border-amber-500 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <span class="text-xs font-semibold text-amber-600 bg-amber-50 px-2 py-1 rounded-full"><?php echo e($kolams->where('status', 'nonaktif')->count()); ?></span>
                            </div>
                            <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mb-2">Perlu Perhatian</p>
                            <p class="text-3xl font-extrabold gradient-text"><?php echo e($kolams->where('status', 'nonaktif')->count()); ?></p>
                            <p class="text-[10px] text-slate-400 mt-1">kolam</p>
                        </div>
                    </div>

                    <!-- List Kolam Desktop (Grid 2 kolom) -->
                    <div class="glass-card rounded-2xl p-6 shadow-card">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                                <span class="w-1 h-6 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full"></span>
                                Daftar Kolam
                            </h2>
                            <span class="text-sm text-slate-400 font-medium bg-slate-100 px-3 py-1.5 rounded-lg"><?php echo e($kolams->where('status', 'aktif')->count()); ?> Aktif</span>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $kolams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kolam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <!-- <?php echo e($kolam->nama_kolam); ?> Desktop -->
                            <div class="glass-card rounded-2xl p-5 shadow-card card-hover btn-press border-l-4 <?php echo e($kolam->status == 'aktif' ? 'border-emerald-500' : 'border-slate-300'); ?>">
                                <div class="flex items-start justify-between mb-3">
                                    <div>
                                        <h3 class="font-bold text-slate-800"><?php echo e($kolam->nama_kolam); ?></h3>
                                        <div class="flex items-center gap-2 mt-1">
                                            <span class="px-2.5 py-1 rounded-full text-[8px] font-bold <?php echo e($kolam->status == 'aktif' ? 'bg-emerald-100 text-emerald-700 border border-emerald-200' : 'bg-slate-200 text-slate-600 border border-slate-300'); ?>"><?php echo e(ucfirst($kolam->status)); ?></span>
                                            <span class="text-[9px] text-slate-500 flex items-center gap-1">
                                                <i class="fas fa-fish text-emerald-500"></i> <?php echo e($kolam->total_ikan ?? 0); ?> ekor
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs text-slate-500">Kapasitas</p>
                                        <p class="text-sm font-bold text-slate-800"><?php echo e($kolam->total_ikan ?? 0); ?>/<?php echo e($kolam->kapasitas); ?></p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 text-xs text-slate-500 mb-3">
                                    <span><i class="fas fa-map-marker-alt text-emerald-500 mr-1"></i><?php echo e($kolam->lokasi ?? 'Umum'); ?></span>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($kolam->ukuran): ?>
                                    <span>•</span>
                                    <span><i class="fas fa-ruler text-emerald-500 mr-1"></i><?php echo e($kolam->ukuran); ?></span>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($kolam->suhu !== null): ?>
                                    <span>•</span>
                                    <span><i class="fas fa-temperature-half text-red-500 mr-1"></i><?php echo e(number_format($kolam->suhu, 1)); ?>°C</span>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                <div class="w-full h-1.5 bg-slate-100 rounded-full mb-4">
                                    <div class="h-1.5 <?php echo e($kolam->status == 'aktif' ? 'bg-emerald-500' : 'bg-slate-300'); ?> rounded-full" style="width: <?php echo e($kolam->kapasitas > 0 ? (($kolam->total_ikan ?? 0) / $kolam->kapasitas) * 100 : 0); ?>%"></div>
                                </div>
                                <div class="flex gap-2">
                                    <a href="<?php echo e(route('kolam.show', $kolam->id)); ?>" class="flex-1 py-2 rounded-xl bg-slate-50 text-slate-600 text-xs font-bold hover:bg-emerald-50 hover:text-emerald-600 transition-colors btn-press text-center">
                                        <i class="fas fa-eye mr-1"></i> Detail
                                    </a>
                                    <a href="<?php echo e(route('kolam.edit', $kolam->id)); ?>" class="flex-1 py-2 rounded-xl bg-slate-50 text-slate-600 text-xs font-bold hover:bg-teal-50 hover:text-teal-600 transition-colors btn-press text-center">
                                        <i class="fas fa-edit mr-1"></i> Edit
                                    </a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="col-span-2 text-center py-12">
                                <i class="fas fa-inbox text-5xl text-slate-300 mb-4"></i>
                                <p class="text-sm text-slate-400 font-medium">Belum ada data kolam</p>

                            </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </main>
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
    </script>
</body>
</html>
<?php /**PATH C:\xampp1\htdocs\projek-ikan-koki\resources\views/auth/kolam.blade.php ENDPATH**/ ?>