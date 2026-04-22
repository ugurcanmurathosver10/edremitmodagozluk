<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Veritabanı tablosu varsa ayarları tüm view'lara (blade dosyalarına) dağıtıyoruz
        if (Schema::hasTable('settings')) {
            View::share('siteSettings', Setting::pluck('value', 'key')->toArray());
        }
    }
}
