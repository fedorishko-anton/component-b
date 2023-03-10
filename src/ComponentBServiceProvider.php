<?php
namespace Alva\ComponentB;

use Illuminate\Support\ServiceProvider;

class ComponentBServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
    public function register()
    {
    }
}
