<?php

namespace App\Providers;

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::middleware([
            SetLocale::class,
        ])->group(function () {
            require base_path('routes/web.php');
        });
    }
}
