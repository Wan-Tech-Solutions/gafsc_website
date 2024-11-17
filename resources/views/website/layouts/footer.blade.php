<footer class="footer-area">
    <div class="footer-shape">
        {{-- <img src="assets/img/shape/03.png" alt> --}}
    </div>
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget-box about-us">
                        <a href="{{ route('homepage') }}" class="footer-logo">
                            <img src="{{ asset('logo-white.png') }}" alt>
                        </a>
                        <p class="mb-3">
                            The Ghana Armed Forces Command and Staff College (GAFCSC) was established in 1963 with the
                            mandate to train officers of the Ghana Armed Forces and allied officers of Africa in command
                            and staff responsibilities. <a href="javascript:void(0)" class="text-light">Read more...</a>
                        </p>
                        <ul class="footer-contact">
                            <li><a href="mailto:info@gafcscmil.edu.gh"><i
                                        class="far fa-envelope"></i><span>info@gafcscmil.edu.gh</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="{{ route('about.history') }}"><i class="fas fa-caret-right"></i> About Us</a>
                            </li>
                            <li><a href="{{ route('contact.faq') }}"><i class="fas fa-caret-right"></i> FAQ's</a></li>
                            <li><a href="{{ route('about.alumni') }}" onclick="return false"><i class="fas fa-caret-right"></i> Alumni</a></li>
                            <li><a href="{{ route('resources.publications.publications') }}"  onclick="return false"><i
                                        class="fas fa-caret-right"></i>
                                    Publications</a>
                            </li>
                            <li><a href="{{ route('about.campus_tour') }}"  onclick="return false"><i class="fas fa-caret-right"></i> Our
                                    Campus</a>
                            </li>
                            <li><a href="{{ route('about.careers') }}"><i class="fas fa-caret-right"></i> Careers</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Useful Links</h4>
                        <ul class="footer-list">
                            <li><a
                                    href="{{ asset('downloads/MDIP_form.pdf') }}"><i
                                        class="fas fa-caret-right"></i> MDIP
                                    Application Form</a>
                            </li>
                            <li><a
                                    href="{{ asset('downloads/phd_form.pdf') }}"><i
                                        class="fas fa-caret-right"></i> PHD
                                    Application Form</a>
                            </li>
                            <li><a href="javascript:void(0)"><i class="fas fa-caret-right"></i> E-Library</a></li>
                            <li><a href="{{ route('resources.research.catalog') }}"  onclick="return false"><i class="fas fa-caret-right"></i>
                                    Research</a></li>
                            </li>
                            <li><a href="javascript:void(0)"><i class="fas fa-caret-right"></i> Academic Departments</a>
                            </li>
                            <li><a href="{{ route('organisation.organogram') }}"  onclick="return false"><i class="fas fa-caret-right"></i>
                                    Organogram</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Newsletter</h4>
                        <div class="footer-newsletter">
                            <p>Subscribe Our Newsletter To Get Latest Update And News</p>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                    <button class="theme-btn" type="button">
                                        Subscribe Now <i class="far fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-wrapper">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="javascript:void(0)">
                                GAFCSC </a>
                            All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            @foreach (social() as $key => $social)
                                <li> <a target="_blank" href="{{ $social['link'] }}"><i
                                            class="{{ $social['icon'] }}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
