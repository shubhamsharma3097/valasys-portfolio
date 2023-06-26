@extends('website.layouts.layout')
@section('title', 'Valasys - Home')
@section('content')

    <div class="container">

        <div class="waves-box">
            <a href="https://www.youtube.com/watch?v=iH3qXKPsnZM" class="iq-video popup-youtube">
                <i class="fa fa-play" aria-hidden="true"></i>
            </a>
            <div class="iq-waves">
                <div class="waves wave-1"></div>
                <div class="waves wave-2"></div>
                <div class="waves wave-3"></div>
            </div>
        </div>


        <div class="row m-2" style="display: flex; justify-content: center;">
            <div class="col-md-6">
                <div class="customeMenus d-flex align-self-center justify-content-center" data-aos="flip-left">
                    <span>PROJECTS</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="customeMenus d-flex align-self-center justify-content-center">
                    <span>CATEGORIES</span>
                </div>
            </div>
            {{-- <div class="col-md-5 m-3 customeMenus d-flex align-self-center justify-content-center"><span></span></div> --}}
        </div>

        <div class="d-flex align-item-center justify-content-center">
            <h1 class="CustomText">PORTFOLIO</h1>
        </div>

        <form name="serviceMenus" id="serviceMenusForm" method="get">
            <div class="text-center serviceMenus mb-1">
                <div class="row" id="serviceMenusID" data-aos="zoom-in">
                    <ul class="serviceMenus">
                        <li class="colCentered active" id='all'>All</li>
                        @forelse($getAllServices as $row)
                            <li class="colCentered" id="{{$row->anchor_keyword}}-{{$row->id}}">{{ $row->name }}</li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>

            {{-- Grid --}}
            <div class="row gridMainSection m-2">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col serviceItem empty" style="height: 270px" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer w-100 h-100" style="display:inline-block; align-items: center;justify-content: center;">
                                {{-- <img class="checkImage" src="{{ URL::asset('assets/images/projects/social_media.png')}}" width="100%" height="150px"/> --}}
                            </div>
                            {{-- 1 --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col serviceItem empty" style="height: 230px" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer w-100 h-100" style="display:inline-block; align-items: center;justify-content: center;">
                            </div>
                            {{-- 4 --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col serviceItem empty" style="height: 370px" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer w-100 h-100" style="display:inline-block; align-items: center;justify-content: center;">
                            </div>
                            {{-- 6 --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col serviceItem empty" style="height: 270px;margin-right: 10px;" data-aos="flip-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer w-100 h-100" style="display:inline-block; align-items: center;justify-content: center;">
                            </div>
                            {{-- 2 --}}
                        </div>
                        <div class="col serviceItem empty" style="height: 270px;margin-left: 10px;" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer w-100 h-100" style="display:inline-block; align-items: center;justify-content: center;">
                            </div>
                            {{-- 3 --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col serviceItem empty" style="height: 390px;" data-aos="flip-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer w-100 h-100" style="display:inline-block; align-items: center;justify-content: center;">
                            </div>
                            {{-- 5 --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col serviceItem empty" style="height: 210px;margin-right: 10px;" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer w-100 h-100" style="display:inline-block; align-items: center;justify-content: center;">
                            </div>
                            {{-- 7 --}}
                        </div>
                        <div class="col serviceItem empty" style="height: 210px;margin-left: 10px;" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="serviceImageContainer w-100 h-100" style="display:inline-block; align-items: center;justify-content: center;">
                            </div>
                            {{-- 8 --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center m-4" data-aos="zoom-out" data-aos-duration="1000">
                <input type="hidden" id="serviceMenuId">
                <button type="button" onclick="submitServiceMenuForm()" class="btn orange serviceBtn">View All</button>
                <!-- <a href="{{ URL('/services') }}"><button type="submit" class="btn orange">View All</button></a> -->
            </div>
        </form>

        <div class="text-center">
            <h1 class="CustomText">PROJECTS</h1>
        </div>

        <div class="row projectsLogos m-3">
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;" data-aos="zoom-in" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;"data-aos="zoom-in" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;"data-aos="zoom-in" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;"data-aos="zoom-in" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>

            <div class="w-100"></div>

            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;"data-aos="zoom-out" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;"data-aos="zoom-out" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;"data-aos="zoom-out" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;"data-aos="zoom-out" data-aos-duration="1000">
                <div class="projectImageContainer"></div>
            </div>
        </div>

        <div class="text-center m-4" data-aos="zoom-in" data-aos-duration="1000">
            <a href=" {{ URL('/projects') }} "><button type="button" class="btn orange serviceBtn">View All</button></a>
        </div>

    </div>

    <div id="modalContent" class="m-3"></div>
@endsection
@push('js')
<script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript">

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

        jQuery(document).ready(function () {
            $('#search').val('');

            $('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: true
            });
            getGridData();
        });

        $('.carousel').carousel({
            interval: false,
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var header = document.getElementById("serviceMenusID");
        var btns = header.getElementsByClassName("colCentered");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
                var serviceID = this.id.split('-');
                console.warn("this.id",serviceID);
                $('#serviceMenuId').val(serviceID[1]);
                getGridData(serviceID);
            });
        }

        function getGridData(value){
            var filterData = null;
            if(value===undefined){
                var filterData = $('#search').val().trim();
                if(filterData == '' || filterData == null){
                    filterData = ['all'];
                }
            }else{
                filterData = value;
            }
            $.ajax({
                type:'POST',
                url:"{{ route('ajaxRequest') }}",
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

        function setServicesImages(data, folderName){
            document.querySelectorAll(".serviceItem").forEach((el, index) => {
                if (data[index]) {
                    el.className = el.className.replace(" empty", " loaded");
                    var image = '';
                    if(index % 2 != 0){
                        image += `<div class="waves-box">
                            <a href="https://www.youtube.com/watch?v=iH3qXKPsnZM" class="iq-video popup-youtube">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>`;
                        // image +=`<div class="waves-box"><a href="https://www.youtube.com/watch?v=iH3qXKPsnZM" class="iq-video popup-youtube"><i class="fa fa-play" aria-hidden="true"></i></a><div class="iq-waves"><div class="waves wave-1"></div><div class="waves wave-2"></div><div class="waves wave-3"></div></div></div>`;
                    }
                    image += `<a href="javascript:void(0)" onclick="getSpecificDetails('service','${data[index].id}')"><img class="checkImage" src="{{ URL::asset('assets/images/${folderName}/${data[index].image}')}}"  onerror="javascript:this.src='{{ URL::asset("assets/images/default_large.png")}}'" width="100%" height="100%" style="border-radius:10px"/></a>`;
                    el.querySelector(".serviceImageContainer").innerHTML = image;
                    // el.querySelector(".text-container").innerHTML = data[index].description;
                }
            });
        }

        function setProjectsData(data){
            console.warn("data", data);
            document.querySelectorAll(".projectsItem").forEach((el, index) => {
                if (data[index]) {
                    el.className = el.className.replace(" empty", " loaded");
                    var image = `<a href="javascript:void(0)" onclick="getSpecificDetails('project', '${data[index].id}')"><img class="checkImage" src="{{ URL::asset('assets/images/projects/${data[index].logo}')}}"  onerror="javascript:this.src='{{ URL::asset("assets/images/default_large.png")}}'" width="100%" height="150px"/></a>`;
                    el.querySelector(".projectImageContainer").innerHTML = image;
                    // el.querySelector(".text-container").innerHTML = data[index].description;
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
                        console.warn(response);
                    }
                });
            }
        }

    </script>
@endpush
