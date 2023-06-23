@extends('layouts.layout')

@section('content')

    <!-- Breadcrumb Start -->
        <div class=" main-bg" >
            <div class="container-fluid p-0">
                <div class="text-left iq-breadcrumb-one
                    iq-bg-over black     ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-12">
                            <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                                <h2 class="title">About Us</h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Home</a></li>
                                    <li class="breadcrumb-item active">About Us</li>
                                </ol>
                            </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <!-- Breadcrumb End -->
    <section class="iq-about-section overview-block-pt">
        <div class="container">
           <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0 text-center">
                    <div class="iq-img">
                        <img loading="lazy" src="{{ URL::asset('assets/images/others/port-d3-3.png') }}" class="img-fluid w-100" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="iq-title-box text-left mb-4">
                        <h2 class="iq-title mb-3">Do More with about<br> agency</h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply.Contrary to popular belief, Lorem Ipsum is not simply.Contrary to popular belief, Lorem Ipsum is not simply.</p>
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
    <section class="overview-block-ptb iq-pb-70">
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
     <!-- Blog Start -->
     <section class="iq-pb-55 pt-0">
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
                    <a class="iq-button d-inline-block" href="blog-details.html"><span>Click Here</span><em></em></a>
                 </div>
              </div>
           </div>
           <div class="row justify-content-sm-center">
                <div class="col-sm-12">
                    <div class="owl-carousel" data-autoplay="false" data-loop="true" data-nav="false" data-dots="false" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
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
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted by the readable.</p>
                                    <div class="blog-footer">
                                        <div class="iq-blog-meta">
                                            <ul class="iq-postdate">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a href="#">1 Feb 2020</a>
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
                                            <h4 class="mb-3">Fully dedicated to finding.</h4>
                                        </a>
                                    </div>
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted by the readable.</p>
                                    <div class="blog-footer">
                                        <div class="iq-blog-meta">
                                            <ul class="iq-postdate">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a href="#">1 Feb 2020</a>
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
                                            <h4 class="mb-3">Fully dedicated to finding.</h4>
                                        </a>
                                    </div>
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted by the readable.</p>
                                    <div class="blog-footer">
                                        <div class="iq-blog-meta">
                                            <ul class="iq-postdate">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a href="#">1 Feb 2020</a>
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
                                        <h4 class="mb-3">Fully dedicated to finding.</h4>
                                        </a>
                                    </div>
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted by the readable.</p>
                                    <div class="blog-footer">
                                        <div class="iq-blog-meta">
                                        <ul class="iq-postdate">
                                            <li class="list-inline-item">
                                                <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a href="#">1 Feb 2020</a>
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
                                        <h4 class="mb-3">Fully dedicated to finding.</h4>
                                        </a>
                                    </div>
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted by the readable.</p>
                                    <div class="blog-footer">
                                        <div class="iq-blog-meta">
                                        <ul class="iq-postdate">
                                            <li class="list-inline-item">
                                                <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a href="#">1 Feb 2020</a>
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
                                        <h4 class="mb-3">Fully dedicated to finding.</h4>
                                        </a>
                                    </div>
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted by the readable.</p>
                                    <div class="blog-footer">
                                        <div class="iq-blog-meta">
                                        <ul class="iq-postdate">
                                            <li class="list-inline-item">
                                                <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a href="#">1 Feb 2020</a>
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

@endsection

@push('js')
@endpush