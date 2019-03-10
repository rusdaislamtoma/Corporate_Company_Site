<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FooterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('frontend.home.layouts._footer', function ($view) {
            $view->with('company',\App\CompanySetting::first());
            $view->with('services',\App\Service::distinct()->get(['category']));
            $view->with('blogs',\App\Blog::distinct()->get(['category']));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
