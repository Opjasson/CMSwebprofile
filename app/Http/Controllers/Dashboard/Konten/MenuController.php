<?php

namespace App\Http\Controllers\Dashboard\Konten;

use App\Models\Halaman;
use App\Models\Sambutan;
use App\Models\halaman_tipe;
use Illuminate\Http\Request;
use App\Models\Type_Category;
use App\Models\HalamanKategory;
use App\Models\halaman_category;
use App\Models\halaman_kategori;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    //
    public function index(){
        return view('dashboard.konten.menu.menu',[
            'types' => Type_Category::all(),
            'route' => route('dashboard.menu.tambah')
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

    public function fileDownload()
    {
        return view('dashboard.konten.menu.form-addfileDownload',[
            'action' => route('dashboard.menu.tambah.action')
        ]);
    }

    public function createHal(Request $request)
    {
        DB::table('halaman')->insert([
            'judul' => $request->judul,
            // 'link' => $,
            'sub_halaman' => $request->sub_halaman,
            'urutan' => $request->urutan
        ]);
    }
}
