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
                                    Clients
                                </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i
                                                class="fa fa-home mr-2"></i>Home</a></li>
                                    <li class="breadcrumb-item active">Clients</li>
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
                        <p class="m-0">There are many variations of passages of Lorem Ipsum available, but the majority
                            have Category in some form, by injected humour, or randomised words which don't look even
                            slightly believable.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center position-relative">
                <div class="col-lg-3 col-md-6">
                    <div class="iq-partner-box">
                        <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/01.png') }}" alt="image6">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="iq-partner-box">
                        <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/02.png') }}" alt="image6">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="iq-partner-box">
                        <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/03.png') }}" alt="image6">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="iq-partner-box">
                        <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/04.png') }}" alt="image6">
                    </div>
                </div>
            </div>
            <div class="row mt-5  text-center position-relative">
                <div class="col-lg-3 col-md-6">
                    <div class="iq-partner-box">
                        <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/04.png') }}" alt="image6">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="iq-partner-box">
                        <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/03.png') }}" alt="image6">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="iq-partner-box">
                        <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/02.png') }}" alt="image6">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="iq-partner-box">
                        <img class="img-fluid client-img" src="{{ URL::asset('assets/images/clients/01.png') }}" alt="image6">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('js')
@endpush
