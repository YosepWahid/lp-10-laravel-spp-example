@extends('layouts.app')

@section('title', 'Sumbangan')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h6>Sumbangan Detail</h6>


                        <a href="{{ route('sumbangan') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Sumbangan</span>
                                        <span>{{ number_format($item->sumbangan, 2, '.', ',') }}</span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Tabungan</span>
                                        <span>{{ number_format($item->tabungan, 2, '.', ',') }}</span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Total Tabungan</span>
                                        <span>{{ number_format($item->total, 2, '.', ',') }}</span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Tahun</span>
                                        <span>
                                            {{ $item->tahun }}
                                        </span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Keterangan</span>
                                        <span>
                                            {{ $item->keterangan }}
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
