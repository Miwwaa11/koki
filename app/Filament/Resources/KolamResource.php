<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KolamResource\Pages;
use App\Models\Kolam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;

class KolamResource extends Resource
{
    protected static ?string $model = Kolam::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Data Kolam';

    protected static ?string $navigationGroup = 'Manajemen Ikan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Kolam')
                    ->description('Masukkan detail informasi kolam')
                    ->schema([
                        TextInput::make('nama_kolam')
                            ->label('Nama Kolam')
                            ->required()
                            ->maxLength(100)
                            ->placeholder('Contoh: Kolam A1, Kolam Indukan')
                            ->helperText('Nama unik untuk mengidentifikasi kolam'),

                        TextInput::make('kapasitas')
                            ->label('Kapasitas Maksimum')
                            ->numeric()
                            ->placeholder('Contoh: 50')
                            ->helperText('Jumlah maksimum ikan yang bisa ditampung'),

                        TextInput::make('ukuran')
                            ->label('Ukuran Kolam')
                            ->maxLength(100)
                            ->placeholder('Contoh: 3x4m, 12m²')
                            ->helperText('Ukuran/dimensi kolam (opsional)'),

                        TextInput::make('lokasi')
                            ->label('Lokasi Kolam')
                            ->maxLength(100)
                            ->placeholder('Contoh: Area A, Gedung 1')
                            ->helperText('Lokasi fisik kolam berada'),

                        TextInput::make('suhu')
                            ->label('Suhu Air (°C)')
                            ->numeric()
                            ->step(0.01)
                            ->minValue(0)
                            ->maxValue(100)
                            ->placeholder('26')
                            ->helperText('Suhu ideal untuk ikan koi: 24-28°C')
                            ->prefix('°C'),

                        Toggle::make('is_aktif')
                            ->label('Status Kolam')
                            ->default(true)
                            ->onIcon('heroicon-m-check-circle')
                            ->offIcon('heroicon-m-x-circle')
                            ->onColor('success')
                            ->offColor('danger')
                            ->helperText('Tandai kolam sebagai aktif atau nonaktif'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),

                TextColumn::make('nama_kolam')
                    ->label('Nama Kolam')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('kapasitas')
                    ->label('Kapasitas')
                    ->sortable(),

                TextColumn::make('ukuran')
                    ->label('Ukuran')
                    ->placeholder('-')
                    ->sortable(),

                TextColumn::make('lokasi')
                    ->label('Lokasi')
                    ->sortable(),

                TextColumn::make('suhu')
                    ->label('Suhu')
                    ->formatStateUsing(fn ($state) => $state ? number_format($state, 1) . '°C' : '-')
                    ->toggleable()
                    ->alignCenter(),

                BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'success' => 'aktif',
                        'danger' => 'nonaktif',
                    ])
                    ->formatStateUsing(fn (string $state): string => ucfirst($state))
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable(),

            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'aktif' => 'Aktif',
                        'nonaktif' => 'Nonaktif',
                    ])
                    ->query(function ($query, array $data) {
                        if ($data['value'] ?? null) {
                            return $query->where('status', $data['value']);
                        }
                        return $query;
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKolams::route('/'),
            'create' => Pages\CreateKolam::route('/create'),
            'edit' => Pages\EditKolam::route('/{record}/edit'),
        ];
    }
}