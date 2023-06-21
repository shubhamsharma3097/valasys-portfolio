<div class="modal h-100" id="myModal">
    <div class="modal-dialog-xl">
      <div class="modal-content" style="background-color:#090B1A;">

        <!-- Modal Header -->
        <div class="modal-header" style="border: none">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <div class="container-fluid">
                <div class="container">
                    <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            @php $count = 0; @endphp
                            @forelse ($alldata as $proItem)
                                <div class="carousel-item {{ ($id == $proItem['id'] ) ? 'active' : '' }}">
                                    <div class="row" style="margin-left: 63px">
                                        <div class="modal-header-logo bg-light p-2" style="border-radius: 50%;width: 60px;
                                        height: 60px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;">
                                            <img src="{{ URL::asset('assets/images/projects/'.$proItem['logo']) }}" class="img-rounded" width="50px" height="50px" alt="Logo">
                                        </div>
                                        <div class="modal-header-title" style="display: flex;align-items: center;justify-content: center; margin-left:25px; font-size: 30px;">
                                            {{$proItem['name']}}
                                        </div>
                                    </div>
                                    <div class="row m-3 justify-content-center">
                                        <div class="col-md-9 pt-5 pb-0 scroller" style="background-color:  #171C3C; border-radius: 10px">
                                            <div class="text-center p-4">
                                                <img src="{{ URL::asset('assets/images/projects/'.$proItem['logo']) }}" width="150px" height="100px" alt="IMGAE"/>
                                            </div>
                                            <div class="leftText-container text-center">
                                                <span style="font-size: 40px; font-weight: bold">{{isset($proItem['name']) ? $proItem['name'] : 'N/A'}}</span>
                                            </div>
                                            <div class="description text-center mb-4 mt-3">
                                                <p style="justify-content: center; margin: 0px 70px;">{{isset($proItem['brief_descp']) ? $proItem['brief_descp'] : 'N/A'}}</p>
                                            </div>
                                            <div class="row mt-2">
                                                <img src="{{ URL::asset('assets/images/projects/'.$proItem['image'])}}" width="100%" alt="work-images">
                                            </div>
                                            @forelse($proItem['allMappedData'] as $mapData)
                                            <hr>
                                                <div class="description text-center pb-3 pt-4" id="{{isset($mapData->anchor_keyword)?$mapData->anchor_keyword:''}}">
                                                    <div class="leftText-container text-center">
                                                        <span style="font-size: 40px; font-weight: bold">{{isset($mapData->short_descp) ? $mapData->short_descp : 'N/A'}}</span>
                                                    </div>
                                                    <p style="justify-content: center; margin: 0px 70px;" id='partners'>{{isset($mapData->brief_descp) ? $mapData->brief_descp : 'N/A'}}</p>
                                                </div>
                                                <div class="row mt-2">
                                                    <img src="{{ URL::asset('assets/images/project_service/'.$mapData->image_name)}}" width="100%" alt="work-images">
                                                </div>
                                                @empty
                                            @endforelse
                                        </div>

                                        <div class="col-md-2 p-0" style="height:auto">
                                            @forelse ($proItem['allMappedServiceData'] as $serviceData)
                                                <a href="#{{isset($serviceData['anchor_keyword'])?$serviceData['anchor_keyword']:''}}">
                                                    <div class="col mb-3" style="height:auto">
                                                        <div class="col text-center p-3"
                                                        style="background-color: #171C3C;
                                                        justify-content: center;
                                                        display: flex;
                                                        align-items: center;
                                                        flex-direction: column;
                                                        height: auto; border-radius: 10px;">
                                                            {{-- d-flex align-self-center  --}}
                                                            <div class="rightImgLogo-container">
                                                                <img src="{{ URL::asset('assets/images/services/'.$serviceData['logo']) }}" width="90%" alt="Logo">
                                                            </div>
                                                            <div class="rightText-container">
                                                                <p>{{isset($serviceData['name'])?$serviceData['name']:'N/A'}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            @empty

                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                @php $count++; @endphp
                            @empty
                            @endforelse

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="">Prev</span>&nbsp;
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>&nbsp;
                            <span class="">Next</span>
                        </a>
                    </div>


                    <div class="row mt-4 d-block" style="margin-left: 63px">
                        <span class="fs-5" style="font-size: 20px">Explore more</span>
                        <div class="col-md-9 p-0 pt-2 pb-2 mt-2">
                            <div class="text-center">
                                <div class="slider">
                                    <div class="carousalSecond owl-carousel">
                                        @forelse ($allTypeData as $row)
                                            <a href="javascript:void(0)" onclick="getSpecificProjectDetails('project', {{$row->id}})"><div class="slider-card" style="height:auto">
                                                <div class="col text-center"
                                                style="background-color: #171C3C;
                                                justify-content: center;
                                                display: flex;
                                                align-items: center;
                                                flex-direction: column;
                                                height: 150px; border-radius: 10px;">
                                                    {{-- d-flex align-self-center  --}}
                                                    <div class="rightImgLogo-container">
                                                        <img src="{{ URL::asset('assets/images/projects/'.$row->logo) }}" width="80px" height="100px" alt="Logo">
                                                    </div>
                                                    <div class="rightText-container">
                                                        <p>{{isset($row->name)?$row->name:'N/A'}}</p>
                                                    </div>
                                                </div>
                                            </div></a>
                                        @empty

                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 p-0" style="height:auto">
                        </div>
                    </div>

                    {{-- Second Carousal --}}



                </div>
            </div>

        </div>

      </div>
    </div>
  </div>
  <!--  OWL Carousal JS -->
  <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
  <script>
    $(document).ready(function(){
        $('.carousalSecond').owlCarousel({
            loop:true,
            margin:5,
            responsiveClass:true,
            center:true,
            nav:true,
            navText:[
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:3,
                },
                1000:{
                    items:4,
                }
            }
        });
    });
  </script>
