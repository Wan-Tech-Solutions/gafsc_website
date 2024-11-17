<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Carlcorp" name="author" />
    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('back/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('back/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('back/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('back/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('back/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    @yield('data-to-vue')
</head>

<body>

    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card overflow-hidden">
                            <div class="row g-0">

                                <div class="col-lg-12">
                                    <div class="p-lg-2 p-4">
                                        <div class="text-center border-bottom">
                                            <h3 class="text-primary">@yield('title')</h3>
                                            <p class="text-muted">@yield('help_text')</p>
                                        </div>

                                        <div class="p-2" id="app">
                                            @yield('content')
                                        </div>

                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- end Footer -->
    </div>

    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    @if (Route::currentRouteName() != 'login')
        <script src="{{ mix('js/app.js') }}" defer></script>
    @endif


    <script src="{{ asset('back/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('back/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('back/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('back/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('back/assets/js/plugins.js') }}"></script>
    <!-- password-addon init -->
    <script src="{{ asset('back/assets/js/pages/password-addon.init.js') }}"></script>

</body>

</html>
