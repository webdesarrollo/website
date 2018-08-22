<?php

namespace Sejo\Website\Providers;

use Illuminate\Support\ServiceProvider;

class WebsiteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        info('sejo/website bootstraped.');
        include __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__ . '/views', 'website');

        $this->publishes([
            __DIR__.'/views' => resource_path('resources/views//website'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
