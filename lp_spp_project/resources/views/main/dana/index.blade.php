@extends('layouts.app')

@section('title', 'Dana')
@section('content')
    <span class="mb-3">
        @include('main.dana.praktek.index')
    </span>

    <span>
        @include('main.dana.pembangunan.index')
    </span>

@endsection
