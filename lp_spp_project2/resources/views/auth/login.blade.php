@extends('layout.guest')
@section('title', 'Login')
@section('content')
    <div class="card-body">
        @if (session('error'))
            <div class="alert alert-primary alert-dismissible fade show text-white" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('error') }}
            </div>
        @endif

        @error('user')
            <div class="alert alert-primary alert-dismissible fade show text-white" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ $message }}
            </div>
        @enderror


        <script>
            var alertList = document.querySelectorAll('.alert');
            alertList.forEach(function(alert) {
                new bootstrap.Alert(alert)
            })
        </script>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label>Email</label>
            <div class="mb-3">
                <input type="text" class="form-control" name="user" placeholder="Email" aria-label="Email "
                    aria-describedby="email-addon" />
            </div>
            <label>Password</label>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password"
                    aria-describedby="password-addon" />
            </div>
            {{-- <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="rememberMe"/>
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div> --}}
            <div class="text-center">
                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">
                    Sign in
                </button>
            </div>
        </form>
    </div>
@endsection
