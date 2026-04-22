<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Edit Kolam - Alfin Aquatic</title>
    
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
                        },
                    },
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Google Sans Flex', sans-serif;
            background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.8);
        }
        .btn-press:active {
            transform: scale(0.96);
        }
        input, select, textarea {
            transition: all 0.2s;
        }
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #059669;
            box-shadow: 0 0 0 4px rgba(5, 150, 105, 0.1);
        }
        
        .sidebar-width { width: 280px; }
        .desktop-main { margin-left: 280px; }
        @media (max-width: 1024px) {
            .desktop-main { margin-left: 0; }
            .sidebar-width { width: 100%; }
        }
        @media (min-width: 768px) {
            .mobile-only { display: none !important; }
            .desktop-only { display: block !important; }
        }
        @media (max-width: 767px) {
            .desktop-only { display: none !important; }
            .mobile-only { display: block !important; }
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
<body class="text-slate-800 antialiased">
    
    <!-- ==================== MOBILE VIEW ==================== -->
    <div class="md:hidden max-w-[414px] mx-auto min-h-screen bg-gradient-to-b from-slate-50 to-white relative shadow-2xl overflow-hidden">
        
        <!-- Header -->
        <header class="bg-gradient-to-r from-emerald-600 via-teal-600 to-emerald-700 px-5 pt-12 pb-6 rounded-b-3xl shadow-soft relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 bg-cyan-400/20 rounded-full blur-2xl"></div>
            
            <div class="relative z-10">
                <div class="flex justify-between items-center mb-4">
                    <button onclick="window.location.href='<?php echo e(route('kolam.show', \->id)); ?>'" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center text-white hover:bg-white/30 transition-all btn-press">
                        <i class="fas fa-arrow-left text-sm"></i>
                    </button>
                    <div class="flex items-center gap-2">
                        <button class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center text-white hover:bg-white/30 transition-all btn-press relative">
                            <i class="fas fa-bell text-sm"></i>
                            <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-emerald-600"></span>
                        </button>
                    </div>
                </div>
                
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-water text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-white text-lg font-bold">Edit Kolam</h1>
                        <p class="text-emerald-100 text-xs font-medium">Ubah data kolam</p>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Main Content -->
        <main class="px-5 py-6 pb-24 space-y-5">
            
            <!-- Info Kolam -->
            <div class="glass-card rounded-2xl p-5 shadow-card">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white">
                        <i class="fas fa-water text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="font-bold text-slate-800"><?php echo e($kolam->nama_kolam); ?></h2>
                        <p class="text-sm text-slate-500">ID: <?php echo e($kolam->id); ?> • <?php echo e($kolam->totalIkan()); ?>/<?php echo e($kolam->kapasitas); ?> ekor</p>
                    </div>
                </div>
            </div>

            <!-- Form Edit Kolam -->
            <div class="glass-card rounded-2xl p-5 shadow-card">
                <form action="<?php echo e(route('kolam.update', $kolam->id)); ?>" method="POST" class="space-y-5">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <!-- Nama Kolam -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            <i class="fas fa-water mr-1 text-emerald-500"></i>Nama Kolam
                        </label>
                        <input type="text" name="nama_kolam" value="<?php echo e(old('nama_kolam', $kolam->nama_kolam)); ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/70 focus:bg-white transition-colors <?php $__errorArgs = ['nama_kolam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['nama_kolam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <!-- Kapasitas -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            <i class="fas fa-fish mr-1 text-emerald-500"></i>Kapasitas Maksimal (ekor)
                        </label>
                        <input type="number" name="kapasitas" value="<?php echo e(old('kapasitas', $kolam->kapasitas)); ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/70 focus:bg-white <?php $__errorArgs = ['kapasitas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['kapasitas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <!-- Ukuran Kolam -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            <i class="fas fa-ruler-combined mr-1 text-emerald-500"></i>Ukuran Kolam
                        </label>
                        <input type="text" name="ukuran" value="<?php echo e(old('ukuran', $kolam->ukuran)); ?>" placeholder="Contoh: 3x4m, 12m²" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/70 focus:bg-white transition-colors">
                        <p class="text-xs text-slate-500 mt-1">Opsional - isi sesuai ukuran kolam</p>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['ukuran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <!-- Lokasi -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            <i class="fas fa-map-marker-alt mr-1 text-emerald-500"></i>Lokasi Kolam
                        </label>
                        <input type="text" name="lokasi" value="<?php echo e(old('lokasi', $kolam->lokasi)); ?>" placeholder="Contoh: Area A, Gedung 1" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/70 focus:bg-white transition-colors">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <!-- Suhu Air -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            <i class="fas fa-temperature-half mr-1 text-emerald-500"></i>Suhu Air (°C)
                        </label>
                        <input type="number" name="suhu" value="<?php echo e(old('suhu', $kolam->suhu)); ?>" placeholder="26" step="0.01" min="0" max="100" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/70 focus:bg-white transition-colors <?php $__errorArgs = ['suhu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <p class="text-xs text-slate-500 mt-1">Opsional - suhu ideal ikan koi: 24-28°C</p>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['suhu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Status Kolam</label>
                        <div class="flex items-center gap-4">
                            <label class="flex items-center gap-2">
                                <input type="radio" name="status" value="aktif" class="w-4 h-4 text-emerald-600" <?php echo e(old('status', $kolam->status) == 'aktif' ? 'checked' : ''); ?> required>
                                <span class="text-sm">Aktif</span>
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="radio" name="status" value="nonaktif" class="w-4 h-4 text-emerald-600" <?php echo e(old('status', $kolam->status) == 'nonaktif' ? 'checked' : ''); ?>>
                                <span class="text-sm">Nonaktif</span>
                            </label>
                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="grid grid-cols-2 gap-3 pt-3">
                        <button type="submit" class="py-3 rounded-xl bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-semibold shadow-md hover:shadow-lg transition-all btn-press">
                            <i class="fas fa-save mr-1"></i> Simpan Perubahan
                        </button>
                        <button type="button" onclick="window.location.href='<?php echo e(route('kolam.show', $kolam->id)); ?>'" class="py-3 rounded-xl bg-slate-100 text-slate-600 font-semibold hover:bg-slate-200 transition-all btn-press">
                            <i class="fas fa-times mr-1"></i> Batal
                        </button>
                    </div>

                </form>
            </div>
            
        </main>
        
        <!-- Bottom Navigation -->
        <nav class="fixed bottom-0 left-0 right-0 bg-white/95 backdrop-blur-xl border-t border-slate-200 px-6 py-3 pb-6 z-40 max-w-[414px] mx-auto shadow-soft">
            <div class="flex justify-around items-center">
                <a href="<?php echo e(route('dashboard')); ?>" class="flex flex-col items-center gap-1.5 text-slate-400 hover:text-emerald-600 transition-all btn-press">
                    <i class="fas fa-home text-base"></i><span class="text-[9px] font-medium">Dashboard</span>
                </a>
                <a href="<?php echo e(route('ikan.index')); ?>" class="flex flex-col items-center gap-1.5 text-slate-400 hover:text-emerald-600 transition-all btn-press">
                    <i class="fas fa-fish text-base"></i><span class="text-[9px] font-medium">Ikan</span>
                </a>
                <div class="relative -top-6">
                    <button class="w-14 h-14 rounded-full bg-gradient-to-r from-emerald-500 via-teal-500 to-emerald-600 text-white shadow-lg flex items-center justify-center text-xl">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <a href="<?php echo e(route('kolam.index')); ?>" class="flex flex-col items-center gap-1.5 nav-item-active">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center bg-gradient-to-br from-emerald-100 to-emerald-200">
                        <i class="fas fa-water text-base text-emerald-600"></i>
                    </div>
                    <span class="text-[9px] font-semibold text-emerald-600">Kolam</span>
                </a>
                <a href="<?php echo e(route('akun')); ?>" class="flex flex-col items-center gap-1.5 text-slate-400 hover:text-emerald-600 transition-all btn-press">
                    <i class="fas fa-user text-base"></i><span class="text-[9px] font-medium">Akun</span>
                </a>
            </div>
        </nav>
    </div>
    
    <!-- ==================== DESKTOP VIEW ==================== -->
    <div class="hidden md:block">
        <div class="flex min-h-screen bg-gradient-to-br from-slate-50 via-white to-emerald-50">
            <aside class="sidebar-width bg-white border-r border-slate-200 flex flex-col fixed h-full shadow-elegant z-50">
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
                <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
                    <a href="<?php echo e(route('dashboard')); ?>" class="sidebar-link"><i class="fas fa-home w-5"></i><span>Dashboard</span></a>
                    <a href="<?php echo e(route('ikan.index')); ?>" class="sidebar-link"><i class="fas fa-fish w-5"></i><span>Data Ikan</span></a>
                    <a href="<?php echo e(route('kolam.index')); ?>" class="sidebar-link active"><i class="fas fa-water w-5"></i><span>Data Kolam</span></a>
                    <a href="<?php echo e(route('akun')); ?>" class="sidebar-link"><i class="fas fa-user w-5"></i><span>Akun Admin</span></a>
                </nav>
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
                            <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-500 hover:bg-red-100 transition-colors">
                                <i class="fas fa-sign-out-alt text-xs"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </aside>
            
            <main class="desktop-main flex-1 p-8 overflow-y-auto">
                <div class="max-w-3xl mx-auto">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h1 class="text-2xl font-bold text-slate-800 flex items-center gap-3">
                                <i class="fas fa-water text-emerald-600"></i> Edit Data Kolam
                            </h1>
                            <p class="text-slate-500 text-sm mt-1">Ubah informasi kolam A1</p>
                        </div>
                        <button class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-emerald-50 transition-colors">
                            <i class="fas fa-bell"></i>
                        </button>
                    </div>
                    
                    <div class="glass-card rounded-2xl p-8 shadow-card">
                        <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl mb-6">
                            <div class="w-20 h-20 rounded-xl bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white">
                                <i class="fas fa-water text-3xl"></i>
                            </div>
                            <div>
                                <h2 class="font-bold text-slate-800 text-xl"><?php echo e($kolam->nama_kolam); ?></h2>
                                <p class="text-sm text-slate-500">ID: <?php echo e($kolam->id); ?> • <?php echo e($kolam->totalIkan()); ?> ekor / <?php echo e($kolam->kapasitas); ?> ekor</p>
                            </div>
                        </div>

                        <form action="<?php echo e(route('kolam.update', $kolam->id)); ?>" method="POST" class="space-y-6">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-1">Nama Kolam</label>
                                    <input type="text" name="nama_kolam" value="<?php echo e(old('nama_kolam', $kolam->nama_kolam)); ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/70 focus:bg-white <?php $__errorArgs = ['nama_kolam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['nama_kolam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-1">Ukuran Kolam</label>
                                    <input type="text" name="ukuran" value="<?php echo e(old('ukuran', $kolam->ukuran)); ?>" placeholder="Contoh: 3x4m" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/70 focus:bg-white">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['ukuran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-1">Lokasi Kolam</label>
                                    <input type="text" name="lokasi" value="<?php echo e(old('lokasi', $kolam->lokasi)); ?>" placeholder="Contoh: Area A" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/70 focus:bg-white">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-1">Kapasitas (ekor)</label>
                                    <input type="number" name="kapasitas" value="<?php echo e(old('kapasitas', $kolam->kapasitas)); ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/70 focus:bg-white <?php $__errorArgs = ['kapasitas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['kapasitas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                            </div>

                            <div class="bg-emerald-50 p-4 rounded-xl">
                                <h3 class="font-semibold text-emerald-800 mb-3">Parameter Air</h3>
                                <div class="grid grid-cols-3 gap-4">
                                    <div>
                                        <label class="block text-xs text-slate-600 mb-1">Suhu (°C)</label>
                                        <input type="number" name="suhu" value="<?php echo e(old('suhu', $kolam->suhu)); ?>" step="0.01" min="0" max="100" class="w-full px-4 py-2 rounded-lg border border-emerald-200 bg-white focus:bg-white <?php $__errorArgs = ['suhu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['suhu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                    <div>
                                        <label class="block text-xs text-slate-600 mb-1">pH</label>
                                        <input type="number" step="0.1" value="7.2" class="w-full px-4 py-2 rounded-lg border border-emerald-200 bg-white focus:bg-white">
                                    </div>
                                    <div>
                                        <label class="block text-xs text-slate-600 mb-1">Oksigen</label>
                                        <input type="number" step="0.1" value="6.5" class="w-full px-4 py-2 rounded-lg border border-emerald-200 bg-white focus:bg-white">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Status Kolam</label>
                                <div class="flex items-center gap-4">
                                    <label class="flex items-center gap-2">
                                        <input type="radio" name="status" value="aktif" class="w-4 h-4 text-emerald-600" <?php echo e(old('status', $kolam->status) == 'aktif' ? 'checked' : ''); ?> required>
                                        <span class="text-sm">Aktif</span>
                                    </label>
                                    <label class="flex items-center gap-2">
                                        <input type="radio" name="status" value="nonaktif" class="w-4 h-4 text-emerald-600" <?php echo e(old('status', $kolam->status) == 'nonaktif' ? 'checked' : ''); ?>>
                                        <span class="text-sm">Nonaktif</span>
                                    </label>
                                </div>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>

                            <div class="flex gap-3 pt-4">
                                <button type="submit" class="px-8 py-3 rounded-xl bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-semibold shadow-md hover:shadow-lg transition-all btn-press">
                                    <i class="fas fa-save mr-2"></i> Simpan Perubahan
                                </button>
                                <button type="button" onclick="window.location.href='<?php echo e(route('kolam.show', $kolam->id)); ?>'" class="px-8 py-3 rounded-xl bg-slate-100 text-slate-600 font-semibold hover:bg-slate-200 transition-all btn-press">
                                    <i class="fas fa-times mr-2"></i> Batal
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp1\htdocs\projek-ikan-koki\resources\views/layouts/edit-kolam.blade.php ENDPATH**/ ?>