@extends('website.layouts.master')

@section('title')
    Publications
@endsection



@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Publications</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Resources</a></li>
                    <li class="active">Publications</li>
                </ul>
            </div>
        </div>
        --}}


        <div class="research-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Resources</span>
                            <h2 class="site-title">Our Publications</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($publications as $publication)
                        <div class="col-md-6 col-lg-4">
                            <div class="research-item wow fadeInUp" data-wow-delay=".25s"
                                style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">

                                <div class="research-content">
                                    <h3 class="research-title">
                                        <a
                                            href="{{ route('resources.publications.single', $publication->slug) }}">{{ $publication->title }}</a>
                                    </h3>
                                    <div class="blog-item-meta">
                                        <ul>
                                            <li><a href="{{ route('resources.publications.single', $publication->slug) }}"><i
                                                        class="far fa-user-circle"></i>
                                                    {{ $publication->published_by }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="research-text">
                                        {{ $publication->short }}
                                    </p>
                                    <div class="blog-item-meta">
                                        <ul>
                                            <li class="text-center"><a
                                                    href="{{ route('resources.publications.single', $publication->slug) }}">
                                                    {{ $publication->type }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="research-arrow">
                                        <a href="{{ route('resources.publications.single', $publication->slug) }}"
                                            class="theme-btn">Read More<i class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>
@endsection
