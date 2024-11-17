@extends('website.layouts.master')

@section('title')
    Commandant
@endsection

@section('description')
    Profile Of Major General Matthew Essien, Commandant, GAFCSC
@endsection

@section('head')
    <meta property="og:image" content="{{ asset('img/pages/cmdt.jpg') }}" />
@endsection


@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Commandant</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Organisation</a></li>
                    <li><a href="javascript:void(0)">Command</a></li>
                    <li class="active">Commandant</li>
                </ul>
            </div>
        </div>
        --}}

        <div class="team-single pt-120 pb-10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">Commandant</span>
                            <h5 class="site-title">
                                Profile Of Major General Matthew Essien, Commandant, GAFCSC
                            </h5>
                        </div>

                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="team-single-img">
                            <img src="{{ asset('img/pages/cmdt.jpg') }}" alt>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <p class="mb-1 text-justify">
                            Major General Matthew Essien entered the Ghana Military Academy (GMA) as an Officer Cadet with Regular Career Course 29 in 1987.
                        </p>

                        <p class="mb-1 text-justify">
                            After twelve months training at the Royal Military Academy, Sandhurst (RMAS), in the United Kingdom, he was commissioned into the Corps of Signals in December 1989 and posted to the 1 Signal Regiment as a Troop Commander.
                        </p>

                        <p class="mb-1 text-justify">
                            He has served in various command and staff appointments, notable among them being Troop Commander, Adjutant, Squadron Commander and Commanding Officer, 
                            all in 1 Signal Regiment. He served as Deputy Commanding Officer of Ghana Battalion 5 in the DRC with MONUC Ghana Battalion 5 and Commanding Officer of 
                            Ghana Battalion 7 with UNMIL in Liberia.
                        </p>
                        
                        <p class="mb-1">
                            He has been a Deputy and Director of Communications and at the General Headquarters. He also served as the Director 
                            Operation and Training, Deputy Director General and the Director General at the Defence Communications and Information Systems at the General Headquarters, 
                            Commander at the Support Services Brigade Group, Commander at the Army Special Operations Brigade, General Officer Commanding (GOC) Northern Command 
                            Headquarters and He is currently the Commandant of the Ghana Armed Forces Command and Staff College. 
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
                                Maj Gen Essien also has a vast and rich experience in the field of training, having served in the Signal Training School as a Training Officer 
                                and later as the Chief Instructor. In May 2004, he was posted to the Ghana Military Academy as the Chief Training Officer.  He also served as 
                                a Directing Staff (Lecturer) and the Director of Studies at the Ghana Armed Forces Command and Staff College.
                            </p>

                            <p class="mb-10">
                                Maj Gen Essien has attended many military courses, locally and overseas.  Prominent among them are the Junior Command and Staff Course in Jaji (Nigeria), 
                                Senior Command and Staff Course in GAFCSC(Ghana) and the Signal Officers and Electronic Warfare Course in the UK. He also pursued courses in Public 
                                Administration at the Ghana Institute of Management and Public Administrations (GIMPA), Telecommunication Engineering and Management Course at the then 
                                Ghana Telecom Engineering School, and the Signals Officers’ Degree in Engineering Course and Technical Officers’ Telecommunications at the Military College 
                                of Telecommunications Engineering, MHOW in India. He is a graduate of the National Defence University, China where he obtained his Master of Science degree 
                                in Defence and Strategic Studies.     
                            </p>

                            <p class="mb-10">
                                He has undertaken various short courses in Defence Management, Internal crisis Management and Disaster Management at GAFCSC under the auspices of Cranfield 
                                and York Universities of UK.  He also undertook the Strategic Leadership Course at KAIPTC, under the auspices of Royal Defence Academy, UK.
                            </p>
                            
                            <p class="mb-10">
                                By way of Peace Support Operations, he has had three tours of duty with ECOMOG in Liberia, four tours of duty with UNIFIL, a tour of duty with UNAMIR in Rwanda 
                                in 1994-95, a tour of duty with MONUC in the DRC in 2003 -2004 and a tour of duty with UNOCI in Cote d’Ivoire 2010-2011 and as the Deputy Chief of Staff Operations 
                                of UNAMID in Darfur, Sudan.
                            </p>

                            <p>
                                Maj Gen Essien is married with two children and his hobbies include reading books and publications on a whole range of subjects including farming and robotics. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
