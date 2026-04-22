<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'brand_id', 'name', 'slug', 'description',
        'price', 'old_price', 'images', 'badge', 'is_active', 'is_featured'
    ];

    // ÖNEMLİ: Veritabanındaki JSON veriyi Blade'de dizi (array) olarak kullanmamızı sağlar
    protected $casts = [
        'images' => 'array',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'price' => 'decimal:2',     // Fiyatların formatını güvenceye alır
        'old_price' => 'decimal:2',
    ];

    /**
     * Ürünün markasına ulaşmamızı sağlar ($product->brand->name)
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Ürünün kategorisine ulaşmamızı sağlar ($product->category->name)
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
