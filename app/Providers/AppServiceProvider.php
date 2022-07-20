<?php

namespace App\Providers;

use App\Review;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $name = Review::get()->last() ? Review::get()->last()->name : 'No Review';
        View::share('lastPostedReview', $name);

        View::composer('master', function ($view) {
            return $view->with('count', Review::count());
        });
    }
}
