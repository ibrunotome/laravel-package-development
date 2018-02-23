<?php

namespace Modules\Pages\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::namespace('Modules\Pages\Http\Controllers')
            ->group(__DIR__ . '/../Routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../Views', 'Page');
    }

    public function register()
    {

    }
}