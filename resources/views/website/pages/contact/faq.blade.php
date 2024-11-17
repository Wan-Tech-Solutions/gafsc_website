@extends('website.layouts.master')

@section('title')
    FAQ
@endsection


@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">FAQ</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Contact</a></li>
                    <li class="active">FAQ</li>
                </ul>
            </div>
        </div>
        --}}

        <div class="faq-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="faq-center">
                            <div class="site-heading mb-3 text-center">
                                <span class="site-title-tagline justify-content-center"><i
                                        class="far fa-book-open-reader"></i> Frequently Asked Questions</span>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12">

                        <div class="accordion" id="accordionExample">

                            @foreach ($faqs as $group => $questions)
                                <div class="site-heading mb-3">
                                    <span
                                        class="site-title-tagline text-dark justify-content-start">{{ $group }}</span>
                                </div>

                                @foreach ($questions as $key => $question)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading_{{ $key }}_{{ $question->id }}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse_{{ $key }}_{{ $question->id }}"
                                                aria-expanded="false"
                                                aria-controls="collapse_{{ $key }}_{{ $question->id }}">
                                                <span><i class="far fa-question"></i></span> {{ $question->question }}
                                            </button>
                                        </h2>
                                        <div id="collapse_{{ $key }}_{{ $question->id }}"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_{{ $key }}_{{ $question->id }}"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {!! $question->answer !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
