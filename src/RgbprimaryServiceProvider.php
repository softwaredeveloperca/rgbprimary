<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RgbprimaryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if (file_exists($file = app_path('src/helpers.php'))) { 
    		require $file;
	}
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
