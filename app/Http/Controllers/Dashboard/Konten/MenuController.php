<?php

namespace App\Http\Controllers\Dashboard\Konten;

use App\Models\halaman_tipe;
use Illuminate\Http\Request;
use App\Models\Type_Category;
use App\Models\halaman_kategori;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class MenuController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.konten.menu.menu', [
            'types' => Type_Category::all(),
            'route' => route('dashboard.menu.tambah')
        ]);
    }

    public function addMenuHalaman(Request $request)
    {
        $halCategory = halaman_tipe::with('halCat')->get();

        //    dd($request->type);
        if ($request->type === "file") {
            return view('dashboard.konten.menu.form-addfileDownload', [
                'dataType' => halaman_kategori::all(),
                'relasi' => $halCategory
            ]);
        } else {
            return view('dashboard.konten.menu.add-menu', [
                'dataType' => halaman_kategori::all(),
                'relasi' => $halCategory
            ]);
        }
    }


    public function createHal(Request $request)
    {
        DB::table('halaman')->insert([
            'judul' => $request->judul,
            'link' => Str::slug($request->judul, '-'),
            'tipe' => $request->type,
            'sub_halaman' => $request->sub_halaman,
            'urutan' => $request->urutan
        ]);
    }
}
