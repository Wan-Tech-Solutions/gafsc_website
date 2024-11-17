@extends('website.layouts.master')

@section('title')
    Vice Dean
@endsection

@section('description')
    Profile of Dr. Napoleon Kurantin, Vice Dean, GAFCSC
@endsection

@section('head')
    <meta property="og:image" content="{{ asset('img/team/staff-faculty/2.jpg') }}" />
@endsection


@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Vice Dean</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Organisation</a></li>
                    <li><a href="{{ route('organisation.academic-board.board') }}">Academic Board</a></li>
                    <li class="active">Vice Dean</li>
                </ul>
            </div>
        </div>
        --}}

        <div class="team-single pt-120 pb-10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">Vice Dean</span>
                            <h5 class="site-title">
                                Profile of Dr. Napoleon Kurantin, Vice Dean, GAFCSC
                            </h5>
                        </div>

                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="team-single-img">
                            <img src="{{ asset('img/team/staff-faculty/2.jpg') }}" alt>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <p class="mb-1 text-justify">
                            <b>Visionary Leader:</b> <br>
                            Dr. Napoleon Kurantin, as the Vice Dean of the GAFCSC, is a visionary leader who constantly
                            strives to elevate the institution's academic standards and overall reputation. He possesses a
                            deep commitment to the college's mission of providing top-tier education and training to
                            military officers and leaders.
                        </p>

                        <p class="mb-1 text-justify">
                            <b>Dedication to Excellence:</b> <br>
                            Dr. Kurantin is known for his unwavering dedication to excellence in education and leadership.
                            He sets high standards for both himself and the institution, pushing for continuous improvement
                            in all aspects of academic and administrative functions.
                        </p>

                        <p class="mb-1 text-justify">
                            <b>Inspirational Mentor:</b> <br>
                            In his role as Vice Dean, Dr. Kurantin serves as an inspirational mentor to students and faculty
                            alike. He is approachable, supportive, and actively engages in mentoring and guiding the next
                            generation of military leaders, fostering an environment of growth and learning.
                        </p>

                        <p class="mb-1 text-justify">
                            <b>Strategic Thinker:</b> <br>
                            Dr. Kurantin's strategic thinking is a driving force behind the college's success. He develops
                            long-term plans and strategies that align with the college's mission and vision, ensuring that
                            GAFCSC remains at the forefront of military education and training.
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
                                <b>Collaborative Team Player:</b> <br>
                                Recognizing the importance of teamwork and collaboration, Dr. Kurantin fosters a culture of
                                cooperation among faculty and staff members. He encourages open communication, innovative
                                thinking, and the exchange of ideas, creating a dynamic and intellectually stimulating
                                environment.
                            </p>

                            <p>
                                <b>Adaptable and Resilient:</b> <br>
                                In the dynamic world of military education, Dr. Kurantin's adaptability and resilience stand
                                out. He navigates challenges and changes in the educational landscape with grace, always
                                seeking solutions that benefit the college and its students.
                            </p>

                            <p>
                                <b>Integrity and Ethics:</b> <br>
                                Integrity and ethical conduct are at the core of Dr. Kurantin's leadership. He upholds the
                                highest standards of honesty, fairness, and transparency, setting an example for all members
                                of the GAFCSC community.
                            </p>

                            <p>
                                <b>Global Perspective:</b> <br>
                                Dr. Kurantin recognizes the importance of a global perspective in military education. He
                                actively seeks partnerships with international institutions, fostering a diverse and
                                inclusive educational environment that prepares students for global challenges.
                            </p>

                            <p>
                                <b>Innovation and Technology Integration:</b> <br>
                                To keep the college at the forefront of educational practices, Dr. Kurantin encourages the
                                integration of innovative teaching methods and technology into the curriculum. He
                                understands the importance of preparing students for the modern, technologically advanced
                                battlefield.
                            </p>

                            <p>
                                <b>Commitment to Lifelong Learning:</b> <br>

                                As a lifelong learner himself, Dr. Kurantin instills a passion for continuous learning in
                                the GAFCSC community. He believes that education is an ongoing journey and encourages
                                everyone to seek opportunities for self-improvement and growth.
                            </p>

                            <p>
                                In summary, Dr. Napoleon Kurantin, as the Vice Dean of the Ghana Armed Forces Command and
                                Staff College, embodies the qualities of a visionary, dedicated, and inspirational leader.
                                His commitment to excellence, ethical leadership, and forward-thinking approach contribute
                                significantly to the institution's success and its mission of educating and training future
                                military leaders
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
