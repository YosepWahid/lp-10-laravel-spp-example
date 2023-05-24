<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('template/img/favicon.png') }}" />
    @include('include.header')
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
</head>

<body class="g-sidenav-show bg-gray-100">
    @include('include.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <!-- Navbar -->
        @include('include.navbar')
        <!-- End Navbar -->
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>
    @include('include.footer')
</body>

</html>
