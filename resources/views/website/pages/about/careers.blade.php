@extends('website.layouts.master')

@section('title')
    Careers
@endsection

@section('description')
    Openings Available
@endsection


@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Careers</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">About Us</a></li>
                    <li class="active">Careers</li>
                </ul>
            </div>
        </div>
        --}}

        <div class="facility-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Join Our Team</span>
                            <h2 class="site-title">
                                {{ $careers->count() > 0 ? '' : 'No ' }} Openings Available
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="accordion" id="accordionExample">

                        @foreach ($careers as $key => $career)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading_{{ $key }}_{{ $career->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse_{{ $key }}_{{ $career->id }}"
                                        aria-expanded="false"
                                        aria-controls="collapse_{{ $key }}_{{ $career->id }}">
                                        <span><i class="far fa-career"></i></span> {{ $career->position }}
                                    </button>
                                </h2>
                                <div id="collapse_{{ $key }}_{{ $career->id }}"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="heading_{{ $key }}_{{ $career->id }}"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $career->description !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>

    </main>
@endsection
