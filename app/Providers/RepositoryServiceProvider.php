<?php

namespace App\Providers;

use App\Repositories\HerouRepository;
use App\Repositories\HerouRepositoryEloquent;
use Illuminate\Support\ServiceProvider;
//[uses]

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HerouRepository::class, HerouRepositoryEloquent::class);
        //[repository]
    }
}
