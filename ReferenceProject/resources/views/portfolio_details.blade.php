@extends('layouts.layout')
@section('title', 'Valasys - Blogs')
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
                                    Portfolio Details
                                </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i
                                                class="fa fa-home mr-2"></i>Home</a></li>
                                    <li class="breadcrumb-item active">Portfolio Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <section class="iq-aboutus overview-block-ptb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-5 mb-lg-0 text-center">
                    <div class="iq-image">
                        <img src="{{ URL::asset('assets/images/about-us/about-1.png') }}" class="img-fluid" alt="#">
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
                        <div class="iq-image mr-5">
                            <img src="{{ URL::asset('assets/images/others/sign-d2.png') }}" class="img-fluid" alt="#">
                        </div>
                        <div class="iq-name mt-3">
                            <h5 class="title">-Founder Of Cretic</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="iq-about-section overview-block-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="iq-title-box text-left mb-4">
                        <h2 class="iq-title mb-3">Do More with about<br> agency</h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply.Contrary to popular belief, Lorem Ipsum is
                            not simply.Contrary to popular belief, Lorem Ipsum is not simply.</p>
                    </div>
                    <div class="iq-services-box text-left mb-lg-0 mb-5">
                        <div class="services-content">
                            <h6>Designer</h6>
                            <span class="progress-value">90%</span>
                            <div class="iq-progress-bar">
                                <span data-percent="90"></span>
                            </div>
                        </div>
                        <div class="services-content">
                            <h6>Developer</h6>
                            <span class="progress-value">95%</span>
                            <div class="iq-progress-bar">
                                <span data-percent="95"></span>
                            </div>
                        </div>
                        <div class="services-content">
                            <h6>Graphic</h6>
                            <span class="progress-value">75%</span>
                            <div class="iq-progress-bar">
                                <span data-percent="75"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 text-center">
                    <div class="iq-img">
                        <img src="{{ URL::asset('assets/images/about-us/d3-about.png') }}" class="img-fluid" alt="fancybox">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overview-block-pb iq-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeIn">
                    <div class="phifi-services">
                        <img class="hover-img" src="{{ URL::asset('assets/images/services/service-1.jpg') }}" alt="fancybox">
                        <div class="services-detail">
                            <div class="iq-icon">
                                <i class="flaticon-payment"></i>
                            </div>
                            <h4 class="mb-3">Retirement Planning</h4>
                            <p class="mb-0">It is a long established fact that a reader will be distracted.</p>
                        </div>
                        <div class="iq-number">1
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn">
                    <div class="phifi-services">
                        <img class="hover-img" src="{{ URL::asset('assets/images/services/service-2.png') }}" alt="fancybox">
                        <div class="services-detail">
                            <div class="iq-icon">
                                <i class="flaticon-loan-1"></i>
                            </div>
                            <h4 class="mb-3">Home And Bussiness Loan</h4>
                            <p class="mb-0">It is a long established fact that a reader will be distracted.</p>
                        </div>
                        <div class="iq-number">2
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn">
                    <div class="phifi-services">
                        <img class="hover-img" src="{{ URL::asset('assets/images/services/service-1.jpg') }}" alt="fancybox">
                        <div class="services-detail">
                            <div class="iq-icon">
                                <i class="flaticon-strategy"></i>
                            </div>
                            <h4 class="mb-3">Saving And Strategy</h4>
                            <p class="mb-0">It is a long established fact that a reader will be distracted.</p>
                        </div>
                        <div class="iq-number">3
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
                        <a class="iq-button btn-radius btn-white" href="#">Click Here</a>
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
