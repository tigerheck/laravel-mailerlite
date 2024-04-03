<?php

namespace TigerHeck\MailerLite;

use Illuminate\Support\ServiceProvider;
use MailerLite\MailerLite as CoreMailerLite;

class MailerLiteServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->configurePublishing();
        }
    }
    
    public function register()
    {
        $this->registerMailerLite();
    }

    public function provides()
    {
        return ['mailerlite'];
    }

    public function configurePublishing()
    {
        $this->publishes([
            __DIR__.'/../config/mailerlite.php' => config_path('mailerlite.php'),
        ], 'config');

    }

    protected function registerMailerLite()
    {
        $this->app->bind('mailerlite', function ($app) {
            return new CoreMailerLite(['api_key' => config('mailerlite.api_key')]);
        });
    }
}
