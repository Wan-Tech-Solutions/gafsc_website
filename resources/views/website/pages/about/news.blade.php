@extends('website.layouts.master')

@section('title')
    Blog
@endsection


@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Blog</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">About Us</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
        --}}

        <div class="blog-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our Blog</span>
                            <h2 class="site-title">Latest News &amp; <span>Blog</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @php
                        $delay = 0;
                    @endphp

                    @foreach ($blogs as $blog)
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item wow fadeInUp"data-wow-delay=".{{ $delay = $delay + 25 }}s"
                                style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                <div class="blog-item-img">
                                    <img src="{{ $blog->img }}" alt="Thumb">
                                    <div class="blog-date"><i class="fal fa-calendar-alt"></i>
                                        {{ $blog->created_at->format('M d, Y') }}</div>
                                </div>
                                <div class="blog-item-info mt-3">
                                    <h4 class="blog-title">
                                        <a href="{{ route('about.blog.single', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h4>
                                    <p>{{ $blog->short }}</p>
                                    <a class="theme-btn" href="{{ route('about.blog.single', $blog->slug) }}">Read More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="pagination-area">
                    {{ $blogs->links() }}
                </div>

            </div>
        </div>

    </main>
@endsection
