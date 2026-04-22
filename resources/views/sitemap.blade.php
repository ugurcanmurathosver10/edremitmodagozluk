use Illuminate\Support\Facades\Response;

// Sitemap.xml Oluşturucu
Route::get('/sitemap.xml', function () {
    // Statik Sayfalarımız
    $urls = [
        ['loc' => route('home'), 'priority' => '1.0', 'changefreq' => 'daily'],
        ['loc' => route('collection'), 'priority' => '0.9', 'changefreq' => 'daily'],
        ['loc' => route('about'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => route('vip'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('contact'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => route('legal.kvkk'), 'priority' => '0.3', 'changefreq' => 'yearly'],
    ];

    // İleride buraya Product::all() diyerek tüm ürün linklerini otomatik ekleyeceğiz.

    $content = view('sitemap', compact('urls'))->render();

    return Response::make($content, 200, [
        'Content-Type' => 'application/xml',
    ]);
});
