
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                            <img src="{{ URL::asset('assets/images/'.$tableName.'/'.$item['logo']) }}"  class="img-rounded" width="50px" height="auto" alt="Logo">
                                        </div>
                                        <div class="modal-header-title">
                                            {{$item['name']}}
                                        </div>
                                    </div>
                                    <div class="row m-3 justify-content-center ">
                                        <div class="col-md-9 pt-5 pb-0 scroller modalMiddleContainer" data-aos="zoom-in" data-aos-duration="1000">
                                            <div class="text-center p-4">
                                                <img src="{{ URL::asset('assets/images/'.$tableName.'/'.$item['logo']) }}" width="150px" height="auto" alt="IMGAE"/>
                                            </div>
                                            <div class="text-center">
                                                <span class="leftNameContainer">{{isset($item['name']) ? $item['name'] : 'N/A'}}</span>
                                            </div>
                                            <div class="description text-center mb-4 mt-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                                <p class="briefDescpContainer">{{isset($item['brief_descp']) ? $item['brief_descp'] : 'N/A'}}</p>
                                            </div>
                                            {{-- <div class="row mt-2">
                                                <img src="{{ URL::asset('assets/images/'.$tableName.'/'.$item['image'])}}" width="100%" alt="work-images">
                                            </div> --}}
                                            @php 
                                                $arr = [];
                                            @endphp
                                            @forelse($item['allMappedData'] as $mapData)
                                            @php 
                                                $uniqueId = '';
                                                if(!in_array($mapData->id, $arr)){
                                                    array_push($arr, $mapData->id);
                                                    $uniqueId = $mapData->id;
                                                }
                                            @endphp
                                                <div class="row pt-4" id="{{isset($mapData->anchor_keyword)?$mapData->anchor_keyword:''}}_{{$uniqueId}}_{{$item['anchor_keyword']}}">
                                                    @if(isset($mapData->is_thumbnail) && $mapData->is_thumbnail == 'Yes')
                                                    {{-- For Adding scroller --}}
                                                        <img src="{{ URL::asset('assets/images/project_service/'.$mapData->image_name)}}" width="100%" alt="work-images">
                                                    @else
                                                        <img src="{{ URL::asset('assets/images/project_service/'.$mapData->image_name)}}" width="100%" alt="work-images">
                                                    @endif
                                                </div>

                                                <div class="description text-center pt-4">
                                                    @if(isset($mapData->short_descp))
                                                    <div class="text-center">
                                                        <span class="leftNameContainer">{{isset($mapData->short_descp) ? $mapData->short_descp : 'N/A'}}</span>
                                                    </div>
                                                    @endif
                                                    <p class="briefDescpContainer" id='partners'>{{isset($mapData->brief_descp) ? $mapData->brief_descp : 'No Decription available.'}}</p>
                                                </div>

                                                @empty
                                            @endforelse
                                        </div>

                                        <div class="col-md-2 p-0">
                                            <div class="vertical bg-dark" style="height: auto;">
                                                @isset($item['allMappedTypedData'][0])
                                                    @forelse ($item['allMappedTypedData'][0] as $typeData)
                                                        <a href="#{{isset($typeData['anchor_keyword'])?$typeData['anchor_keyword']:''}}_{{$typeData['id']}}_{{$item['anchor_keyword']}}">
                                                            <div class="col mb-3 h-auto">
                                                                <div class="col text-center p-3 modalSideContainer">
                                                                    <div class="rightImgLogo-container">
                                                                        <img src="{{ URL::asset('assets/images/'.$sideImgFolName.'/'.$typeData['logo']) }}" width="100%" alt="Logo">
                                                                    </div>
                                                                    <div class="bottomTextContainer">
                                                                        <span>{{isset($typeData['name'])?$typeData['name']:'N/A'}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    @empty
                                                    @endforelse
                                                @endisset
                                            </div>
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


                    {{-- Second Carousal --}}
                    <div class="row mt-4 d-block bottomExploreContainer">
                        <span class="exploreSpan">Explore more</span>
                        <div class="col-md-10 mt-2 mainContainer">
                            <div class="text-center">
                                <div class="slider">
                                    <div class="carousalSecond owl-carousel">
                                        @forelse ($allTypeData as $row)
                                            @if($row->id != $id)
                                                <a href="javascript:void(0)" class="textBold" onclick="getSpecificDetails('{{$type}}', {{$row->id}})">
                                                    <div class="col-md text-center bottomContaineritems">
                                                        <div class="bottomImgLogoContainer">
                                                            <img src="{{ URL::asset('assets/images/'.$tableName.'/'.$row->logo) }}" width="30px" height="auto" alt="Logo">
                                                        </div>
                                                        <div class="bottomTextContainer">
                                                            <span style="padding: 0">{{isset($row->name)?$row->name:'N/A'}}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endif
                                        @empty
                                            <h3>No Record Found!</h3>
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
            setTimeout(() => {
                AOS.init();
            }, 0);
        }
        setTimeout(() => {
            AOS.init();
            $('.vertical').slick({
                vertical:true,
                verticalSwiping:true,
                slidesToShow: 3,
                slidesToScroll: 3,
                prevArrow:'<div id="modal-vertical-carousel"><a class="vertical-up" id="vertical-carousel-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a></div>',
                nextArrow:'<div id="modal-vertical-carousel"><a class="vertical-down" id="vertical-carousel-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a></div>',
            });
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

        $('#myCarousel').carousel({
            interval: false
        })
    });
  </script>
