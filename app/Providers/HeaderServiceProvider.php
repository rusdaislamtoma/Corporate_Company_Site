<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('frontend.home.layouts._header', function ($view) {
            $view->with('company',\App\CompanySetting::first());
            $view->with('contact',\App\Contact::first());
            $view->with('menus',\App\Menu::all());
            $view->with('submenus',\App\SubMenu::all());
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
