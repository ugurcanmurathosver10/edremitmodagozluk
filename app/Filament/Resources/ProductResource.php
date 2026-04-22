<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag'; // Daha şık bir ikon

    protected static ?string $modelLabel = 'Ürün';
    protected static ?string $pluralModelLabel = 'Ürünler';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Grid::make(3)->schema([
                Forms\Components\Section::make('Ürün Detayları')->columnSpan(2)->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Ürün Adı')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                    Forms\Components\TextInput::make('slug')
                        ->label('URL')
                        ->disabled()
                        ->dehydrated()
                        ->required()
                        ->unique(Product::class, 'slug', ignoreRecord: true),

                    Forms\Components\RichEditor::make('description')
                        ->label('Ürün Açıklaması')
                        ->columnSpanFull(),

                    Forms\Components\FileUpload::make('images')
                        ->label('Ürün Fotoğrafları')
                        ->multiple()
                        ->image()
                        ->directory('products')
                        ->imageEditor()
                        ->reorderable()
                        ->required()
                        ->getUploadedFileNameForStorageUsing(fn ($file) => Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '-' . time() . '.webp'),
                ]),

                Forms\Components\Section::make('Satış ve Kategori')->columnSpan(1)->schema([
                    Forms\Components\Select::make('category_id')
                        ->label('Kategori')
                        ->relationship('category', 'name')
                        ->required()
                        ->searchable()
                        ->preload(),

                    Forms\Components\Select::make('brand_id')
                        ->label('Marka')
                        ->relationship('brand', 'name')
                        ->required()
                        ->searchable()
                        ->preload(),

                    Forms\Components\TextInput::make('price')
                        ->label('Satış Fiyatı')
                        ->numeric()
                        ->prefix('₺')
                        ->required(),

                    Forms\Components\TextInput::make('old_price')
                        ->label('Eski Fiyat (İndirim)')
                        ->numeric()
                        ->prefix('₺'),

                    Forms\Components\TextInput::make('badge')
                        ->label('Etiket')
                        ->placeholder('Örn: Yeni Sezon'),

                    Forms\Components\Toggle::make('is_active')
                        ->label('Sitede Yayınla')
                        ->default(true),

                    Forms\Components\Toggle::make('is_featured')
                        ->label('Öne Çıkar (Haftanın Ürünü)'),
                ]),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Ürün Fotoğrafı (İlk resmi gösterir)
                Tables\Columns\ImageColumn::make('images')
                    ->label('Görsel')
                    ->circular()
                    ->stacked() // Birden fazla resmi üst üste şık gösterir
                    ->limit(1),

                // Ürün Adı ve Markası alt alta
                Tables\Columns\TextColumn::make('name')
                    ->label('Ürün Adı')
                    ->searchable()
                    ->sortable()
                    ->description(fn (Product $record): string => $record->brand->name),

                // Kategori
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Kategori')
                    ->badge()
                    ->color('info'),

                // Fiyat
                Tables\Columns\TextColumn::make('price')
                    ->label('Fiyat')
                    ->money('TRY')
                    ->sortable(),

                // Aktiflik Durumu (Hızlı değiştirilebilir)
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Aktif'),

                // Öne Çıkarılan
                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Öne Çıkan')
                    ->boolean(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->label('Kategoriye Göre Filtrele')
                    ->relationship('category', 'name'),

                Tables\Filters\SelectFilter::make('brand')
                    ->label('Markaya Göre Filtrele')
                    ->relationship('brand', 'name'),
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

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
