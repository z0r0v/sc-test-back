<?php

namespace App\Providers;

use App\Models\Message;
use Illuminate\Support\ServiceProvider;
use Route;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::model('message', Message::class, function ($value) {
            return Message::where('id', $value)->firstOrFail();
        });
    }
}
