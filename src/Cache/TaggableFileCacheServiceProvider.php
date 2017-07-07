<?php

namespace Centagon\Cache;

use Illuminate\Support\ServiceProvider;

class TaggableFileCacheServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        app('cache')->extend('tfile', function($app, $config) {
            $store = new TaggableFileStore($this->app['files'], $config['path'], $config);

            return app('cache')->repository($store);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // ...
    }
}