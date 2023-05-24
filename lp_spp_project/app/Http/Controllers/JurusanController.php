<?php

namespace App\Http\Controllers;

use App\Http\Requests\JurusanCreate;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::paginate(10);
        return view('main.jurusan.index', ['data' => $jurusan]);
    }

    public function create(JurusanCreate $req)
    {
        $req->validated();
        Jurusan::create($req->all());
        return back();
    }

    public function show($id)
    {
        $data = Jurusan::find($id);
        return view('main.jurusan.show', ['item' => $data]);
    }

    public function update(JurusanCreate $req, $id)
    {
        $req->validated();
        Jurusan::find($id)->update($req->all());
        return redirect()->route('jurusan')->with('success', 'berhasil di update');
    }

    public function delete($id)
    {
        Jurusan::find($id)->delete();
        return back();
    }
}
