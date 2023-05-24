<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaCreate;
use App\Models\Angkatan;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::paginate(10);
        $angkatan = Angkatan::all();
        $kelas = Kelas::all();
        return view('main.siswa.index', ['data' => $siswa, 'side' => $angkatan, 'side_two' => $kelas]);
    }

    public function create(SiswaCreate $req)
    {
        $req->validated();
        Siswa::create($req->all());
        return back();
    }

    public function show($id)
    {
        $data = Siswa::find($id);
        $angkatan = Angkatan::all();
        $kelas = Kelas::all();
        return view('main.siswa.show', ['item' => $data, 'side' => $angkatan, 'side_two' => $kelas]);
    }

    public function detail($id)
    {
        $data = Siswa::find($id);
        return view('main.siswa.detail', ['item' => $data]);
    }

    public function update(SiswaCreate $req, $id)
    {
        $req->validated();
        Siswa::find($id)->update($req->all());
        return redirect()->route('siswa')->with('success', 'berhasil di update');
    }

    public function delete($id)
    {
        Siswa::find($id)->delete();
        return back();
    }
}
