<?php

namespace App\Http\Controllers;

use App\Http\Requests\PembangunanCreate;
use App\Models\Angkatan;
use App\Models\dana_pembangunan;
use Illuminate\Http\Request;

class DanaPembangunanController extends Controller
{
    public function create(PembangunanCreate $req)
    {
        $req->validated();
        dana_pembangunan::create($req->all());
        return back();
    }

    public function show($id)
    {
        $data = dana_pembangunan::find($id);
        $angkatan = Angkatan::all();
        return view('main.dana.pembangunan.show', ['item' => $data, 'side' => $angkatan]);
    }

    public function update(PembangunanCreate $req, $id)
    {
        $req->validated();
        dana_pembangunan::find($id)->update($req->all());
        return redirect()->route('dana')->with('success', 'berhasil di update');
    }

    public function delete($id)
    {
        dana_pembangunan::find($id)->delete();
        return back();
    }
}
