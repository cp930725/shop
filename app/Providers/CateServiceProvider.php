<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\models\Cate;
use Illuminate\Support\Facades\View;

class CateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $cates = Cate::getCates();
        View::share('cates', $cates);
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
