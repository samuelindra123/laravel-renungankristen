<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL; // <-- Pastikan ini ada
use Illuminate\Support\ServiceProvider;

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
        // Ganti fungsi boot() yang lama dengan yang ini
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
