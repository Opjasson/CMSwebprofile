<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class GambarController extends Controller
{
    //
    public function upload(Request $request)
    {
        $gambar = $request->file('img');
        $path = FacadesStorage::disk('gambar')->putFile('gambar', $gambar);
        
    }
}
