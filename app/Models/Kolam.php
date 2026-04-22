<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kolam extends Model
{
    protected $table = 'kolams';

    protected $fillable = [
        'nama_kolam',
        'kapasitas',
        'lokasi',
        'status',
        'ukuran',
        'suhu'
    ];

    protected $casts = [
        'kapasitas' => 'integer',
        'suhu' => 'decimal:2',
    ];

    /**
     * Get all ikan in this kolam
     */
    public function ikans(): HasMany
    {
        return $this->hasMany(Ikan::class, 'kolam_id');
    }

    /**
     * Calculate total ikan in this kolam
     */
    public function totalIkan(): int
    {
        return $this->ikans()->sum('stok') ?? 0;
    }

    /**
     * Check if kolam is active
     */
    public function isAktif(): bool
    {
        return $this->status === 'aktif';
    }

    /**
     * Check if kolam is inactive
     */
    public function isNonaktif(): bool
    {
        return $this->status === 'nonaktif';
    }

    /**
     * Scope for active kolams
     */
    public function scopeAktif($query)
    {
        return $query->where('status', 'aktif');
    }

    /**
     * Scope for inactive kolams
     */
    public function scopeNonaktif($query)
    {
        return $query->where('status', 'nonaktif');
    }

    /**
     * Toggle status between aktif and nonaktif
     */
    public function toggleStatus(): void
    {
        $this->status = $this->isAktif() ? 'nonaktif' : 'aktif';
        $this->save();
    }
}