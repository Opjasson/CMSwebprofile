<?php

namespace App\Http\Controllers\Dashboard\Konten;

use App\Models\halaman_tipe;
use Illuminate\Http\Request;
use App\Models\Type_Category;
use App\Models\halaman_kategori;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Halaman;
use Illuminate\Support\Str;


class MenuController extends Controller
{
    //
    public function index()
    {
        $halaman = Halaman::all();
        return view('dashboard.konten.menu.menu', [
            'types' => Type_Category::all(),
            'route' => route('dashboard.menu.tambah'),
            'halamans' => $halaman
        ]);
    }

    public function addMenuHalaman(Request $request)
    {
       
        $halCategory = halaman_tipe::with('halCat')->get();
        $type = $request->get('type');

        if ($request->type === "file") {
            return view('dashboard.konten.menu.All_Forms.form-addfileDownload', [
                'dataType' => halaman_kategori::all(),
                'relasi' => $halCategory,
                'type' => $type
            ]);
        }elseif($request->type === "home"){
            return view('dashboard.konten.menu.All_Forms.form-addHome', [
                'dataType' => halaman_kategori::all(),
                'relasi' => $halCategory,
                'type' => $type
            ]);
        }elseif($request->type === "profile"){
            return view('dashboard.konten.menu.All_Forms.form-addProfile', [
                'dataType' => halaman_kategori::all(),
                'relasi' => $halCategory,
                'type' => $type
            ]);
        }
         else {
            return view('dashboard.konten.menu.add-menu', [
                'dataType' => halaman_kategori::all(),
                'relasi' => $halCategory,
            ]);
        }
    }


    public function createHal(Request $request)
    {
        // $test=request('tipe');
        
        DB::table('halaman')->insert([
            'judul' => $request->judul,
            'link' => Str::slug($request->judul, '-'),
            'tipe' => $request->tipe,
            'sub_halaman' => $request->sub_halaman,
            'urutan' => $request->urutan,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect(route('dashboard.menu'));
    }
}
