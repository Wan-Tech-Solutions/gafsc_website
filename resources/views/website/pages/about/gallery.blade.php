@extends('website.layouts.master')

@section('title')
    Gallery
@endsection

@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Gallery</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">About Us</a></li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
        --}}

        <div class="gallery-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Gallery</span>
                            <h2 class="site-title">Our Photo <span>Gallery</span></h2>
                        </div>
                    </div>
                </div>


                @foreach ($album as $gallery)
                    <h4 class="my-4">{{ $gallery->group }}</h4>
                    <div class="row popup-gallery">

                        @foreach ($gallery->media as $media)
                            <div class="col-md-4 wow fadeInUp" data-wow-delay=".25s"
                                style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                <div class="gallery-item">
                                    <div class="gallery-img">
                                        <img src="{{ $media->getUrl() }}" alt="">
                                    </div>
                                    <div class="gallery-content">
                                        <a class="popup-img gallery-link" href="{{ $media->getUrl() }}"><i
                                                class="fal fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach

            </div>
        </div>

    </main>
@endsection
