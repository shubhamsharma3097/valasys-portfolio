@extends('website.layouts.layout')
@section('title', 'Valasys - Services')
@section('content')

    <div class="container">
        <div class="text-center">
            <h1 class="CustomText">SERVICES</h1>
        </div>
        
        <div class="text-center serviceMenus mb-1">
            <div class="row" id="serviceMenusID">
                <ul class="serviceMenusUl">
                    <li class="colCentered {{(empty($id)) ? 'active' : ''}}" id='all'>All</li>
                    @forelse($getAllServices as $row)
                        <li class="colCentered {{($id == $row->id) ? 'active' : ''}}" id="{{$row->anchor_keyword}}-{{$row->id}}">{{ $row->name }}</li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </div>

        <div class="servicesContainer serviceScroller">
            <div class="row justify-content-center p-3">
                @forelse ($servicesData as $item)
                    <div class="col-md-4 p-2 w-100 serviceImgDiv">
                        <div class="serviceItem serviceBtn loaded" onclick="getSpecificDetails('service',{{$item->id}})">
                            @if(isset($item->is_thumbnail) && $item->is_thumbnail == 'Yes')
                                <img src="{{ URL::asset('assets/images/'.$serviceImgFolName.'/'.$item->thumbnail_url) }}" width="100%" height="100%" alt="Logo">
                            @else
                                <img src="{{ URL::asset('assets/images/'.$serviceImgFolName.'/'.$item->image) }}" width="100%" height="100%" alt="Logo">
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="row">
                        <div class="col text-center">
                            <h3>No Records Found</h3>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
        <div id="modalContent" class="m-3"></div>
        {{-- <section id="loading">
            <div id="loading-content"></div>
        </section> --}}
    </div>

@endsection
@push('js')
    <script type="text/javascript">
        
        $(document).ready(function () {
            var header = document.getElementById("serviceMenusID");
            var listItem = header.getElementsByClassName("colCentered");
            for (var i = 0; i < listItem.length; i++) {
                listItem[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                    var serviceID = this.id.split('-');
                    console.warn("this.id",serviceID);
                    getServiceDetailes(serviceID)
                });
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        function getServiceDetailes(filterData){
            $.ajax({
                type:'POST',
                url:"{{ route('ajaxRequest') }}",
                data:{filterData:filterData},
                beforeSend: function(){
                    document.querySelector('.servicesContainer').innerHTML = "";
                    // document.querySelector('#loading').classList.add('loading');
                    // document.querySelector('#loading-content').classList.add('loading-content');
                },
                complete: function(){
                },
                success: function(response){
                    if(response.result){
                        setServicesImages(response.data.servicesData, response.data.serviceImgFolName);
                    }else{
                        console.warn(response.message);
                    }
                    // document.querySelector('#loading').classList.remove('loading');
                    // document.querySelector('#loading-content').classList.remove('loading-content');
                }
            });
        }

        function setServicesImages(data, folderName){
            var html = '';
            if(data !=''){
                html += `<div class="row justify-content-center p-3">`;
                    data.forEach((ele)=>{
                        html += `<div class="col-md-4 p-2 w-100 serviceImgDiv">`;
                        html += `<div class="serviceItem loaded" onclick="getSpecificDetails('service','${ele.id}')">`;
                        if(ele.is_video == 'Yes'){
                            var href = data.video_url;
                            html += `<div class="waves-box">
                                <a href=${href} class="iq-video popup-youtube">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </a>
                                <div class="iq-waves">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>`;
                        }
                        var src = '';
                        if(ele.is_thumbnail == 'Yes'){
                            src = `{{ URL::asset('assets/images/${folderName}/${ele.thumbnail_url}')}}`;
                        }else{
                            src = `{{ URL::asset('assets/images/${folderName}/${ele.image}')}}`;
                        }
                        html += `<img src=${src} width="100%" height="100%" alt="Logo">`;
                        html += `</div></div>`;
                    });
                html += `</div>`;
            }else{
                html += `<div class="row mt-5"><div class="col text-center"><h3>No Record Found</h3></div></div></div>`;
            }
            document.querySelector('.servicesContainer').innerHTML = html;
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

    </script>
@endpush