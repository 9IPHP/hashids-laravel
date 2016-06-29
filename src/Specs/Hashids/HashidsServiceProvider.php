<?php namespace Specs\Hashids;
use Illuminate\Support\ServiceProvider;
class HashidsServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->singleton('hashids', function()
        {
            return new \Hashids\Hashids;
        });
    }
}