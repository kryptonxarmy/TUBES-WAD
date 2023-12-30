<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index(){
        return view('welcome');
    }
    function indexAdmin(){
        return view('Admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'userID' => 'required',
            'password' => 'required',
        ]);

            if(Auth::attempt($credentials)) {
                if (Auth::user()->role === 'dosen') {
                    return redirect()->intended('/dashboardkaprodi');
                } elseif (Auth::user()->role === 'mahasiswa') {
                    return redirect()->intended('/dashboardadmin');
                }
            }
    }
}
