<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (auth()->user() == null) {
            return view('auth.login');
        } else {
            return back();
        }
    }

    public function login(Request $req)
    {
        $req->validate([
            '*' => 'required',
            'password' => 'min:4'
        ]);
        $data = User::where('username', $req->user)->orWhere('email', $req->user)->first();

        if ($data == null) {
            return back()->with('error', 'username dan email tidak terdaftar');
        } else if ($data->username == $req->user || $data->email == $req->user) {
            if (Auth::attempt(['email' => $data->email, 'password' => $req->password], true)) {
                $req->session()->regenerate();
                return to_route('dashboard');
            } else {
                return back()->with('error', 'password salah');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return to_route('logins');
    }
}
