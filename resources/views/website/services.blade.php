@extends('website.layouts.layout')
@section('title', 'Valasys - Services')
@section('content')

    <div class="container-fluid">
        <div class="text-center">
            <h1 class="CustomText">SERVICES</h1>
        </div>
        
        <div class="text-center serviceMenus mb-1">
            <div class="row" id="serviceMenusID">
                <ul class="serviceMenus">
                    <li class="colCentered active" id='all'>All</li>
                    @forelse($getAllServices as $row)
                        <li class="colCentered" id="{{$row->anchor_keyword}}">{{ $row->name }}</li>
                    @empty
                    @endforelse
                </ul>
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