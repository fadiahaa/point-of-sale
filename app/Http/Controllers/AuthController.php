<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView(){
        return view('auth.login');
    }

    public function registerView(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'email'                 => 'required|unique:users',
            'password'              => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        user::create([
            'name'      => $request->name,
            'last_name'      => $request->last_name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);
        return redirect()->route('login.loginView');
    }
}
