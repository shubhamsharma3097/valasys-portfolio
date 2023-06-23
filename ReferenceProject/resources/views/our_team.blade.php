@extends('layouts.layout')
@section('title', 'Valasys - Our-Teams')
@section('content')


    <!-- Breadcrumb Start -->
    <div class=" main-bg">
        <div class="container-fluid p-0">
            <div class="text-left iq-breadcrumb-one
              iq-bg-over black     ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                            <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                                <h2 class="title">
                                    Our Team </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i
                                                class="fa fa-home mr-2"></i>Home</a></li>
                                    <li class="breadcrumb-item active">Our Team 1</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Team Start -->
    <section class="overview-block-ptb">
        <img src="{{ URL::asset('assets/images/fancybox/overlay-dot2.png') }}" class="overlay-right-top-2" alt="#">
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
                        <a class="iq-button d-inline-block" href="our-team.html"><span>Explore More</span><em></em></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-sm-center">
                <div class="col-sm-12">
                    <div class="owl-carousel" data-autoplay="false" data-loop="true" data-nav="false" data-dots="true"
                        data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1"
                        data-items-mobile-sm="1" data-margin="30">
                        <div class="item">
                            <div class="iq-team-blog text-left">
                                <div class="iq-team">
                                    <div class="iq-team-img">
                                        <img class="img-fluid" src="{{ URL::asset('assets/images/team/team-1.jpg') }}" alt="image">
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
                                        <img src="{{ URL::asset('assets/images/team/team-hover-pattern.png') }}" class="img-fluid" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="iq-team-blog text-left">
                                <div class="iq-team">
                                    <div class="iq-team-img">
                                        <img class="img-fluid" src="{{ URL::asset('assets/images/team/team-2.jpg') }}" alt="image">
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
                                        <img src="{{ URL::asset('assets/images/team/team-hover-pattern.png') }}" class="img-fluid" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="iq-team-blog text-left">
                                <div class="iq-team">
                                    <div class="iq-team-img">
                                        <img class="img-fluid" src="{{ URL::asset('assets/images/team/team-3.jpg') }}" alt="image">
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
                                        <img src="{{ URL::asset('assets/images/team/team-hover-pattern.png') }}" class="img-fluid" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="iq-team-blog text-left">
                                <div class="iq-team">
                                    <div class="iq-team-img">
                                        <img class="img-fluid" src="{{ URL::asset('assets/images/team/team-1.jpg') }}" alt="image">
                                    </div>
                                    <div class="iq-team-social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="iq-team-info text-left">
                                        <h4 class="member-text">Zac Efron</h4>
                                        <span class="designation-text">Company</span>
                                    </div>
                                    <div class="iq-image">
                                        <img src="{{ URL::asset('assets/images/team/team-hover-pattern.png') }}" class="img-fluid" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ URL::asset('assets/images/fancybox/overlay.png') }}" class="overlay-left-bottom" alt="#">
    </section>
    <!-- Team End -->

    <!-- Portfolio Start -->
    <section class="position-relative overview-block-ptb drak-bg overview-block-ptb iq-portfolio-after">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="text-left iq-title-box pr-lg-5">
                        <h2 class="iq-title text-white text-uppercase">CHECK SOME OUR VIEW RECENT WORKS</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="btn-container">
                        <a class="iq-button btn-white" href="portfolio-details.html"><span>Click Here</span><em></em></a>
                    </div>
                </div>
            </div>
            <div class="row text-center position-relative">
                <div class="col-sm-12">
                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true"
                        data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1"
                        data-items-mobile-sm="1" data-margin="30">
                        <div class="item">
                            <div class="iq-portfolio2">
                                <div class="iq-portfolio-img-block">
                                    <a href="#" class="iq-portfolio-img">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/portfolio/port-d3-1.png') }}" alt="portfolio">
                                        <div class="portfolio-link">
                                            <div class="icon">
                                                <i class="ion-android-arrow-forward"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="iq-portfolio-content">
                                    <a href="#">
                                        <h4 class="link-color">
                                            Web Development
                                        </h4>
                                    </a>
                                    <ul class="iq-portfolio-cat">
                                        <li>
                                            Business
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="iq-portfolio2">
                                <div class="iq-portfolio-img-block">
                                    <a href="#" class="iq-portfolio-img">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/portfolio/port-d3-2.png') }}" alt="portfolio">
                                        <div class="portfolio-link">
                                            <div class="icon">
                                                <i class="ion-android-arrow-forward"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="iq-portfolio-content">
                                    <a href="#">
                                        <h4 class="link-color">
                                            Revenue Generation
                                        </h4>
                                    </a>
                                    <ul class="iq-portfolio-cat">
                                        <li>
                                            business
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="iq-portfolio2">
                                <div class="iq-portfolio-img-block">
                                    <a href="#" class="iq-portfolio-img">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/portfolio/port-d3-3.png') }}" alt="portfolio">
                                        <div class="portfolio-link">
                                            <div class="icon">
                                                <i class="ion-android-arrow-forward"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="iq-portfolio-content">
                                    <a href="#">
                                        <h4 class="link-color">
                                            Agency Bussiness Work
                                        </h4>
                                    </a>
                                    <ul class="iq-portfolio-cat">
                                        <li>
                                            Consulting
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio End -->

@endsection
@push('js')
@endpush
