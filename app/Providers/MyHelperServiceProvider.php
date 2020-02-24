<?php

namespace App\Providers;

use App\Helpers\MyHelper;
use Illuminate\Support\ServiceProvider;

class MyHelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('myhelper', function () {
            return new MyHelper();
        });
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
