<div class="modal h-100" id="myModal">
    <div class="modal-dialog-xl">
      <div class="modal-content" style="background-color:#090B1A;">

        <!-- Modal Header -->
        <div class="modal-head" style="border: none">
            {{-- <div id="back-to-top">
                <a class="top" id="top" href="#top"> <i class="fa fa-angle-up" aria-hidden="true"></i><i class="ion-ios-arrow-up"></i> </a>
            </div> --}}
            <div id="close-modal">
                <a class="close-modal-btn" id="close-modal-btn" data-dismiss="modal"><i class="fa fa-close" style="font-size:20px; font-weight:normal" aria-hidden="true"></i></a>
                {{-- <button type="button" id="close-modal-btn" class="close-modal-btn" data-dismiss="modal">X</button> --}}
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
                                <div class="carousel-item {{ ($id == $item['id'] ) ? 'active' : '' }}" style="margin-left: 32px;">
                                    <div class="row" style="margin-left: 63px">
                                        <div class="modal-header-logo p-2" style="border-radius: 50%;width: 60px;
                                        height: 60px;
                                        display: flex;
                                        align-items: center;
                                        background-color: #171c3c;
                                        justify-content: center;">
                                            <img src="{{ URL::asset('assets/images/'.$tableName.'/'.$item['logo']) }}" class="img-rounded" width="50px" height="50px" alt="Logo">
                                        </div>
                                        <div class="modal-header-title" style="display: flex;align-items: center;justify-content: center; margin-left:25px; font-size: 30px;">
                                            {{$item['name']}}
                                        </div>
                                    </div>
                                    <div class="row m-3 justify-content-center ">
                                        <div class="col-md-9 pt-5 pb-0 scroller" style="background-color:  #171C3C; border-radius: 10px">
                                            <div class="text-center p-4">
                                                <img src="{{ URL::asset('assets/images/'.$tableName.'/'.$item['logo']) }}" width="150px" height="100px" alt="IMGAE"/>
                                            </div>
                                            <div class="leftText-container text-center">
                                                <span style="font-size: 40px; font-weight: bold">{{isset($item['name']) ? $item['name'] : 'N/A'}}</span>
                                            </div>
                                            <div class="description text-center mb-4 mt-3">
                                                <p style="justify-content: center; margin: 0px 70px;">{{isset($item['brief_descp']) ? $item['brief_descp'] : 'N/A'}}</p>
                                            </div>
                                            <div class="row mt-2">
                                                <img src="{{ URL::asset('assets/images/'.$tableName.'/'.$item['image'])}}" width="100%" alt="work-images">
                                            </div>
                                            @forelse($item['allMappedData'] as $mapData)
                                            <hr>
                                                <div class="description text-center pb-3 pt-4" id="{{isset($mapData->anchor_keyword)?$mapData->anchor_keyword:''}}_{{$mapData->id}}">
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
                                            @forelse ($item['allMappedTypedData'] as $typeData)
                                                <a href="#{{isset($typeData['anchor_keyword'])?$typeData['anchor_keyword']:''}}_{{$typeData['id']}}">
                                                    <div class="col mb-3" style="height:auto">
                                                        <div class="col text-center p-3"
                                                        style="background-color: #171C3C;
                                                        justify-content: center;
                                                        display: flex;
                                                        align-items: center;
                                                        flex-direction: column;
                                                        height: auto; border-radius: 10px;">
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
                            <a class="middle-carousel-prev carousel-control-prev" id="middle-carousel-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        </div>
                        <div id="modal-middle-carousel">
                            <a class="middle-carousel-next carousel-control-next" id="middle-carousel-prev" href="#carouselExampleControls" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>


                    <div class="row mt-4 d-block" style="margin-left: 92px">
                        <span class="fs-5" style="font-size: 20px">Explore more</span>
                        <div class="col-md-10 mt-2" style="padding: 10px 51px 0 0;">
                            <div class="text-center">
                                <div class="slider">
                                    <div class="carousalSecond owl-carousel">
                                        @forelse ($allTypeData as $row)
                                            <a href="javascript:void(0)" onclick="getSpecificDetails('{{$type}}', {{$row->id}})"><div class="slider-card" style="height:auto">
                                                <div class="col text-center"
                                                style="background-color: #171C3C;
                                                justify-content: center;
                                                display: flex;
                                                align-items: center;
                                                flex-direction: column;
                                                height: 150px; border-radius: 10px;">
                                                    {{-- d-flex align-self-center  --}}
                                                    <div class="rightImgLogo-container">
                                                        <img src="{{ URL::asset('assets/images/'.$tableName.'/'.$row->logo) }}" width="80px" height="100px" alt="Logo">
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
                    items:5,
                }
            }
        });
    });
  </script>
