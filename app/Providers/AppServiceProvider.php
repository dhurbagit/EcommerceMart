<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Tag;
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
        //
        View::share('categorylist', Category::whereNull('category_id')->get());
        View::share('brandlist', Brand::all());
        View::share('taglist', Tag::all());
         

    }
}
