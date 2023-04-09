<?php

namespace App\Providers;

use App\View\Composers\MainComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class DateTimeServiceProvider extends ServiceProvider
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
        View::composer('news.header', MainComposer::class);
    }
}
