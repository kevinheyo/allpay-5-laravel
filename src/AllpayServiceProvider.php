<?php

namespace Allpay;

use Illuminate\Support\ServiceProvider;

class AllpayServiceProvider extends ServiceProvider
{

    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton('allpay', function ($app) {
            $allInOne = new Allpay($app);

            return $allInOne;
        });

    }

}
