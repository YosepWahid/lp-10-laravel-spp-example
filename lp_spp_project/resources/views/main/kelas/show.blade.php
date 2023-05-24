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
                            <form action="{{ route('kelas.update', $item->id) }}" method="Post">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" name="tingkatan_kelas" id="kelas" class="form-control"
                                        placeholder="Tingkatan Kelas" value="{{ $item->tingkatan_kelas }}">
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
