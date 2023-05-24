@extends('layouts.app')

@section('title', 'Sumbangan')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h6>Update Sumbangan</h6>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('sumbangan.update', $item->id) }}" method="Post">
                                @csrf
                                <div class="mb-3">
                                    <input type="number" name="sumbangan" id="sumbangan" class="form-control"
                                        placeholder="sumbangan" value="{{ $item->sumbangan }}">
                                </div>

                                <div class="mb-3">
                                    <input type="number" name="tabungan" id="tabungan" class="form-control"
                                        placeholder="tabungan" value="{{ $item->tabungan }}">
                                </div>

                                <div class="mb-3">
                                    <textarea name="keterangan" id="keterangan" cols="5" rows="3" class="form-control">{{ $item->keterangan }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <input type="date" name="tahun" id="tahun" class="form-control"
                                        placeholder="tahun">
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
