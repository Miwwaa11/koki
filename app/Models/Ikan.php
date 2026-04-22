<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ikan extends Model
{
    // kolom yang boleh diisi
    protected $fillable = [
        'jenis_ikan',
        'ukuran',
        'harga',
        'stok',
        'status_kesehatan',
        'kolam_id'
    ];

    /**
     * Relasi ke kolam
     * satu ikan berada di satu kolam
     */
    public function kolam(): BelongsTo
    {
        return $this->belongsTo(Kolam::class, 'kolam_id');
    }
}