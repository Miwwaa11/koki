<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IkanResource\Pages;
use App\Models\Ikan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class IkanResource extends Resource
{
    protected static ?string $model = Ikan::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';
    
    protected static ?string $navigationLabel = 'Data Ikan Koki';

    protected static ?string $navigationGroup = 'Manajemen Ikan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('jenis_ikan')
                            ->label('Jenis Ikan Koki')
                            ->placeholder('Pilih jenis ikan')
                            ->options([
                                'Oranda' => 'Oranda',
                                'Ranchu' => 'Ranchu',
                                'Tanchu' => 'Tanchu',
                                'Kohaku' => 'Kohaku',
                                'Taisho Sanke' => 'Taisho Sanke',
                                'Showa Sanshoku' => 'Showa Sanshoku',
                                'Asagi' => 'Asagi',
                                'Shusui' => 'Shusui',
                                'Ogon' => 'Ogon',
                                'Kujaku' => 'Kujaku',
                                'Gosanke' => 'Gosanke',
                                'Doitsu' => 'Doitsu',
                                'Butterfly Koi' => 'Butterfly Koi',
                                'Chagoi' => 'Chagoi',
                                'Ochiba Shigure' => 'Ochiba Shigure',
                                'Koromo' => 'Koromo',
                                'Ginrin' => 'Ginrin',
                                'Tancho' => 'Tancho',
                            ])
                            ->searchable()
                            ->required(),

                        TextInput::make('ukuran')
                            ->label('Ukuran Ikan')
                            ->placeholder('Contoh: 5 cm, 8 cm')
                            ->required()
                            ->helperText('Ukuran ikan dalam cm'),

                        Select::make('kolam_id')
                            ->label('Lokasi Kolam')
                            ->relationship(
                                name: 'kolam',
                                titleAttribute: 'nama_kolam'
                            )
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                TextInput::make('nama_kolam')
                                    ->label('Nama Kolam')
                                    ->required(),

                                TextInput::make('kapasitas')
                                    ->label('Kapasitas')
                                    ->numeric(),

                                TextInput::make('lokasi')
                                    ->label('Lokasi Kolam'),
                            ])
                            ->required(),

                        TextInput::make('stok')
                            ->label('Jumlah Stok')
                            ->numeric()
                            ->default(0)
                            ->required()
                            ->helperText('Jumlah ikan yang tersedia'),

                        TextInput::make('harga')
                            ->label('Harga Jual per Ekor')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->helperText('Harga jual per ekor'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jenis_ikan')
                    ->label('Jenis Koki')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('ukuran')
                    ->label('Ukuran')
                    ->sortable(),

                TextColumn::make('kolam.nama_kolam')
                    ->label('Kolam')
                    ->badge()
                    ->color('info')
                    ->sortable(),

                TextColumn::make('stok')
                    ->label('Stok')
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('harga')
                    ->label('Harga')
                    ->money('idr')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Didaftarkan')
                    ->dateTime('d M Y')
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListIkans::route('/'),
            'create' => Pages\CreateIkan::route('/create'),
            'edit' => Pages\EditIkan::route('/{record}/edit'),
        ];
    }
}