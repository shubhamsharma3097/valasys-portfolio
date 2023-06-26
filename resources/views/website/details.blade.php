<div class="modal" id="myModal">
    <div class="modal-dialog-xl">
      <div class="modal-content">
        <div class="modal-head">
            <div id="close-modal">
                <a class="close-modal-btn" id="close-modal-btn" data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <div class="container-fluid">
                <div class="container">
                    <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            @php $count = 0; @endphp
                            @forelse ($alldata as $item)
                                <div class="carousel-item {{ ($id == $item['id'] ) ? 'active' : '' }}">
                                    <div class="row middleContainer">
                                        <div class="modal-header-logo p-2">
                                            <img src="{{ URL::asset('assets/images/'.$tableName.'/'.$item['logo']) }}"  class="img-rounded" width="50px" height="50px" alt="Logo">
                                        </div>
                                        <div class="modal-header-title">
                                            {{$item['name']}}
                                        </div>
                                    </div>
                                    <div class="row m-3 justify-content-center ">
                                        <div class="col-md-9 pt-5 pb-0 scroller modalMiddleContainer" data-aos="zoom-in" data-aos-duration="1000">
                                            <div class="text-center p-4">
                                                <img src="{{ URL::asset('assets/images/'.$tableName.'/'.$item['logo']) }}" width="150px" height="100px" alt="IMGAE"/>
                                            </div>
                                            <div class="text-center">
                                                <span class="leftNameContainer">{{isset($item['name']) ? $item['name'] : 'N/A'}}</span>
                                            </div>
                                            <div class="description text-center mb-4 mt-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                                <p class="briefDescpContainer">{{isset($item['brief_descp']) ? $item['brief_descp'] : 'N/A'}}</p>
                                            </div>
                                            <div class="row mt-2">
                                                <img src="{{ URL::asset('assets/images/'.$tableName.'/'.$item['image'])}}" width="100%" alt="work-images">
                                            </div>
                                            @forelse($item['allMappedData'] as $mapData)
                                            <hr>
                                                <div class="description text-center pb-3 pt-4" id="{{isset($mapData->anchor_keyword)?$mapData->anchor_keyword:''}}_{{$mapData->id}}">
                                                    <div class="text-center">
                                                        <span class="leftNameContainer">{{isset($mapData->short_descp) ? $mapData->short_descp : 'N/A'}}</span>
                                                    </div>
                                                    <p class="briefDescpContainer" id='partners'>{{isset($mapData->brief_descp) ? $mapData->brief_descp : 'N/A'}}</p>
                                                </div>
                                                <div class="row mt-2">
                                                    <img src="{{ URL::asset('assets/images/project_service/'.$mapData->image_name)}}" width="100%" alt="work-images">
                                                </div>
                                                @empty
                                            @endforelse
                                        </div>

                                        <div class="col-md-2 p-0 h-auto">
                                            @forelse ($item['allMappedTypedData'] as $typeData)
                                                <a href="#{{isset($typeData['anchor_keyword'])?$typeData['anchor_keyword']:''}}_{{$typeData['id']}}">
                                                    <div class="col mb-3 h-auto" data-aos="zoom-in" data-aos-duration="3000">
                                                        <div class="col text-center p-3 modalSideContainer">
                                                            <div class="rightImgLogo-container">
                                                                <img src="{{ URL::asset('assets/images/'.$sideImgFolName.'/'.$typeData['logo']) }}" width="90%" alt="Logo">
                                                            </div>
                                                            <div class="rightText-container">
                                                                <p>{{isset($typeData['name'])?$typeData['name']:'N/A'}}</p>
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
                        <div id="modal-middle-carousel">
                            <a class="middle-carousel-prev carousel-control-prev" onclick="initAOS()" id="middle-carousel-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        </div>
                        <div id="modal-middle-carousel">
                            <a class="middle-carousel-next carousel-control-next" onclick="initAOS()" id="middle-carousel-prev" href="#carouselExampleControls" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>


                    <div class="row mt-4 d-block bottomExploreContainer">
                        <span class="exploreSpan">Explore more</span>
                        <div class="col-md-10 mt-2 mainContainer">
                            <div class="text-center">
                                <div class="slider">
                                    <div class="carousalSecond owl-carousel">
                                        @forelse ($allTypeData as $row)
                                            <a href="javascript:void(0)" onclick="getSpecificDetails('{{$type}}', {{$row->id}})" data-aos="zoom-in" data-aos-duration="3000">
                                                <div class="col-md text-center bottomContaineritems">
                                                    <div class="bottomImgLogoContainer">
                                                        <img src="{{ URL::asset('assets/images/'.$tableName.'/'.$row->logo) }}" width="70px" height="90px" alt="Logo">
                                                    </div>
                                                    <div class="bottomTextContainer">
                                                        <span style="padding: 0">{{isset($row->name)?$row->name:'N/A'}}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        @empty

                                        @endforelse
                                    </div>
                                </div>
                            </div>
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
 <!-- AOS Animation Javascript -->
 {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
  <script>
        function initAOS(){
            // alert()
            AOS.init();
            setTimeout(() => {

            }, 0);
        }
        setTimeout(() => {
          AOS.init();
        }, 0);
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
                    items:5,
                }
            }
        });
    });
  </script>
