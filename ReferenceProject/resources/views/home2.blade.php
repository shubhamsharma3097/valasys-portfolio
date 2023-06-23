@extends('layouts.layout')
@section('title', 'Valasys - Home 2')
@section('content')

    <!-- Banner -->
    <div id="iq-home" class="iq-banner-03 pt-0 pb-0">
        <div class="container-fluid pl-0">
            <div class="banner-text">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-objects wow fadeIn">
                            <span class="banner-objects-01">
                                <img src="{{ URL::asset('assets/images/banner/phifi-d3-b1.png') }}" class="img-fluid"
                                    alt="drive02">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Main Content Start -->
    <div class="main-content">
        <div class="iq-agency-block">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="iq-pattern-style"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-left iq-title-box">
                                <h1 class="iq-title text-white text-uppercase wow fadeIn">Enabling Organizations To Grow
                                    Agency</h1>
                                <p class="text-white wow fadeIn">There are many variations of passages of Lorem Ipsum
                                    available,<span> but the majority.There are many variations of passages</span><span> of
                                        Lorem Ipsum available, but the majority.</span></p>
                            </div>
                            <div class="btn-container text-left wow fadeIn">
                                <a class="iq-button btn-radius" href="about-us.html"><span>Click Here</span><em></em></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FancyBox Start -->
        <section class="overview-block-pt iq-fancy-pb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="color-palette one wow fadeIn  text-left">
                            <div class="media">
                                <div class="circle-icon">
                                    <i class="flaticon-work-tools" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="color-text mb-2">Brand identity</h4>
                                    <p class="mb-0">There are many variations of passages.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="color-palette two wow fadeIn  text-left">
                            <div class="media">
                                <div class="circle-icon">
                                    <i class="flaticon-rgb" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="color-text mb-2">Product design</h4>
                                    <p class="mb-0">There are many variations of passages.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="color-palette three wow fadeIn  text-left">
                            <div class="media">
                                <div class="circle-icon">
                                    <i class="flaticon-ux" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="color-text mb-2">UI/UX Design</h4>
                                    <p class="mb-0">There are many variations of passages.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="color-palette four wow fadeIn  text-left">
                            <div class="media">
                                <div class="circle-icon">
                                    <i class="flaticon-web-design" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="color-text mb-2">Web Design</h4>
                                    <p class="mb-0">There are many variations of passages.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="color-palette five wow fadeIn  text-left">
                            <div class="media">
                                <div class="circle-icon">
                                    <i class="flaticon-smartphone" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="color-text mb-2">App design</h4>
                                    <p class="mb-0">There are many variations of passages.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="color-palette six wow fadeIn  text-left">
                            <div class="media">
                                <div class="circle-icon">
                                    <i class="flaticon-cloud" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="color-text mb-2">Development</h4>
                                    <p class="mb-0">There are many variations of passages.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Progress Bar Start -->
        <section class="iq-about-section overview-block-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0 text-center">
                        <div class="iq-abouimg">
                            <img src="{{ URL::asset('assets/images/about-us/d3-about.png') }}" class="img-fluid" alt="fancybox">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="iq-title-box text-left mb-4">
                            <h2 class="iq-title mb-3">Do More with about<br> agency</h2>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply.Contrary to popular belief, Lorem Ipsum
                                is not simply.Contrary to popular belief, Lorem Ipsum is not simply.</p>
                        </div>
                        <div class="iq-services-box text-left">
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
                </div>
            </div>
        </section>
        <!-- Progress Bar End -->
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
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                            data-dots="true" data-items="3" data-items-laptop="3" data-items-tab="2"
                            data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
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
        <section class="overview-block-pb iq-pb-70">
            <div class="container">
                <div class="row res-mb">
                    <div class="col-lg-4 col-md-6 ">
                        <div class="text-left iq-title-box pr-lg-5">
                            <h2 class="iq-title text-uppercase">Why You Should Choose Us</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="text-left">
                            <p class="m-0">There are many variations of passages of Lorem Ipsum available, but the
                                majority have Category in some form, by injected humour, or randomised words which don't
                                look even slightly believable.</p>
                        </div>
                    </div>
                </div>
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
        <!-- Client Start -->
        <div class="iq-client-block">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="iq-pattern-style"></div>
                    <div class="row">
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                            data-dots="true" data-items="4" data-items-laptop="4" data-items-tab="3"
                            data-items-mobile="2" data-items-mobile-sm="1" data-margin="30">
                            <div class="item">
                                <div class="iq-client-box">
                                    <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/c-d3-1.png') }}" alt="image6">
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-client-box">
                                    <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/c-d3-2.png') }}" alt="image6">
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-client-box">
                                    <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/c-d3-3.png') }}" alt="image6">
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-client-box">
                                    <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/c-d3-4.png') }}" alt="image6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client End -->
        <!-- Testimonial Start -->
        <section class="light-orange-bg overview-block-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="text-left iq-title-box pr-lg-5 mb-3">
                            <h2 class="iq-title text-uppercase">Check what's our client say about us!</h2>
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
                                <div class="iq-testimonial3 position-relative">
                                    <div class="testimonial-info ">
                                        <div class="testimonial-img">
                                            <img alt="#" class="img-fluid rounded-circle"
                                                src="{{ URL::asset('assets/images/testimonial/testimonial-d3-1.jpg') }}">
                                        </div>
                                        <div class="testimonial-name align-self-center">
                                            <h5>Aney Hark</h5>
                                            <span class="sub-title">Trainer</span>
                                        </div>
                                    </div>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        vero eos et accus adip. qui blanditiis praesentium vero eos et accus adip.</p>
                                    <div class="iq-icon">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-testimonial3 position-relative">
                                    <div class="testimonial-info ">
                                        <div class="testimonial-img">
                                            <img alt="#" class="img-fluid rounded-circle"
                                                src="{{ URL::asset('assets/images/testimonial/testimonial-d3-2.jpg') }}">
                                        </div>
                                        <div class="testimonial-name align-self-center">
                                            <h5>Rooney Mara</h5>
                                            <span class="sub-title">Trainer</span>
                                        </div>
                                    </div>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        vero eos et accus adip. qui blanditiis praesentium vero eos et accus adip.</p>
                                    <div class="iq-icon">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-testimonial3 position-relative">
                                    <div class="testimonial-info ">
                                        <div class="testimonial-img">
                                            <img alt="#" class="img-fluid rounded-circle"
                                                src="{{ URL::asset('assets/images/testimonial/testimonial-3.jpg') }}">
                                        </div>
                                        <div class="testimonial-name align-self-center">
                                            <h5>Al Pacino</h5>
                                            <span class="sub-title">Trainer</span>
                                        </div>
                                    </div>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        vero eos et accus adip. qui blanditiis praesentium vero eos et accus adip.</p>
                                    <div class="iq-icon">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->
        <!-- Blog Start -->
        <section class="iq-pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="text-left iq-title-box pr-lg-5">
                            <h2 class="iq-title text-uppercase">You can know more about us by our latest blogs</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="btn-container">
                            <a class="iq-button btn-radius" href="blog-details.html"><span>Explore
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
                                <div class="iq-blog-box-2 bdr-radius">
                                    <div class="iq-blog-image clearfix">
                                        <img src="{{ URL::asset('assets/images/blog/blog-d2-1.jpg') }}" alt="#">
                                    </div>
                                    <div class="iq-blog-content">
                                        <div class="iq-blog-meta">
                                            <ul class="iq-postdate">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                        href="#">1 Feb 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-title">
                                            <a href="#">
                                                <h4 class="mb-3">Fully dedicated to finding.</h4>
                                            </a>
                                        </div>
                                        <p class="iq-desc">It is a long established fact that a reader will be distracted.
                                        </p>
                                        <div class="blog-button">
                                            <a class="iq-link-button" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box-2 bdr-radius">
                                    <div class="iq-blog-image clearfix">
                                        <img src="{{ URL::asset('assets/images/blog/blog-d2-2.jpg') }}" alt="#">
                                    </div>
                                    <div class="iq-blog-content">
                                        <div class="iq-blog-meta">
                                            <ul class="iq-postdate">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                        href="#">1 Feb 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-title">
                                            <a href="#">
                                                <h4 class="mb-3">Analytics for your website</h4>
                                            </a>
                                        </div>
                                        <p class="iq-desc">It is a long established fact that a reader will be distracted.
                                        </p>
                                        <div class="blog-button">
                                            <a class="iq-link-button" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box-2 bdr-radius">
                                    <div class="iq-blog-image clearfix">
                                        <img src="{{ URL::asset('assets/images/blog/blog-d2-3.jpg') }}" alt="#">
                                    </div>
                                    <div class="iq-blog-content">
                                        <div class="iq-blog-meta">
                                            <ul class="iq-postdate">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a
                                                        href="#">1 Feb 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-title">
                                            <a href="#">
                                                <h4 class="mb-3">Marketing Agencies Strategies</h4>
                                            </a>
                                        </div>
                                        <p class="iq-desc">It is a long established fact that a reader will be distracted.
                                        </p>
                                        <div class="blog-button">
                                            <a class="iq-link-button" href="#">Read More</a>
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
        <!-- Counter Start -->
        <!--          <div class="pt-0 pb-0 iq-counter-block">
               <img src="images/fancybox/overlay-dot2.png" class="overlay-right-top-2" alt="#">
               <div class="auto-container">
                  <div class="inner-container">
                     <div class="iq-pattern-style"></div>
                     <div class="row">
                     </div>
                  </div>
               </div> -->
        <!-- Counter End -->
    </div>
    <!-- Main Content End -->

@endsection
@push('js')
@endpush
