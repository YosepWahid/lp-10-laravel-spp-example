<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        return view('main.jurusan.index', [
            'data' => jurusan::paginate(5),
        ]);
    }

    public function create(Request $req)
    {
        $req->validate([
            '*' => 'required'
        ]);
        jurusan::create($req->all);
        return back()->white('success', 'berhasil data berhasil ditambah');
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            '*' => 'required'
        ]);
        jurusan::find($id)->update($req->all);
        return back()->white('success', 'berhasil data berhasil diupdate');
    }

    public function delete(Request $req, $id)
    {
        jurusan::find($id)->delete();
        return back()->white('success', 'berhasil data berhasil dihapus');
    }
}
