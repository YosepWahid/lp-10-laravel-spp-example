<?php

namespace App\Http\Controllers;

use App\Http\Requests\PembayaranCreate;
use App\Models\Angkatan;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Sumbangan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class PembayaranController extends Controller
{
    public $year;

    public function __construct()
    {
        $this->year = Carbon::now()->format('Y');
    }

    public function index()
    {
        $pembayaran = Pembayaran::paginate(10);
        $siswa = Siswa::all();
        $sumbangan = Sumbangan::all();
        return view('main.pembayaran.index', ['data' => $pembayaran, 'side' => $siswa, 'side_two' => $sumbangan]);
    }

    public function create(Request $req)
    {
        $req->validate([
            "siswa_id" => 'required',
            "dibayarkan" => 'required',
            "tanggal_bayar" => 'required',
            "bulan" => "required",
            "keterangan_pembayaran" => 'required'
        ]);

        if ($req->sumbangan_id == null) {
            $sumbangan = Sumbangan::where('tahun', $this->year)->first(['total', 'id']);

            $spp = (int) $sumbangan->total;
            $bayar = (int) $req->dibayarkan;

            if ($bayar > $spp) {
                $kembalian = $bayar - $spp;
                $dibayarkan = $bayar - $kembalian;
                $kekurangan = 0;
                $total = $kembalian + $dibayarkan + $kekurangan;
                $status = 1;
            } elseif ($bayar < $spp) {
                $kembalian = 0;
                $kekurangan = $spp - $bayar;
                $dibayarkan = $spp - $kekurangan;
                $total = $kembalian + $kekurangan + $dibayarkan;
                $status = 0;
            } else {
                $kekurangan = 0;
                $kembalian = 0;
                $total = $kembalian + $kekurangan + $bayar;
                $status = 1;
            }

            $user = Auth::user()->id;

            Pembayaran::insert([
                "sumbangan_id" => $sumbangan->id,
                "siswa_id" => $req->siswa_id,
                "user_id" => $user,
                "dibayarkan" => $req->dibayarkan,
                "kembalian" => $kembalian,
                "kekurangan" => $kekurangan,
                "total" => $total,
                "tanggal_bayar" => $req->tanggal_bayar,
                "bulan" => $req->bulan,
                "detail_keterangan" => $req->detail_keterangan,
                "keterangan_pembayaran" => $req->keterangan_pembayaran,
                "status_sumbangan" => $status,
                "created_at" => Carbon::now(),
            ]);
        } else {
            $sumbangan = Sumbangan::where('id', $req->sumbangan_id)->first(['total', 'id']);


            $spp = (int) $sumbangan->total;
            $bayar = (int) $req->dibayarkan;

            if ($bayar > $spp) {
                $kembalian = $bayar - $spp;
                $dibayarkan = $bayar - $kembalian;
                $kekurangan = 0;
                $status = 1;
            } elseif ($bayar < $spp) {
                $kembalian = 0;
                $kekurangan = $spp - $bayar;
                $dibayarkan = $spp - $kekurangan;
                $status = 0;
            } else {
                $kekurangan = 0;
                $kembalian = 0;
                $status = 1;
            }


            $user = Auth::user()->id;

            Pembayaran::insert([
                "sumbangan_id" => $sumbangan->id,
                "siswa_id" => $req->siswa_id,
                "user_id" => $user,
                "dibayarkan" => $req->dibayarkan,
                "kembalian" => $kembalian,
                "kekurangan" => $kekurangan,
                "tanggal_bayar" => $req->tanggal_bayar,
                "bulan" => $req->bulan,
                "detail_keterangan" => $req->detail_keterangan,
                "keterangan_pembayaran" => $req->keterangan_pembayaran,
                "status_sumbangan" => $status,
                "created_at" => Carbon::now(),
            ]);
        }

        return back();
    }

    public function show($id)
    {
        $data = Pembayaran::find($id);
        return view('main.pembayaran.show', ['item' => $data]);
    }

    public function detail($id)
    {
        $data = Pembayaran::find($id);
        return view('main.pembayaran.detail', ['item' => $data]);
    }

    public function update(Request $req, $id)
    {
        $req->validated();
        Pembayaran::find($id)->update($req->all());
        return redirect()->route('pembayaran')->with('success', 'berhasil di update');
    }

    public function delete($id)
    {
        Pembayaran::find($id)->delete();
        return back();
    }

    public function print($id)
    {
        $data = Pembayaran::find($id);
        return view('main.pembayaran.print', ['data' => $data]);
    }
}
