<?php

namespace App\Providers;

use App\Observers\TicketsObserver;
use App\Tickets;
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
        //
        Tickets::observe(TicketsObserver::class);
    }
}
