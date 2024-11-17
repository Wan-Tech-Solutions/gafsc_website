@extends('website.layouts.master')

@section('title')
    Contact Us
@endsection


@section('content')
    <main class="main">
        
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Contact Us</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Contact</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
        

        <div class="contact-area py-120">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-map-location-dot"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Office Address</h5>
                                    <p>Otu Barracks, Accra, Ghana</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-phone-volume"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Call Us</h5>
                                    <p>-</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-envelopes"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Email Us</h5>
                                    <p><a href="mailto:info@gafcscmil.edu.gh">info@gafcscmil.edu.gh</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-alarm-clock"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Open Time</h5>
                                    <p>Mon - Fri (9.00AM - 5.00PM)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15883.81159281378!2d-0.1143167!3d5.5739826!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf85764b262c9d%3A0x216fdfb4c8890848!2sGAFCSC!5e0!3m2!1sen!2sgh!4v1694331771553!5m2!1sen!2sgh"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </main>
@endsection
