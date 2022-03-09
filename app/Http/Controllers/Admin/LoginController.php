<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login_form()
    {
        return view('admin/auth/login');
    }

    public function handleLogin(Request $request)
    {
        if (auth()->attempt(['name'=>request()->get('username'),'password'=>request()->get('password')])){

            return redirect()->route('admin.admin-panel');
        }else{
            return redirect()->back()->withErrors(['message'=>'Login error']);
        }
//        if (Auth::attempt() auth()->attempt(['name'=>$request->username,'password'=>$request->password])){
//
//            return view('admin.index');
//
//        }else{
//            return redirect()->back()->withErrors(['message'=>'Login error']);
//        }
    }

    public function handleLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

            return view('admin.auth.login');
    }
}
