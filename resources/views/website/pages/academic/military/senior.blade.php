@extends('website.layouts.master')

@section('title')
    Senior Division
@endsection


@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Senior Division</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Academics</a></li>
                    <li><a href="javascript:void(0)">Military</a></li>
                    <li class="active">Senior Division</li>
                </ul>
            </div>
        </div>
        --}}

        <div class="department-single-area py-120">
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="department-sidebar">
                                {{--
                                <div class="widget category">
                                    <h4 class="widget-title">Our Departments</h4>
                                    <div class="category-list">
                                        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Business And
                                            Finance</a>
                                        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Law And
                                            Criminology</a>
                                        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>IT And Data
                                            Science</a>
                                        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Health And
                                            Medicine</a>
                                        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Art And
                                            Design</a>
                                        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Information
                                            Technology</a>
                                        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Acting And
                                            Drama</a>
                                        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Human
                                            Resource</a>
                                    </div>
                                </div>
                                --}}
                                <div class="widget department-download">
                                    <h4 class="widget-title">Download</h4>
                                    <a href="academic-single.html#"><i class="far fa-file-pdf"></i> Download Brochure</a>
                                    <a href="academic-single.html#"><i class="far fa-file-pdf"></i> Department Details</a>
                                    <a href="academic-single.html#"><i class="far fa-file-pdf"></i> Journals Departments</a>
                                    <a href="academic-single.html#"><i class="far fa-file-alt"></i> Download Application</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="department-details">
                                {{-- <div class="department-details-img mb-30">
                                    <img src="assets/img/department/single.jpg" alt="thumb">
                                </div> --}}
                                <div class="department-details">
                                    <h3 class="mb-20">TERM 1 – FOUNDATION</h3>
                                    <p class="mb-20">

                                        The aim of the foundation phase is to begin the habit of developing a mind of
                                        understanding on Tri-Service and Multi-national basis and to provide the necessary
                                        baseline for the Single Components and Joint Studies Phases
                                    </p>

                                    <div class="row">
                                        <div class="col-md-6 mb-20">
                                            <img src="{{ asset('img/senior/air.jpg') }}" alt="">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <img src="{{ asset('img/senior/land1.jpg') }}" alt="">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <img src="{{ asset('img/senior/maritime.jpg') }}" alt="">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <img src="{{ asset('img/senior/mapex.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="my-4">
                                        <div class="mb-3">
                                            <h3 class="mb-3">TERM 1 HIGHLIGHTS</h3>
                                            <ul class="department-single-list">
                                                <li> <i class="far fa-check"></i>Application of Force</li>
                                                <li> <i class="far fa-check"></i>International Study</li>
                                                <li> <i class="far fa-check"></i>Combat Power</li>
                                                <li> <i class="far fa-check"></i>Government of Ghana</li>
                                                <li> <i class="far fa-check"></i>Regional Study Tour</li>
                                                <li> <i class="far fa-check"></i>Command and Leadership</li>
                                                <li> <i class="far fa-check"></i>Decision Making</li>
                                                <li> <i class="far fa-check"></i>Civil/Military Relations</li>
                                                <li> <i class="far fa-check"></i>International Law & Ethics</li>
                                                <li> <i class="far fa-check"></i>Strategy and Policy Study</li>
                                                <li> <i class="far fa-check"></i>Joint and Combined Doctrine</li>
                                                <li><i class="far fa-check"></i> Intelligence</li>
                                                <li> <i class="far fa-check"></i>Training</li>
                                                <li> <i class="far fa-check"></i>Staff Duties & Service Writing</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="my-4">
                                <h3 class="mb-3">TERM 2 – SINGLE SERVICE</h3>
                                <p> <strong>The Phase Aim </strong> is to develop the professional knowledge deemed
                                    necessary by the Army, Navy and Air Faculties for the careers of Army, Navy, Air
                                    Force Officers to enable them to take part in the Land, Maritime and Air
                                    Components of Joint Operations. </p>
                                <br>
                                <p> <strong>The Phase Endstate</strong> is to have developed the skills necessary to
                                    successfully plan and direct Land (Maritime/Air operations) and to contribute to
                                    the proper management of the Army (Navy/Air Force) in peacetime. </p>
                            </div>

                            <div class="my-4">
                                <div class="mb-3">
                                    <h3 class="mb-3">TERM 2 – HIGHLIGHTS</h3>
                                    <div class="row">
                                        <div class="col-xl-4   col-lg-4">
                                            <h4>Airforce</h4>
                                            <ul class="department-single-list">
                                                <li> <i class="far fa-check"></i> Air Power – Air Operations </li>
                                                <li> <i class="far fa-check"></i> Campaign Planning/Estimate </li>
                                                <li> <i class="far fa-check"></i>Exclusive Economic Zone (EEZ) </li>
                                                <li> <i class="far fa-check"></i>Logistics Package </li>
                                                <li> <i class="far fa-check"></i> Exercise MOFIAMO </li>
                                            </ul>
                                        </div>

                                        <div class="col-xl-4   col-lg-4">
                                            <h4>Navy</h4>
                                            <ul class="department-single-list">
                                                <li> <i class="far fa-check"></i> Sea Power – Maritime Operations.
                                                </li>
                                                <li> <i class="far fa-check"></i> Campaign Planning/Estimate.</li>
                                                <li><i class="far fa-check"></i> Exclusive Economic Zone (EEZ).</li>
                                                <li><i class="far fa-check"></i> Logistics Package.</li>
                                                <li><i class="far fa-check"></i> Seminars – Target/Operations,
                                                    Search and Rescue.</li>
                                                <li><i class="far fa-check"></i> Exercise MOFIAMO.</li>

                                            </ul>
                                        </div>

                                        <div class="col-xl-4   col-lg-4">
                                            <h4>Army</h4>
                                            <ul class="department-single-list">
                                                <li> <i class="far fa-check"></i> Brigade & Div level Operations –
                                                    All Arms Battle.</li>
                                                <li> <i class="far fa-check"></i> Tactical Estimate.</li>
                                                <li> <i class="far fa-check"></i> Logistics Package.</li>
                                                <li> <i class="far fa-check"></i>Exclusive Economic Zone (EEZ).
                                                </li>
                                                <li> <i class="far fa-check"></i>Tactical Exercise without troops .
                                                </li>
                                                <li> <i class="far fa-check"></i>Exercise MOFIAMO. </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="my-4">
                                <h3 class="mb-3">TERM 3 – JOINT OPERATIONS</h3>
                                <p> <strong>Phase Aim: </strong>Through the study of Joint, Combined, Multinational
                                    and Inter-Agency Operations and Defence Management as a whole, is aimed at
                                    developing a mind that is flexible and able to analyze and create a habit of
                                    working effectively and harmoniously in a Joint and Combined Environment.
                                </p>
                                <br>
                                <p> <strong>The Phase Endstate</strong> is To have developed a mind that is
                                    flexible, able to analyse and understand complex issues and enable officers to
                                    work effectively with those from other Services and Nations.
                                </p>
                            </div>
                            <div class="my-4">
                                <div class="mb-3">
                                    <h3 class="mb-3">TERM 3 - HIGHLIGHTS</h3>
                                    <ul class="department-single-list">
                                        <li> <i class="far fa-check"></i>Alliances International Relations </li>
                                        <li> <i class="far fa-check"></i>Joint Operational and Campaign Planning Course
                                        </li>
                                        <li> <i class="far fa-check"></i>Environmental Studies – Africa Tour </li>
                                        <li> <i class="far fa-check"></i>Campaign Analysis </li>
                                        <li> <i class="far fa-check"></i>Routine Staff Work </li>
                                        <li> <i class="far fa-check"></i>Defence Management Course </li>
                                        <li> <i class="far fa-check"></i>Conflict and Crises Management Course </li>
                                        <li> <i class="far fa-check"></i>Integrated Peace Support Operations Course </li>
                                        <li> <i class="far fa-check"></i> Realities of War </li>
                                        <li> <i class="far fa-check"></i> Exercise NKABOM </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </main>
@endsection
