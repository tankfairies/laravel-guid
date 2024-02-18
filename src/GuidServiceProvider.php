<?php

namespace Tankfairies\LaravelGuid;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Tankfairies\Guid\Guid;

/**
 * Class GuidServiceProvider.
 */
class GuidServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/helpers.php';
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
