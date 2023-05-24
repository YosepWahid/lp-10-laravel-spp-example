<?php

namespace App\Http\Controllers;

use App\Http\Requests\KelasCreate;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::paginate(10);
        return view('main.kelas.index', ['data' => $kelas]);
    }

    public function create(KelasCreate $req)
    {
        $req->validated();
        Kelas::create($req->all());
        return back();
    }

    public function show($id)
    {
        $data = Kelas::find($id);
        return view('main.kelas.show', ['item' => $data]);
    }

    public function update(KelasCreate $req, $id)
    {
        $req->validated();
        Kelas::find($id)->update($req->all());
        return redirect()->route('kelas')->with('success', 'berhasil di update');
    }

    public function delete($id)
    {
        Kelas::find($id)->delete();
        return back();
    }
}
