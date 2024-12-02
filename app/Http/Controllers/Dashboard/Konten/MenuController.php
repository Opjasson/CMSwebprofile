<?php

namespace App\Http\Controllers\Dashboard\Konten;

use App\Http\Controllers\Controller;
use App\Models\halaman_category;
use App\Models\halaman_kategori;
use App\Models\halaman_tipe;
use App\Models\HalamanKategory;
use App\Models\Sambutan;
use App\Models\Type_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    //
    public function index(){
        return view('dashboard.konten.menu.menu',[
            'types' => Type_Category::all(),
            'route' => route('dashboard.menu.tambah',[
                'userId' => Auth::user()->id
            ])
        ]);
    }

    public function addMenuHalaman()
    {
       $halCategory = halaman_tipe::with('halCat')->get();

        return view('dashboard.konten.menu.add-menu',[
            'dataType' => halaman_kategori::all(),
            'relasi' => $halCategory
        ]);
    }
}
