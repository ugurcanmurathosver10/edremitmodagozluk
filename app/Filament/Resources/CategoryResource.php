<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag'; // Daha uygun bir ikon

    protected static ?string $modelLabel = 'Kategori';
    protected static ?string $pluralModelLabel = 'Kategoriler';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Kategori Bilgileri')
                ->description('Ürünleri gruplandırmak için kategori detaylarını girin.')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Kategori Adı')
                        ->placeholder('Örn: Güneş Gözlüğü')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                    Forms\Components\TextInput::make('slug')
                        ->label('URL (Otomatik Oluşur)')
                        ->disabled()
                        ->dehydrated()
                        ->required()
                        ->unique(Category::class, 'slug', ignoreRecord: true),
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kategori İsmi
                Tables\Columns\TextColumn::make('name')
                    ->label('Kategori Adı')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                // Slug/URL (Rozet stilinde)
                Tables\Columns\TextColumn::make('slug')
                    ->label('URL')
                    ->badge()
                    ->color('gray'),

                // Bu kategorideki aktif ürün sayısı
                Tables\Columns\TextColumn::make('products_count')
                    ->label('Ürün Sayısı')
                    ->counts('products')
                    ->badge()
                    ->color('warning'),

                // Eklenme Tarihi
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Eklenme Tarihi')
                    ->dateTime('d/m/Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
