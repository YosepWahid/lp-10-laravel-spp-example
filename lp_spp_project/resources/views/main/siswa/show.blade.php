@extends('layouts.app')

@section('title', 'Siswa')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h6>Update Siswa</h6>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('siswa.update', $item->id) }}" method="Post">
                                @csrf
                                <div class="mb-3">
                                    <select name="angkatan_id" id="angkatan_id" class="form-select">
                                        <option value="{{ $item->angkatan_id }}" selected>-</option>
                                        @foreach ($side as $data)
                                            <option value="{{ $data->id }}">{{ $data->angkatan }} -
                                                {{ $data->jurusan->nama_jurusan }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <select name="kelas_id" id="kelas_id" class="form-select">
                                        <option value="{{ $item->kelas_id }}" selected>-</option>
                                        @foreach ($side_two as $data)
                                            <option value="{{ $data->id }}">{{ $data->tingkatan_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <input type="number" name="nisn" id="nia" class="form-control"
                                        placeholder="NISN" value="{{ $item->nisn }}">
                                </div>

                                <div class="mb-3">
                                    <input type="text" name="wali_kelas" id="wali" class="form-control"
                                        placeholder="wali kelas" value="{{ $item->wali_kelas }}">
                                </div>

                                <div class="mb-3">
                                    <input type="text" name="nama_siswa" id="siswa" class="form-control"
                                        placeholder="nama siswa" value="{{ $item->nama_siswa }}">
                                </div>

                                <div class="mb-3">
                                    <input type="number" name="tlpn" id="tlpn" class="form-control"
                                        placeholder="nomer tlpn" value="{{ $item->tlpn }}">
                                </div>

                                <div class="mb-3">
                                    <textarea name="alamat" id="alamat" cols="3" rows="5" class="form-control">{{ $item->alamat }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
