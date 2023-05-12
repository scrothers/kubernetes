<?php

namespace Crothers\Kubernetes;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class LaravelServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register the Kubernetes classes into the Laravel Service Provider.
     *
     * @return void
     */
    public function register(): void
    {

    }

    /**
     * Return the classes provided by this service provider.
     *
     * @return array<int, string>
     */
    public function provides(): array
    {
        return [];
    }
}