@extends('website.layouts.master')

@section('title')
    ASCOM Senior Division
@endsection

@section('description')
    Profile Of Air Commodore TN Okai, ASCOM Senior Division, GAFCSC
@endsection

@section('head')
    <meta property="og:image" content="{{ asset('img/team/policy/ASCOM.jpg') }}" />
@endsection

@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">ASCOM Senior Division</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Organisation</a></li>
                    <li><a href="{{ route('organisation.policy-committee.committee') }}">Policy Committee</a></li>
                    <li class="active">ASCOM Senior Division</li>
                </ul>
            </div>
        </div>
        --}}

        <div class="team-single pt-120 pb-10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">ASCOM Senior Division</span>
                            <h5 class="site-title">
                                Profile Of Air Commodore TN Okai, ASCOM Senior Division, GAFCSC
                            </h5>
                        </div>

                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="team-single-img">
                            <img src="{{ asset('img/team/policy/ASCOM.jpg') }}" alt>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <p class="mb-1 text-justify">
                            Air Commodore Thomas Niifio Okai was born on 4 October 1967 in Accra, Ghana. After his primary 
                            and secondary education, he graduated from the University of Ghana in 1992 with a Bachelor of Science (Honours) 
                            Degree in Administration. He also holds a Post-graduate Certificate in Public administration, obtained from the 
                            Ghana Institute of Management and Public Administration (GIMPA) in 2001. Additionally, he holds a Master of Arts 
                            in International Affairs from the University of Ghana.
                        </p>

                        <p class="mb-1 text-justify">
                            He was commissioned into the Administration Branch of the Ghana Air Force on 12 August 1994. He has held a number 
                            of appointments which include Officer Commanding Morale, Welfare and Recreational Flight, Personal Assistant to 
                            the Chief of Air Staff, Officer Commanding Personnel Services Squadron and Officer Commanding Administration Wing 
                            of the Air Force Base Accra. He was a Directing Staff at both the Ghana Armed Forces Command and Staff College (GAFCSC) 
                            and the Armed Forces Command and Staff College in Jaji, Nigeria. Air Commodore Okai was at a time the Chief Instructor 
                            of the Air Faculty GAFCSC, later becoming the Director Administration at the Ghana Air Force Headquarters. He held the 
                            position of Deputy Defence Adviser at the Ghana High Commission in London, United Kingdom. Air Commodore Okai is currently 
                            the Assistant Commandant, Senior Division of GAFCSC.
                        </p>

                        <p class="mb-1 text-justify">
                            To help meet the reauirements of his various appointments, Air Commodore Okai has attended a number of courses both 
                            in and outside Ghana. These include Junior Officers' Command Course, Royal Air Force Henlow, United Kingdom and Infantry Property
                            Protection Course, Hammelburg, Germany. Others are Senior Staff Course, Armed forces Command and Staff College, Jaji, Nigeria and 
                            Overseas Staff Colleges Directing Staff Course, Defence Academy of the United Kingdom. Conferences and workshops attended include 
                            G!obal Air Chiefs Conference in Las Vegas, Nevada, USA and Soldier Pre-Deployment Workshop in North Dakota and Minnesota, USA.
                        </p>


                    </div>
                </div>
            </div>
        </div>


        <div class="biography-skil pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="biography  text-justify">
                            <p class="mb-10 text-justify">
                                Air Commodore Okai has had the opportunity of serving with the United Nations Mission in the Democratic Republic 
                                of Congo from November 2003 to November 2004 and the United Nations Mission in La Cote d'Ivoire from May 2008 to 
                                November 2008. He also served with the United Nations Mission in the Central African Republic from January to December 2017.
                            </p>

                            <p>
                                Air Commodore Okai is married and the marriage is blessed with two children. His hobbies are reading, listening 
                                to music, travelling and public speaking.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
