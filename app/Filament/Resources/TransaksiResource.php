<?php

namespace App\Filament\Resources;

use App\Models\Transaksi;
use App\Models\Ikan;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Placeholder;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use App\Filament\Resources\TransaksiResource\Pages;
use Livewire\Wireable;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationLabel = 'Transaksi';
    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?string $navigationGroup = 'Manajemen Transaksi';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Informasi Transaksi')
                ->description('Detail transaksi pembelian')
                ->schema([
                    TextInput::make('kode_transaksi')
                        ->label('Kode Transaksi')
                        ->required()
                        ->unique(Transaksi::class, 'kode_transaksi', ignoreRecord: true)
                        ->placeholder('Contoh: TRX-001')
                        ->helperText('Kode unik untuk transaksi'),

                    Select::make('pelanggan_id')
                        ->label('Pelanggan')
                        ->relationship('pelanggan', 'nama')
                        ->searchable()
                        ->preload()
                        ->createOptionForm([
                            TextInput::make('nama')->required(),
                            TextInput::make('no_hp')->label('Nomor HP')->tel()->required(),
                            TextInput::make('alamat')->required(),
                        ])
                        ->required(),

                    DatePicker::make('tanggal')
                        ->label('Tanggal Transaksi')
                        ->required()
                        ->default(now())
                        ->displayFormat('d/m/Y'),

                    Select::make('status_bayar')
                        ->label('Status Pembayaran')
                        ->options([
                            'belum_bayar' => 'Belum Bayar',
                            'lunas' => 'Lunas',
                        ])
                        ->default('belum_bayar')
                        ->required(),

                    Select::make('status_kirim')
                        ->label('Status Pengiriman')
                        ->options([
                            'diproses' => 'Diproses',
                            'dikirim' => 'Dikirim',
                        ])
                        ->default('diproses')
                        ->required(),
                ])->columns(2),

            Section::make('Detail Ikan')
                ->description('Pilih ikan dan jumlah yang dibeli')
                ->schema([
                    Repeater::make('detail')
                        ->relationship()
                        ->schema([
                            Select::make('ikan_id')
                                ->label('Jenis Ikan')
                                ->relationship('ikan', 'jenis_ikan')
                                ->searchable()
                                ->preload()
                                ->required()
                                ->afterStateUpdated(function ($state, callable $set) {
                                    if ($state) {
                                        $ikan = Ikan::find($state);
                                        if ($ikan) {
                                            $set('harga', $ikan->harga);
                                        }
                                    }
                                }),

                            TextInput::make('jumlah')
                                ->label('Jumlah')
                                ->numeric()
                                ->required()
                                ->default(1)
                                ->live()
                                ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                    $harga = $get('harga') ?? 0;
                                    $jumlah = $state ?? 1;
                                    $set('subtotal', $harga * $jumlah);
                                }),

                            TextInput::make('harga')
                                ->label('Harga Satuan')
                                ->numeric()
                                ->required()
                                ->prefix('Rp')
                                ->live()
                                ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                    $harga = $state ?? 0;
                                    $jumlah = $get('jumlah') ?? 1;
                                    $set('subtotal', $harga * $jumlah);
                                }),

                            TextInput::make('subtotal')
                                ->label('Subtotal')
                                ->numeric()
                                ->required()
                                ->prefix('Rp')
                                ->disabled()
                                ->dehydrated()
                                ->default(0),
                        ])
                        ->columns(4)
                        ->addActionLabel('+ Tambah Ikan')
                        ->collapsible()
                        ->itemLabel(fn (array $state): ?string => 
                            $state['ikan_id'] ? 
                            (Ikan::find($state['ikan_id'])?->jenis_ikan ?? 'Ikan') . ' - ' . ($state['jumlah'] ?? 0) . ' ekor' : 
                            null
                        ),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_transaksi')
                    ->label('Kode')
                    ->searchable()
                    ->sortable(),
                    
                TextColumn::make('pelanggan.nama')
                    ->label('Pelanggan')
                    ->searchable(),
                    
                TextColumn::make('total_harga')
                    ->label('Total Harga')
                    ->money('idr')
                    ->sortable(),
                    
                BadgeColumn::make('status_bayar')
                    ->label('Status Bayar')
                    ->colors([
                        'danger' => 'belum_bayar',
                        'success' => 'lunas',
                    ])
                    ->formatStateUsing(fn (string $state): string => 
                        $state === 'belum_bayar' ? 'Belum Bayar' : 'Lunas'
                    ),
                    
                BadgeColumn::make('status_kirim')
                    ->label('Status Kirim')
                    ->colors([
                        'warning' => 'diproses',
                        'info' => 'dikirim',
                    ])
                    ->formatStateUsing(fn (string $state): string => 
                        $state === 'diproses' ? 'Diproses' : 'Dikirim'
                    ),
                    
                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->date('d/m/Y')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}