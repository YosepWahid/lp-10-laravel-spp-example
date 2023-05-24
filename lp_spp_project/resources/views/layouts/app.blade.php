<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    @include('links.header')
</head>

<body class="g-sidenav-show bg-gray-100">
    <!-- Side Navbar -->
    @include('layouts.navigation_side')
    <!-- End Navbar -->
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <!-- Top Navbar -->
        @include('layouts.navigation_top')
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            @yield('content')
        </div>


    </main>


    @include('links.footer')
    @stack('script')
</body>

</html>
