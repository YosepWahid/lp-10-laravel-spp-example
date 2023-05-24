@extends('layouts.app')

@section('title', 'User')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h6>Update User</h6>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('user.update', $item->id) }}" method="Post">
                                @csrf
                                <div class="mb-3">
                                    <label for="roles" class="form-label">Peran</label>
                                    <select name="role_id" id="roles" class="form-select">
                                        <option value="{{ $item->role_id }}" selected>-</option>
                                        @foreach ($side as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="name" name="name"
                                        value="{{ $item->name }}">
                                </div>


                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="username" name="username"
                                        value="{{ $item->username }}">
                                </div>


                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="email" name="email"
                                        value="{{ $item->email }}">
                                </div>


                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="password" name="password">
                                </div>

                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="password confirm"
                                        name="password_two">
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
