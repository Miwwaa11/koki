<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ikan;
use App\Models\Kolam;

class PindahIkanController extends Controller
{
    public function index(Request $request)
    {
        $ikans = Ikan::with('kolam')->whereNotNull('kolam_id')->get();
        $kolams = Kolam::all();

        return view('layouts.pindah-ikan', compact('ikans', 'kolams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ikan_id' => 'required|exists:ikans,id',
            'jumlah' => 'required|integer|min:1',
            'kolam_tujuan_id' => 'required|exists:kolams,id',
            'tanggal_pindah' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $ikan = Ikan::with('kolam')->findOrFail($request->ikan_id);
        $kolamTujuan = Kolam::findOrFail($request->kolam_tujuan_id);

        // Cek stok cukup
        if ($ikan->stok < $request->jumlah) {
            return back()->withErrors(['jumlah' => 'Stok ikan tidak mencukupi']);
        }

        // Cek apakah kolam asal dan tujuan sama
        if ($ikan->kolam_id == $request->kolam_tujuan_id) {
            return back()->withErrors(['kolam_tujuan_id' => 'Kolam tujuan tidak boleh sama dengan kolam asal']);
        }

        // Buat entry baru untuk ikan di kolam tujuan
        Ikan::create([
            'jenis_ikan' => $ikan->jenis_ikan,
            'ukuran' => $ikan->ukuran,
            'harga' => $ikan->harga,
            'stok' => $request->jumlah,
            'status_kesehatan' => $ikan->status_kesehatan,
            'kolam_id' => $request->kolam_tujuan_id,
        ]);

        // Kurangi stok ikan asal
        $ikan->stok -= $request->jumlah;
        $ikan->save();

        return redirect()->route('ikan.index')
            ->with('success', "Berhasil memindahkan {$request->jumlah} ekor {$ikan->jenis_ikan} ke {$kolamTujuan->nama_kolam}");
    }
}
