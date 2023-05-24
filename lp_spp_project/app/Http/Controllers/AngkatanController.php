<?php

namespace App\Http\Controllers;

use App\Http\Requests\AngkatanCreate;
use App\Models\Angkatan;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class AngkatanController extends Controller
{

    public function index()
    {
        $angkatan = Angkatan::orderBy('created_at')->paginate(10);
        $jurusan = Jurusan::all();
        return view('main.angkatan.index', ['data' => $angkatan, 'side' => $jurusan]);
    }

    public function create(AngkatanCreate $req)
    {
        $req->validated();
        Angkatan::create($req->all());
        return back();
    }

    public function show($id)
    {
        $data = Angkatan::find($id);
        $jurusan = Jurusan::all();
        return view('main.angkatan.show', ['item' => $data, 'side' => $jurusan]);
    }

    public function update(AngkatanCreate $req, $id)
    {
        $req->validated();
        Angkatan::find($id)->update($req->all());
        return redirect()->route('angkatan')->with('success', 'berhasil di update');
    }

    public function delete($id)
    {
        Angkatan::find($id)->delete();
        return back();
    }
}
