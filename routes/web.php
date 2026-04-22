<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Anasayfa (Artık pages klasörü içinde)
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// 2. Hakkımızda (Manifesto)
Route::get('/hakkimizda', function () {
    return view('pages.about');
})->name('about');

// 3. VIP Deneyim
Route::get('/vip-deneyim', function () {
    return view('pages.vip');
})->name('vip');

// 4. İletişim
Route::get('/iletisim', function () {
    $settings = [
        'whatsapp' => '905448995965',
        'email' => 'info@edremitmoda.com',
        'address' => 'Edremit, Balıkesir',
        'instagram' => 'edremitmoda'
    ];
    return view('pages.contact', compact('settings'));
})->name('contact');

// 5. Ürün Detay
Route::get('/urun/{slug}', function ($slug) {
    $product = [
        'name' => 'Ray-Ban Aviator Classic',
        'brand' => 'RAY-BAN',
        'old_price' => '4.500',
        'new_price' => '3.250',
        'description' => 'Efsanevi damla modeli ile zamansız bir tarz. %100 UV korumalı polarize camlar ve ultra hafif metal çerçeve ile gün boyu konfor.',
        'images' => [
            'https://images.unsplash.com/photo-1572635196237-14b3f281503f?q=80&w=1000',
            'https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=1000'
        ],
        'badge' => 'Haftanın Fırsatı'
    ];

    $settings = ['whatsapp' => '905448995965'];

    return view('products.show', compact('product', 'settings'));
})->name('product.show');


Route::get('/koleksiyon', function () {
    return view('pages.collection');
})->name('collection');

// Yasal Metin Rotaları
Route::get('/kvkk-ve-cerez-politikasi', function () {
    return view('pages.legal.kvkk');
})->name('legal.kvkk');

Route::get('/mesafeli-satis-sozlesmesi', function () {
    return view('pages.legal.sales-agreement');
})->name('legal.sales');

Route::get('/iptal-ve-iade-kosullari', function () {
    return view('pages.legal.return-policy');
})->name('legal.return');
