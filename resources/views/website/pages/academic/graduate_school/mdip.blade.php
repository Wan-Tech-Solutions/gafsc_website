@extends('website.layouts.master')

@section('title')
    MDIP
@endsection


@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">MDIP</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Academics</a></li>
                    <li><a href="javascript:void(0)">Graduate School</a></li>
                    <li class="active">MDIP</li>
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
                                {{-- <div class="widget category">
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
                                </div> --}}
                                <div class="widget department-download">
                                    <h4 class="widget-title">Download</h4>
                                    <a
                                        href="{{ asset('downloads/MDIP_form.pdf') }}"><i
                                            class="far fa-file-pdf"></i> MDIP
                                        Application Form</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="department-details">

                                <div class="department-details">
                                    <h2 class="mb-20">GRADUATE ADMISSIONS</h2>
                                    <h3 class="mb-20">The following academic programme(s) is offered by the College:
                                    </h3>
                                    <p class="mb-20">
                                        Master of Science in Defence and International Politics (MDIP).

                                    </p>



                                    <div class="my-4">
                                        <div class="mb-3">
                                            <h3 class="mb-3">ADMISSION TO ACADEMIC PROGRAMME(S) -ENTRY REQUIREMENTS:
                                            </h3>
                                            <ul class="department-single-list">
                                                <li><i class="far fa-check"></i>A good Bachelor’s Degree (second class lower
                                                    or better) or equivalent professional qualification from a recognized
                                                    body.
                                                </li>
                                                <li><i class="far fa-check"></i>A minimum of two years working experience in
                                                    peace and security-related organization.
                                                </li>
                                                <li><i class="far fa-check"></i>Under exceptional circumstances, degree
                                                    holders without the minimum requirements seconds class lower division
                                                    but have had at least five years’ working experience in administration
                                                    with interest in peace and security issues will be considered for
                                                    admission.

                                                </li>
                                                <li><i class="far fa-check"></i>A written statement of career objectives in
                                                    relation to the programme.
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="my-4">
                                        <h3 class="mb-3">Structure and Duration of Programmes
                                        </h3>
                                        <p>The programme is run in two streams; the regular stream and the weekend stream.
                                            The programme is run for one full academic year under the semester system. The
                                            year is divided into two (2) semesters. </p>
                                        <p> The regular stream programme is opened to only Senior Division students from the
                                            Ghana Armed Forces and those of friendly Armed Forces and other sister security
                                            agencies. Lectures are on weekdays. </p>
                                        <p>The weekend programme is opened to the public. Lectures take place every other
                                            weekend in time frames ranging from 3:00 pm to 09:00 pm on Fridays and 9:00 am
                                            to 3:00 pm on Saturdays. It is designed to meet the time demands of willing,
                                            able and qualified people whose work schedule makes it difficult or impossible
                                            for them to attend lectures on weekdays. A semester normally spuns 16 weeks with
                                            one (1) course break between sessions. A maximum of seven (7) courses is taught
                                            each semester. During each Semester, students will be issued with topics for
                                            Term Papers to prepare and submit written responses at programmed dates. Term
                                            Papers will constitute part of students’ assessment. </p>
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
