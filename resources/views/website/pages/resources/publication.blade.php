@extends('website.layouts.master')

@section('title')
    {{ $publication->title }}
@endsection

@section('description')
    {{ $publication->short }}
@endsection



@section('content')
    <main class="main">

        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">{{ $publication->title }}</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Resources</a></li>
                    <li class="active">Publications</li>
                </ul>
            </div>
        </div>


        <div class="blog-single-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrapper">
                            <div class="blog-single-content">
                                @if ($publication->img != null)
                                    <div class="blog-thumb-img">
                                        <img src="{{ $publication->img }}" alt="thumb">
                                    </div>
                                @endif

                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="blog-meta-left">
                                            <ul>
                                                <li><i class="far fa-user"></i><a href="javascript:void(0)">
                                                        {{ $publication->published_by }}</a>
                                                </li>
                                                <li><i class="far fa-calendar"></i>
                                                    {{ $publication->created_at->format('M d, Y') }}
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="blog-details">
                                        <h3 class="blog-details-title mb-20">{{ $publication->title }}
                                        </h3>
                                        <p class="text-justify">
                                            {!! $publication->content !!}
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
