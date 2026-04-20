<?php

use Illuminate\Support\Facades\Route;

// Anasayfa Rotası
Route::get('/', function () {
    return view('welcome');
});

// Ürün Detay Rotası (Şimdilik tasarımı görmek için sahte veri gönderiyoruz)
Route::get('/urun/{slug}', function ($slug) {
    // İleride bu veriyi veritabanından çekeceğiz. Şimdilik tasarım için sahte bir ürün dizisi oluşturuyoruz.
    $product = [
        'name' => 'Ray-Ban Aviator Classic',
        'old_price' => '4.500',
        'new_price' => '3.250',
        'description' => 'Efsanevi damla modeli ile zamansız bir tarz. %100 UV korumalı polarize camlar ve ultra hafif metal çerçeve ile gün boyu konfor. Hem şık hem de dayanıklı bir güneş gözlüğü arayanlar için ideal seçim.',
        'images' => [
            'https://images.unsplash.com/photo-1572635196237-14b3f281503f?q=80&w=1000&auto=format&fit=crop',
            'https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=1000&auto=format&fit=crop',
            'https://images.unsplash.com/photo-1589831377283-33cb1cc6bd5d?q=80&w=1000&auto=format&fit=crop'
        ],
        'badge' => 'Haftanın Fırsatı'
    ];

    // İleride Ayarlar tablosundan gelecek (şimdilik test için manuel veriyoruz)
    $settings = [
        'whatsapp' => '905555555555'
    ];

    return view('products.show', compact('product', 'settings'));
})->name('product.show');
