<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // View share, variavel para todas views.
        $categories = \App\Models\Category::all(['name','slug']);
        view()->share('categories', $categories);

        // View Compose, passar variavel para determinada view.
        // view()->composer(*,function($view){
        // view()->composer(['welcome','single'],function($view) use($categories){
        //     $view->with('categories',$categories);
        // });
    }
}
