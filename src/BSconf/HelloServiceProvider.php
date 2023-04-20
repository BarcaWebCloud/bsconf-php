<?php

namespace BSconf;

use Illuminate\Support\ServiceProvider;

/**
 * Class PasswordServiceProvider
 */
class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('bsconf', Hello::class);
    }
}