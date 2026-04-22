<?php

namespace App\Filament\Resources\KolamResource\Pages;

use App\Filament\Resources\KolamResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKolam extends CreateRecord
{
    protected static string $resource = KolamResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Convert is_aktif toggle to status string
        if (isset($data['is_aktif'])) {
            $data['status'] = $data['is_aktif'] ? 'aktif' : 'nonaktif';
            unset($data['is_aktif']);
        } else {
            $data['status'] = 'aktif';
        }

        return $data;
    }
}
