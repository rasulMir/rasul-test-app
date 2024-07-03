<?php

namespace App\Providers;

use App\Models\Share;
use App\Observers\ShareObserver;
use Illuminate\Support\ServiceProvider;

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
        Share::observe(ShareObserver::class);
    }
}
