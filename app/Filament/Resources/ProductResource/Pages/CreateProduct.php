<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    // Ürün eklendikten sonra sayfayı tertemiz sıfırlar ve yeni ürün eklemeye hazır hale getirir
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('create');
    }
}
