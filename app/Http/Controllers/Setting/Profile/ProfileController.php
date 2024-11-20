<?php

namespace App\Http\Controllers\Setting\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function index()
    {
        return view('dashboard.home.profile');
    }
}
