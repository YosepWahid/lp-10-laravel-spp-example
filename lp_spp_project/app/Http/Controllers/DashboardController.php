<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::get()->count();
        $siswa = Siswa::get()->count();
        $siswa_blom_bayar = Siswa::all();

        return view('main.index', compact('user', 'siswa'));
    }
}
