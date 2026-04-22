@extends('layouts.dashboard-layout')

@section('content')
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

<script>
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
            return date.toLocaleDateString('id-ID', { day: 'numeric', month: 'short' });
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
                    legend: { display: false },
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
                        grid: { color: '#f1f5f9', drawBorder: false },
                        ticks: { color: '#94a3b8', font: { size: 11 } }
                    },
                    x: {
                        grid: { display: false, drawBorder: false },
                        ticks: { color: '#94a3b8', font: { size: 11 } }
                    }
                }
            }
        });
    }
    
    document.addEventListener('DOMContentLoaded', () => {
        initChartDesktop();
    });
</script>
@endsection
