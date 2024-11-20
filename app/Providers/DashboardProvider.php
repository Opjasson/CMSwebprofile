<?php

namespace App\Providers;

use App\View\Composer\DashboardComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class DashboardProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        View::composer(['layouts.dashboards.dashboard-layout', 'components.listUser'], DashboardComposer::class);
    }
}
