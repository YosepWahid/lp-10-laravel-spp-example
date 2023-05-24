@extends('layouts.app')

@section('title', 'Pembayaran')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h6>Detail Pembayaran - {{ $item->bulan }}</h6>
                        <a href="{{ route('pembayaran') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Sumbangan:</span>
                                        <span>
                                            {{ number_format($item->sumbangan->total, 2, ',', '.') }}
                                        </span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Tanggal Bayar:</span>
                                        <span>
                                            {{ date('d-F-Y', strtotime($item->tanggal_bayar)) }}
                                        </span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Siswa:</span>
                                        <span>
                                            {{ $item->siswa->nama_siswa }}
                                        </span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Petugas:</span>
                                        <span>
                                            {{ $item->user->name }}
                                        </span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Dibayarankan</span>
                                        <span>
                                            {{ number_format($item->dibayarkan, 2, ',', '.') }}
                                        </span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Kembalian</span>
                                        <span>
                                            {{ number_format($item->kembalian, 2, ',', '.') }}
                                        </span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Kekurangan</span>
                                        <span>
                                            {{ number_format($item->kekurangan, 2, ',', '.') }}
                                        </span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Total</span>
                                        <span>
                                            {{ number_format($item->total, 2, ',', '.') }}
                                        </span>
                                    </section>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
