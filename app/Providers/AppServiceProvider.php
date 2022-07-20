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
        $title = Review::get()->last() ? Review::get()->last()->title : 'No Review';
        View::share('lastPostedReview', $title);

        View::composer('master', function ($view) {
            return $view->with('count', Review::count());
        });
    }
}
