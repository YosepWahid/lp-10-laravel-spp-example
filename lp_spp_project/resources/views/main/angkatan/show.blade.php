@extends('layouts.app')

@section('title', 'Angkatan')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h6>Angkatan Update</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <form action="{{ route('angkatan.update', $item->id) }}" method="Post">
                                @csrf

                                <div class="mb-3">
                                    <input type="text" name="angkatan" id="angkatan" class="form-control"
                                        placeholder="Nama Angkatan" value="{{ $item->angkatan }}">
                                </div>



                                <div class="mb-3">
                                    <select name="jurusan_id" id="id_jurusan" class="form-select">
                                        <option value="{{ $item->jurusan_id }}" selected>-</option>
                                        @foreach ($side as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_jurusan }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-6">
                                        <input type="text" name="tahun_mulai" id="tahun_mulai" class="form-control"
                                            placeholder="tahun mulai" value="{{ $item->tahun_mulai }}">
                                    </div>

                                    <div class="col-6"><input type="text" name="tahun_berakhir" id="tahun berakhir"
                                            class="form-control" placeholder="tahun berakhir"
                                            value="{{ $item->tahun_berakhir }}">
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
