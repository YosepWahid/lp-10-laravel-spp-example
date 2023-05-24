@extends('layouts.app')

@section('title', 'Jurusan')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h6>Jurusan Update</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <form action="{{ route('jurusan.update', $item->id) }}" method="Post">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" name="nama_jurusan" id="jurusan" class="form-control"
                                        placeholder="Nama Jurusan" value="{{ $item->nama_jurusan }}">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="kepanjangan" id="kepanjangan" class="form-control"
                                        placeholder="Kepanjangan" value="{{ $item->kepanjangan }}">
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
