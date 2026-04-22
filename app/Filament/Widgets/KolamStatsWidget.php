<?php

namespace App\Filament\Widgets;

use App\Models\Ikan;
use App\Models\Kolam;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KolamStatsWidget extends BaseWidget
{
    protected static ?int $sort = -2;

    protected function getStats(): array
    {
        $totalIkan = Ikan::sum('stok') ?? 0;
        $jumlahKolam = Kolam::count();
        $kolamAktif = Kolam::where('status', 'aktif')->count();
        $ikanBaru = Ikan::whereDate('created_at', '>=', now()->subDays(7))->sum('stok') ?? 0;

        return [
            Stat::make('Total Ikan', $totalIkan),
            Stat::make('Jumlah Kolam', $jumlahKolam),
            Stat::make('Ikan Baru (7 Hari)', $ikanBaru),
            Stat::make('Kolam Aktif', $kolamAktif),
        ];
    }
}
