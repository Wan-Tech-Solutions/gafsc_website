
<div class="hero-section">
    <div class="hero-slider owl-carousel owl-theme">
        @foreach ($banners as $key => $banner)
            <div class="hero-single" style="background: url({{ $banner->img }})">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-8 mx-auto">
                            <div class="hero-content text-center">
                                <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                    {{-- <i class="far fa-book-open-reader"></i>Welcome To Educa! --}}
                                </h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    {{ $banner->title }}
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    {{ $banner->sub_title }}
                                </p>
                                <div class="hero-btn justify-content-center" data-animation="fadeInUp" data-delay="1s">
                                    <p class="my-3"></p>
                                    {{-- <a href="{{ route('about.history') }}" class="theme-btn">Explore<i
                                            class="fas fa-arrow-right-long"></i>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
