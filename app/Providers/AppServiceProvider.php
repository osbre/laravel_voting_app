<?php

namespace App\Providers;

use App\Repositories\DemoItemRepository;
use App\Repositories\ItemRepository;
use App\Services\Location\DemoIpLocationService;
use App\Services\Location\LocationService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ItemRepository::class, DemoItemRepository::class);

        $this->app->bind(LocationService::class, function () {
            return new DemoIpLocationService(config('services.decentIpLocationApi.secret'));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
