<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'kode_transaksi',
        'pelanggan_id',
        'tanggal',
        'total_harga',
        'status_bayar',
        'status_kirim',
    ];

    // 🔗 Relasi ke pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    // 🔗 Relasi ke detail transaksi
    public function detail()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}