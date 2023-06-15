@extends('website.layouts.layout')
@section('title', 'Valasys - Services')
@section('content')

    <div class="container-fluid">
        <div class="text-center">
            <h1 class="CustomText">SERVICES</h1>
        </div>
        
        <div class="text-center portfolioMenus mb-3">
            <div class="row" id="portfolioMenusID">
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered active" id="all">All</div></button></div>
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered" id="graphic_design">Graphic Design</div></button></div>
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered" id="Social_media">Social Media</div></button></div>
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered" id="branding">Branding</div></button></div>
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered" id="website">Website</div></button></div>
            </div>
        </div>

        {{-- mx-auto w-50 p-3 bg-dark text-white text-center --}}

        <div class="row row-col-4 m-4 projectsImgs">
            <div class="col-md d-flex align-self-center p-3 m-3">
                <img src="{{ URL::asset('assets/images/clients/01.png') }}" alt="Logo">
            </div>
            <div class="col-md d-flex align-self-center p-3 m-3">
                <img src="{{ URL::asset('assets/images/clients/04.png') }}" alt="Logo">
            </div>
            <div class="col-md d-flex align-self-center p-3 m-3">
                <img src="{{ URL::asset('assets/images/clients/03.png') }}" alt="Logo">
            </div>
            
            <div class="w-100"></div>

            <div class="col-md d-flex align-self-center p-3 m-3">
                <img src="{{ URL::asset('assets/images/clients/04.png') }}" alt="Logo">
            </div>
            <div class="col-md d-flex align-self-center p-3 m-3">
                <img src="{{ URL::asset('assets/images/clients/01.png') }}" alt="Logo">
            </div>
            <div class="col-md d-flex align-self-center p-3 m-3">
                <img src="{{ URL::asset('assets/images/clients/02.png') }}" alt="Logo">
            </div>
            
            <div class="w-100"></div>
            
            <div class="col-md d-flex align-self-center p-3 m-3">
                <img src="{{ URL::asset('assets/images/clients/01.png') }}" alt="Logo">
            </div>
            <div class="col-md d-flex align-self-center p-3 m-3">
                <img src="{{ URL::asset('assets/images/clients/04.png') }}" alt="Logo">
            </div>
            <div class="col-md d-flex align-self-center p-3 m-3">
                <img src="{{ URL::asset('assets/images/clients/03.png') }}" alt="Logo">
            </div>
            
            <div class="w-100"></div>

            <div class="col-md d-flex align-self-center p-3 m-3">
                <img src="{{ URL::asset('assets/images/clients/04.png') }}" alt="Logo">
            </div>
            <div class="col-md d-flex align-self-center p-3 m-3">
                <img src="{{ URL::asset('assets/images/clients/01.png') }}" alt="Logo">
            </div>
            <div class="col-md d-flex align-self-center p-3 m-3">
                <img src="{{ URL::asset('assets/images/clients/02.png') }}" alt="Logo">
            </div>
        </div>

    </div>

@endsection
@push('js')
@endpush