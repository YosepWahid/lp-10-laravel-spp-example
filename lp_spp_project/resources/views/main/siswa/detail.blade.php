@extends('layouts.app')

@section('title', 'Siswa')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h6>Siswa Detail</h6>


                        <a href="{{ route('siswa') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Nama Siswa:</span>
                                        <span>{{ $item->nama_siswa }}</span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Nama Wali:</span>
                                        <span>{{ $item->wali_kelas }}</span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Kelas</span>
                                        <span>{{ $item->kelas->tingkatan_kelas }}</span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Angkatan</span>
                                        <span>
                                            {{ $item->angkatan->angkatan }} -
                                            {{ $item->angkatan->tahun_mulai }} / {{ $item->angkatan->tahun_berakhir }}
                                        </span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Alamat</span>
                                        <span>
                                            {{ $item->alamat == null ? '-' : $item->alamat }}
                                        </span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">No Tlpn</span>
                                        <span>
                                            {{ $item->tlpn == null ? '-' : $item->tlpn }}
                                        </span>
                                    </section>
                                </li>

                                <li class="list-group-item"></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
