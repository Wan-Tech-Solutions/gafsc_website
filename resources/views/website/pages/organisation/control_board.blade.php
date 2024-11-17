@extends('website.layouts.master')

@section('title')
    Control Board
@endsection


@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Control Board</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Organisation</a></li>
                    <li class="active">Control Board</li>
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
                            <h2 class="site-title">Control Board</h2>
                            <p>MEMBERS OF THE GHANA ARMED FORCES COMMAND AND STAFF COLLEGE CONTROL BOARD</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/control-board/1. HON DOMINIC NITIWUL.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">HON DOMINIC NITIWUL</a></h6>
                                    <span>MP/Minister for Defence <br> Chairman</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/control-board/NEW-CDS.jpg') }}"
                                    alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">LT GEN T OPPONG-PEPRAH</a></h6>
                                    <span>Chief of the Defence Staff <br> Member</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/control-board/NEW-CAS.jpg') }}"
                                    alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">MAJ GEN BK ONWONA</a></h6>
                                    <span>Chief of the Army Staff <br> Member</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/control-board/4. REAR ADMIRAL IA YAKUBU.jpg') }}"
                                    alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">REAR ADMIRAL IA YAKUBU</a></h6>
                                    <span>Chief of the Naval Staff<br> Member</span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/control-board/5.   AVM F ASARE BEKOE.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">AVM F ASARE BEKOE</a></h6>
                                    <span>Chief of the Air Staff <br> Member</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <a href="{{ route('organisation.command.commandant') }}"><img
                                        src="{{ asset('img/team/control-board/CMDT.jpg') }}" alt="thumb"> </a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                        <h6><a href="javascript:void(0)">MAJ GEN M ESSIEN</a></h6>
                                        <span>Commandant, GAFCSC <br> Member</span>
                                    </div>
                                <h6><a href="{{ route('organisation.command.commandant') }}">READ PROFILE</a></h6>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/control-board/7. PROF SAMUEL KWAKU BONSU.jpg') }}"
                                    alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">PROF SAMUEL KWAKU BONSU</a></h6>
                                    <span>Rector (GIMPA) <br> Member</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/control-board/8.   DR EA DZIKUM.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">DR EA DZIKUM</a></h6>
                                    <span>Chief Director (MOD) <br> Member/Secretary</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection
