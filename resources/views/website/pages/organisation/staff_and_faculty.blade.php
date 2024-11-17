@extends('website.layouts.master')

@section('title')
    Staff & Faculty
@endsection


@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Staff & Faculty</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Organisation</a></li>
                    <li class="active">Staff & Faculty</li>
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
                            <h2 class="site-title">Staff and Faculty</h2>
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
                                    <a href="{{ route('organisation.academic-board.dean') }}">
                                        <h6><a href="javascript:void(0)">DR VLADIMIR ANTWI-DANSO</a></h6>
                                        <span>(DEAN)</span>
                                    </a>
                                    <h6><a href="{{ route('organisation.academic-board.dean') }}">READ PROFILE</a></h6>
                                </div>
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
                                    <a href="{{ route('organisation.academic-board.vice_dean') }}">
                                        <h6><a href="javascript:void(0)">DR NAPOLEON KURANTIN</a></h6>
                                        <span>(VICE DEAN)</span>
                                    </a>
                                    <h6><a href="{{ route('organisation.academic-board.vice_dean') }}">READ PROFILE</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/SNR_RESEARCH1.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">AMB LAWRENCE SATUH

                                        </a></h6>
                                    <span>(SENIOR RESEARCH FELLOW)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/SNR_RESEARCH4.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">DR QUASSY ADJAPAWN

                                        </a></h6>
                                    <span>(SENIOR RESEARCH FELLOW)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/SNR_RESEARCH3.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">DR ISHMAEL NORMAN

                                        </a></h6>
                                    <span>(SENIOR RESEARCH FELLOW)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/SNR_RESEARCH2.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">DR BONI YAO GEBE

                                        </a></h6>
                                    <span>(SENIOR RESEARCH FELLOW)</span>
                                </div>
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
                                    <span>(CHIEF COORD)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DCA.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">COL F BOTCHIE
                                        </a></h6>
                                    <span>(DIR CORP AFFAIRS)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DIR_INT_AFFAIRS.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">COL CB BAPUUROH
                                        </a></h6>
                                    <span>(DIR INT STAFF & STUDENTS)</span>
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
                                    <h6><a href="javascript:void(0)">COL SA ARHIN
                                        </a></h6>
                                    <span>(DIR R&D)</span>
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
                                    <span> (CI JOINT STUDIES)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/CI_NAVY.jpg') }}" alt="thumb"></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">CAPT(GN) KK DONKOR</a></h6>
                                        <span>(CI NAVAL FACULTY)</span>
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
                                    <h6><a href="javascript:void(0)">COL LS AGBEDOAWU</a></h6>
                                    <span>(CI ACADEMIC STUDIES)</span>
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
                                    <h6><a href="javascript:void(0)">COL SNY ESSEL
                                        </a></h6>
                                    <span>(CI A SNR DIV)</span>
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
                                    <h6><a href="javascript:void(0)">COL M MFUM</a></h6>
                                    <span>(CI B SNR DIV)</span>
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
                                    <span>(CI A JNR DIV)</span>
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
                                    <span>(CI B JNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                {{--<a href="{{ route('organisation.academic-board.acting_chief_instructor') }}">--}}
                                <img src="{{ asset('img/team/staff-faculty/CI_AIRFORCE.jpg') }}" alt="thumb"></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">WG CDR BD ARYEE</a></h6>
                                    <span>(A/CI AIR FACULTY)</span>
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
                                    <h6><a href="javascript:void(0)">WG CDR FM AMEDI
                                        </a></h6>
                                    <span> (GSOI COORD/SNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/dummy.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">LT COL AKOM

                                        </a></h6>
                                    <span>
                                        (GSOI JNR DIV)</span>
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
                                    <span>(FC)</span>
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
                                    <span>(CO)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DS3.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">LT COL MK HAGAN

                                        </a></h6>
                                    <span>(DS SNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DS2.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">LT COL A BAMFORD

                                        </a></h6>
                                    <span>(DS SNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DS1.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">CDR S DAYIRA

                                        </a></h6>
                                    <span>(DS SNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DS11.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">WG CDR SAA AMPENE
                                        </a></h6>
                                    <span>(DS SNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DS4.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">CDR S MANU
                                        </a></h6>
                                    <span>(DS SNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DS5.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">LT COL G SEDOR
                                        </a></h6>
                                    <span>(DS SNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DS6.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">LT COL N AHMED
                                        </a></h6>
                                    <span>(DS SNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DS7.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">LT COL WABANIE
                                        </a></h6>
                                    <span>(DS SNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DS13.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">LT COL AJ YAYU
                                        </a></h6>
                                    <span>(DS SNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DS8.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">WG CDR G MAIDAWU
                                        </a></h6>
                                    <span>(DS SNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DS9.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">WG CDR J AKUAMOAH
                                        </a></h6>
                                    <span>(DS SNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DS12.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">LT COL IK AMEHOHO
                                        </a></h6>
                                    <span> (DS JNR DIV)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/DDCA.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">MAJ C OSEI-DUAH
                                        </a></h6>
                                    <span>(DEP DIR CORP AFFAIRS)</span>
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

                                        </a></h6>
                                    <span>(GSOII SNR DIV)</span>
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

                                        </a></h6>
                                    <span>(GSOII A&Q)</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/ADMIN_OFF.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">FLT LT MAHAMA

                                        </a></h6>
                                    <span>(ADMIN OFFR)</span>
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

                                        </a></h6>
                                    <span>(CAPO)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/REGISTRAR.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">MRS STELLA SERWAA AMPOFO

                                        </a></h6>
                                    <span>(REGISTRAR)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/LIBRARIAN.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">MRS L ATTA-OBENG

                                        </a></h6>
                                    <span>(LIBRARIAN)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/ASST_REGISTRAR.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">MR. KWASI OKYERE-BOATENG

                                        </a></h6>
                                    <span> (ASSISTANT REGISTRAR HR/ADMIN)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/49.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">PRISCILLA OWUSU

                                        </a></h6>
                                    <span> (ASSISTANT REGISTRAR)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="team-img">
                                <img src="{{ asset('img/team/staff-faculty/50.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h6><a href="javascript:void(0)">ANGELINA ANDERSON

                                        </a></h6>
                                    <span>(ASSISTANT REGISTRAR)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection
