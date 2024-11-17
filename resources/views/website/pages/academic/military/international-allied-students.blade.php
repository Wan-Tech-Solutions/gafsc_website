@extends('website.layouts.master')

@section('title')
    International( Allied Students)
@endsection


@section('content')
    <main class="main">

        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">International( Allied Students) </h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Academics</a></li>
                    <li><a href="javascript:void(0)">Military</a></li>
                    <li class="active">International </li>
                </ul>
            </div>
        </div>


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

                                <div class="department-details">
                                    <h3 class="mb-20">HISTORICAL BACKGROUND OF GAFCSC (JUNIOR DIVISION)</h3>
                                    <p class="mb-20">
                                        The Junior Division of the Ghana Armed Forces Command and Staff College,(GAFCSC),
                                        initially known as the National War College (NWC), was established on 14 October
                                        1963 as part of the Military Academy and Training Schools (MATS). The College was
                                        staffed by officers of the Canadian Armed Forces Training Team (CAFTT) and a British
                                        Army Officer. They were charged with the responsibility of training selected Army
                                        Officers for staff and higher command appointments.
                                    </p>
                                    <p class="mb-20">
                                        In December 1963, the NWC was renamed the National Defence College (NDC), and the
                                        course duration increased from 10 to 21 weeks. In January 1964, the institution was
                                        once again renamed the Junior Defence College (JDC). The first Ghanaian Directing
                                        Staff in the person of then Major JM Nunoo-Mensah was appointed to the College in
                                        1969. He became the first Ghanaian to head the institution as General Staff Officer
                                        Grade I in 1970. The JDC was opened to students from allied African countries in
                                        1973.
                                    </p>

                                    <p class="mb-20">With the establishment of the Ghana Armed Forces Command and Staff
                                        College (GAFCSC) in 1976, the Junior Defence College became the Junior Division of
                                        the GAFCSC. The head of the Division was also upgraded to Assistant Commandant
                                        (Colonel) effective October 1985 with Colonel Seidu Ayumah as the first Assistant
                                        Commandant. In February 2007, there was a further upgrade of the appointment to the
                                        rank of a Brigadier General. </p>
                                    <p class="mb-20">
                                        The scope of the Division has also been reviewed over the years with more emphasis
                                        on Staff Training for Grade 3 Staff appointments whilst the command and tactics
                                        aspects have been de-emphasized. The course duration is now 24 weeks.
                                    </p>
                                    <p class="mb-20">
                                        Students from Burkina Faso, the Gambia, La Cote D’Ivoire, Namibia, Nigeria, Sierra
                                        Leone, South Africa, Tanzania, Togo and Zimbabwe have since 1973 attended the Junior
                                        Staff Course with their Ghanaian counterparts. </p>

                                    <div class="row">
                                        <div class="col-md-6 mb-20">
                                            <img src="{{ asset('img/senior/s2.jpg') }}" alt="">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <img src="{{ asset('img/senior/s1.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="my-4">
                                        <div class="mb-3">
                                            <h3 class="mb-3">INTRODUCTION</h3>
                                            <ol>
                                                <li> The Junior Staff Course is a 16-week course, which is broken into 2
                                                    Terms of
                                                    8 weeks each duration.</li>
                                            </ol>
                                        </div>

                                        <div class="mb-3">
                                            <h3 class="mb-3">JSC COURSE AIM</h3>
                                            <ol type="1">
                                                <li> The Junior Division of the Ghana Armed Forces Command and Staff
                                                    College, as a regional centre of excellence, aims at enhancing the
                                                    leadership, analytical and communication skills of junior level officers
                                                    to perform command and staff functions, through research and active
                                                    development of a broad understanding and knowledge of single, joint and
                                                    combined operations as well as the management of lower aspects of
                                                    defence, economic and geopolitical issues.</li>

                                                <li>The course objectives of the Junior Division are as follows:</li>
                                                <ul>
                                                    <li>To understand the techniques used in staff work.
                                                    <li>To understand the structure, roles and functions of the Ghana Armed
                                                        Forces, and the organisation of some units.</li>
                                                    <li>To understand the rudiments of sub-unit level training, and be
                                                        familiar with unit and formation level training.</li>
                                                    <li>To be familiar with some major aspects of domestic and international
                                                        affairs and how these influence security, socio-economic and
                                                        political stability.</li>
                                                    <li>To understand the relationship and application of command,
                                                        leadership and management.</li>
                                                    <li>To understand the fundamental logistics process and its application
                                                        during peace and war.</li>
                                                    <li> To develop the physical, social and spiritual qualities of junior
                                                        officers.</li>
                                                </ul>
                                            </ol>
                                        </div>

                                        <div class="mb-3">
                                            <h3 class="mb-3"> JSC PACKAGE</h3>
                                            <ol>
                                                <li> The fields of study for the course are as follows: </li>
                                                <li> Term 1. Grounding and foundation work.</li>
                                                <li> Term 2. Harnessing and consolidation of knowledge gained in Term</li>
                                            </ol>
                                        </div>

                                        <div class="mb-3">
                                            <h3 class="mb-3">CURRICULUM STUDIES</h3>
                                            <ol>
                                                <li> Terms 1 and 2 involve other areas of studies, which will be specified
                                                    in the guides.</li>
                                                <li> As part of the Environmental Studies Package students would have the
                                                    opportunity to undertake a 3-5 day study tour of some selected districts
                                                    in one particular region. Students would be expected to make 45 mins
                                                    presentations of their findings and submit written reports.</li>

                                            </ol>
                                        </div>

                                        <div class="mb-3">
                                            <h3 class="mb-3">METHODS OF INSTRUCTION</h3>
                                            <ol>
                                                <li>The following methods of instructions will be used during the course.
                                                    Further details can be found in the Students’ Handbook.</li>
                                                <ul>
                                                    <li> Lecturers/Presentations – To the whole course.</li>
                                                    <li>li>Seminars– To the whole course, where guest speakers form the
                                                        panel. Students make contributions and ask questions.</li>
                                                    <li> Syndicate Room Discussions (SRD) – Led by DS. All Students will be
                                                        expected to participate equally. Sometimes, a student may be asked
                                                        to lead or open the discussion on a particular question.</li>
                                                    <li> Map Exercises (MAPEXs) held indoors and films.</li>
                                                </ul>
                                            </ol>
                                        </div>

                                        <div class="mb-3">
                                            <h3 class="mb-3">ACADEMIC ETHICS</h3>
                                            <ol>
                                                <li>
                                                    Professional ethics is of paramount importance to the College. Work
                                                    presented by students should be their own original work. To do otherwise
                                                    results in unfair advantage and is inconsistent with professional ethics
                                                    and integrity. Students found guilty of plagiarism in any form, will be
                                                    subject to the full penalties for it. This could lead to your withdrawal
                                                    from the course and further disciplinary action by Service/Organization
                                                    Headquarters.</li>
                                            </ol>
                                        </div>

                                        <div class="mb-3">
                                            <h3 class="mb-3"> GRADUATION REQUIREMENT </h3>
                                            <ol>
                                                <li>
                                                    To graduate from the College with the ‘jsc’ symbol, a student must meet
                                                    the established standards set by the College. These could be found in
                                                    the College Standing Orders. Students are advised to read this
                                                    thoroughly.</li>
                                            </ol>
                                        </div>

                                        <div class="mb-3">
                                            <h3 class="mb-3">VALIDATION</h3>
                                            <ol>
                                                <li>
                                                    Feedback is important for all training and educational courses. In the
                                                    Junior Division, the Service Writing Form (SWF) ‘Q’ is used to get to
                                                    know students’ reactions to each subject. It also serves as a conduit
                                                    for soliciting ideas for the general improvement of the various aspects
                                                    of the package for each term. You are encouraged to take an active part
                                                    in this effort.</li>
                                            </ol>
                                        </div>

                                        <div class="mb-3">
                                            <h3 class="mb-3">PHYSICAL FITNESS</h3>
                                            <ol>
                                                <li>
                                                    Physical fitness is one of the important aspects of the course. Two
                                                    Battle Fitness Tests are conducted during the course: one in each term.
                                                    All students are required to pass these tests. Physical training is
                                                    programmed for Tuesday mornings while games are conducted on Thursday
                                                    afternoons.</li>
                                            </ol>
                                        </div>

                                    </div>
                                    <div class="my-4">
                                        <h3 class="mb-3"><u> OBJECTIVES OF THE COUNTERINSURGENCY AND INTERNAL SECURITY
                                                PHASE OF THE JUNIOR
                                                DIVISION PROGRAMME</u></h3>
                                        <li>To strengthen the integrative capacity of the security services in an era of
                                            internal security demands.</li>
                                        <li>To practice students in the problems of establishing Joint Headquarters, and the
                                            restoration and maintenance of law and order in an internal security and
                                            counterinsurgency environment.</li>
                                        <li> To practice students in the staff work and procedures related to resolving
                                            internal security and counterinsurgency.</li>
                                        <li>To practice students in strategy, tactics, roles, and responsibilities of the
                                            security services in an internal security and counter-insurgency situation.</li>
                                    </div>

                                    <div class="my-4">
                                        <h3 class="mb-3">COURSE PARTICIPANTS</h3>
                                        <li>The Ghana Police Service</li>
                                        <li>The Ghana Prisons Service</li>
                                        <li>The Ghana Fire Service</li>
                                        <li>The Ghana Immigration Service</li>
                                        <li>The Customs Division of the Ghana Revenue Authority</li>
                                        <li>The Bureau of National Investigations</li>
                                        <li>The Narcotics Control Board</li>

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
