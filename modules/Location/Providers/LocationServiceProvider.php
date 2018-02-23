<?php

namespace Modules\Location\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LocationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::middleware(['web'])->group(__DIR__ . '/../Routes/web.php');
    }

    public function register()
    {

    }
}