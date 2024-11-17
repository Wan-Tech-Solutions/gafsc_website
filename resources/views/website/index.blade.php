@extends('website.layouts.master')

@section('title')
    Home
@endsection

@section('content')
    @include('website.layouts.banner')

    @if ($noticeboard->title != null)

       <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                            <div class="about-img">
                                <img src="{{ $noticeboard->img }}" alt>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Notice Board</span>
                                <h4 class="site-title">
                                    {{ $noticeboard->title }}
                                </h4>
                            </div>
                            {!! $noticeboard->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="blog-area py-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Latest News</span>
                    </div>
                </div>
            </div>
            <div class="row">
                @if ($blogs->count() > 0)
                    @php
                        $delay = 0;
                    @endphp
                    @foreach ($blogs as $blog)
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item wow fadeInUp" data-wow-delay=".{{ $delay = $delay + 25 }}s">
                                <div class="blog-item-img">
                                    <img src="{{ $blog->img }}" alt="Thumb">
                                    <div class="blog-date"><i class="fal fa-calendar-alt"></i>
                                        {{ $blog->created_at->format('M d, Y') }}</div>
                                </div>
                                <div class="blog-item-info">
                                    <p>
                                    <h4 class="blog-title">
                                        <a href="{{ route('about.blog.single', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h4>
                                    <p class="texttruncate">{{ $blog->short }}</p>
                                    <a class="theme-btn" href="{{ route('about.blog.single', $blog->slug) }}">Read More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    {{--
    <div class="video-area pb-80">
        <div class="container-fluid px-0">
            @desktop
                <div class="video-content" style="background-image: url({{ asset('img/bg/vbg.jpg') }});">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="video-wrapper">
                                <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=VBTlEo5ql5o">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @elsedesktop
                <div class="video-content" style="background-image: url({{ asset('img/bg/vbg-small.png') }});">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="video-wrapper">
                                <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=o77wPMlgp2A">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @enddesktop

        </div>
    </div>
    --}}
    <div class="video-area pb-80">
        <div class="container-fluid px-0">
            @desktop
                <div class="video-content">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="video-wrapper">
                                <iframe width="100%" height="500" src="https://www.youtube.com/embed/VBTlEo5ql5o" 
                                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            @elsedesktop
                <div class="video-content">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="video-wrapper">
                                <iframe width="100%" height="300" src="https://www.youtube.com/embed/VBTlEo5ql5o" 
                                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            @enddesktop
        </div>
    </div>


    @if ($publications->count() > 0)
        <div class="department-area pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Articles &
                                Publications</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @php
                        $delay = 0;
                    @endphp
                    @foreach ($publications as $publication)
                        <div class="col-lg-4">
                            <div class="department-item wow fadeInUp" data-wow-delay=".{{ $delay = $delay + 25 }}s">
                                <div class="department-info">
                                    <h4 class="department-title"><a
                                            href="{{ route('resources.publications.single', $publication->slug) }}">
                                            {{ $publication->title }}
                                        </a>
                                    </h4>
                                    <div class="blog-item-meta">
                                        <ul>
                                            <li><a href="{{ route('resources.publications.single', $publication->slug) }}"><i
                                                        class="far fa-user-circle"></i>
                                                    {{ $publication->published_by }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
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
                                    <div class="department-btn">
                                        <a href="{{ route('resources.publications.single', $publication->slug) }}">Read
                                            More<i class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif


    @if ($downloads->count() > 0)
        <div class="notice-board pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i>Quick Downloads</span>
                        </div>
                    </div>
                </div>

                <div class="research-download">
                    @foreach ($downloads as $key => $file)
                        <a href="{{ route('resources.download', $file->firstMedia('download')->id) }}"><i
                                class="far fa-download"></i> {{ $file->description }}</a>
                    @endforeach
                </div>
                <div class="text-center">
                    <a href="{{ route('resources.downloads') }}" class="btn btn-outline-danger btn-xs">More Downloads</a>
                </div>
            </div>
        </div>
    @endif

    <div class="partner-area bg pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Partners &
                            Affiliations</span>
                    </div>
                </div>
            </div>
{{-- 
            <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                @foreach (\File::allFiles(base_path('public_html/img/partners/')) as $image)
                    <img src="{{ asset('img/partners/' . $image->getFilename()) }}" alt="thumb">
                @endforeach
            </div> --}}
        </div>
    </div>
@endsection
