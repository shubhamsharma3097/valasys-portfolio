@extends('layouts.layout')
@section('title', 'Valasys - Home 1')
@section('content')

<!-- Banner -->
    <div id="iq-home" class="iq-banner-02">
        <div class="banner-objects">
            <span class="banner-objects-01 wow fadeIn">
                <img src="{{ URL::asset('assets/images/banner/banner-02.png') }}" class="img-fluid" alt="drive02">
            </span>
        </div>
        <div class="container">
            <div class="banner-text">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase ">Digital Perfection<br>crafted for you</h1>
                        <p class="iq-pt-15 iq-mb-40 ">It is a long established fact that a reader will be distracted <span>by the readable content of a page when looking</span><span> at its layout.</span></p>
                        <div class="btn-container text-left ">
                            <a class="iq-button iq-gradient-btn d-inline-block" href="about-us.html"><span>Click Here</span><em></em></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-objects">
            <span class="banner-objects-02">
                <img src="{{ URL::asset('assets/images/banner/02.png') }}" class="img-fluid" alt="#">
            </span>
        </div>
    </div>
<!-- Banner End -->
<!-- Main Content Start -->
    <div class="main-content">
        <!-- Partner Start -->
            <div class="position-relative overview-block-pt iq-clients-section">
                <div class="container">
                    <div class="row text-center position-relative">
                        <div class="objects-main">
                            <span class="banner-objects-02">
                                <img src="{{ URL::asset('assets/images/banner/02.png') }}" class="img-fluid" alt="#">
                                </span>
                        </div>
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="4" data-items-laptop="4" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1" data-margin="30">
                            <div class="item">
                                <div class="iq-partner-box">
                                    <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/01.png') }}" alt="image6">
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-partner-box">
                                    <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/02.png') }}" alt="image6">
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-partner-box">
                                    <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/03.png') }}" alt="image6">
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-partner-box">
                                    <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/04.png') }}" alt="image6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Partner End -->
            <section class="iq-aboutus overview-block-pt">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 mb-5 mb-lg-0 text-center">
                            <div class="iq-image-expert">
                                <img src="{{ URL::asset('assets/images/about-us/about-1.png') }}" class="img-fluid" alt="#">
                                <img src="{{ URL::asset('assets/images/banner-pattern.png') }}" class="img-fluid iq-pattern" alt="#">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="iq-title-box mb-0 text-left">
                                <h2 class="title mb-4">We are the largest bussiness expert in europe and asia</h2>
                                <p>Quis enim lobortis scelerisque fermentum dui faucibus in ornare. Ornare aenean euismod elementum nisi quis eleifend quam.</p>
                            </div>
                            <p>Vitae congue eu consequat ac felis donec et odio. Eget felis eget nunc lobortis. At lectus urna duis convallis convallis tellus id interdum. Tellus in hac habitasse platea dictumst vestibulum rhoncus est.</p>
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
        <!-- Service Start -->
            <section class="position-relative iq-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 ">
                            <div class="text-left iq-title-box">
                                <h2 class="iq-title text-uppercase pr-lg-5">Service for Creative Agency Investor</h2>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 ">
                            <div class="btn-container">
                                <a class="iq-button iq-gradient-btn d-inline-block" href="services.html"><span>Click Here</span><em></em></a>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center position-relative ">
                        <div class="col-lg-3 col-md-6 ">
                            <div class="iq-service-style2 text-left">
                                <div class="iq-iconbg">
                                    <i class="fa fa-expand" aria-hidden="true"></i>
                                </div>
                                <div class="iq-content">
                                    <div class="iq-title">
                                        <h4>Creative Always</h4>
                                    </div>
                                    <p class="m-0">Contrary to popular belief, Lorem Ipsum is not simply.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <div class="iq-service-style2 text-left">
                                <div class="iq-iconbg">
                                    <i class="fa fa-file-video-o" aria-hidden="true"></i>
                                </div>
                                <div class="iq-content">
                                    <div class="iq-title">
                                        <h4>Express Custom</h4>
                                    </div>
                                    <p class="m-0">Contrary to popular belief, Lorem Ipsum is not simply.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <div class="iq-service-style2 white-bg text-left">
                                <div class="iq-iconbg">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                </div>
                                <div class="iq-content">
                                    <div class="iq-title">
                                    <h4>Premium Integrations</h4>
                                    </div>
                                    <p class="m-0">Contrary to popular belief, Lorem Ipsum is not simply.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <div class="iq-service-style2 white-bg text-left">
                                <div class="iq-iconbg">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </div>
                                <div class="iq-content">
                                    <div class="iq-title">
                                    <h4>Real-Time Editing</h4>
                                    </div>
                                    <p class="m-0">Contrary to popular belief, Lorem Ipsum is not simply.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Service End -->
            <section class="pb-0 pt-0 iq-subscribe-block">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="iq-pattern-style"></div>
                        <div class="row ">
                            <div class="col-lg-6 col-md-12  mb-4 mb-lg-0">
                                <h2 class="text-white subscribe-title">Subscribe for Newsletter</h2>
                                <p class="text-white">At vero eos et accusamus et iusto odio dignissimos.</p>
                            </div>
                            <div class="col-lg-6 col-md-12 align-self-center">
                                <form class="mc4wp-form mc4wp-form-517" method="post">
                                    <div class="mc4wp-form-fields">
                                    <input type="email" name="EMAIL" placeholder="Your email address" required="">
                                    <input type="submit" value="Subscribe">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ URL::asset('assets/images/portfolio/pattern.png') }}" class="overlay-left-bottom" alt="#">
                <img src="{{ URL::asset('assets/images/portfolio/pattern.png') }}" class="overlay-subscribe" alt="#">
            </section>
        <!-- Testimonial Start -->
            <section>
                <img src="{{ URL::asset('assets/images/fancy-pattern-2.png') }}" class="img-fluid fancy-back" alt="#">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="text-left iq-title-box pr-lg-5">
                                <h2 class="iq-title text-uppercase">Our Testimonial</h2>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="btn-container">
                                <a class="iq-button iq-gradient-btn" href="our-team.html"><span>Click Here</span><em></em></a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-12">
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="2" data-items-laptop="2" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                                <div class="item">
                                    <div class="iq-testimonial2 box-shadow">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium vero eos et accus adip.</p>
                                        <span class="iq-border"></span>
                                        <div class="testimonial-info ">
                                            <img alt="#" class="img-fluid rounded-circle" src="{{ URL::asset('assets/images/testimonial/testimonial-d21.png') }}">
                                            <div class="testimonial-name align-self-center">
                                                <h5>Aney Hark</h5>
                                                <span class="sub-title">Designer</span>
                                            </div>
                                            <div class="iq-icon">
                                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="iq-testimonial2 box-shadow">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium vero eos et accus adip.</p>
                                        <span class="iq-border"></span>
                                        <div class="testimonial-info ">
                                            <img alt="#" class="img-fluid rounded-circle" src="{{ URL::asset('assets/images/testimonial/testimonial-d22.png') }}">
                                            <div class="testimonial-name align-self-center">
                                                <h5>Rooney Mara</h5>
                                                <span class="sub-title">Developer</span>
                                            </div>
                                            <div class="iq-icon">
                                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="iq-testimonial2 box-shadow">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium vero eos et accus adip.</p>
                                        <span class="iq-border"></span>
                                        <div class="testimonial-info ">
                                            <img alt="#" class="img-fluid rounded-circle" src="{{ URL::asset('assets/images/testimonial/testimonial-d23.png') }}">
                                            <div class="testimonial-name align-self-center">
                                                <h5>Al Pacino</h5>
                                                <span class="sub-title">Trainer</span>
                                            </div>
                                            <div class="iq-icon">
                                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Testimonial End -->
        <section class="position-relative pb-0 iq-portfolio-titlebox">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="text-left iq-title-box pr-lg-5">
                            <h2 class="iq-title text-uppercase">Check Some Our View Recent Works</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="btn-container">
                            <a class="iq-button iq-gradient-btn" href="portfolio-details.html"><span>Click Here</span><em></em></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <div class="position-relative  overview-block-pb">
            <div class="container-fluid p-0 overflow-h">
                <div class="row justify-content-sm-center">
                    <div class="col-sm-12">
                        <div class="swiper-container iq-portfolio-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active">
                                    <div class="iq-portfolio-block">
                                        <a href="#">
                                            <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-1.jpg') }}" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next">
                                    <div class="iq-portfolio-block">
                                        <a href="#"> 
                                            <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-2.jpg') }}" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev">
                                    <div class="iq-portfolio-block"> 
                                        <a href="#"> 
                                            <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-3.jpg') }}" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active">
                                    <div class="iq-portfolio-block"> 
                                        <a href="#"> 
                                            <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-1.jpg') }}" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next">
                                    <div class="iq-portfolio-block"> 
                                        <a href="#"> 
                                            <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-2.jpg') }}" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate-prev">
                                    <div class="iq-portfolio-block"> 
                                        <a href="#"> 
                                            <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-3.jpg') }}" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active">
                                    <div class="iq-portfolio-block"> 
                                        <a href="#"> 
                                            <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-1.jpg') }}" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next">
                                    <div class="iq-portfolio-block"> 
                                        <a href="#"> 
                                            <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-2.jpg') }}" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate">
                                    <div class="iq-portfolio-block"> 
                                        <a href="#"> 
                                            <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-3.jpg') }}" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                                <span class="swiper-pagination-bullet"></span>
                                <span class="swiper-pagination-bullet"></span>
                            </div>
                        </div>

                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        
        <div class="position-relative  overview-block-pb ">
            <div class="container-fluid p-0 overflow-h">
               <div class="row justify-content-sm-center">
                  <div class="col-sm-12">
                     <div class="swiper-container iq-portfolio-slider">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active">
                              <div class="iq-portfolio-block">
                                 <a href="#">
                                    <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-1.jpg') }}" class="img-fluid" alt="#">
                                 </a>
                              </div>
                           </div>
                           <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next">
                              <div class="iq-portfolio-block">
                                 <a href="#"> <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-2.jpg') }}" class="img-fluid" alt="#"></a>
                              </div>
                           </div>
                           <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev">
                              <div class="iq-portfolio-block"> <a href="#"> <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-3.jpg') }}" class="img-fluid" alt="#"></a>
                              </div>
                           </div>
                           <div class="swiper-slide swiper-slide-active">
                              <div class="iq-portfolio-block"> <a href="#"> <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-1.jpg') }}" class="img-fluid" alt="#"></a>
                              </div>
                           </div>
                           <div class="swiper-slide swiper-slide-next">
                              <div class="iq-portfolio-block"> <a href="#"> <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-2.jpg') }}" class="img-fluid" alt="#"></a>
                              </div>
                           </div>
                           <div class="swiper-slide swiper-slide-duplicate-prev">
                              <div class="iq-portfolio-block"> <a href="#"> <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-3.jpg') }}" class="img-fluid" alt="#"></a>
                              </div>
                           </div>
                           <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active">
                              <div class="iq-portfolio-block"> <a href="#"> <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-1.jpg') }}" class="img-fluid" alt="#"></a>
                              </div>
                           </div>
                           <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next">
                              <div class="iq-portfolio-block"> <a href="#"> <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-2.jpg') }}" class="img-fluid" alt="#"></a>
                              </div>
                           </div>
                           <div class="swiper-slide swiper-slide-duplicate">
                              <div class="iq-portfolio-block"> <a href="#"> <img  src="{{ URL::asset('assets/images/portfolio/portfolio-d2-3.jpg') }}" class="img-fluid" alt="#"></a>
                              </div>
                           </div>
                        </div>
                        
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                           <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                           <span class="swiper-pagination-bullet"></span>
                           <span class="swiper-pagination-bullet"></span>
                        </div>
                     </div>
                     <div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

        <section class="pink-bg iq-web">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <img src="{{ URL::asset('assets/images/services-img.jpg') }}" class="img-fluid" alt="#">
                    </div>
                    <div class="col-lg-4 col-md-12 pl-lg-4 mt-5 mt-lg-0">
                        <div class="text-left iq-title-box">
                            <h2 class="iq-title text-uppercase mb-4">We are doing web related design & services</h2>
                            <p>You can know more about us by our latest blogsYou can know more about us by our latest blogsYou can know more about us by our latest blogsYou can know more about us by our latest blogsYou can know more about us by our </p>
                        </div>
                        <div class="btn-container text-left">
                            <a class="iq-button iq-gradient-btn" href="services.html"><span>Read More</span><em></em></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="progressbar-circle mb-4" data-animate="false">
                            <div class="circle" data-percent="65">
                                <div>65%</div>
                                <h4 class="mt-3 mb-0 font-c iq-fw-6 text-black">Architectural</h4>
                            </div>
                        </div>
                        <div class="progressbar-circle" data-animate="false">
                            <div class="circle" data-percent="45">
                                <div>45%</div>
                                <h4 class="mt-3 mb-0 font-c iq-fw-6 text-black">Construction</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Team Start -->
        <section class="iq-pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 pr-lg-5">
                        <div class="text-left iq-title-box pr-lg-5">
                            <h2 class="iq-title text-uppercase">Meet Our Team of Profetional</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="btn-container">
                            <a class="iq-button iq-gradient-btn" href="our-team.html"><span>Explore More</span><em></em></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-sm-center">
                    <div class="col-sm-12">
                        <div class="owl-carousel" data-autoplay="false" data-loop="true" data-nav="false" data-dots="true" data-items="4" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                            <div class="item">
                                <div class="iq-team2">
                                    <div class="img-pattern position-relative">
                                        <div class="iq-team-img">
                                            <img src="{{ URL::asset('assets/images/team/team2-1.jpg') }}" class="img-fluid rounded-circle" alt="#3">
                                        </div>
                                        <div class="img-pattern-1">
                                            <img src="{{ URL::asset('assets/images/team/team-pattern-1.png') }}" class="img-fluid" alt="#3">
                                        </div>
                                        <div class="img-pattern-2">
                                            <img src="{{ URL::asset('assets/images/team/team-pattern-2.png') }}" class="img-fluid" alt="#3">
                                        </div>
                                    </div>
                                    <div class="iq-team-info text-center">
                                        <a href="team-details.html">
                                            <h4>Letha Soares</h4>
                                        </a>
                                        <span class="team-post">Manager</span>
                                        <div class="share">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-team2">
                                    <div class="img-pattern position-relative">
                                        <div class="iq-team-img">
                                            <img src="{{ URL::asset('assets/images/team/team2-2.jpg') }}" class="img-fluid rounded-circle" alt="#3">
                                        </div>
                                        <div class="img-pattern-1">
                                            <img src="{{ URL::asset('assets/images/team/team-pattern-1.png') }}" class="img-fluid" alt="#3">
                                        </div>
                                        <div class="img-pattern-2">
                                            <img src="{{ URL::asset('assets/images/team/team-pattern-2.png') }}" class="img-fluid" alt="#3">
                                        </div>
                                    </div>
                                    <div class="iq-team-info text-center">
                                        <a href="team-details.html">
                                            <h4>James Adames</h4>
                                        </a>
                                        <span class="team-post">CTO</span>
                                        <div class="share">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-team2">
                                    <div class="img-pattern position-relative">
                                        <div class="iq-team-img">
                                            <img src="{{ URL::asset('assets/images/team/team2-3.jpg') }}" class="img-fluid rounded-circle" alt="#3">
                                        </div>
                                        <div class="img-pattern-1">
                                            <img src="{{ URL::asset('assets/images/team/team-pattern-1.png') }}" class="img-fluid" alt="#3">
                                        </div>
                                        <div class="img-pattern-2">
                                            <img src="{{ URL::asset('assets/images/team/team-pattern-2.png') }}" class="img-fluid" alt="#3">
                                        </div>
                                    </div>
                                    <div class="iq-team-info text-center">
                                        <a href="team-details.html">
                                            <h4>Janet Norris</h4>
                                        </a>
                                        <span class="team-post">Jr. manager </span>
                                        <div class="share">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-team2">
                                    <div class="img-pattern position-relative">
                                        <div class="iq-team-img">
                                            <img src="{{ URL::asset('assets/images/team/team2-4.jpg') }}" class="img-fluid rounded-circle" alt="#3">
                                        </div>
                                        <div class="img-pattern-1">
                                            <img src="{{ URL::asset('assets/images/team/team-pattern-1.png') }}" class="img-fluid" alt="#3">
                                        </div>
                                        <div class="img-pattern-2">
                                            <img src="{{ URL::asset('assets/images/team/team-pattern-2.png') }}" class="img-fluid" alt="#3">
                                        </div>
                                    </div>
                                    <div class="iq-team-info text-center">
                                        <a href="team-details.html">
                                            <h4>Farid Amini</h4>
                                        </a>
                                        <span class="team-post">CFO </span>
                                        <div class="share">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Team End -->
        <section class="position-relative iq-gradient-bg gradient-bg ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 ">
                        <div class="text-left iq-title-box">
                            <h2 class="iq-title text-uppercase text-white">Brand innovation And Multimedia Digital Agency</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 ">
                        <div class="btn-container">
                            <a class="iq-button btn-white" href="about-us.html"><span>Explore More</span><em></em></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="position-relative pt-0 overview-block-pb iq-vedio-section">
            <div class="container">
                
            </div>
        </div>
        <!-- Blog Start -->
        <section class="pt-lg-0 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="text-left iq-title-box pr-lg-5">
                            <h2 class="iq-title text-uppercase">You can know more about us by our latest blogs</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="btn-container">
                            <a class="iq-button iq-gradient-btn" href="blog-details.html"><span>Click Here</span><em></em></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-sm-center">
                <div class="col-sm-12">
                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                        <div class="item">
                            <div class="iq-blog-box-2">
                                <div class="iq-blog-image clearfix">
                                    <img src="{{ URL::asset('assets/images/blog/blog-d2-1.jpg') }}" alt="#">
                                </div>
                                <div class="iq-blog-content">
                                    <div class="iq-blog-meta">
                                        <ul class="iq-postdate">
                                            <li class="list-inline-item">
                                            <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a href="blog-details.html">1 Feb 2020</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="blog-title">
                                        <a href="blog-details.html">
                                            <h4 class="mb-3">Fully dedicated to finding.</h4>
                                        </a>
                                    </div>
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted.</p>
                                    <div class="blog-button">
                                        <a class="iq-link-button" href="blog-details.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="iq-blog-box-2">
                                <div class="iq-blog-image clearfix">
                                    <img src="{{ URL::asset('assets/images/blog/blog-d2-2.jpg') }}" alt="#">
                                </div>
                                <div class="iq-blog-content">
                                    <div class="iq-blog-meta">
                                        <ul class="iq-postdate">
                                            <li class="list-inline-item">
                                            <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a href="blog-details.html">1 Feb 2020</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="blog-title">
                                        <a href="blog-details.html">
                                            <h4 class="mb-3">Analytics for your website</h4>
                                        </a>
                                    </div>
                                    <p class="iq-desc">It is a long established fact that a reader will be distracted.</p>
                                    <div class="blog-button">
                                        <a class="iq-link-button" href="blog-details.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="iq-blog-box-2">
                            <div class="iq-blog-image clearfix">
                                <img src="{{ URL::asset('assets/images/blog/blog-d2-3.jpg') }}" alt="#">
                            </div>
                            <div class="iq-blog-content">
                                <div class="iq-blog-meta">
                                    <ul class="iq-postdate">
                                        <li class="list-inline-item">
                                        <i class="fa fa-calendar mr-1" aria-hidden="true"></i> <a href="blog-details.html">1 Feb 2020</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-title">
                                    <a href="blog-details.html">
                                        <h4 class="mb-3">Marketing Agencies Strategies</h4>
                                    </a>
                                </div>
                                <p class="iq-desc">It is a long established fact that a reader will be distracted.</p>
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
        </section>
    <!-- Blog End -->
</div>
<!-- Main Content End -->

@endsection

@push('js')
<script>
    var mySwiper = new Swiper ('.swiper-container', {
    speed: 400,
    spaceBetween: 100,
    initialSlide: 0,
    //truewrapper adoptsheight of active slide
    autoHeight: false,
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // delay between transitions in ms
    autoplay: 5000,
    autoplayStopOnLast: false, // loop false also
    // If we need pagination
    pagination: '.swiper-pagination',
    paginationType: "bullets",

    // Navigation arrows
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',

    // And if we need scrollbar
    //scrollbar: '.swiper-scrollbar',
    // "slide", "fade", "cube", "coverflow" or "flip"
    effect: 'slide',
    // Distance between slides in px.
    spaceBetween: 60,
    //
    slidesPerView: 2,
    //
    centeredSlides: true,
    //
    slidesOffsetBefore: 0,
    //
    grabCursor: true,
  })
</script>
@endpush