<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    // 1. Panelden veri girişi yapabilmen için bu alanları açmamız şart
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * 2. Bir kategorinin birden fazla ürünü olabilir.
     * Bu 'kablo' sayesinde koleksiyon sayfasında kategoriye göre filtreleme yapabileceğiz.
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
