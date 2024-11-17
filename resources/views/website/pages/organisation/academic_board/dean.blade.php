@extends('website.layouts.master')

@section('title')
    The Dean
@endsection

@section('description')
    Profile of Dr. Vladimir Antwi-Danso, Dean, GAFCSC
@endsection

@section('head')
    <meta property="og:image" content="{{ asset('img/team/staff-faculty/1.jpg') }}" />
@endsection

@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">The Dean</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Organisation</a></li>
                    <li><a href="{{ route('organisation.academic-board.board') }}">Academic Board</a></li>
                    <li class="active">The Dean</li>
                </ul>
            </div>
        </div>
        --}}

        <div class="team-single pt-120 pb-10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">Dean</span>
                            <h5 class="site-title">
                                Profile of Dr. Vladimir Antwi-Danso, Dean, GAFCSC
                            </h5>
                        </div>

                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="team-single-img">
                            <img src="{{ asset('img/team/staff-faculty/1.jpg') }}" alt>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <p class="mb-1 text-justify">
                            <b>Background:</b> <br>
                            Dr. Vladimir Antwi-Danso is a highly accomplished and respected academic leader who currently
                            serves as the Dean of the Ghana Armed Forces Command and Staff College (GAFCSC). He brings a
                            wealth of knowledge and experience to his role, contributing significantly to the institution's
                            academic and administrative success.
                        </p>

                        <p class="mb-1 text-justify">
                            <b>Visionary:</b> <br>
                            Dr. Vladimir Antwi-Danso possesses a visionary mindset, always looking ahead
                            to anticipate the changing needs and challenges facing the military and defense sectors. He is
                            dedicated to ensuring that GAFCSC remains at the forefront of military education and research in
                            Ghana and the broader African region.
                        </p>

                        <p class="mb-1 text-justify">
                            <b>Strategic Thinker:</b> <br> As the Dean of GAFCSC, Dr. Antwi-Danso is known for his strategic
                            thinking and analytical prowess. He excels in developing long-term strategies to enhance the
                            college's curriculum, research capabilities, and overall effectiveness in training military
                            leaders.
                        </p>

                        <p class="mb-1 text-justify">
                            <b>Charismatic Communicator:</b> <br>
                            Dr. Antwi-Danso's charismatic communication style helps him connect with faculty, staff, and
                            students alike. He is adept at conveying complex ideas in a clear and engaging manner, fostering
                            a positive and collaborative atmosphere at GAFCSC.
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
                                <b>Strong Leadership:</b> <br> He exhibits strong leadership qualities, inspiring his team
                                to
                                excel in their respective roles. His leadership style is marked by a blend of decisiveness
                                and empathy, ensuring that the college functions smoothly and harmoniously.
                            </p>

                            <p>
                                <b>Commitment to Excellence:</b> <br> Dr. Antwi-Danso is deeply committed to excellence in
                                education and research. He encourages a culture of continuous improvement and innovation,
                                striving to make GAFCSC a center of academic excellence in the field of military studies.

                            </p>

                            <p>
                                <b>Diplomatic and Collaborative:</b> <br> Recognizing the importance of collaboration and
                                cooperation, Dr. Antwi-Danso fosters relationships with other academic institutions, defense
                                organizations, and international partners. He believes in the value of knowledge sharing and
                                cross-cultural exchanges.
                            </p>

                            <p>
                                <b>Resilient and Adaptable:</b> <br> In a rapidly changing world, Dr. Antwi-Danso's
                                resilience
                                and adaptability have been instrumental in ensuring that GAFCSC remains responsive to
                                emerging security challenges and evolving educational methodologies.
                            </p>

                            <p>
                                <b>Ethical and Values-Driven:</b> <br> Dr. Antwi-Danso is known for his unwavering
                                commitment to
                                ethical principles and values. He instills these values in both the faculty and the
                                students, emphasizing the importance of integrity and responsible leadership.

                            </p>


                            <p>
                                <b>Global Perspective:</b> <br> With a keen interest in international affairs and
                                geopolitics,
                                Dr.
                                Antwi-Danso brings a global perspective to his role. He encourages students to think
                                critically about global issues and their implications for national security.
                            </p>

                            <p>
                                <b>Mentor and Role Model:</b> <br>
                                Beyond his administrative duties, Dr. Antwi-Danso takes a personal interest in mentoring
                                students and junior faculty members, providing guidance and support as they pursue their
                                academic and professional goals.

                            </p>

                            <p>
                                In his role as the Dean of GAFCSC, Dr. Vladimir Antwi-Danso is dedicated to shaping the
                                future of military leadership in Ghana and contributing to regional and global security
                                through education, research, and leadership development. His charismatic, visionary, and
                                ethical leadership qualities make him a respected figure within the institution and the
                                wider academic and defense communities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
