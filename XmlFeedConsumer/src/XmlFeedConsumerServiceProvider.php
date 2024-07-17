<?php

namespace ncscode101\XmlFeedConsumer;

use Illuminate\Support\ServiceProvider;
use ncscode101\XmlFeedConsumer\Services\XmlFeedService;

class XmlFeedConsumerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Publish configuration
        $this->publishes([
            __DIR__.'/config/xmlfeed.php' => config_path('xmlfeed.php'),
        ], 'config');
    }

    public function register()
    {
        // Register services
        $this->app->singleton(XmlFeedService::class, function ($app) {
            return new XmlFeedService(config('xmlfeed.url'));
        });
    }
}
