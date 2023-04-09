<?php

namespace App\Providers;

use App\Services\NewsInterface;
use App\Services\NewsService;
use Illuminate\Support\ServiceProvider;

class NewsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //----- Первый способ -----//
        $this->app->bind(NewsInterface::class, function () {
            return new NewsService();
        });
        //----- Первый способ -----//

        //---- Второй способ ----//
//        $this->app->bind(NewsInterface::class, NewsService::class);
        //---- Второй способ ----//

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
