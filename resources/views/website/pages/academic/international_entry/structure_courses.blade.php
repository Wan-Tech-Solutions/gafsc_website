@extends('website.layouts.master')

@section('title')
    Structure & Courses
@endsection


@section('content')
    <main class="main">

        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Structure & Courses</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Academics</a></li>
                    <li><a href="javascript:void(0)">International Entry</a></li>
                    <li class="active">Structure & Courses</li>
                </ul>
            </div>
        </div>


        <div class="course-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="course-item">
                                    {{-- <span class="course-tag"><i class="far fa-bookmark"></i> MKDS</span> --}}
                                    <div class="course-img">
                                        <img src="assets/img/course/01.jpg" alt="">
                                        <a href="course-single.html" class="btn"><i class="far fa-link"></i></a>
                                    </div>
                                    <div class="course-content">
                                        <div class="course-meta">
                                            <span class="course-meta-left"><i class="far fa-book"></i> GAFCSC</span>
                                        </div>
                                        <h4 class="course-title">
                                            <a href="course-2.html#">MKDS</a>
                                        </h4>
                                        <p class="course-text">
                                            MKDS Training is a client-focused risk Mitigation Company, providing a variety
                                            of fully integrated services, and a comprehensive range of specialist products
                                            at the cutting edge of modern technology in support to the War fighter and
                                            National security professionals.
                                        </p>
                                        {{-- <div class="course-bottom">
                                        <div class="course-bottom-left">
                                            <span><i class="far fa-users"></i>75 Seats</span>
                                            <span><i class="far fa-clock"></i>04 Years</span>
                                        </div>
                                        <span class="course-price">$750</span>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="course-item">
                                    {{-- <span class="course-tag"><i class="far fa-bookmark"></i> MKDS</span> --}}
                                    <div class="course-img">
                                        <img src="assets/img/course/01.jpg" alt="">
                                        <a href="course-single.html" class="btn"><i class="far fa-link"></i></a>
                                    </div>
                                    <div class="course-content">
                                        <div class="course-meta">
                                            <span class="course-meta-left"><i class="far fa-book"></i>GAFCSC</span>
                                        </div>
                                        <h4 class="course-title">
                                            <a href="course-2.html#">CONFLICT AND CRISIS MANAGEMENT COURSE
                                            </a>
                                        </h4>
                                        <p class="course-text">
                                            This course aims at providing participants with a clear understanding of
                                            conflict and internal crisis management in order that they can work more
                                            effectively, efficiently and cohesively.

                                        </p>
                                        {{-- <div class="course-bottom">
                                        <div class="course-bottom-left">
                                            <span><i class="far fa-users"></i>75 Seats</span>
                                            <span><i class="far fa-clock"></i>04 Years</span>
                                        </div>
                                        <span class="course-price">$750</span>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="course-item">
                                    {{-- <span class="course-tag"><i class="far fa-bookmark"></i> MKDS</span> --}}
                                    <div class="course-img">
                                        <img src="assets/img/course/01.jpg" alt="">
                                        <a href="course-single.html" class="btn"><i class="far fa-link"></i></a>
                                    </div>
                                    <div class="course-content">
                                        <div class="course-meta">
                                            <span class="course-meta-left"><i class="far fa-book"></i> GAFCSC</span>
                                        </div>
                                        <h4 class="course-title">
                                            <a href="course-2.html#">DEFENCE MANAGEMENT COURSE
                                            </a>
                                        </h4>
                                        <p class="course-text">
                                            This course aims at exposing uniform and civilian personnel working within the
                                            security sector to the issues, principles and techniques relevant to improving
                                            the governance and management of the defence and security sectors.

                                        </p>
                                        {{-- <div class="course-bottom">
                                        <div class="course-bottom-left">
                                            <span><i class="far fa-users"></i>75 Seats</span>
                                            <span><i class="far fa-clock"></i>04 Years</span>
                                        </div>
                                        <span class="course-price">$750</span>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="course-item">
                                    {{-- <span class="course-tag"><i class="far fa-bookmark"></i> MKDS</span> --}}
                                    <div class="course-img">
                                        <img src="assets/img/course/01.jpg" alt="">
                                        <a href="course-single.html" class="btn"><i class="far fa-link"></i></a>
                                    </div>
                                    <div class="course-content">
                                        <div class="course-meta">
                                            <span class="course-meta-left"><i class="far fa-book"></i> GAFCSC</span>
                                        </div>
                                        <h4 class="course-title">
                                            <a href="course-2.html#">EXCLUSIVE ECONOMIC ZONE (EEZ) MANAGEMENT AND OPERATIONS
                                                COURSE
                                            </a>
                                        </h4>
                                        <p class="course-text">
                                            This course aims at providing participants with background knowledge required by
                                            professional maritime practitioners and affiliates, as well as other important
                                            decision makers in EEZ management and operations with a view to enabling a
                                            better understanding of the issues involved.

                                        </p>
                                        {{-- <div class="course-bottom">
                                        <div class="course-bottom-left">
                                            <span><i class="far fa-users"></i>75 Seats</span>
                                            <span><i class="far fa-clock"></i>04 Years</span>
                                        </div>
                                        <span class="course-price">$750</span>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="course-item">
                                    {{-- <span class="course-tag"><i class="far fa-bookmark"></i> MKDS</span> --}}
                                    <div class="course-img">
                                        <img src="assets/img/course/01.jpg" alt="">
                                        <a href="course-single.html" class="btn"><i class="far fa-link"></i></a>
                                    </div>
                                    <div class="course-content">
                                        <div class="course-meta">
                                            <span class="course-meta-left"><i class="far fa-book"></i> GAFCSC</span>
                                        </div>
                                        <h4 class="course-title">
                                            <a href="course-2.html#">INTEGRATED PEACE SUPPORT OPERATIONS COURSE (IPSO)
                                            </a>
                                        </h4>
                                        <p class="course-text">
                                            The aim of the Integrated Peace Support Operations Course (IPSO) is to provide
                                            middle level military officers and officers of other security agencies with the
                                            skills and knowledge of operational level planning, coordination and conduct of
                                            integrated peace support operations. </p>
                                        {{-- <div class="course-bottom">
                                        <div class="course-bottom-left">
                                            <span><i class="far fa-users"></i>75 Seats</span>
                                            <span><i class="far fa-clock"></i>04 Years</span>
                                        </div>
                                        <span class="course-price">$750</span>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="pagination-area">
                            <div aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="course-2.html#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="far fa-arrow-left"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="course-2.html#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="course-2.html#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="course-2.html#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="course-2.html#" aria-label="Next">
                                            <span aria-hidden="true"><i class="far fa-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="course-sidebar">
                            <div class="widget search">
                                <h5 class="widget-title">Search</h5>
                                <form class="search-form">
                                    <input type="text" class="form-control" placeholder="Search Here...">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                            <div class="widget category">
                                <h4 class="widget-title">Course Category</h4>
                                <div class="category-list">
                                    <a href="course-2.html#"><i class="far fa-long-arrow-right"></i>Business And
                                        Finance</a>
                                    <a href="course-2.html#"><i class="far fa-long-arrow-right"></i>Law And
                                        Criminology</a>
                                    <a href="course-2.html#"><i class="far fa-long-arrow-right"></i>IT And Data
                                        Science</a>
                                    <a href="course-2.html#"><i class="far fa-long-arrow-right"></i>Health And
                                        Medicine</a>
                                    <a href="course-2.html#"><i class="far fa-long-arrow-right"></i>Art And Design</a>
                                    <a href="course-2.html#"><i class="far fa-long-arrow-right"></i>Information
                                        Technology</a>
                                    <a href="course-2.html#"><i class="far fa-long-arrow-right"></i>Acting And Drama</a>
                                    <a href="course-2.html#"><i class="far fa-long-arrow-right"></i>Human Resource</a>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title">Location Type</h5>
                                <form action="#">
                                    <select class="form-select" name="location">
                                        <option value="">Choose Location</option>
                                        <option value="1">On Campus</option>
                                        <option value="2">Online</option>
                                    </select>
                                </form>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title">Program Level</h5>
                                <form action="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="program" value="1"
                                            id="level1" checked="">
                                        <label class="form-check-label" for="level1">
                                            Graduate
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="program" value="2"
                                            id="level2">
                                        <label class="form-check-label" for="level2">
                                            Undergraduate
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
