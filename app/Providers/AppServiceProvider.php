<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\General;
use App\Models\Menu;
use App\Models\Service;
use Illuminate\Support\Facades\View;
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
        View::share('menus', Menu::orderBy('sort')->get());
        View::share('identities', General::first());
        View::share('categories', Category::all());
        View::share('services', Service::all());
    }
}
