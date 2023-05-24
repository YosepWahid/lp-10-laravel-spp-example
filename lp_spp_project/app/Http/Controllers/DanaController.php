<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use App\Models\dana_pembangunan;
use App\Models\dana_praktek;
use Illuminate\Http\Request;

class DanaController extends Controller
{
    public function index()
    {
        $praktek = dana_praktek::paginate(5);
        $angkatan = Angkatan::all();
        $pembangunan = dana_pembangunan::paginate(5);
        return view('main.dana.index', ['data' => $praktek, 'data_two' => $pembangunan, 'side' => $angkatan]);
    }
}
