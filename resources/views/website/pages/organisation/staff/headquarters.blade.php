@extends('website.layouts.master')

@section('title')
    Policy Committee
@endsection


@section('content')
    <main class="main">

        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Headquarter's Staff</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Organisation</a></li>
                    <li class="active">Headquarter's Staff</li>
                </ul>
            </div>
        </div>


        <div class="club-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Organisation</span>
                            <h2 class="site-title">Headquarter's Staff</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                             <div class="team-img">
                                <a href="{{ route('organisation.command.commandant') }}"><img
                                        src="{{ asset('img/team/policy/CMDT.jpg') }}" alt="thumb"> </a>
                            </div>
                            <div class="team-content">
                                <a href="{{ route('organisation.command.commandant') }}">
                                    <div class="team-bio">
                                        <h6><a href="javascript:void(0)">MAJ GEN M ESSIEN</a></h6>
                                        <span>
                                            (COMDT, CHAIRMAN)</span>
                                    </div>
                                    <span class="team-social-btn"><i class="far fa-link"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                               <a href="{{ route('organisation.command.d_commandant') }}"><img
                                        src="{{ asset('img/team/policy/DCMDT.jpg') }}" alt="thumb"> </a>
                            </div>
                            <div class="team-content">
                               <a href="{{ route('organisation.command.d_commandant') }}">
                                    <div class="team-bio">
                                        <h6><a href="javascript:void(0)">BRIG GEN AK DAWOHOSO
                                        </a></h6>
                                        <span>(DEP COMDT, MEMBER)</span>
                                    </div>
                                    <span class="team-social-btn"><i class="far fa-link"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                      <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <a href="{{ route('organisation.policy-committee.ascom_senior_division') }}"><img
                                        src="{{ asset('img/team/staff-faculty/ASCOM.jpg') }}" alt="thumb"> </a>
                            </div>
                            <div class="team-content">
                                <a href="{{ route('organisation.policy-committee.ascom_senior_division') }}">
                                    <div class="team-bio">
                                        <h6><a href="javascript:void(0)">AIR CDRE TN OKAI</a></h6>
                                        <span>(ASCOM SNR DIV, MEMBER)</span>
                                    </div>
                                    <span class="team-social-btn"><i class="far fa-link"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                             <div class="team-img">
                                <a href="#"><img
                                        src="{{ asset('img/avatar.jpg') }}" alt="thumb"> </a>
                            </div>
                            <div class="team-content">
                                <a href="#">
                                    <div class="team-bio">
                                        <h6><a href="javascript:void(0)">BRIG GEN FO OKAE-YEBOAH</a>
                                        </h6>
                                        <span>(ASCOM JNR DIV, MEMBER)</span>
                                    </div>
                                    <span class="team-social-btn"><i class="far fa-link"></i></span>
                                </a>
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
                                    <h6><a href="javascript:void(0)">COL WA KWABIAH
                                        </a></h6>
                                    <span>(CHIEF COORD, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/avatar.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">
                                        COL F BOTCHIE
                                        </a></h6>
                                    <span> (DIR CORP AFFAIRS, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/CI_JOINT.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">COL DA AGBEKOR
                                        </a></h6>
                                    <span>(CI JOINT STUDIES, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/CI_NAVY.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">
                                        CAPT(GN) KK DONKOR
                                        </a></h6>
                                    <span>(CI NAVAL FACULTY, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/CI_AIRFORCE.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">WG CDR BD ARYEE</a></h6>
                                    <span>(A/CI AIR FACULTY, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/CI-ARMY-A.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">
                                            COL SNY ESSEL
                                        </a></h6>
                                    <span>(CI A {SNR DIV} ARMY FACULTY, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/CI-ARMY-B.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">COL M MFUM

                                        </a></h6>
                                    <span>(CI B {SNR DIV} ARMY FACULTY, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/CI_A_JD.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">COL F DEEGBE
                                        </a></h6>
                                    <span>(CI A {JNR DIV}, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/CI_B_JD.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">COL D BUAH
                                        </a></h6>
                                    <span>(CI B {JNR DIV}, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DA_A_GSOI.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">
                                            WG CDR FM AMEDI
                                        </a></h6>
                                    <span> (GSOI COORD {SNR DIV} MEMBER/SECRETARY)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/FC.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">LT COL DA KUSI

                                        </a></h6>
                                    <span>(FC, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/CO.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">LT COL RY AGBEMAFLE

                                        </a></h6>
                                    <span>(CO, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/IT_MANAGER.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">MAJ CRW QUARTEY

                                        </a></h6>
                                    <span>(IT MANAGER, MEMBER)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
