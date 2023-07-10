<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = [
            'email' => $credentials['email'],
            'password' => $credentials['password'],
        ];

        if (Auth::Attempt($data)) {
            return redirect()->route('home')->with('success', 'Login Berhasil!');
        }else{
            
            return redirect('/')->with('loginError', 'Email atau Password Salah!');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}