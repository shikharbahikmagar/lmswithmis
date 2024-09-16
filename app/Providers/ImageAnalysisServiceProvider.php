<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ImageAnalysisService;

class ImageAnalysisServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ImageAnalysisService::class, function ($app) {
            return new ImageAnalysisService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
