<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Login()
    {
        return view('admin.adminlogin');
    }

    public function CheckLogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
            return redirect()->route('admindashboard');
        }
        return redirect()->route('adminlogin')->with('error','Thông tin đăng nhập sai!');
    }

    public function LogOut()
    {
        Auth::logout();
        return redirect()->route('adminlogin');
    }
}
