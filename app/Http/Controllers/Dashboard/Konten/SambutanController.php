<?php

namespace App\Http\Controllers\Dashboard\Konten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    //
    public function index() {
        return view('dashboard.konten.sambutan');
    }
}
