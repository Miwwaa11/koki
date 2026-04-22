<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kolam;
use App\Models\Ikan;

class KolamController extends Controller
{
    public function index()
    {
        $kolams = Kolam::with('ikans')->get();

        // Add total_ikan attribute to each kolam
        foreach ($kolams as $kolam) {
            $kolam->total_ikan = $kolam->totalIkan();
        }

        // Hitung semua statistik untuk dashboard
        $totalIkan = Ikan::count();
        $jumlahKolam = Kolam::count();
        $ikanBaru = Ikan::whereDate('created_at', '>=', now()->subDays(7))->count() ?? 0;
        $kolamAktif = Kolam::where('status', 'aktif')->count();

        // Data untuk chart (populasi ikan per minggu)
        $populasiIkan = Ikan::selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->whereDate('created_at', '>=', now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Aktivitas terbaru (dari ikan yang baru ditambahkan/diupdate)
        $aktivitasTerbaru = Ikan::with('kolam')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('layouts.kolam', compact(
            'kolams', 
            'totalIkan', 
            'jumlahKolam', 
            'ikanBaru', 
            'kolamAktif',
            'populasiIkan',
            'aktivitasTerbaru'
        ));
    }

    public function create()
    {
        return view('layouts.tambah-kolam');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kolam' => 'required|string|max:100',
            'kapasitas' => 'required|integer|min:1',
            'ukuran' => 'nullable|string|max:100',
            'lokasi' => 'nullable|string|max:100',
            'status' => 'required|in:aktif,nonaktif',
            'suhu' => 'nullable|numeric|min:0|max:100',
        ]);

        Kolam::create($validated);

        return redirect()->route('kolam.index')
            ->with('success', 'Kolam berhasil ditambahkan!');
    }

    public function show($id)
    {
        $kolam = Kolam::findOrFail($id);
        $ikanDiKolam = Ikan::where('kolam_id', $id)->get();
        return view('layouts.detail-kolam', compact('kolam', 'ikanDiKolam'));
    }

    public function edit($id)
    {
        $kolam = Kolam::findOrFail($id);
        return view('layouts.edit-kolam', compact('kolam'));
    }

    public function update(Request $request, $id)
    {
        $kolam = Kolam::findOrFail($id);

        $validated = $request->validate([
            'nama_kolam' => 'required|string|max:100',
            'kapasitas' => 'required|integer|min:1',
            'ukuran' => 'nullable|string|max:100',
            'lokasi' => 'nullable|string|max:100',
            'status' => 'required|in:aktif,nonaktif',
            'suhu' => 'nullable|numeric|min:0|max:100',
        ]);

        $kolam->update($validated);

        return redirect()->route('kolam.index')
            ->with('success', 'Kolam berhasil diupdate!');
    }

    public function destroy($id)
    {
        $kolam = Kolam::findOrFail($id);
        $kolam->delete();

        return redirect()->route('kolam.index')
            ->with('success', 'Kolam berhasil dihapus!');
    }
}
