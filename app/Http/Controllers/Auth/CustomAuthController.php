<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Auth;
use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function postlogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return redirect()->intended('/');
        }

        return back()->with('err', "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง");

    }

    public function getLogin()
    {
        return view('page.auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
