<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'userID' => 'required',
            'password' => 'required',
        ]);

            if(Auth::attempt($credentials)) {
                if (Auth::user()->role === 'Dosen') {
                    return redirect()->intended('/dashboardkaprodi');
                } elseif (Auth::user()->role === 'Mahasiswa') {
                    return redirect()->intended('/dashboardmahasiswa/eprt');
                } elseif (Auth::user()->role === 'admin') {
                    return redirect()->intended('/dashboardadmin');
                }
            }else{
                return redirect()->intended('/');
            }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
