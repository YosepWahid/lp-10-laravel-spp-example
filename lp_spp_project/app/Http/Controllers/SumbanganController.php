<?php

namespace App\Http\Controllers;

use App\Http\Requests\SumbanganCreate;
use App\Models\Sumbangan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SumbanganController extends Controller
{
    public function index()
    {
        $sumbangan = Sumbangan::orderBy('tahun', 'DESC')->paginate(10);
        return view('main.sumbangan.index', ['data' => $sumbangan]);
    }

    public function create(SumbanganCreate $req)
    {
        $req->validated();
        $total = (int) $req->sumbangan + (int) $req->tabungan;
        $tahun = Carbon::create($req->tahun);
        Sumbangan::create([
            'sumbangan' => $req->sumbangan,
            'tabungan' => $req->tabungan,
            'total' => $total,
            'keterangan' => $req->keterangan,
            'tahun' => $tahun->format('Y'),
        ]);
        return back();
    }

    public function show($id)
    {
        $data = Sumbangan::find($id);
        return view('main.sumbangan.show', ['item' => $data]);
    }

    public function detail($id)
    {
        $data = Sumbangan::find($id);
        return view('main.sumbangan.detail', ['item' => $data]);
    }

    public function update(SumbanganCreate $req, $id)
    {
        $req->validated();
        $total = (int) $req->sumbangan + (int) $req->tabungan;
        $tahun = Carbon::create($req->tahun);
        Sumbangan::find($id)->update([
            'sumbangan' => $req->sumbangan,
            'tabungan' => $req->tabungan,
            'total' => $total,
            'keterangan' => $req->keterangan,
            'tahun' => $tahun->format('Y'),
        ]);
        return redirect()->route('sumbangan')->with('success', 'berhasil di update');
    }

    public function delete($id)
    {
        Sumbangan::find($id)->delete();
        return back();
    }
}
