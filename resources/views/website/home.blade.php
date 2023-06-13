@extends('website.layouts.layout')
@section('title', 'Valasys - Home')
@section('content')

    <div class="container">
        <div class="row" style="display: flex; justify-content: center;">
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
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered active" id="all">All</div></button></div>
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered" id="graphic_design">Graphic Design</div></button></div>
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered" id="Social_media">Social Media</div></button></div>
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered" id="branding">Branding</div></button></div>
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered" id="website">Website</div></button></div>
            </div>
        </div>

        {{-- Grid --}}
        <div class="row gridMainSection"> 
            <div class="col-md-4">
                <div class="row">
                    <div class="col item empty" style="height: 270px">
                        <div class="image-container w-100 h-100">
                        </div>
                        {{-- 1 --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col item empty" style="height: 230px">
                        <div class="image-container w-100 h-100">
                        </div>
                        {{-- 4 --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col item empty" style="height: 370px">
                        <div class="image-container w-100 h-100">
                        </div>
                        {{-- 6 --}}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col item empty" style="height: 270px;margin-right: 10px;">
                        <div class="image-container w-100 h-100">
                        </div>
                        {{-- 2 --}}
                    </div>
                    <div class="col item empty" style="height: 270px;margin-left: 10px;">
                        <div class="image-container w-100 h-100">
                        </div>
                        {{-- 3 --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center item empty" style="height: 390px;">
                        <div class="image-container w-100 h-100">
                        </div>
                        {{-- 5 --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col item empty" style="height: 210px;margin-right: 10px;">
                        <div class="image-container w-100 h-100">
                        </div>
                        {{-- 7 --}}
                    </div>
                    <div class="col item empty" style="height: 210px;margin-left: 10px;">
                        <div class="image-container w-100 h-100">
                        </div>
                        {{-- 8 --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center m-4">
            <button class="btn orange">View All</button>
        </div>

        <div class="text-center">
            <h1 class="CustomText">PROJECTS</h1>
        </div>

        <div class="row row-col-4">
            <div class="col-md p-3 m-3 projectsLogos">
                <img src="{{ URL::asset('assets/images/clients/01.png') }}" alt="Logo">
            </div>
            <div class="col-md p-3 m-3 projectsLogos">
                <img src="{{ URL::asset('assets/images/clients/04.png') }}" alt="Logo">
            </div>
            <div class="col-md p-3 m-3 projectsLogos">
                <img src="{{ URL::asset('assets/images/clients/03.png') }}" alt="Logo">
            </div>
            <div class="col-md p-3 m-3 projectsLogos">
                <img src="{{ URL::asset('assets/images/clients/02.png') }}" alt="Logo">
            </div>
            
            <div class="w-100"></div>

            <div class="col-md p-3 m-3 projectsLogos">
                <img src="{{ URL::asset('assets/images/clients/04.png') }}" alt="Logo">
            </div>
            <div class="col-md p-3 m-3 projectsLogos">
                <img src="{{ URL::asset('assets/images/clients/01.png') }}" alt="Logo">
            </div>
            <div class="col-md p-3 m-3 projectsLogos">
                <img src="{{ URL::asset('assets/images/clients/02.png') }}" alt="Logo">
            </div>
            <div class="col-md p-3 m-3 projectsLogos">
                <img src="{{ URL::asset('assets/images/clients/03.png') }}" alt="Logo">
            </div>
        </div>

        <div class="text-center m-4">
            <button class="btn orange">View All</button>
        </div>

    </div>

@endsection
@push('js')
    <script type="text/javascript">

        $(document).ready(function () {
            $('#search').val('');
            getGridData();
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
            console.warn(filterData);
            var url = "{{ url('search') }}";
            $.ajax({
                type:'POST',
                url:"{{ route('ajaxRequest') }}",
                data:{filterData:filterData},
                beforeSend: function(){
                    document.querySelectorAll(".item").forEach((el, index) => {
                        el.className = el.className.replace(" loaded", " empty");
                        el.querySelector(".image-container").innerHTML = "";
                        // el.querySelector("img").src = "";
                        // el.querySelector("img").style = "display:none";
                    });
                },
                complete: function(){
                },
                success: function(response){
                    if(response.result){
                        setTimeout(() => {
                            setImages(response.data);
                        }, 1500);
                    }else{
                        console.warn(response.message);
                    }
                }
            });
        }

        function setImages(data){
            console.warn("DATA ",data);
            document.querySelectorAll(".item").forEach((el, index) => {
                if (data[index]) {
                    el.className = el.className.replace(" empty", " loaded");
                    var image = `<a href="/"><img src="{{ URL::asset('assets/images/${data[index].image_src}')}}" width="100%" height="100%"/></a>`;
                    el.querySelector(".image-container").innerHTML = image;
                    // el.querySelector("img").src = src;
                    // el.querySelector("img").style = "display:block";
                    // el.querySelector(".text-container").innerHTML = data[index].description;
                }
            });
        }

    </script>
@endpush
