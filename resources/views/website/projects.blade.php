@extends('website.layouts.layout')
@section('title', 'Valasys - Projects')
@section('content')

    <div class="container">
        <div class="text-center">
            <h1 class="CustomText">PROJECTS</h1>
        </div>

        <div class="text-center projectMenus mb-1">
            <div class="row" id="projectMenusID">
                <ul class="projectMenus">
                    <li class="colCentered active" id='all'>All</li>
                    @forelse($getAllProjects as $row)
                        <li class="colCentered" id="{{$row->anchor_keyword}}-{{$row->id}}">{{ $row->name }}</li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </div>

        <div class="projectsContainer projectScroller">
            <div class="row justify-content-center mt-3 projectsImgs">
                @forelse ($getAllProjects as $item)
                    <div class="col-md-3">
                        <div class="col-md p-3 m-3">
                            <img src="{{ URL::asset('assets/images/'.$folderName.'/'.$item->logo) }}" width="100%" alt="Logo">
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
        
    </div>

@endsection
@push('js')
    <script type="text/javascript">

        $(document).ready(function () {
            var header = document.getElementById("projectMenusID");
            var listItem = header.getElementsByClassName("colCentered");
            for (var i = 0; i < listItem.length; i++) {
                listItem[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                    var serviceID = this.id.split('-');
                    console.warn("this.id",serviceID);
                    getProjectDetailes(serviceID)
                });
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        function getProjectDetailes(filterData) {
            $.ajax({
                type:'POST',
                url:"{{ route('projectDetails') }}",
                data:{filterData:filterData},
                beforeSend: function(){
                    document.querySelector('.projectsContainer').innerHTML = "";
                    // document.querySelector('#loading').classList.add('loading');
                    // document.querySelector('#loading-content').classList.add('loading-content');
                },
                complete: function(){
                },
                success: function(response){
                    if(response.result){
                        setProjectsImages(response);
                    }else{
                        console.warn(response.message);
                    }
                    // document.querySelector('#loading').classList.remove('loading');
                    // document.querySelector('#loading-content').classList.remove('loading-content');
                }
            });
        }

        function projectsContainer(data){
            console.warn(data);
        }

    </script>
@endpush