<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return  redirect()->route('dashboard');
        } else {
            return view('auth/login');
        }
    }

    public function login(Request $req)
    {
        $req->validate([
            'user' => 'required',
            'password' => 'required|min:4'
        ]);

        $data = User::where('email', $req->user)->orWhere('username', $req->user)->first();

        if ($data->username == $req->user || $data->email == $req->user) {
            if (Auth::attempt(['email' => $data->email, 'password' => $req->password], true)) {
                $req->session()->regenerate();
                return redirect()->intended('dashboard');
            };
        } else {
            return back()->with('danger', 'maaf salah user');
        }

        return back()->with('danger', 'maaf gagal masuk');
    }


    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/login');
    }
}
