<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('template/img/favicon.png') }}" />
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    @include('include.header')
</head>

<body class="">
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-3">
                                <div class="card-header pb-0 text-center bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">
                                        Login
                                    </h3>
                                    <p class="mb-0">
                                        Enter your username/email and password to login
                                    </p>
                                </div>
                                @yield('content')
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="
                        background-image: url('{{ asset('template/img/curved-images/curved6.jpg') }}');
                      ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('include.footer')
</body>

</html>
