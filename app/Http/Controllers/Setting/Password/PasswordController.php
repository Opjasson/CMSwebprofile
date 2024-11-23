<?php

namespace App\Http\Controllers\Setting\Password;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    //
    public function index(){
        $user = User::findOrfail(Auth::user()->id);
        
        return view('dashboard.home.password',[
            'data' => $user,
            'action' => route('user.profile.password.update', [
                'userId' => $user->id
            ])
        ]);
    }

    public function update(Request $request, $userId)
    {
        $user = User::findOrfail(Auth::user()->id);
        

        if (!Hash::check($request->Passwordlama, $user->password)) {
           throw ValidationException::withMessages([
            'Passwordlama' => 'Password salah!'
           ]);
        }

        $validator = Validator::make($request->all(), [
            'username' => [
                'required',
                'string',
                'min:3',
            ],
            'Passwordlama' => [
                'required',
                'string',
                'min:3',
            ],
            'passwordbaru' => [
                'required',
                'string',
                'min:3',
            ],
            'confPassword' => [
                'required',
                'string',
                'min:3',
                'same:passwordbaru'
            ],
           
        ]);

        if($validator->fails()){
            throw ValidationException::withMessages($validator->errors()->messages());
        }
        
        $user->update(['password' => bcrypt($request->passwordbaru)]);
        
        return redirect()->back()->with(['succes' =>'Password berhasil dirubah']);
        
        
        
    }

    
}
