@extends('website.layouts.master')

@section('title')
    The chief Instructor
@endsection

@section('description')
Profile of Cpt (Ghana Navy)Wilfred  Gasu
@endsection

@section('head')
    <meta property="og:image" content="{{ asset('img/team/staff-faculty/1.jpg') }}" />
@endsection

@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">The Chief Instructor</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Organisation</a></li>
                    <li><a href="{{ route('organisation.academic-board.board') }}">Academic Board</a></li>
                    <li class="active">Chief Instructor,Navy</li>
                </ul>
            </div>
        </div>
        --}}

        <div class="team-single pt-120 pb-10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">Chief Instructor</span>
                            <h5 class="site-title">
                                Profile of Cpt (Ghana Navy) Wilfred  Gasu
                            </h5>
                        </div>

                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="team-single-img">
                            <img src="{{ asset('img/team/staff-faculty/11.jpg') }}" alt>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <p class="mb-1 text-justify">
                            Captain Ghana Navy Wilfred Gasu was born on 15 January 1972 at Takoradi in the Western Region of Ghana. He attended Presbyterian Boys Secondary School, Legon and St Pauls Secondary School, Denu for his ordinary and advanced level secondary education respectively.
                        </p>
<p class="mb-1 text-justify">
    He was enlisted into the Ghana Military Academy on 6 January 1999 as part of Short Service Commission Course 38, and was commissioned into the Ghana Armed Forces on 20 August 1999 and posted to the Western Naval Command.

</p>
                        <p class="mb-1 text-justify">
                            Captain (GN) W Gasu has held several appointments and has served in several capacities in the Ghana Armed Forces and abroad. He served as the Flag Lieutenant to the Chief of the Naval Staff, Executive Officer and the Commanding Officer onboard Ghana Navy Ships ACHIMOTA and SEBO respectively.
                        </p>
<p class="mb-1 text-justify">
    He was the Commanding Officer of the Navy Trade Training School, a Directing Staff at the Ghana Armed Forces Command and Staff College and the Armed Forces Command and Staff College, Jaji, Nigeria. He served as the Military Assistant to 3 Defence Ministers in the course of his career.
</p>
                        <p class="mb-1 text-justify">
                            Capt (GN) W Gasu has attended several military courses commensurate with his rank. Notable among them are the Sub-Lieutenant Technical and Sea Training Course at the Armed Forces Command and Staff College in Jaji, Nigeria, Peace Instructor Training Course at the Naval Post Graduate School in Monterrey California, USA, the Senior Staff Course at the Ghana Armed Forces Command and Staff College, Navigation Specialization Course in Venduruthy, India and the later national Joint Operations Planning Course at the Permanent Joint Headquarters Northwood in the United Kingdom. He also attended the Developing Maritime Security Culture in the Gulf of Guinea and Maritime Security and Transnational Orgainised Crime Courses at the Kofi Annan International Peacekeeping Training Centre.

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

                        <p class="mb-1 text-justify">
                            Academically, Capt (GN) W Gasu holds a Master of Arts Degree in International Relations from the University of Ghana, Legon, and a Bachelor of Science Degree in Mathematics and a Diploma in Education, both from the University of Cape Coast. He also possesses certificates in Maritime Governance, Defence Management, Conflict and Crisis Management, Counter Terrorism and Counter Improvised Explosive Device and Disaster Management. 

                        </p>
                            <p class="mb-10 text-justify">
                                Capt (GN) W Gasu has served with the African Union and the United Nations as a Military Observer in Darfur, Sudan. He is currently the Chief Instructor of the Naval Faculty of the Ghana Armed Forces Command and Staff College, where he trains middle level Military Officers. He is always resolute with the need to empower officers for greatness.       
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
