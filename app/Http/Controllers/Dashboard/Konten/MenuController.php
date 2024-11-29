<?php

namespace App\Http\Controllers\Dashboard\Konten;

use App\Http\Controllers\Controller;
use App\Models\Sambutan;
use App\Models\Type_Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index(){
        return view('dashboard.konten.menu.menu',[
            'types' => Type_Category::all()
        ]);
    }
}
