<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Setting;

/*
|--------------------------------------------------------------------------
| Web Routes - Edremit Moda Luxury Edition
|--------------------------------------------------------------------------
*/

// 1. Anasayfa (Dinamik Vitrin)
Route::get('/', function () {
    return view('pages.home', [
        // Slider için aktif markalar
        'brands' => Brand::where('is_active', true)->orderBy('sort_order', 'asc')->get(),

        // Vitrin için panelde "Öne Çıkar" işaretlenen son 8 ürün
        'featuredProducts' => Product::with(['brand', 'category'])
            ->where('is_active', true)
            ->where('is_featured', true)
            ->latest()
            ->take(8)
            ->get(),

        // Genel ayarlar (WhatsApp vb. için)
        'settings' => Setting::pluck('value', 'key')->toArray()
    ]);
})->name('home');

// 2. Koleksiyon (Tam Filtreleme)
Route::get('/koleksiyon', function () {
    $brands = Brand::where('is_active', true)->get();
    $categories = Category::all();
    $products = Product::with(['brand', 'category'])->where('is_active', true)->latest()->get();

    return view('pages.collection', compact('brands', 'categories', 'products'));
})->name('collection');

// 3. Ürün Detay (Slug ile Gerçek Veri)
Route::get('/urun/{slug}', function ($slug) {
    $product = Product::with(['brand', 'category'])
        ->where('slug', $slug)
        ->where('is_active', true)
        ->firstOrFail();

    $settings = Setting::pluck('value', 'key')->toArray();

    return view('products.show', compact('product', 'settings'));
})->name('product.show');

// 4. İletişim (Ayarlar Panelinden Gelen Veriler)
Route::get('/iletisim', function () {
    $settings = Setting::pluck('value', 'key')->toArray();

    // Eğer veritabanı boşsa hata vermemesi için fallback (yedek) değerler
    $defaultSettings = [
        'whatsapp' => '905448995965',
        'email' => 'info@edremitmoda.com',
        'address' => 'Edremit, Balıkesir',
        'instagram' => 'edremitmoda'
    ];

    $settings = array_merge($defaultSettings, $settings);

    return view('pages.contact', compact('settings'));
})->name('contact');

// 5. Statik Sayfalar
Route::get('/hakkimizda', fn() => view('pages.about'))->name('about');
Route::get('/vip-deneyim', fn() => view('pages.vip'))->name('vip');

// 6. Yasal Rotalar
Route::get('/kvkk-ve-cerez-politikasi', fn() => view('pages.legal.kvkk'))->name('legal.kvkk');
Route::get('/mesafeli-satis-sozlesmesi', fn() => view('pages.legal.sales-agreement'))->name('legal.sales');
Route::get('/iptal-ve-iade-kosullari', fn() => view('pages.legal.return-policy'))->name('legal.return');
