@extends('layouts.layout')
@section('title', 'Valasys - Home')
@section('content')

    <!-- Banner -->
    <div id="iq-home" class="iq-banner">
        <div class="banner-objects">
            <span class="banner-objects-02">
                <img src="{{ URL::asset('assets/images/banner/banner-pattern-1.png') }}" alt="#">
            </span>
        </div>
        <div class="container">
            <div class="banner-text">
                <div class="row">
                    <div class="col-md-12 col-lg-6 pr-0">
                        <h1 class="text-uppercase wow fadeIn">Enabling Organizations<br>To Grow Agency</h1>
                        <p class="iq-pt-15 iq-mb-40 wow fadeIn">It is a long established fact that a reader will be
                            distracted <span>by the readable content of a page when looking</span><span> at its
                                layout.</span></p>
                        <div class="btn-container text-left">
                            <a class="iq-button d-inline-block wow fadeIn mb-5 mb-lg-0" href="about-us.html"><span>Click
                                    Here</span><em></em></a>
                            <h4 class="iq-text wow fadeIn">Agency</h4>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="iq-banner-video">
                            <div class="waves-box">
                                <a href="https://www.youtube.com/watch?v=iH3qXKPsnZM" class="iq-video popup-youtube"><i
                                        class="ion-ios-play-outline"></i></a>
                                <div class="iq-waves">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>
                            <span class="banner-responsive">
                                <img src="{{ URL::asset('assets/images/banner/banner-img.jpg') }}" alt="drive02">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-objects">
            <span class="banner-objects-01">
                <img src="{{ URL::asset('assets/images/banner/banner-img.jpg') }}" alt="drive02">
            </span>
        </div>

    </div>
    <!-- Banner End -->
    <!-- Main Content Start -->
    <div class="main-content">
        <!-- Service Start -->
        <div class="position-relative overview-block-pt iq-pb-70 iq-investor">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 wow fadeIn">
                        <div class="text-left iq-title-box">
                            <h2 class="iq-title text-uppercase pr-lg-5">Service for Creative Agency Investor</h2>
                            <p class="iq-line one"></p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 wow fadeIn">
                        <div class="btn-container">
                            <a class="iq-button d-inline-block" href="services.html"><span>Click Here</span><em></em></a>
                        </div>
                    </div>
                </div>
                <div class="row text-center position-relative">
                    <div class="col-lg-3 col-md-6 wow fadeIn">
                        <div class="iq-service-style1 text-left">
                            <div class="iq-iconbg">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                            </div>
                            <div class="iq-image">
                                <img alt="#" src="{{ URL::asset('assets/images/fancy-pattern.png') }}">
                            </div>
                            <div class="iq-content">
                                <div class="iq-title">
                                    <h4>Digital Advice</h4>
                                </div>
                                <p class="m-0">Contrary to popular belief, Lorem Ipsum is not simply.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeIn">
                        <div class="iq-service-style1 text-left">
                            <div class="iq-iconbg">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <div class="iq-image">
                                <img alt="#" src="{{ URL::asset('assets/images/fancy-pattern.png') }}">
                            </div>
                            <div class="iq-content">
                                <div class="iq-title">
                                    <h4>Leadership</h4>
                                </div>
                                <p class="m-0">Contrary to popular belief, Lorem Ipsum is not simply.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeIn">
                        <div class="iq-service-style1 white-bg text-left">
                            <div class="iq-iconbg">
                                <i class="fa fa-line-chart" aria-hidden="true"></i>
                            </div>
                            <div class="iq-image">
                                <img alt="#" src="{{ URL::asset('assets/images/fancy-pattern.png') }}">
                            </div>
                            <div class="iq-content">
                                <div class="iq-title">
                                    <h4>Improvement</h4>
                                </div>
                                <p class="m-0">Contrary to popular belief, Lorem Ipsum is not simply.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeIn">
                        <div class="iq-service-style1 white-bg text-left">
                            <div class="iq-iconbg">
                                <i class="fa fa-object-group" aria-hidden="true"></i>
                            </div>
                            <div class="iq-image">
                                <img alt="#" src="{{ URL::asset('assets/images/fancy-pattern.png') }}">
                            </div>
                            <div class="iq-content">
                                <div class="iq-title">
                                    <h4>Finance management</h4>
                                </div>
                                <p class="m-0">Contrary to popular belief, Lorem Ipsum is not simply.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Service End -->
        <!-- Portfolio Start -->
        <section class="position-relative overview-block-pt iq-pb-40 iq-portfolio-section">
            <img src="{{ URL::asset('assets/images/fancybox/overlay.png') }}" class="overlay-right-bottom" alt="#">
            <img src="{{ URL::asset('assets/images/fancybox/overlay-dot.png') }}" class="overlay-right-bottom-2"
                alt="#">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 wow fadeIn">
                        <div class="text-left iq-title-box pr-lg-5">
                            <h2 class="iq-title text-uppercase">We work in the fields of UI/UX design, photography</h2>
                            <p class="iq-line two"></p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 wow fadeIn">
                        <div class="btn-container">
                            <a class="iq-button d-inline-block" href="portfolio-details.html"><span>Explore
                                    More</span><em></em></a>
                        </div>
                    </div>
                </div>
                <div class="row text-center position-relative">
                    <div class="col-lg-6 col-md-6 wow fadeIn">
                        <div class="iq-portfolio iq-mr-15">
                            <div class="iq-portfolio-img">
                                <img class="img-fluid" src="{{ URL::asset('assets/images/portfolio/portfolio-1.jpg') }}"
                                    alt="image">
                            </div>
                            <div class="portfolio-title">
                                <h4 class="iq-title">Category</h4>
                            </div>
                            <div class="iq-portfolio-info text-left">
                                <a href="portfolio-details.html">
                                    <h4 class="portfolio-text">Design Concept</h4>
                                </a>
                            </div>
                            <a href="portfolio-details.html">
                                <div class="iq-portfolio-icon">
                                    <i class="fa fa-arrows-alt"></i>
                                </div>
                            </a>
                            <div class="iq-image">
                                <img src="{{ URL::asset('assets/images/portfolio/pattern.png') }}" class="img-fluid"
                                    alt="#">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeIn">
                        <div class="iq-portfolio iq-ml-15">
                            <div class="iq-portfolio-img">
                                <img class="img-fluid" src="{{ URL::asset('assets/images/portfolio/portfolio-2.jpg') }}"
                                    alt="image">
                            </div>
                            <div class="portfolio-title">
                                <h4 class="iq-title"> Category</h4>
                            </div>
                            <div class="iq-portfolio-info text-left">
                                <a href="portfolio-details.html">
                                    <h4 class="portfolio-text">Bussiness Growth </h4>
                                </a>
                            </div>
                            <div class="iq-portfolio-icon">
                                <a href="portfolio-details.html"><i class="fa fa-arrows-alt"></i></a>
                            </div>
                            <div class="iq-image">
                                <img src="{{ URL::asset('assets/images/portfolio/pattern.png') }}" class="img-fluid"
                                    alt="#">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  text-center position-relative">
                    <div class="col-lg-6 col-md-6 wow fadeIn">
                        <div class="iq-portfolio iq-mr-15">
                            <div class="iq-portfolio-img">
                                <img class="img-fluid" src="{{ URL::asset('assets/images/portfolio/portfolio-3.jpg') }}"
                                    alt="image">
                            </div>
                            <div class="portfolio-title">
                                <h4 class="iq-title"> Category</h4>
                            </div>
                            <div class="iq-portfolio-info text-left">
                                <a href="portfolio-details.html">
                                    <h4 class="portfolio-text">Creative Design </h4>
                                </a>
                            </div>
                            <div class="iq-portfolio-icon">
                                <a href="portfolio-details.html"><i class="fa fa-arrows-alt"></i></a>
                            </div>
                            <div class="iq-image">
                                <img src="{{ URL::asset('assets/images/portfolio/pattern.png') }}" class="img-fluid"
                                    alt="#">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeIn">
                        <div class="iq-portfolio iq-ml-15">
                            <div class="iq-portfolio-img">
                                <img class="img-fluid" src="{{ URL::asset('assets/images/portfolio/portfolio-4.png') }}"
                                    alt="image">
                            </div>
                            <div class="portfolio-title">
                                <h4 class="iq-title"> Category</h4>
                            </div>
                            <div class="iq-portfolio-info text-left">
                                <a href="portfolio-details.html">
                                    <h4 class="portfolio-text">Concept Design</h4>
                                </a>
                            </div>
                            <div class="iq-portfolio-icon">
                                <a href="portfolio-details.html"><i class="fa fa-arrows-alt"></i></a>
                            </div>
                            <div class="iq-image">
                                <img src="{{ URL::asset('assets/images/portfolio/pattern.png') }}" class="img-fluid"
                                    alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio End -->
        <!-- Counter Start -->
        <div class="iq-counter-block position-relative">
            <img src="{{ URL::asset('assets/images/fancybox/overlay-dot2.png') }}" class="overlay-right-top-2"
                alt="#">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="iq-pattern-style"></div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="iq-counter  iq-counter-style-1">
                                <div class="counter-content">
                                    <p class="iq-counter-info">
                                        <span class="timer" data-to="25" data-speed="5000">25</span>
                                        <span class="counter-after-content">+</span>
                                        <span class="counter-symbol"></span>
                                    </p>
                                    <p class="counter-content-text">Years of Experience </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="iq-counter  iq-counter-style-1">
                                <div class="counter-content">
                                    <p class="iq-counter-info">
                                        <span class="timer" data-to="50" data-speed="5000">50</span>
                                        <span class="counter-after-content"></span>
                                        <span class="counter-symbol"></span>
                                    </p>
                                    <p class="counter-content-text">Awards & Recognition</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="iq-counter  iq-counter-style-1">
                                <div class="counter-content">
                                    <p class="iq-counter-info">
                                        <span class="timer" data-to="1200" data-speed="5000">1200</span>
                                        <span class="counter-after-content"></span>
                                        <span class="counter-symbol"></span>
                                    </p>
                                    <p class="counter-content-text">Completed Projects</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="iq-counter  iq-counter-style-1">
                                <div class="counter-content">
                                    <p class="iq-counter-info">
                                        <span class="timer" data-to="90" data-speed="5000">90</span>
                                        <span class="counter-after-content">%</span>
                                        <span class="counter-symbol"></span>
                                    </p>
                                    <p class="counter-content-text">Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ URL::asset('assets/images/fancybox/overlay.png') }}" class="overlay-left-bottom"
                alt="#">
        </div>
        <!-- Counter End -->
        <!-- Team Start -->
        <section class="overview-block-ptb">
            <img src="{{ URL::asset('assets/images/fancybox/overlay-dot2.png') }}" class="overlay-right-top-2"
                alt="#">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="text-left iq-title-box pr-lg-5">
                            <h2 class="iq-title text-uppercase">Meet Our team of Professional</h2>
                            <p class="iq-line three"></p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="btn-container">
                            <a class="iq-button d-inline-block" href="our-team.html"><span>Explore
                                    More</span><em></em></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-sm-center">
                    <div class="col-sm-12">
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                            data-dots="true" data-items="3" data-items-laptop="3" data-items-tab="2"
                            data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                            <div class="item">
                                <div class="iq-team-blog text-left">
                                    <div class="iq-team">
                                        <div class="iq-team-img">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('assets/images/team/team-1.jpg') }}" alt="image">
                                        </div>
                                        <div class="iq-team-social">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="iq-team-info text-left">
                                            <h4 class="member-text">Farid Amini</h4>
                                            <span class="designation-text">Manager</span>
                                        </div>
                                        <div class="iq-image">
                                            <img src="{{ URL::asset('assets/images/team/team-hover-pattern.png') }}"
                                                class="img-fluid" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-team-blog text-left">
                                    <div class="iq-team">
                                        <div class="iq-team-img">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('assets/images/team/team-2.jpg') }}" alt="image">
                                        </div>
                                        <div class="iq-team-social">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="iq-team-info text-left">
                                            <h4 class="member-text">Eva Mendes</h4>
                                            <span class="designation-text">CEO</span>
                                        </div>
                                        <div class="iq-image">
                                            <img src="{{ URL::asset('assets/images/team/team-hover-pattern.png') }}"
                                                class="img-fluid" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-team-blog text-left">
                                    <div class="iq-team">
                                        <div class="iq-team-img">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('assets/images/team/team-3.jpg') }}" alt="image">
                                        </div>
                                        <div class="iq-team-social">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="iq-team-info text-left">
                                            <h4 class="member-text">Martin Luther</h4>
                                            <span class="designation-text">Assistant</span>
                                        </div>
                                        <div class="iq-image">
                                            <img src="{{ URL::asset('assets/images/team/team-hover-pattern.png') }}"
                                                class="img-fluid" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ URL::asset('assets/images/fancybox/overlay.png') }}" class="overlay-left-bottom"
                alt="#">
        </section>
        <!-- Team End -->
        <!-- Testimonial Start -->
        <section class="light-orange-bg overview-block-pt iq-pb-70">
            <img src="{{ URL::asset('assets/images/fancybox/overlay.png') }}" class="overlay-right-top" alt="#">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="text-left iq-title-box pr-lg-5 mb-3">
                            <h2 class="iq-title text-uppercase">Check what's our client say about us!</h2>
                            <p class="iq-line four"></p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="text-left">
                            <p class="m-0">There are many variations of passages of Lorem Ipsum available, but the
                                majority have Category in some form, by injected humour, or randomised words which don't
                                look even slightly believable.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-sm-center">
                    <div class="col-sm-12">
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="true"
                            data-dots="false" data-items="2" data-items-laptop="2" data-items-tab="1"
                            data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                            <div class="item">
                                <div class="iq-testimonial position-relative">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        vero eos et accus adip. qui blanditiis praesentium vero eos et accus adip.</p>
                                    <span class="iq-border"></span>
                                    <div class="testimonial-info ">
                                        <img alt="#" class="img-fluid rounded-circle"
                                            src="{{ URL::asset('assets/images/testimonial/testimonial-1.jpg') }}">
                                        <div class="testimonial-name align-self-center">
                                            <h5>Aney Hark</h5>
                                            <span class="sub-title">Trainer</span>
                                        </div>
                                    </div>
                                    <div class="iq-icon">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-testimonial position-relative">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        vero eos et accus adip. qui blanditiis praesentium vero eos et accus adip.</p>
                                    <span class="iq-border"></span>
                                    <div class="testimonial-info ">
                                        <img alt="#" class="img-fluid rounded-circle"
                                            src="{{ URL::asset('assets/images/testimonial/testimonial-2.jpg') }}">
                                        <div class="testimonial-name align-self-center">
                                            <h5>Rooney Mara</h5>
                                            <span class="sub-title">Trainer</span>
                                        </div>
                                    </div>
                                    <div class="iq-icon">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-testimonial position-relative">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        vero eos et accus adip. qui blanditiis praesentium vero eos et accus adip.</p>
                                    <span class="iq-border"></span>
                                    <div class="testimonial-info ">
                                        <img alt="#" class="img-fluid rounded-circle"
                                            src="{{ URL::asset('assets/images/testimonial/testimonial-3.jpg') }}">
                                        <div class="testimonial-name align-self-center">
                                            <h5>Al Pacino</h5>
                                            <span class="sub-title">Trainer</span>
                                        </div>
                                    </div>
                                    <div class="iq-icon">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ URL::asset('assets/images/fancybox/overlay-dot.png') }}" class="overlay-left-bottom-2"
                alt="#">
        </section>
        <!-- Testimonial End -->
        <!-- Partner Start -->
        <section class="position-relative overview-block-pt iq-pb-70">
            <img src="{{ URL::asset('assets/images/fancy-pattern.png') }}" class="img-fluid fancy-back" alt="#">
            <div class="container">
                <div class="row res-mb">
                    <div class="col-lg-5 col-md-6">
                        <div class="text-left iq-title-box">
                            <h2 class="iq-title text-uppercase pr-lg-5">Some partner who have
                                choose
                            </h2>
                            <p class="iq-line five"></p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="text-left">
                            <p class="m-0">There are many variations of passages of Lorem Ipsum available, but the
                                majority have Category in some form, by injected humour, or randomised words which don't
                                look even slightly believable.</p>
                        </div>
                    </div>
                </div>
                <div class="row text-center position-relative">
                    <div class="col-lg-3 col-md-6">
                        <div class="iq-partner-box">
                            <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/01.png') }}"
                                alt="image6">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="iq-partner-box">
                            <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/02.png') }}"
                                alt="image6">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="iq-partner-box">
                            <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/03.png') }}"
                                alt="image6">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="iq-partner-box">
                            <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/04.png') }}"
                                alt="image6">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Partner End -->
        <!-- Blog Start -->
        <section class="iq-pb-55 overview-block-pt res-pt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="text-left iq-title-box pr-lg-5">
                            <h2 class="iq-title text-uppercase">You can know more about us by our latest blogs</h2>
                            <p class="iq-line six"></p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="btn-container">
                            <a class="iq-button d-inline-block" href="blog-details.html"><span>Click
                                    Here</span><em></em></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-sm-center">
                    <div class="col-sm-12">
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                            data-dots="false" data-items="3" data-items-laptop="3" data-items-tab="2"
                            data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <img src="{{ URL::asset('assets/images/blog/blog-1.jpg') }}" alt="#">
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title">
                                            <a href="blog-details.html">
                                                <h4 class="mb-3">Fully dedicated to finding.</h4>
                                            </a>
                                        </div>
                                        <p class="iq-desc">It is a long established fact that a reader will be distracted
                                            by the readable.</p>
                                        <div class="blog-footer">
                                            <div class="iq-blog-meta">
                                                <ul class="iq-postdate">
                                                    <li class="list-inline-item">
                                                        <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                            href="#">1 Feb 2020</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-button">
                                                <a class="iq-link-button" href="blog-details.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <img src="{{ URL::asset('assets/images/blog/blog-2.jpg') }}" alt="#">
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title">
                                            <a href="blog-details.html">
                                                <h4 class="mb-3">Analytics for your website</h4>
                                            </a>
                                        </div>
                                        <p class="iq-desc">It is a long established fact that a reader will be distracted
                                            by the readable.</p>
                                        <div class="blog-footer">
                                            <div class="iq-blog-meta">
                                                <ul class="iq-postdate">
                                                    <li class="list-inline-item">
                                                        <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                            href="#">1 Feb 2020</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-button">
                                                <a class="iq-link-button" href="blog-details.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <img src="{{ URL::asset('assets/images/blog/blog-3.jpg') }}" alt="#">
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title">
                                            <a href="blog-details.html">
                                                <h4 class="mb-3">Beautiful Presentations for Site</h4>
                                            </a>
                                        </div>
                                        <p class="iq-desc">It is a long established fact that a reader will be distracted
                                            by the readable.</p>
                                        <div class="blog-footer">
                                            <div class="iq-blog-meta">
                                                <ul class="iq-postdate">
                                                    <li class="list-inline-item">
                                                        <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                            href="#">1 Feb 2020</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-button">
                                                <a class="iq-link-button" href="blog-details.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <img src="{{ URL::asset('assets/images/blog/blog-4.jpg') }}" alt="#">
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title">
                                            <a href="blog-details.html">
                                                <h4 class="mb-3">Marketing Agencies Strategies</h4>
                                            </a>
                                        </div>
                                        <p class="iq-desc">It is a long established fact that a reader will be distracted
                                            by the readable.</p>
                                        <div class="blog-footer">
                                            <div class="iq-blog-meta">
                                                <ul class="iq-postdate">
                                                    <li class="list-inline-item">
                                                        <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                            href="#">1 Feb 2020</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-button">
                                                <a class="iq-link-button" href="blog-details.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <img src="{{ URL::asset('assets/images/blog/blog-5.jpg') }}" alt="#">
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title">
                                            <a href="blog-details.html">
                                                <h4 class="mb-3">Tools for Digital Growth</h4>
                                            </a>
                                        </div>
                                        <p class="iq-desc">It is a long established fact that a reader will be distracted
                                            by the readable.</p>
                                        <div class="blog-footer">
                                            <div class="iq-blog-meta">
                                                <ul class="iq-postdate">
                                                    <li class="list-inline-item">
                                                        <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                            href="#">1 Feb 2020</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-button">
                                                <a class="iq-link-button" href="blog-details.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <img src="{{ URL::asset('assets/images/blog/blog-6.jpg') }}" alt="#">
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title">
                                            <a href="blog-details.html">
                                                <h4 class="mb-3">Analytics for your website</h4>
                                            </a>
                                        </div>
                                        <p class="iq-desc">It is a long established fact that a reader will be distracted
                                            by the readable.</p>
                                        <div class="blog-footer">
                                            <div class="iq-blog-meta">
                                                <ul class="iq-postdate">
                                                    <li class="list-inline-item">
                                                        <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                            href="#">1 Feb 2020</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-button">
                                                <a class="iq-link-button" href="blog-details.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->
    </div>
    <!-- Main Content End -->
@endsection

@push('js')
@endpush
