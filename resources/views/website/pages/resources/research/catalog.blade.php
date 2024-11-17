@extends('website.layouts.master')

@section('title')
    Catalog
@endsection


@section('content')
    <main class="main">

        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Catalog</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Resources</a></li>
                    <li><a href="javascript:void(0)">Research</a></li>
                    <li class="active">Catalog</li>
                </ul>
            </div>
        </div>


        <div class="research-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Research</span>
                            <h2 class="site-title">Our Research <span>Area</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="research-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="research-img">
                                <img src="assets/img/research/01.jpg" alt="">
                            </div>
                            <div class="research-content">
                                <h3 class="research-title">
                                    <a href="research.html#">Science And Technology</a>
                                </h3>
                                <p class="research-text">
                                    There are many variations of passages orem psum available but the majority have
                                    suffer alteration in some form by injected.
                                </p>
                                <div class="research-arrow">
                                    <a href="research.html#" class="theme-btn">Read More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="research-item wow fadeInDown" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInDown;">
                            <div class="research-img">
                                <img src="assets/img/research/02.jpg" alt="">
                            </div>
                            <div class="research-content">
                                <h3 class="research-title">
                                    <a href="research.html#">Business And Entrepreneurship</a>
                                </h3>
                                <p class="research-text">
                                    There are many variations of passages orem psum available but the majority have
                                    suffer alteration in some form by injected.
                                </p>
                                <div class="research-arrow">
                                    <a href="research.html#" class="theme-btn">Read More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="research-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="research-img">
                                <img src="assets/img/research/03.jpg" alt="">
                            </div>
                            <div class="research-content">
                                <h3 class="research-title">
                                    <a href="research.html#">Humanities And Social Sciences</a>
                                </h3>
                                <p class="research-text">
                                    There are many variations of passages orem psum available but the majority have
                                    suffer alteration in some form by injected.
                                </p>
                                <div class="research-arrow">
                                    <a href="research.html#" class="theme-btn">Read More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="research-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: hidden; animation-delay: 0.25s; animation-name: none;">
                            <div class="research-img">
                                <img src="assets/img/research/04.jpg" alt="">
                            </div>
                            <div class="research-content">
                                <h3 class="research-title">
                                    <a href="research.html#">Allied Health Sciences</a>
                                </h3>
                                <p class="research-text">
                                    There are many variations of passages orem psum available but the majority have
                                    suffer alteration in some form by injected.
                                </p>
                                <div class="research-arrow">
                                    <a href="research.html#" class="theme-btn">Read More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="research-item wow fadeInDown" data-wow-delay=".25s"
                            style="visibility: hidden; animation-delay: 0.25s; animation-name: none;">
                            <div class="research-img">
                                <img src="assets/img/research/05.jpg" alt="">
                            </div>
                            <div class="research-content">
                                <h3 class="research-title">
                                    <a href="research.html#">Robort Space Research</a>
                                </h3>
                                <p class="research-text">
                                    There are many variations of passages orem psum available but the majority have
                                    suffer alteration in some form by injected.
                                </p>
                                <div class="research-arrow">
                                    <a href="research.html#" class="theme-btn">Read More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="research-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: hidden; animation-delay: 0.25s; animation-name: none;">
                            <div class="research-img">
                                <img src="assets/img/research/06.jpg" alt="">
                            </div>
                            <div class="research-content">
                                <h3 class="research-title">
                                    <a href="research.html#">Medical Machines Research</a>
                                </h3>
                                <p class="research-text">
                                    There are many variations of passages orem psum available but the majority have
                                    suffer alteration in some form by injected.
                                </p>
                                <div class="research-arrow">
                                    <a href="research.html#" class="theme-btn">Read More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
