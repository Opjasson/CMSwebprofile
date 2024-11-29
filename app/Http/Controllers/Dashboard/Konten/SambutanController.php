<?php

namespace App\Http\Controllers\Dashboard\Konten;

use App\Models\Sambutan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class SambutanController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.konten.sambutan.sambutan', [
            'action' => route('dashboard.konten.action'),
            'isi' => Sambutan::first()
        ]);
        // dd(Sambutan::first());
    }

    public function action(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'judul' => [
                'required',
                'string',
                'min:3'
            ],
            'isi' => [
                'required',
                'string'
            ],
            'gambar' => [
                File::types(['jpg', 'jpeg'])->max(2000)
            ]
        ]);

        if ($validator->fails()) {
            throw ValidationException::withMessages($validator->errors()->messages());
        }

        $dir = public_path('img');

        if ($request->file('gambar')) {
            if (FacadesFile::exists($dir)) {
                $files = FacadesFile::files($dir);
                foreach ($files as $fill) {
                    FacadesFile::delete($fill);
                }
                $gambar = $request->file('gambar')->store('img');
            } else {
                $gambar = $request->file('gambar')->store('img');
            }
        } else{
            $gambar = null;
        }

        Sambutan::updateOrCreate(
            ['id' => 4],
            ['judul' => $request->judul, 'isi' => $request->isi, 'gambar' => $gambar]
        );
        return redirect()->back();

    }
}
