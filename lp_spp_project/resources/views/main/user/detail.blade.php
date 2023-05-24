@extends('layouts.app')

@section('title', 'user')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h6>User Detail</h6>
                        <a href="{{ route('user') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Name:</span>
                                        <span>{{ $item->username }}</span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Username:</span>
                                        <span>{{ $item->username }}</span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Email</span>
                                        <span>{{ $item->email }}</span>
                                    </section>
                                </li>
                                <li class="list-group-item">
                                    <section class="d-flex flex-column">
                                        <span class="mb-1 font-weight-bold text-primary">Peran</span>
                                        <span>
                                            {{ $item->role->name }}
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
