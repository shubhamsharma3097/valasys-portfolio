@extends('layouts.layout')
@section('title', 'Valasys - Clients')
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
                                    Portfolio
                                </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i
                                                class="fa fa-home mr-2"></i>Home</a></li>
                                    <li class="breadcrumb-item active">Portfolio</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Blog Start -->
    <section class="iq-blog-section iq-pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="iq-portfolio iq-mr-15">
                        <div class="iq-portfolio-img">
                            <img class="img-fluid" src="{{ URL::asset('assets/images/portfolio/portfolio-1.jpg') }}" alt="image">
                        </div>
                        <div class="portfolio-title">
                            <h4 class="iq-title"> Category</h4>
                        </div>
                        <div class="iq-portfolio-info text-left">
                            <a href="/portfolio-details">
                                <h4 class="portfolio-text">Design Concept</h4>
                            </a>
                        </div>
                        <a href="/portfolio-details">
                            <div class="iq-portfolio-icon">
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                        </a>
                        <div class="iq-image">
                            <img src="{{ URL::asset('assets/images/portfolio/pattern.png') }}" class="img-fluid" alt="#">
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="iq-portfolio iq-ml-15">
                        <div class="iq-portfolio-img">
                            <img class="img-fluid" src="{{ URL::asset('assets/images/portfolio/portfolio-2.jpg') }}" alt="image">
                        </div>
                        <div class="portfolio-title">
                            <h4 class="iq-title"> Category</h4>
                        </div>
                        <div class="iq-portfolio-info text-left">
                            <a href="/portfolio-details">
                                <h4 class="portfolio-text">Bussiness Growth</h4>
                            </a>
                        </div>
                        <a href="/portfolio-details">
                            <div class="iq-portfolio-icon">
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                        </a>
                        <div class="iq-image">
                            <img src="{{ URL::asset('assets/images/portfolio/pattern.png') }}" class="img-fluid" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="iq-portfolio iq-ml-15">
                        <div class="iq-portfolio-img">
                            <img class="img-fluid" src="{{ URL::asset('assets/images/portfolio/portfolio-3.jpg') }}" alt="image">
                        </div>
                        <div class="portfolio-title">
                            <h4 class="iq-title"> Category</h4>
                        </div>
                        <div class="iq-portfolio-info text-left">
                            <a href="/portfolio-details">
                                <h4 class="portfolio-text">Creative Design </h4>
                            </a>
                        </div>
                        <a href="/portfolio-details">
                            <div class="iq-portfolio-icon">
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                        </a>
                        <div class="iq-image">
                            <img src="{{ URL::asset('assets/images/portfolio/pattern.png') }}" class="img-fluid" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="iq-portfolio iq-mr-15">
                        <div class="iq-portfolio-img">
                            <img class="img-fluid" src="{{ URL::asset('assets/images/portfolio/portfolio-4.png') }}" alt="image">
                        </div>
                        <div class="portfolio-title">
                            <h4 class="iq-title"> Category</h4>
                        </div>
                        <div class="iq-portfolio-info text-left">
                            <a href="/portfolio-details">
                                <h4 class="portfolio-text">Concept Design </h4>
                            </a>
                        </div>
                        <a href="/portfolio-details">
                            <div class="iq-portfolio-icon">
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                        </a>
                        <div class="iq-image">
                            <img src="{{ URL::asset('assets/images/portfolio/pattern.png') }}" class="img-fluid" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="iq-portfolio iq-ml-15">
                        <div class="iq-portfolio-img">
                            <img class="img-fluid" src="{{ URL::asset('assets/images/portfolio/portfolio-5.png') }}" alt="image">
                        </div>
                        <div class="portfolio-title">
                            <h4 class="iq-title"> Category</h4>
                        </div>
                        <div class="iq-portfolio-info text-left">
                            <a href="/portfolio-details">
                                <h4 class="portfolio-text">Concept Design </h4>
                            </a>
                        </div>
                        <a href="/portfolio-details">
                            <div class="iq-portfolio-icon">
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                        </a>
                        <div class="iq-image">
                            <img src="{{ URL::asset('assets/images/portfolio/pattern.png') }}" class="img-fluid" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="iq-portfolio iq-ml-15">
                        <div class="iq-portfolio-img">
                            <img class="img-fluid" src="{{ URL::asset('assets/images/portfolio/portfolio-6.png') }}" alt="image">
                        </div>
                        <div class="portfolio-title">
                            <h4 class="iq-title"> Category</h4>
                        </div>
                        <div class="iq-portfolio-info text-left">
                            <a href="/portfolio-details">
                                <h4 class="portfolio-text">Concept Design </h4>
                            </a>
                        </div>
                        <a href="/portfolio-details">
                            <div class="iq-portfolio-icon">
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                        </a>
                        <div class="iq-image">
                            <img src="{{ URL::asset('assets/images/portfolio/pattern.png') }}" class="img-fluid" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
@endpush
