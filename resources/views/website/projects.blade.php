@extends('website.layouts.layout')
@section('title', 'Valasys - Projects')
@section('content')

    <div class="container">
        <div class="text-center">
            <h1 class="CustomText">PROJECTS</h1>
        </div>

        {{-- <div class="text-center projectMenus mb-1">
            <div class="row" id="projectMenusID">
                <ul class="projectMenus">
                    <li class="colCentered active" id='all'>All</li>
                    @forelse($getAllProjects as $row)
                        <li class="colCentered" id="{{$row->anchor_keyword}}-{{$row->id}}">{{ $row->name }}</li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </div> --}}

        <div class="projectsContainer projectScroller">
            <div class="row justify-content-center mt-3 projectsImgs">
                @forelse ($getAllProjects as $item)
                    <div class="col-md-3 projectItems">
                        <div class="col-md d-flex align-item-center" data-aos="zoom-in" data-aos-duration="1000" onclick="getSpecificDetails('project',{{$item->id}})">
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
        <div id="modalContent" class="m-3"></div>
    </div>

@endsection
@push('js')
    <script type="text/javascript">

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
                        console.warn("response ",response);
                        $('#modalContent').html(response);
                        $('#myModal').modal('show');
                    }
                });
            }
        }

    </script>
@endpush
