<?php

namespace App\View\Composer;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

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
        $user = User::findOrfail(Auth::user()->id);
        $view->with('app',[
            'name' => config('app.name'),
            'lang' => str_replace('_', '-', app()->getLocale())
        ]);

        $view->with('route', [
            'dashboard' => route('dashboard.home'),
            'profile' => route('user.profile', [
                'userId' => $user->id
            ]),
            'logout' => route('auth.logout')
        ]);
    }
}
