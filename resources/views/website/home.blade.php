@extends('website.layouts.layout')
@section('title', 'Valasys - Home')
@section('content')

    <div class="container-fluid">
        <div class="row m-2" style="display: flex; justify-content: center;">
            <div class="col-md-6">
                <div class="customeMenus d-flex align-self-center justify-content-center">
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

        <div class="text-center portfolioMenus mb-3">
            <div class="row" id="portfolioMenusID">
                <div class="col-md"><button type="button"><div class="col p-2 colCentered active" id="all">All</div></button></div>
                <div class="col-md"><button type="button"><div class="col p-2 colCentered" id="graphic_design1">Graphic Design</div></button></div>
                <div class="col-md"><button type="button"><div class="col p-2 colCentered" id="Social_media1">Social Media</div></button></div>
                <div class="col-md"><button type="button"><div class="col p-2 colCentered" id="branding1">Branding</div></button></div>
                <div class="col-md"><button type="button"><div class="col p-2 colCentered" id="website1">Website</div></button></div>
            </div>
        </div>

        {{-- Grid --}}
        <div class="row gridMainSection m-2">
            <div class="col-md-4">
                <div class="row">
                    <div class="col serviceItem empty" style="height: 270px">
                        <div class="serviceImageContainer w-100 h-100">
                        </div>
                        {{-- 1 --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col serviceItem empty" style="height: 230px">
                        <div class="serviceImageContainer w-100 h-100">
                        </div>
                        {{-- 4 --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col serviceItem empty" style="height: 370px">
                        <div class="serviceImageContainer w-100 h-100">
                        </div>
                        {{-- 6 --}}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col serviceItem empty" style="height: 270px;margin-right: 10px;">
                        <div class="serviceImageContainer w-100 h-100">
                        </div>
                        {{-- 2 --}}
                    </div>
                    <div class="col serviceItem empty" style="height: 270px;margin-left: 10px;">
                        <div class="serviceImageContainer w-100 h-100">
                        </div>
                        {{-- 3 --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center serviceItem empty" style="height: 390px;">
                        <div class="serviceImageContainer w-100 h-100">
                        </div>
                        {{-- 5 --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col serviceItem empty" style="height: 210px;margin-right: 10px;">
                        <div class="serviceImageContainer w-100 h-100">
                        </div>
                        {{-- 7 --}}
                    </div>
                    <div class="col serviceItem empty" style="height: 210px;margin-left: 10px;">
                        <div class="serviceImageContainer w-100 h-100">
                        </div>
                        {{-- 8 --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center m-4">
            <a href="{{ URL('/services') }}"><button class="btn orange">View All</button></a>
        </div>

        <div class="text-center">
            <h1 class="CustomText">PROJECTS</h1>
        </div>

        <div class="row projectsLogos m-3">
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;">
                <div class="projectImageContainer"></div>
            </div>

            <div class="w-100"></div>

            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;">
                <div class="projectImageContainer"></div>
            </div>
            <div class="col-md p-0 m-2 projectsItem empty" style="display: flex;align-items: center;justify-content: center;">
                <div class="projectImageContainer"></div>
            </div>
        </div>

        <div class="text-center m-4">
            <a href=" {{ URL('/projects') }} "><button type="button" class="btn orange">View All</button></a>
        </div>

    </div>

    <div id="modalContent" class="m-3"></div>
@endsection
@push('js')
    <script type="text/javascript">

        $(document).ready(function () {
            $('#search').val('');
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

        var header = document.getElementById("portfolioMenusID");
        var btns = header.getElementsByClassName("colCentered");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
                getGridData(this.id);
            });
        }

        function getGridData(value){
            var filterData = null;
            if(value===undefined){
                var filterData = $('#search').val().trim();
                if(filterData == '' || filterData == null){
                    filterData = 'all';
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
                        setServicesImages(response.data.servicesData);
                        setProjectsData(response.data.projectsData)
                    }else{
                        console.warn(response.message);
                    }
                }
            });
        }

        function setServicesImages(data){
            document.querySelectorAll(".serviceItem").forEach((el, index) => {
                if (data[index]) {
                    el.className = el.className.replace(" empty", " loaded");
                    var src = `{{ URL::asset('assets/services/${data[index].service_image}')}}`;
                    var image = `<a href="javascript:void(0)" onclick="getSpecificDetails('service','${data[index].id}')"><img class="checkImage" src="{{ URL::asset('assets/images/services/${data[index].image}')}}"  onerror="javascript:this.src='{{ URL::asset("assets/images/default_large.png")}}'" width="100%" height="100%"/></a>`;
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

        function getSpecificServiceDetails(type,id) {
            if(id != ''){

                var url = "{{ route('specificService', ['type' => ':type', 'id' => ':id']) }}";
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
