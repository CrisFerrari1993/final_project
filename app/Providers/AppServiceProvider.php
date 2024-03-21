<?php

namespace App\Providers;

use Braintree\Gateway;
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
        $this->app->singleton(Gateway::class, function ($app) {
            return new Gateway(
                [
                    'environment' => 'sandbox',
                    'merchantId' => 'bkbnxwjp5xdpg5k9',
                    'publicKey' => 'rcsb7f5y2vcdzvwc',
                    'privateKey' => '37733624f3c9f8a3159b0794330948d3'
                ]
            );
        });
    }
}