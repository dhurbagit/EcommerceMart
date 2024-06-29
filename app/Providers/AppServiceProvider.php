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
        // display two level of category list
        $allCategories  = Category::get();
        $rootCategories = $allCategories->whereNull('category_id');

        foreach($rootCategories as $rootCategory){

            $rootCategory->children = $allCategories->where('category_id', $rootCategory->id)->values();
        }
        // return $rootCategories;
        
        View::share('rootCategories', $rootCategories);

        $allCategorieslist  = Category::get();
        $rootCategorieslist = $allCategorieslist->whereNull('category_id');

        foreach($rootCategorieslist as $rootCategorylist){

            $rootCategorylist->children = $allCategorieslist->where('category_id', $rootCategorylist->id)->values();

            foreach($rootCategorylist->children as $child){
                $child->children = $allCategorieslist->where('category_id', $child->id)->values();
            }
        }
        // return $rootCategorieslist;
        
        View::share('rootCategorieslist', $rootCategorieslist);



        $categorylist = Category::whereNull('category_id')->get();
        View::share('categorylist', $categorylist);


        View::share('brandlist', Brand::all());
        View::share('taglist', Tag::all());

        
         

    }
}
