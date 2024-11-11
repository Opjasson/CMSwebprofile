<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login.login', [
            'routeAction' => route('auth.login.action')
        ]);
    }

    public function action(LoginRequest $request){
        $request->authentikasi();
        $request->session()->regenerate();
        
        return redirect()->intended(route('dashboard.home', absolute: true));
    }
}
