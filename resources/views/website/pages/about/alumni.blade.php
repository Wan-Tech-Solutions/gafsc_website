@extends('website.layouts.master')

@section('title')
    Alumni
@endsection


@section('content')
    <main class="main">

        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Alumni</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">About Us</a></li>
                    <li class="active">Alumni</li>
                </ul>
            </div>
        </div>


        <div class="alumni pt-120 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="content-img wow fadeInLeft" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInLeft;">
                            <img src="{{ asset('img/pages/alumni.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-info wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Alumni Story</span>
                                <h2 class="site-title">
                                    Hear From Our <span>Latest 2023</span> Alumni Story!
                                </h2>
                            </div>
                            <p class="content-text">
                                There are many variations of passages available but the majority have suffered
                                alteration in some form by injected humour randomised words which don't look even
                                slightly believable. If you are going to use passage you need sure there anything
                                embarrassing first true generator on the Internet.
                            </p>
                            <p class="content-text mt-2">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="alumni-details pb-80">
            <div class="container">
                <div class="details-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="details-item">
                                <h3 class="mb-3">Welcome To Our Community</h3>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which don't
                                    look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                    need to be sure there isn't anything embarrassing hidden in the middle of text.
                                </p>
                                <p class="mt-2">
                                    It is a long established fact that a reader will be distracted by the readable content
                                    of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters, as opposed to using Content here content
                                    here making it look like readable English.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="details-item">
                                <h3 class="mb-3">Alumni Updates</h3>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which don't
                                    look even slightly believable.
                                </p>
                                <ul class="content-list mt-2">
                                    <li><i class="fas fa-check-circle"></i>Sed ut perspiciatis unde omnis iste natus error
                                        sit doloremque laudantium.</li>
                                    <li><i class="fas fa-check-circle"></i>Totam rem aperiam eaque ipsa quae ab illo
                                        inventore veritatis.</li>
                                    <li><i class="fas fa-check-circle"></i>Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur aut odit.</li>
                                    <li><i class="fas fa-check-circle"></i>Dolores eos qui ratione voluptatem sequi
                                        nesciunte porro quisquam est.</li>
                                    <li><i class="fas fa-check-circle"></i>Etos qui ratione voluptatem sequi nesciunte porro
                                        quisquam est.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="details-item">
                                <img src="assets/img/alumni/02.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="details-item">
                                <h3 class="my-3">Alumni Stories</h3>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which don't
                                    look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                    need to be sure there isn't anything embarrassing hidden in the middle of text.
                                </p>
                                <p class="mt-2">
                                    It is a long established fact that a reader will be distracted by the readable content
                                    of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters, as opposed to using Content here content
                                    here making it look like readable English.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="details-item">
                                <h3 class="my-3">Our Alumni Challenges</h3>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which don't
                                    look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                    need to be sure there isn't anything embarrassing hidden in the middle of text.
                                </p>
                                <p class="mt-2">
                                    It is a long established fact that a reader will be distracted by the readable content
                                    of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters, as opposed to using Content here content
                                    here making it look like readable English.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="testimonial-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Testimonials</span>
                            <h2 class="site-title">What Our Alumni <span>Say's</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme owl-loaded owl-drag">





                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-1185px, 0px, 0px); transition: all 0s ease 0s; width: 4349px;">
                            <div class="owl-item cloned" style="width: 385.333px; margin-right: 10px;">
                                <div class="testimonial-single">
                                    <div class="testimonial-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-quote">
                                        <p>
                                            There are many variations of passages available but the majority have suffered
                                            alteration in some form by injected humour randomised words slightly believable.
                                        </p>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-author-img">
                                            <img src="assets/img/testimonial/03.jpg" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Randal Grand</h4>
                                            <p>Founder &amp; CEO</p>
                                        </div>
                                    </div>
                                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 385.333px; margin-right: 10px;">
                                <div class="testimonial-single">
                                    <div class="testimonial-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-quote">
                                        <p>
                                            There are many variations of passages available but the majority have suffered
                                            alteration in some form by injected humour randomised words slightly believable.
                                        </p>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-author-img">
                                            <img src="assets/img/testimonial/04.jpg" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Edward Miles</h4>
                                            <p>Founder &amp; CEO</p>
                                        </div>
                                    </div>
                                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 385.333px; margin-right: 10px;">
                                <div class="testimonial-single">
                                    <div class="testimonial-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-quote">
                                        <p>
                                            There are many variations of passages available but the majority have suffered
                                            alteration in some form by injected humour randomised words slightly believable.
                                        </p>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-author-img">
                                            <img src="assets/img/testimonial/05.jpg" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Ninal Gordon</h4>
                                            <p>Founder &amp; CEO</p>
                                        </div>
                                    </div>
                                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 385.333px; margin-right: 10px;">
                                <div class="testimonial-single">
                                    <div class="testimonial-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-quote">
                                        <p>
                                            There are many variations of passages available but the majority have suffered
                                            alteration in some form by injected humour randomised words slightly believable.
                                        </p>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-author-img">
                                            <img src="assets/img/testimonial/01.jpg" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Anthony Nicoll</h4>
                                            <p>Founder &amp; CEO</p>
                                        </div>
                                    </div>
                                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 385.333px; margin-right: 10px;">
                                <div class="testimonial-single">
                                    <div class="testimonial-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-quote">
                                        <p>
                                            There are many variations of passages available but the majority have suffered
                                            alteration in some form by injected humour randomised words slightly believable.
                                        </p>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-author-img">
                                            <img src="assets/img/testimonial/02.jpg" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Richard Lock</h4>
                                            <p>Founder &amp; CEO</p>
                                        </div>
                                    </div>
                                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 385.333px; margin-right: 10px;">
                                <div class="testimonial-single">
                                    <div class="testimonial-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-quote">
                                        <p>
                                            There are many variations of passages available but the majority have suffered
                                            alteration in some form by injected humour randomised words slightly believable.
                                        </p>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-author-img">
                                            <img src="assets/img/testimonial/03.jpg" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Randal Grand</h4>
                                            <p>Founder &amp; CEO</p>
                                        </div>
                                    </div>
                                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 385.333px; margin-right: 10px;">
                                <div class="testimonial-single">
                                    <div class="testimonial-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-quote">
                                        <p>
                                            There are many variations of passages available but the majority have suffered
                                            alteration in some form by injected humour randomised words slightly believable.
                                        </p>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-author-img">
                                            <img src="assets/img/testimonial/04.jpg" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Edward Miles</h4>
                                            <p>Founder &amp; CEO</p>
                                        </div>
                                    </div>
                                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 385.333px; margin-right: 10px;">
                                <div class="testimonial-single">
                                    <div class="testimonial-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-quote">
                                        <p>
                                            There are many variations of passages available but the majority have suffered
                                            alteration in some form by injected humour randomised words slightly believable.
                                        </p>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-author-img">
                                            <img src="assets/img/testimonial/05.jpg" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Ninal Gordon</h4>
                                            <p>Founder &amp; CEO</p>
                                        </div>
                                    </div>
                                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 385.333px; margin-right: 10px;">
                                <div class="testimonial-single">
                                    <div class="testimonial-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-quote">
                                        <p>
                                            There are many variations of passages available but the majority have suffered
                                            alteration in some form by injected humour randomised words slightly believable.
                                        </p>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-author-img">
                                            <img src="assets/img/testimonial/01.jpg" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Anthony Nicoll</h4>
                                            <p>Founder &amp; CEO</p>
                                        </div>
                                    </div>
                                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 385.333px; margin-right: 10px;">
                                <div class="testimonial-single">
                                    <div class="testimonial-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-quote">
                                        <p>
                                            There are many variations of passages available but the majority have suffered
                                            alteration in some form by injected humour randomised words slightly believable.
                                        </p>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-author-img">
                                            <img src="assets/img/testimonial/02.jpg" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Richard Lock</h4>
                                            <p>Founder &amp; CEO</p>
                                        </div>
                                    </div>
                                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 385.333px; margin-right: 10px;">
                                <div class="testimonial-single">
                                    <div class="testimonial-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-quote">
                                        <p>
                                            There are many variations of passages available but the majority have suffered
                                            alteration in some form by injected humour randomised words slightly believable.
                                        </p>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-author-img">
                                            <img src="assets/img/testimonial/03.jpg" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Randal Grand</h4>
                                            <p>Founder &amp; CEO</p>
                                        </div>
                                    </div>
                                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                aria-label="Previous">‹</span></button><button type="button" role="presentation"
                            class="owl-next"><span aria-label="Next">›</span></button></div>
                    <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button
                            role="button" class="owl-dot"><span></span></button></div>
                </div>
            </div>
        </div>

    </main>
@endsection
