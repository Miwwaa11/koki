<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ikan;
use App\Models\Kolam;

class IkanController extends Controller
{
    public function index()
    {
        // Ambil semua ikan dengan stok > 0 dan relasi kolam (eager loading)
        $ikans = Ikan::with('kolam')->where('stok', '>', 0)->get();

        // Get unique jenis for filter chips
        $uniqueJenis = $ikans->pluck('jenis_ikan')->unique()->sort()->values();

        // Debug: pastikan setiap ikan punya data kolam
        // dd($ikans->first()); // Uncomment untuk debug
        
        // Kelompokkan ikan berdasarkan jenis_ikan dan ukuran
        $groupedIkan = $ikans->groupBy(function($ikan) {
            return $ikan->jenis_ikan . '|' . ($ikan->ukuran ?? 'no_size');
        })
            ->map(function ($ikanGroup, $key) {
                // Kumpulkan semua nama kolam yang unik dari setiap entry (hanya yang stok > 0)
                $kolamNames = $ikanGroup->filter(function($ikan) {
                    return $ikan->kolam !== null && $ikan->stok > 0;
                })->pluck('kolam.nama_kolam')->unique()->sort()->values();
                
                // Kumpulkan info detail untuk setiap entry dengan kolam info
                $ikanDetailsWithKolam = $ikanGroup->map(function($ikan) {
                    return [
                        'id' => $ikan->id,
                        'jenis_ikan' => $ikan->jenis_ikan,
                        'ukuran' => $ikan->ukuran,
                        'stok' => $ikan->stok,
                        'harga' => $ikan->harga,
                        'status_kesehatan' => $ikan->status_kesehatan,
                        'kolam_id' => $ikan->kolam_id,
                        'kolam_nama' => $ikan->kolam ? $ikan->kolam->nama_kolam : 'Tanpa Kolam'
                    ];
                });
                
                return [
                    'key' => $key,
                    'jenis_ikan' => $ikanGroup->first()->jenis_ikan,
                    'ukuran' => $ikanGroup->first()->ukuran,
                    'total_stok' => $ikanGroup->sum('stok'),
                    'harga' => $ikanGroup->first()->harga,
                    'status_kesehatan' => $ikanGroup->first()->status_kesehatan,
                    'kolam_names' => $kolamNames,
                    'kolam_ids' => $ikanGroup->pluck('kolam_id')->filter()->unique()->count(),
                    'jumlah_entry' => $ikanGroup->count(),
                    'ikan_details' => $ikanDetailsWithKolam
                ];
            });
        
        // Sort by jenis then flatten
        $flattenedGroupedIkan = $groupedIkan->sortBy('jenis_ikan')->values();
        
        return view('layouts.ikan', compact('ikans', 'flattenedGroupedIkan', 'uniqueJenis'));
    }

    public function create()
    {
        $kolams = Kolam::all();
        return view('layouts.tambah-ikan', compact('kolams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_ikan' => 'required',
            'ukuran' => 'nullable',
            'harga' => 'nullable|numeric',
            'stok' => 'nullable|integer',
            'status_kesehatan' => 'required',
            'kolam_id' => 'nullable|integer'
        ]);

        Ikan::create($request->all());

        return redirect()->route('ikan.index')
            ->with('success','Data ikan berhasil ditambahkan');
    }

    public function show($id)
    {
        $ikan = Ikan::with('kolam')->findOrFail($id);
        return view('layouts.detail-ikan', compact('ikan'));
    }

    public function edit($id)
    {
        $ikan = Ikan::findOrFail($id);
        $kolams = Kolam::all();

        return view('layouts.edit-ikan', compact('ikan','kolams'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_ikan' => 'required',
            'ukuran' => 'nullable',
            'harga' => 'nullable|numeric',
            'stok' => 'nullable|integer',
            'status_kesehatan' => 'required',
            'kolam_id' => 'nullable|integer'
        ]);

        $ikan = Ikan::findOrFail($id);

        $ikan->update($request->all());

        return redirect()->route('ikan.index')
            ->with('success','Data ikan berhasil diupdate');
    }

    public function destroy($id)
    {
        $ikan = Ikan::findOrFail($id);
        $ikan->delete();

        return redirect()->route('ikan.index')
            ->with('success','Data ikan berhasil dihapus');
    }
}