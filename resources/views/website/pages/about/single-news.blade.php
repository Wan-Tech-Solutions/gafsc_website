@extends('website.layouts.master')

@section('title')
    {{ $blog->title }}
@endsection

@section('description')
    {{ $blog->short }}
@endsection

@section('head')
    <meta property="og:image" content="{{ $blog->img }}" />
@endsection


@section('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Open+Sans&display=swap');

            .blog-details h1,
            .blog-details h2,
            .blog-details h3,
            .blog-details h4,
            .blog-details h5,
            .blog-details h6 {
                font-family: 'Roboto Condensed', sans-serif;
                font-weight: 700;
            }
            
            .blog-details {
                font-family: 'Open Sans', sans-serif;
                line-height: 1.6;
            }
            
            .blog-details p,
            .blog-details span,
            .blog-details div,
            .blog-details a {
                font-family: inherit;
                line-height: inherit;
            }
    </style>
@endsection


@section('content')
    <main class="main">

        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h5 class="breadcrumb-title">{{ $blog->title }}</h5>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">About Us</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>


        <div class="blog-single-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrapper">
                            <div class="blog-single-content">
                                <div class="blog-thumb-img">
                                    <img src="{{ $blog->img }}" alt="thumb">
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="blog-meta-left">
                                            <ul>
                                                <li><i class="far fa-user"></i><a href="javascript:void(0)">
                                                        {{ $blog->published_by }}</a>
                                                </li>
                                                <li><i class="far fa-calendar"></i>
                                                    {{ $blog->created_at->format('M d, Y') }}
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="blog-details">
                                        <h3 class="blog-details-title mb-20">{{ $blog->title }}
                                        </h3>
                                        <p class="text-justify">
                                            {!! $blog->content !!}
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        @include('website.layouts.sidebar')
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
