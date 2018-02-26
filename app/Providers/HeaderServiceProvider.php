<?php

namespace App\Providers;
use App\Models\masters\Category;
use App\Models\masters\SubCategory;
use App\Models\masters\Item;
use Auth;
use View;
use DB;

use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer('website/layouts/*', function($view){
            $category=Category::get();
            foreach($category as $c){
             $sub_category=SubCategory::where('category_id',$c->id)->get();
             $c->sub_category=$sub_category->toArray();
     }
        
     
    // dd($category->toArray());
     $view->with('category', $category);
        });
     
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
