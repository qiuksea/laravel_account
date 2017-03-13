<?php

#https://laracasts.com/discuss/channels/laravel/laravel-54-failing-on-php-artisan-migrate-after-php-artisan-makeauth

#https://laracasts.com/discuss/channels/laravel/php-artisan-migrate-errorclass-appprovidersschema-not-found

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
