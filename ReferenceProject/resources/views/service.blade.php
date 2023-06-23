@extends('layouts.layout')
@section('title', 'Valasys - Service')
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
                                    Services
                                </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i
                                                class="fa fa-home mr-2"></i>Home</a></li>
                                    <li class="breadcrumb-item active"> Services</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <section class="position-relative overview-block-pt iq-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="text-left iq-title-box">
                        <h2 class="iq-title text-uppercase pr-lg-5">Service for Creative Agency Investor</h2>
                        <p class="iq-line one"></p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="btn-container">
                        <a class="iq-button d-inline-block" href="#"><span>Click Here</span><em></em></a>
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
                            <img alt="#" src="{{URL::asset('assets/images/fancy-pattern.png')}}">
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
                            <img alt="#" src="{{URL::asset('assets/images/fancy-pattern.png')}}">
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
                            <img alt="#" src="{{URL::asset('assets/images/fancy-pattern.png')}}">
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
                            <img alt="#" src="{{URL::asset('assets/images/fancy-pattern.png')}}">
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
    </section>
    <section class="iq-aboutus overview-block-pb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-5 mb-lg-0 text-center">
                    <div class="iq-image">
                        <img src="{{URL::asset('assets/images/about-us/about-1.png')}}" class="img-fluid" alt="#">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="iq-title-box mb-0 text-left">
                        <h2 class="title mb-4">We are the largest bussiness expert in europe and asia</h2>
                        <p>Quis enim lobortis scelerisque fermentum dui faucibus in ornare. Ornare aenean euismod elementum
                            nisi quis eleifend quam.</p>
                    </div>
                    <p>Vitae congue eu consequat ac felis donec et odio. Eget felis eget nunc lobortis. At lectus urna duis
                        convallis convallis tellus id interdum. Tellus in hac habitasse platea dictumst vestibulum rhoncus
                        est.</p>
                    <div class="iq-sign-box">
                        <div class="iq-image">
                            <img src="{{URL::asset('assets/images/others/sign-d2.png')}}" class="img-fluid mr-5" alt="#">
                        </div>
                        <div class="iq-name mt-3">
                            <h5 class="title">-Founder Of Cretic</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        <a class="iq-button btn-radius btn-white" href="portfolio-details.html"><span>Click
                                Here</span><em></em></a>
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
                                        <img loading="lazy" src="{{URL::asset('assets/images/portfolio/port-d3-1.png')}}" alt="portfolio">
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
                                        <img loading="lazy" src="{{URL::asset('assets/images/portfolio/port-d3-2.png')}}" alt="portfolio">
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
                                        <img loading="lazy" src="{{URL::asset('assets/images/portfolio/port-d3-3.png')}}" alt="portfolio">
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
