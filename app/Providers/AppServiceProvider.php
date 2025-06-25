<?php

namespace App\Providers;

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
        //
        if (is_dir(base_path('resources/views/vendor'))) {
            $this->loadViewsFrom(base_path('resources/views/vendor'), 'vendor');
        }
    }
}
