<?php

namespace App\Filament\Resources\KolamResource\Pages;

use App\Filament\Resources\KolamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKolam extends EditRecord
{
    protected static string $resource = KolamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Convert status string to boolean for toggle
        $data['is_aktif'] = $data['status'] === 'aktif';
        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Convert is_aktif toggle back to status string
        if (isset($data['is_aktif'])) {
            $data['status'] = $data['is_aktif'] ? 'aktif' : 'nonaktif';
            unset($data['is_aktif']);
        }

        return $data;
    }
}
