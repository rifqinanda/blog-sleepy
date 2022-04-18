<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Input;

class LoginController extends Controller
{
    public function login()
    {
        return view('backend.auth.login');
    }

    public function savelogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            session()->put('user', [
                'email' => $request->email,
            ]);

            return redirect('/admin/dashboard');
        }
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/admin/login');
    }
}
