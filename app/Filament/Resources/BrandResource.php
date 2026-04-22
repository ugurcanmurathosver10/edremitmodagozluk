<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandResource\Pages;
use App\Models\Brand;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class BrandResource extends Resource
{
    protected static ?string $model = Brand::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag'; // Daha şık bir ikon

    protected static ?string $modelLabel = 'Marka';
    protected static ?string $pluralModelLabel = 'Markalar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Marka Detayları')
                    ->description('Sitede görünecek marka bilgilerini ve logoyu buradan yönetebilirsiniz.')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Marka Adı')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Örn: Prada'),

                        Forms\Components\FileUpload::make('logo')
                            ->label('Marka Logosu')
                            ->image() // Resim dosyası olduğunu doğrular
                            ->directory('brands')
                            ->imageEditor() // Kırpma/Düzenleme açar
                            ->required()
                            // SİHİRLİ DOKUNUŞ: WebP Dönüşümü ve Optimizasyon
                            ->formatStateUsing(fn ($state) => $state)
                            ->getUploadedFileNameForStorageUsing(function ($file): string {
                                $name = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
                                return (string) "brands/{$name}-" . time() . ".webp";
                            }),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Sitede Gösterilsin mi?')
                            ->helperText('Pasif yaparsanız slider ve koleksiyonda görünmez.')
                            ->default(true),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->label('Logo')
                    ->circular() // Logoyu yuvarlak çerçevede gösterir, çok şık durur
                    ->disk('public'), // storage/link yaptıysan public diskini kullanır

                Tables\Columns\TextColumn::make('name')
                    ->label('Marka Adı')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Durum')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Eklenme Tarihi')
                    ->dateTime('d/m/Y H:i')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Aktiflik Durumu'),
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
            'index' => Pages\ListBrands::route('/'),
            'create' => Pages\CreateBrand::route('/create'),
            'edit' => Pages\EditBrand::route('/{record}/edit'),
        ];
    }
}
