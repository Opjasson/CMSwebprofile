<?php

namespace App\View\Composer;

use Illuminate\View\View;

class DashboardComposer
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function compose(View $view)
    {

        $view->with('app',[
            'name' => config('app.name'),
            'lang' => str_replace('_', '-', app()->getLocale())
        ]);

        $view->with('route', [
            'dashboard' => route('dashboard.home'),
            'profile' => route('user.profile'),
            'logout' => route('auth.logout')
        ]);
    }
}
