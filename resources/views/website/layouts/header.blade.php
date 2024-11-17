<header class="header">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7159676745588864"
     crossorigin="anonymous"></script>
     
    <div class="header-top">
        <div class="container px-0">
            <div class="header-top-wrapper">
                <div class="header-top-left">
                    <div class="header-top-contact">
                        <ul>

                            <li>
                                <div class="header-top-contact-icon">
                                    <img src="{{ asset('assets/img/icon/mail.svg') }}" alt>
                                </div>
                                <div class="header-top-contact-info">
                                    <h6>Mail Us</h6>
                                    <a href="mailto:info@gafcscmil.edu.gh"><span
                                            class="__cf_email__">info@gafcscmil.edu.gh</span></a>
                                </div>
                            </li>

                            <li>
                                <div class="header-top-contact-icon">
                                    <a href="{{ route('about.blog.blogs') }}">
                                        <img src="{{ asset('assets/img/icon/course.svg') }}" alt>
                                    </a>
                                </div>
                                <div class="header-top-contact-info">
                                    <h6>Blog</h6>
                                    <a href="{{ route('about.blog.blogs') }}"><span class="__cf_email__">recent
                                            news</span></a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-social">
                        <span>Follow Us: </span>
                        @foreach (social() as $key => $social)
                            <a target="_blank" href="{{ $social['link'] }}"><i class="{{ $social['icon'] }}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navigation pb-5">
        <nav class="navbar navbar-expand-lg">
            <div class="container custom-nav position-relative">
                <a class="navbar-brand" href="{{ route('homepage') }}">
                    <img src="{{ asset('logo.png') }}" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <div class="search-btn">
                        <button type="button" class="nav-right-link search-box-outer"><i
                                class="far fa-search"></i></button>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link {{ active_route('homepage') }}" href="{{ route('homepage') }}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ @request()->segments()[0] == 'organisation' ? 'active' : '' }}"
                                href="#" data-bs-toggle="dropdown">Organisation</a>
                            <ul class="dropdown-menu fade-down">
                                <li class="dropdown-submenu ">
                                    <a class="dropdown-item dropdown-toggle {{ @request()->segments()[1] == 'command' ? 'active' : '' }}"
                                        href="#">Command
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item  {{ active_route('organisation.command.commandant') }}"
                                                href="{{ route('organisation.command.commandant') }}"> The
                                                Commandant</a>
                                        </li>
                                        <li><a class="dropdown-item {{ active_route('organisation.command.d_commandant') }}"
                                                href="{{ route('organisation.command.d_commandant') }}"
                                                       >Dep
                                                Commandant</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item {{ active_route('organisation.control_board') }}"
                                        href="{{ route('organisation.control_board') }}">Control Board</a>

                                </li>

                                <li><a class="dropdown-item {{ active_route('organisation.academic-board.board') }} {{ active_route('organisation.academic-board.dean') }}  {{ active_route('organisation.academic-board.vice_dean') }}"
                                        href="{{ route('organisation.academic-board.board') }}">Academic
                                        Board</a>

                                <li><a class="dropdown-item {{ active_route('organisation.policy-committee.committee') }} {{ active_route('organisation.policy-committee.ascom_senior_division') }}  {{ active_route('organisation.policy-committee.ascom_junior_division') }}"
                                        href="{{ route('organisation.policy-committee.committee') }}">Policy
                                        Committee</a>
                                {{--
                                <li class="dropdown-submenu ">
                                    <a class="dropdown-item dropdown-toggle {{ @request()->segments()[4] == 'staff_and_faculty' ? 'active' : '' }}"
                                        href="#">Staff & Faculty
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item  {{ active_route('organisation.staff_and_faculty.headquarters') }}"
                                                href="{{ route('organisation.staff_and_faculty.headquarters') }}"> HQ Staff</a>
                                        </li>
                                        <li><a class="dropdown-item {{ active_route('organisation.staff_and_faculty.academics') }}"
                                                href="{{ route('organisation.staff_and_faculty.academics') }}"
                                                       >Academic Staff</a>
                                        </li>
                                        <li><a class="dropdown-item {{ active_route('organisation.staff_and_faculty.chief_instructors') }}"
                                                href="{{ route('organisation.staff_and_faculty.chief_instructors') }}"
                                                       >Chief Instructors</a>
                                        </li>
                                        <li><a class="dropdown-item {{ active_route('organisation.staff_and_faculty.directing_staff') }}"
                                                href="{{ route('organisation.staff_and_faculty.directing_staff') }}"
                                                       >Directing Staff</a>
                                        </li>
                                    </ul>
                                </li>
                               --}}
                                
                                 <li><a class="dropdown-item {{ active_route('organisation.staff_and_faculty') }}"
                                        href="{{ route('organisation.staff_and_faculty') }}">Staff & Faculty</a></li>
                                {{--
                                <li><a class="dropdown-item {{ active_route('organisation.organogram') }}"
                                        href="{{ route('organisation.organogram') }}">Organogram</a></li>
                                
                                <li><a class="dropdown-item {{ active_route('organisation.organogram') }}"
                                        href="#">Organogram</a></li>--}}
                            </ul>

                        </li>
                        <li class="nav-item mega-menu dropdown">
                            <a class="nav-link dropdown-toggle  {{ @request()->segments()[0] == 'academics' ? 'active' : '' }}"
                                href="#" data-bs-toggle="dropdown">Academics</a>
                            <div class="dropdown-menu fade-down">
                                <div class="mega-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 col-sm-4 col-md-4">
                                                <h5>Military</h5>
                                                <ul class="mega-menu-item">
                                                    <li><a class="dropdown-item {{ active_route('academic.military.junior-division') }}"
                                                            href="{{ route('academic.military.junior-division') }}">
                                                            Junior
                                                            Division</a></li>
                                                    <li><a class="dropdown-item {{ active_route('academic.military.senior-division') }}"
                                                            href="{{ route('academic.military.senior-division') }}">
                                                            Senior
                                                            Division</a></li>
                                                            {{--
                                                    <li><a class="dropdown-item {{ active_route('academic.military.international-allied-students') }}"
                                                            href="{{ route('academic.military.international-allied-students') }}">
                                                            International (Allied Students) </a></li>
                                                            --}}
                                                </ul>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-4">
                                                <h5>Graduate School (MDIP/MSS)</h5>
                                                <ul class="mega-menu-item">
                                                    <li><a class="dropdown-item {{ active_route('academic.graduate_school.mdip') }}"
                                                            href="{{ route('academic.graduate_school.mdip') }}">MDIP
                                                            (Weekend Class)</a>
                                                    </li>
                                                    <li><a class="dropdown-item {{ active_route('academic.graduate_school.course') }}"
                                                            href="{{ route('academic.graduate_school.course') }}">MSS
                                                            (Weekend Class)</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('academic.graduate_school.course-overview') }}">
                                                            Course Overview</a></li>
                                                            
                                                </ul>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-4">
                                                <h5>Graduate School (PDIP/Ph.D)</h5>
                                                <ul class="mega-menu-item">
                                                    <li><a class="dropdown-item {{ active_route('academic.graduate_school.pdip') }}"
                                                            href="{{ route('academic.graduate_school.pdip') }}">PDIP
                                                            (Full-Time)</a>
                                                    </li>
                                                    <li><a class="dropdown-item {{ active_route('academic.graduate_school.pdip-overview') }}"
                                                            href="{{ route('academic.graduate_school.pdip-overview') }}">Course
                                                            Overview
                                                        </a></li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  {{ @request()->segments()[0] == 'resources' ? 'active' : '' }}"
                                href="#" data-bs-toggle="dropdown">Resources</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item  {{ active_route('resources.downloads') }}"
                                        href="{{ route('resources.downloads') }}">Downloads</a>
                                </li>

                                <li><a class="dropdown-item " href="https://gafcsclibrary.online/">E-Library</a></li>
                                <li><a class="dropdown-item" target="_blank"
                                        href="https://mail.google.com">Mailing</a></li>

                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle  {{ @request()->segments()[1] == 'research' ? 'active' : '' }}"
                                        href="#">Research</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item  {{ active_route('resources.research.catalog') }}"
                                                onclick="return false;"
                                                href="{{ route('resources.research.catalog') }}">Catalog</a>
                                        </li>
                                        <li><a class="dropdown-item  {{ active_route('resources.research.featured') }}"
                                                onclick="return false;"
                                                href="{{ route('resources.research.featured') }}">Featured</a>
                                        </li>
                                    </ul>
                                </li>

                                <li><a class="dropdown-item  {{ active_route('resources.publications.publications') }}"
                                        href="{{ route('resources.publications.publications') }}">Publications</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  {{ @request()->segments()[0] == 'admissions' ? 'active' : '' }}"
                                href="#" data-bs-toggle="dropdown">Admissions</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item {{ active_route('admissions.how_to_apply') }}" onclick="return false;"
                                        href="{{ route('admissions.how_to_apply') }}">How to
                                        Apply</a>
                                </li>

                                <li><a class="dropdown-item" target="_blank"
                                        href="https://admission.gafcscmil.edu.gh">Apply Now</a></li>
                                {{-- Commented Out
                                <li><a class="dropdown-item {{ active_route('admissions.tuition_and_fees') }}"
                                        href="{{ asset('downloads/Mid-level&Senior DevOps Staff Recruitment_Tiacloud_2023.pdf') }}">Apply
                                        (MDIP/MSS/PDIP)</a>
                                </li>
                                --}}
                                <li><a class="dropdown-item {{ active_route('admissions.tuition_and_fees') }}"
                                        href="{{ route('admissions.tuition_and_fees') }}"
                                        onclick="return false;">Tuition
                                        & Fees</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  {{ @request()->segments()[0] == 'about' ? 'active' : '' }}"
                                href="#" data-bs-toggle="dropdown">About
                                Us</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item {{ active_route('about.history') }}"
                                        href="{{ route('about.history') }}">History</a></li>
                                <li><a class="dropdown-item {{ active_route('about.alumni') }}"
                                        onclick="return false;" href="{{ route('about.alumni') }}">Alumni</a></li>
                                <li><a class="dropdown-item {{ active_route('about.mission_and_vision') }}"
                                        onclick="return false;"
                                        href="{{ route('about.mission_and_vision') }}">Mission &
                                        Vision</a></li>
                        </li>
                        <li><a class="dropdown-item {{ active_route('about.careers') }}"
                                href="{{ route('about.careers') }}">Careers</a></li>
                        <li><a class="dropdown-item {{ active_route('about.blog.blogs') }}"
                                href="{{ route('about.blog.blogs') }}">Blog</a></li>
                        <li><a class="dropdown-item {{ active_route('about.gallery') }}"
                                href="{{ route('about.gallery') }}">Media Centre</a>
                        </li>
                    </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  {{ @request()->segments()[0] == 'contact' ? 'active' : '' }}"
                            href="#" data-bs-toggle="dropdown">Contact</a>
                        <ul class="dropdown-menu fade-down">
                            <li><a class="dropdown-item {{ active_route('contact.contact-us') }}"
                                    href="{{ route('contact.contact-us') }}">Contact Us</a>
                            </li>
                            <li><a class="dropdown-item {{ active_route('contact.faq') }}"
                                    href="{{ route('contact.faq') }}">FAQs</a></li>
                        </ul>
                    </li>


                    </ul>
                    <div class="nav-right">

                        <div class="nav-right-btn mt-2">
                            <a href="https://admission.gafcscmil.edu.gh" target="_blank" class="theme-btn"><span
                                    class="fal fa-pencil"></span>Apply
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6576ddef70c9f2407f7e7f4a/1hhc55sog';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



<div class="search-popup">
    <button class="close-search"><span class="far fa-times"></span></button>
    <form action="#">
        <div class="form-group">
            <input type="search" name="search-field" placeholder="Search Here..." required>
            <button type="submit"><i class="far fa-search"></i></button>
        </div>
    </form>
</div>
