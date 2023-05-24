@extends('layouts.app')

@section('title', 'Praktek')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h6>Praktek Update</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <form action="{{ route('praktek.update', $item->id) }}" method="Post">
                                @csrf

                                <div class="mb-3">
                                    <select name="angkatan_id" id="angkatan_id" class="form-select">
                                        <option value="{{ $item->angkatan_id }}" selected>-</option>
                                        @foreach ($side as $data)
                                            <option value="{{ $data->id }}">
                                                {{ $data->jurusan->nama_jurusan }} -
                                                {{ $data->tahun_mulai }}/{{ $data->tahun_berakhir }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <input type="number" name="dana" id="dana" class="form-control"
                                        placeholder="dana praktek" value="{{ $item->dana }}">
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
