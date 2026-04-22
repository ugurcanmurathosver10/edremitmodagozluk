<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth'; // Çark ikonu daha uygun

    protected static ?string $modelLabel = 'Sistem Ayarı';
    protected static ?string $pluralModelLabel = 'Sistem Ayarları';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Genel Ayarlar')
                    ->description('Sitedeki iletişim ve sosyal medya bilgilerini buradan yönetin.')
                    ->schema([
                        Forms\Components\Select::make('key')
                            ->label('Ayar Türü')
                            ->options([
                                'whatsapp' => 'WhatsApp Numarası (Örn: 905...)',
                                'instagram' => 'Instagram Kullanıcı Adı',
                                'phone' => 'Sabit Telefon',
                                'email' => 'E-Posta Adresi',
                                'address' => 'Mağaza Adresi',
                                'facebook' => 'Facebook Linki',
                                'google_maps' => 'Google Haritalar Linki',
                            ])
                            ->required()
                            ->unique(Setting::class, 'key', ignoreRecord: true)
                            ->native(false), // Daha şık bir dropdown açılır

                        Forms\Components\Textarea::make('value')
                            ->label('Ayar Değeri')
                            ->placeholder('Buraya bilgiyi girin...')
                            ->required()
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->label('Ayar Adı')
                    ->badge()
                    ->color('warning')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'whatsapp' => 'WhatsApp',
                        'instagram' => 'Instagram',
                        'phone' => 'Telefon',
                        'email' => 'E-Posta',
                        'address' => 'Adres',
                        'facebook' => 'Facebook',
                        'google_maps' => 'Haritalar',
                        default => $state,
                    }),

                Tables\Columns\TextColumn::make('value')
                    ->label('İçerik')
                    ->limit(50)
                    ->searchable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Son Güncelleme')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
