<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view('login-page');
    }

    public function loginPost(Request $request){
        $userLogin = $request->validate([
            'user_email' => 'required',
            'user_password' => 'required',
        ]);

        if (auth()->guard('web')->attempt(['email' => $userLogin['user_email'], 'password' => $userLogin['user_password']])){
            $request->session()->regenerate();
        }
        return redirect('/');
    }

    public function register(){
        return view('register-page');
    }

    public function registerPost(Request $request){
        $userRegister = $request->validate([
            'name' => 'required|string|min:3|max:15',
            'email' => 'required|email|unique:users, email',
            'password' => 'required|min:8|max:255',
        ]);

        $userRegister['password'] = bcrypt($userRegister['password']);
        $user = User::create($userRegister);
        $user->save();

        return redirect('/');
    }

    public function logout(){
        auth()->guard('web')->logout();
        return redirect('/');
    }
}
