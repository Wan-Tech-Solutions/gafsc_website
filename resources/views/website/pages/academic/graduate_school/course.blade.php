@extends('website.layouts.master')

@section('title')
    Course Package
@endsection


@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Course Package</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Academics</a></li>
                    <li><a href="javascript:void(0)">Graduate School</a></li>
                    <li class="active">Course Package</li>
                </ul>
            </div>
        </div>
        -}}

        <div class="department-single-area py-120">
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="department-sidebar">
                                <!--<div class="widget category">-->
                                <!--    <h4 class="widget-title">Our Departments</h4>-->
                                <!--    <div class="category-list">-->
                                <!--        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Business And-->
                                <!--            Finance</a>-->
                                <!--        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Law And-->
                                <!--            Criminology</a>-->
                                <!--        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>IT And Data-->
                                <!--            Science</a>-->
                                <!--        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Health And-->
                                <!--            Medicine</a>-->
                                <!--        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Art And-->
                                <!--            Design</a>-->
                                <!--        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Information-->
                                <!--            Technology</a>-->
                                <!--        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Acting And-->
                                <!--            Drama</a>-->
                                <!--        <a href="academic-single.html#"><i class="far fa-long-arrow-right"></i>Human-->
                                <!--            Resource</a>-->
                                <!--    </div>-->
                                <!--</div>-->
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
                                    <h3 class="mb-20">APPLY FOR ADMISSIONS</h3>
                                    <h4>ENTRY REQUIREMENTS</h4>
                                    <p class="mb-20">
                                        The basic requirements for admission are adequate preparation for successful
                                        graduate study, and suitability of applicant’s academic and career objectives to the
                                        specific program. A non-refundable application fee is required of all applicants.

                                        The Academic Division evaluates applications for admission with specific assessment
                                        of official transcripts of previous academic qualifications, certificates, letters
                                        of recommendation and the applicant’s “Statement of Purpose”.

                                        The other major factors considered by the graduate admissions committee are the
                                        applicant’s:
                                    </p>
                                    <ul class="department-single-list">
                                        <li><i class="far fa-check"></i>Previous academic performance; a good Bachelor’s
                                            Degree (second class lower or better) or equivalent professional qualification
                                            from a recognized institution/body.</li>
                                        <li><i class="far fa-check"></i>Academic preparation for the graduate curriculum;
                                        </li>
                                        <li><i class="far fa-check"></i>Intellectual capacity;
                                        </li>
                                        <li><i class="far fa-check"></i>Motivation and maturity; and</li>
                                        <li><i class="far fa-check"></i>Specific areas of academic interest.
                                        </li>
                                    </ul>

                                    <div class="my-4">
                                        <div class="mb-3">
                                            <h3 class="mb-3">APPLICATION PROCESS</h3>
                                            <h4>Application Fees</h4>
                                            <p>A non-refundable application fee is required from all applicants.
                                                Applications cannot be processed until the application fee has been
                                                received. The application fee is devoted to the administrative cost of
                                                processing all applications received, and is non-refundable under any
                                                circumstances. A non-refundable application fee may be paid by cheque, money
                                                order or cash. The cheque, money order or cash should be made payable to
                                                GAFCSC Account (provided by the institution) and the pay-in-slip should be
                                                submitted to the Academic Division. Also, cash can be paid directly to the
                                                office of the Financial Controller of the College. Applicant’s name and
                                                application number should be printed on the check or money order.</p>
                                        </div>

                                    </div>
                                    <div class="my-4">
                                        <h3 class="mb-3">Transcripts</h3>
                                        <p>One original or certified official transcript of all previous post-secondary
                                            academic work must be submitted. Transcripts should be sent directly to the
                                            academic Registry by the Registrar of the issuing Institution or by the
                                            applicant. When students have final work in progress at the time of the
                                            application, a final official transcript covering that work and certifying the
                                            award of any degree must be received before the student is officially enrolled.
                                            In such situations, the student is admitted provisionally, pending receipt of
                                            official transcripts reflecting award of the bachelor’s degree.
                                        </p>
                                    </div>

                                    <div class="my-4">
                                        <h3 class="mb-3">Letters of Recommendation</h3>
                                        <p>
                                            Two letters of recommendation, preferably from Departmental Heads or professors
                                            in the proposed field of study, are required.
                                        </p>
                                    </div>

                                    <div class="my-4">
                                        <h3 class="mb-3">Statement of Purpose</h3>
                                        <p>
                                            The Statement of Purpose provides important guidance to the graduate admissions
                                            committee in their decision-making process. It is important for assessing
                                            whether the applicant’s academic objectives can reasonably be satisfied in the
                                            graduate program to which admission is sought.
                                        </p>
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
