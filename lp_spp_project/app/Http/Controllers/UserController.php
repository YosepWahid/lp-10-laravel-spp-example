<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreate;
use App\Http\Requests\UserUpdate;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        if (auth()->user()->role->name == "petugas") {
            return redirect()->route('dashboard');
        } else {
            $user = User::paginate(10);
            $role = Role::all();
            return view('main.user.index', ['data' => $user, 'side' => $role]);
        }
    }

    public function create(UserCreate $req)
    {
        $req->validated();
        User::insert([
            'name' => $req->name,
            'role_id' => $req->role_id,
            'username' => $req->username,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
            'created_at' => Carbon::now(),
        ]);
        return back();
    }

    public function show($id)
    {
        $data = User::find($id);
        $role = Role::all();
        return view('main.user.show', ['item' => $data, 'side' => $role]);
    }


    public function detail($id)
    {
        $data = User::find($id);
        return view('main.user.detail', ['item' => $data]);
    }

    public function update(UserUpdate $req, $id)
    {
        $req->validated();
        User::find($id)->update([
            'name' => $req->name,
            'role_id' => $req->role_id,
            'username' => $req->username,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            // 'email_verifea' => now(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'updated' => Carbon::now(),
        ]);
        return redirect()->route('user')->with('success', 'berhasil di update');
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return back();
    }
}
