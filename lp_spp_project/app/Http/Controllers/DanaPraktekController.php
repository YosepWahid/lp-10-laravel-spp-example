<?php

namespace App\Http\Controllers;

use App\Http\Requests\PraktekCreate;
use App\Models\Angkatan;
use App\Models\dana_praktek;
use Illuminate\Http\Request;

class DanaPraktekController extends Controller
{

    public function create(PraktekCreate $req)
    {
        $req->validated();
        dana_praktek::create($req->all());
        return back();
    }

    public function show($id)
    {
        $data = dana_praktek::find($id);
        $angkatan = Angkatan::all();
        return view('main.dana.praktek.show', ['item' => $data, 'side' => $angkatan]);
    }

    public function update(PraktekCreate $req, $id)
    {
        $req->validated();
        dana_praktek::find($id)->update($req->all());
        return redirect()->route('dana')->with('success', 'berhasil di update');
    }

    public function delete($id)
    {
        dana_praktek::find($id)->delete();
        return back();
    }
}
