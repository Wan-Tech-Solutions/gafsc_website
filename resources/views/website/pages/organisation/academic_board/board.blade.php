@extends('website.layouts.master')

@section('title')
    Academic Board
@endsection


@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Academic Board</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Organisation</a></li>
                    <li class="active">Academic Board</li>
                </ul>
            </div>
        </div>
        --}}

        <div class="club-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Organisation</span>
                            <h2 class="site-title">Academic Board</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <a href="{{ route('organisation.academic-board.dean') }}"><img
                                        src="{{ asset('img/team/staff-faculty/DEAN.jpg') }}" alt="thumb"> </a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                        <h6><a href="javascript:void(0)">DR VLADIMIR ANTWI-DANSO</a>
                                        </h6>
                                        <span>
                                            (DEAN, CHAIRMAN)</span>
                                    </div>
                                <h6><a href="{{ route('organisation.academic-board.dean') }}">READ PROFILE</a></h6>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <a href="{{ route('organisation.academic-board.vice_dean') }}"> <img
                                        src="{{ asset('img/team/staff-faculty/VICE_DEAN.jpg') }}" alt="thumb"></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                        <h6><a href="javascript:void(0)">DR NAPOLEON KURANTIN</a>
                                        </h6>
                                        <span>(VICE DEAN, MEMBER)</span>
                                    </div>
                                <h6><a href="{{ route('organisation.academic-board.vice_dean') }}">READ PROFILE</a></h6>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <a href="{{ route('organisation.command.d_commandant') }}"><img
                                    src="{{ asset('img/team/policy/DCMDT.jpg') }}" alt="thumb"> 
                                </a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">BRIG GEN AK DAWOHOSO</a></h6>
                                    <span>(DEP COMDT, MEMBER)</span>
                                </div>
                                <h6><a href="{{ route('organisation.command.d_commandant') }}">READ PROFILE</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                               <a href="{{ route('organisation.policy-committee.ascom_senior_division') }}">
                                   <img src="{{ asset('img/team/staff-faculty/ASCOM.jpg') }}" alt="thumb"> </a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                        <h6><a href="javascript:void(0)">AIR CDRE TN OKAI</a></h6>
                                        <span>(ASCOM SNR DIV, MEMBER)</span>
                                    </div>
                               <h6><a href="{{ route('organisation.policy-committee.ascom_senior_division') }}">READ PROFILE</a></h6>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/C_COORD.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">COL W KWABIAH</a></h6>
                                    <span>(CHIEF COORD, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/academic/6.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">DR YAW APPIAH-MARFO</a></h6>
                                    <span>(GIMPA COORDINATOR, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/academic/LIBRARIAN.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">MRS L ATTA-OBENG</a></h6>
                                    <span>(LIBRARIAN, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/academic/8.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">MRS STELLA SERWAA AMPOFO</a></h6>
                                    <span>( REGISTRAR, SECRETARY)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection
