<?php

namespace App\Http\Controllers\Setting\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    //

    public function index()
    {
        $user = User::findOrfail(Auth::user()->id);
        
        return view('dashboard.home.profile',[
            'data' => $user,
            'action' => route('user.profile.update', [
                'userId' => $user->id
            ])
        ]);
        
    }

    public function update(Request $request, $userId)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'min:3',
                'max:50'
            ],
            'alamat' => [
                'required',
                'string',
                'min:5',
                'max:100'
            ],
            'kota' => [
                'required',
                'string',
                'min:3',
                'max:20'
            ],
            'telepon' => [
                'required',
                'string',
                'max:14'
            ],
            'email' => [
                'required',
                'string',
                'min:5',
                'max:255'
            ]
        ]);

        if($validator->fails()){
            throw ValidationException::withMessages($validator->errors()->messages());
        }

        $user = User::findOrfail($userId);
        $user->update($validator->getData());

        return redirect(route('user.profile',[
            'userId' => $user->id
        ]));
    }

    
}
