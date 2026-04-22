<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ikan;
use App\Models\Kolam;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Ringkasan data
        $totalIkan = Ikan::sum('stok') ?? 0;
        $jumlahKolam = Kolam::count();
        $ikanBaru = Ikan::whereDate('created_at', '>=', now()->subDays(7))->sum('stok') ?? 0;
        $kolamAktif = Kolam::where('status', 'aktif')->count();

        // Data untuk chart (populasi ikan per minggu)
        $populasiIkan = Ikan::selectRaw('DATE(created_at) as date, SUM(stok) as total')
            ->whereDate('created_at', '>=', now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Aktivitas terbaru (dari ikan yang baru ditambahkan/diupdate)
        $aktivitasTerbaru = Ikan::with('kolam')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('layouts.dashboard', compact(
            'totalIkan',
            'jumlahKolam',
            'ikanBaru',
            'kolamAktif',
            'populasiIkan',
            'aktivitasTerbaru'
        ));
    }
}
