<?php

namespace App\Http\Controllers\Dashboard\Konten;

use App\Http\Controllers\Controller;
use App\Models\Sambutan;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    //
    public function index() {
        return view('dashboard.konten.sambutan.sambutan',[
            'action' => route('dashboard.konten.action')
        ]);
    }

    public function action(Request $request)
    {
        Sambutan::create($request->all());
    }
}
