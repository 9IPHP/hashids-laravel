<?php namespace Specs\Hashids;
use Illuminate\Support\ServiceProvider;
class HashidsServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->singleton('hashids', function()
        {
            return new \Hashids\Hashids(config('hashids.hashids_salt', ''), config('hashids.hashids_min_length', 0), config('hashids.hashids_alphabet', ''));
        });
    }

    public function boot()
    {
        $configPath = __DIR__ . '/../../../config/hashids.php';
        if (function_exists('config_path')) {
            $publishPath = config_path('hashids.php');
        } else {
            $publishPath = base_path('config/hashids.php');
        }
        $this->publishes([$configPath => $publishPath], 'config');
    }
}