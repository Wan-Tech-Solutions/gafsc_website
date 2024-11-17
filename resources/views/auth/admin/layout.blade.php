<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite-ver=3.0.2.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme-ver=3.0.2.css') }}">

</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center"><a href="javascript:void(0)" class="logo-link"><img
                                    class="logo-light logo-img logo-img-lg" src="{{ asset('assets/images/logo.png') }}"
                                    srcset="{{ asset('assets/images/logo.png') }}" alt="logo"><img
                                    class="logo-dark logo-img logo-img-lg"
                                    src="{{ asset('assets/images/logo-dark.png') }}"
                                    srcset="{{ asset('assets/images/logo-dark2x.png') }} 2x" alt="logo-dark"></a></div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">@yield('title')</h4>
                                        <div class="nk-block-des">
                                            <p>Access the Dashlite panel using your email and passcode.</p>
                                        </div>
                                    </div>
                                </div>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-6 order-lg-last">
                                    <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                        <li class="nav-item"><a class="nav-link" href="javascript:void(0)#">Terms &
                                                Condition</a></li>
                                        <li class="nav-item"><a class="nav-link" href="javascript:void(0)#">Privacy
                                                Policy</a></li>
                                        <li class="nav-item"><a class="nav-link" href="javascript:void(0)#">Help</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="nk-block-content text-center text-lg-start">
                                        <p class="text-soft">&copy; 2022 Dashlite. All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/bundle-ver=3.0.2.js') }}"></script>
    <script src="{{ asset('assets/js/scripts-ver=3.0.2.js') }}"></script>
    <script src="{{ asset('assets/js/demo-settings-ver=3.0.2.js') }}"></script>

</body>

</html>
