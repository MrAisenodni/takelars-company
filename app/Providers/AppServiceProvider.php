<?php

namespace App\Providers;

use App\Models\Settings\{ 
    Menu,
    Provider,
};
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // This function to call and get data to all menu
        view()->composer('layouts.header', function ($view) {
            $view->with(
                'menus', Menu::select('id', 'title', 'url')->where('active', 1)->get()
            )->with(
                'provider', Provider::where('active', 1)->first()
            );
        });

        view()->composer('layouts.main', function ($view) {
            $view->with(
                'menus', Menu::select('id', 'title', 'url')->where('active', 1)->get()
            )->with(
                'provider', Provider::where('active', 1)->first()
            );
        });

        // For Administrator
        view()->composer('admin.layouts.main', function ($view) {
            $view->with(
                'menus', Menu::select('id', 'title', 'icon', 'parent', 'url')->where('active', 1)->where('admin', 1)->get()
            )->with(
                'provider', Provider::where('active', 1)->first()
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
