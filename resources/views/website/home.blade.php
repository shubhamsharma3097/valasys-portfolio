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
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered active" id="all" style="width: 100%">All</div></button></div>
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered" id="graphic_design" style="width: 100%">Graphic Design</div></button></div>
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered" id="Social_media" style="width: 100%">Social Media</div></button></div>
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered" id="branding" style="width: 100%">Branding</div></button></div>
                <div class="col-md m-2"><button type="button"><div class="col p-2 colCentered" id="website" style="width: 100%">Website</div></button></div>
            </div>
        </div>

        {{-- Grid --}}
        <div class="row gridMainSection"> 
            <div class="col-md-4">
                <div class="row">
                    <div class="col" style="height: 270px">
                        <img src="{{ URL::asset('assets/images/blog/blog-3.jpg') }}" alt="blog" width="100%" height="100%">
                        {{-- 1 --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="height: 230px">
                        <img src="{{ URL::asset('assets/images/blog/blog-6.jpg') }}" alt="blog" width="100%" height="100%">
                        {{-- 4 --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="height: 370px">
                        <img src="{{ URL::asset('assets/images/blog/blog-1.jpg') }}" alt="blog" width="100%" height="100%">
                        {{-- 6 --}}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col" style="height: 270px;margin-right: 10px;">
                        <img src="{{ URL::asset('assets/images/blog/blog-5.jpg') }}" alt="blog" width="100%" height="100%">
                        {{-- 2 --}}
                    </div>
                    <div class="col" style="height: 270px;margin-left: 10px;">
                        <img src="{{ URL::asset('assets/images/blog/blog-4.jpg') }}" alt="blog" width="100%" height="100%">
                        {{-- 3 --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="height: 390px;">
                        <img src="{{ URL::asset('assets/images/blog/blog-d2-1.jpg') }}" alt="blog" width="100%" height="100%">
                        {{-- 5 --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="height: 210px;margin-right: 10px;">
                        <img src="{{ URL::asset('assets/images/blog/blog-01.jpg') }}" alt="blog" width="100%" height="100%">
                        {{-- 7 --}}
                    </div>
                    <div class="col" style="height: 210px;margin-left: 10px;">
                        <img src="{{ URL::asset('assets/images/blog/blog-02.jpg') }}" alt="blog" width="100%" height="100%">
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

        // $(document).ready(function () {
        //     alert();
        // });

        var header = document.getElementById("portfolioMenusID");
        var btns = header.getElementsByClassName("colCentered");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
                getSelectedGridData(this.id);
            });
        }

        function getSelectedGridData(value){
            if(value===undefined){
                var searchData = $('#search').val();
                console.warn("VAL ",searchData);
            }else{
                console.warn("VALUE ",value);
            }
        }

    </script>
@endpush
