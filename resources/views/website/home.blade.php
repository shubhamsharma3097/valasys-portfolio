@extends('website.layouts.layout')
@section('title', 'Valasys - Home')
@section('content')
    <div class="container">
        <div class="row awardsContainer" style="margin-top: 180px;" id="top">
            <div class="col-md-2">
                <div class="customeMenus d-flex justify-content-center" data-aos="flip-left" data-aos-duration="1000">
                    <img src="{{ URL::asset('assets/images/awards/globee.png') }}" width="150px" height="auto" alt="">
                </div>
            </div>
             <div class="col-md-2">
                <div class="customeMenus d-flex justify-content-center" data-aos="flip-left" data-aos-duration="1000">
                    <img src="{{ URL::asset('assets/images/awards/CIO.png') }}" width="150px" height="auto" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="customeMenus d-flex justify-content-center" data-aos="flip-left" data-aos-duration="1000">
                    <img src="{{ URL::asset('assets/images/awards/best-in-biz.png') }}" width="150px" height="auto" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="customeMenus d-flex justify-content-center" data-aos="flip-left" data-aos-duration="1000">
                    <img src="{{ URL::asset('assets/images/awards/Stevies.png') }}" width="150px" height="auto" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="customeMenus d-flex justify-content-center" data-aos="flip-left" data-aos-duration="1000">
                    <img src="{{ URL::asset('assets/images/awards/vega.png') }}" width="150px" height="auto" alt="">
                </div>
            </div>
        </div>
        <div class="d-flex align-item-center justify-content-center">
            <h1 class="CustomText">PORTFOLIO</h1>
        </div>
        <form name="serviceMenus" id="serviceMenusForm" method="get">
            <div class="text-center serviceMenus mb-1">
                <div class="row" id="serviceMenusID" data-aos="zoom-in">
                    <ul class="serviceMenusUl">
                        <li class="colCentered active" id='all'>All</li>
                        @forelse($getAllServices as $row)
                            <li class="colCentered" id="{{$row->anchor_keyword}}-{{$row->id}}">{{ $row->name }}</li>
                        @empty
                            <li><div class="text-center"><h3>No Record Found!</h3></div></li>
                        @endforelse
                    </ul>
                </div>
            </div>

            {{-- Grid --}}
            <div class="row gridMainSection m-2">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col serviceItem empty" id="divFirst" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer">
                            </div>
                            {{-- 1 --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col serviceItem empty" id="divFourth" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer">
                            </div>
                            {{-- 4 --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col serviceItem empty" id="divSixth" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer">
                            </div>
                            {{-- 6 --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col serviceItem empty" id="divSecond" data-aos="flip-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer">
                            </div>
                            {{-- 2 --}}
                        </div>
                        <div class="col serviceItem empty" id="divThird" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer">
                            </div>
                            {{-- 3 --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col serviceItem empty" id="divFifth" data-aos="flip-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer">
                            </div>
                            {{-- 5 --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col serviceItem empty" id="divSeventh" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer">
                            </div>
                            {{-- 7 --}}
                        </div>
                        <div class="col serviceItem empty" id="divEighth" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer">
                            </div>
                            {{-- 8 --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center m-4" data-aos="zoom-out" data-aos-duration="1000">
                <input type="hidden" id="serviceMenuId">
                {{-- <button type="button" onclick="submitServiceMenuForm()" class="btn orange serviceBtn">View All</button> --}}
                <a class="iq-button d-inline-block" href="javascript:void(0)" onclick="submitServiceMenuForm()"><span>View All</span><em></em></a>
            </div>
        </form>

        <div class="text-center">
            <h1 class="CustomText">PROJECTS</h1>
        </div>

        <div class="row projectsLogos m-3">
            <div class="col-md p-0 m-2 projectsItem empty" data-aos="zoom-in" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" data-aos="zoom-in" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" data-aos="zoom-in" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" data-aos="zoom-in" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
            <div class="w-100"></div>
            <div class="col-md p-0 m-2 projectsItem empty" data-aos="zoom-in" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" data-aos="zoom-in" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" data-aos="zoom-in" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" data-aos="zoom-in" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
        </div>

        <div class="text-center m-4" data-aos="zoom-in" data-aos-duration="1000">
            {{-- <a href=" {{ URL('/projects') }} "><button type="button" class="btn orange serviceBtn">View All</button></a> --}}
            <a class="iq-button d-inline-block" href="{{ URL('/projects') }}"><span>View All</span><em></em></a>
        </div>

    </div>

    <div id="modalContent" class="m-3"></div>
@endsection
@push('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // For Activating Service menu btn and calling function to get service section data when user clicks on specific menu
            var container = document.getElementById("serviceMenusID");
            var btns = container.getElementsByClassName("colCentered");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                    var serviceID = this.id.split('-');
                    $('#serviceMenuId').val(serviceID[1]);
                    getServiceData(serviceID);
                });
            }
            getServiceData();
        });

        // This function is called when page is loaded and when user clicks on specific service menu
        function getServiceData(value){
            var filterData = null;
            if(value===undefined){
                // var filterData = $('#search').val().trim();
                if(filterData == '' || filterData == null){
                    filterData = ['all'];
                }
            }else{
                filterData = value;
            }
            $.ajax({
                type:'POST',
                url:"{{ route('getServiceData') }}",
                data:{filterData:filterData},
                beforeSend: function(){
                    document.querySelectorAll(".serviceItem").forEach((el, index) => {
                        el.className = el.className.replace(" loaded", " empty");
                        el.querySelector(".serviceImageContainer").innerHTML = "";
                    });
                },
                complete: function(){
                },
                success: function(response){
                    if(response.result){
                        setServicesImages(response.data.servicesData, response.data.serviceImgFolName);
                        setProjectsData(response.data.projectsData)
                    }else{
                        console.warn(response.message);
                    }
                }
            });
        }
        
        // This function is used for setting all images services images into servicess section
        function setServicesImages(data, folderName){
            document.querySelectorAll(".serviceItem").forEach((el, index) => {
                if (data[index]) {
                    el.className = el.className.replace(" empty", " loaded");
                    var serviceImage = '';
                    if(data[index].is_video == 'Yes'){
                        var href = data[index].video_url;
                        serviceImage += `<div class="waves-box">
                            <a href=${href} class="iq-video popup-youtube">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>`;
                        serviceImage += `<img class="checkImage" src={{ URL::asset('assets/images/${folderName}/${data[index].thumbnail_url}')}}  onerror="javascript:this.src='{{ URL::asset("assets/images/default_large.png")}}'" width="100%" height="100%" style="border-radius:10px"/>`;
                    }
                    else if(data[index].is_thumbnail == 'Yes'){
                        // image = `{{ URL::asset('assets/images/${folderName}/${data[index].thumbnail_url}')}}`;
                        serviceImage += `<img class="checkImage" src={{ URL::asset('assets/images/${folderName}/${data[index].thumbnail_url}')}}  onerror="javascript:this.src='{{ URL::asset("assets/images/default_large.png")}}'" width="100%" height="100%" style="border-radius:10px" onclick="getSpecificDetails('service','${data[index].id}')"/>`;
                    }else{
                        // image = `{{ URL::asset('assets/images/${folderName}/${data[index].image}')}}`;
                        serviceImage += `<img class="checkImage" src={{ URL::asset('assets/images/${folderName}/${data[index].image}')}}  onerror="javascript:this.src='{{ URL::asset("assets/images/default_large.png")}}'" width="100%" height="100%" style="border-radius:10px" onclick="getSpecificDetails('service','${data[index].id}')"/>`;
                    }
                    el.querySelector(".serviceImageContainer").innerHTML = serviceImage;
                    setIframeModal();
                }
            });
        }

        // This function is used for setting all images project images into projects section
        function setProjectsData(data){
            document.querySelectorAll(".projectsItem").forEach((el, index) => {
                if (data[index]) {
                    el.className = el.className.replace(" empty", " loaded");
                    var image = `<a href="javascript:void(0)" onclick="getSpecificDetails('project', '${data[index].id}')"><img class="checkImage" src="{{ URL::asset('assets/images/projects/${data[index].logo}')}}"  onerror="javascript:this.src='{{ URL::asset("assets/images/default_large.png")}}'" width="150px" height="auto"/></a>`;
                    el.querySelector(".projectImageContainer").innerHTML = image;
                }
            });
        }

        // This function is used for opening modal for specific services and projects both.
        function getSpecificDetails(type, id){
            if(id != ''){
                var url = "{{ route('specificDetails', ['type' => ':type', 'id' => ':id']) }}";
                url = url.replace(':type', type);
                url = url.replace(':id', id);
                $.ajax({
                    type:'get',
                    url: url,
                    beforeSend: function(){
                    },
                    complete: function(){
                    },
                    success: function(response){
                        $('#modalContent').html(response);
                        $('#myModal').modal('show');
                    }
                });
            }
        }

        function submitServiceMenuForm(){
            var id = $('#serviceMenuId').val();
            if(id !=''){
                var baseUrl = "{{ URL('/services') }}" + "/" + id;
            }else{
                var baseUrl = "{{ URL('/services') }}";
            }
            $("#serviceMenusForm").attr("action",baseUrl);
            $('#serviceMenusForm').submit();
        }

    </script>
@endpush
