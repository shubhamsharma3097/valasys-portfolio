<!-- Header -->
<header id="main-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img class="" src="{{ URL::asset('assets/images/'.$companyData->logo) }}" alt="Logo-Image" style="width: 50%;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-btn d-inline-block text-warning" id="menu-btn">
                    <i class="fa fa-align-justify"></i>
                    {{-- <span class="navbar-toggler-icon icon-green"></span> --}}
                </span>
                <span class="ion-navicon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto justify-content-end">
                    {{-- {{ (request()->segment(2) == 'cities') ? 'active' : '' }} --}}
                    <li class="nav-item m-3 {{ (request()->segment(1) == '') ? 'menuActive' : '' }}">
                        <a class="header-nav" href=" {{ URL('/') }} ">
                            Home
                        </a>
                    </li>
                    <li class="nav-item m-3 {{ (request()->segment(1) == 'projects') ? 'menuActive' : '' }}">
                        <a class="header-nav" href=" {{ URL('/projects') }} ">
                            Projects
                        </a>
                    </li>
                    <li class="nav-item m-3 {{ (request()->segment(1) == 'services') ? 'menuActive' : '' }}">
                        <a class="header-nav" href=" {{ URL('/services') }} " role="button">
                            Services
                        </a>
                    </li>
                    <li class="nav-item m-2 dropdown">
                        <a class="nav-link" href="javascript:void(0)" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6381FB">
                            Log in/Sign up &nbsp;<i class="fa fa-user-circle-o" style="font-size:20px" aria-hidden="true"></i>
                        </a>

                        {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown-2" style="position: initial;">
                            <a class="dropdown-item" href="#">Log in</a>
                            <a class="dropdown-item" href="#">Sign up</a>
                        </div> --}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Search Bar Start -->
    {{-- <div class="container" id="top">
        <form name="search-form" id="search-form" method="post" action="{{ url('search') }}">
            @csrf
            <div class="row row mb-0 searchDiv">
                <div class="col-md-7 mt-2">
                    <div class="p-1 bg-light rounded rounded-pill shadow-sm shade">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button id="button-addon2" type="submit" class="btn btn-link shade"><i class="fa fa-search"></i></button>
                            </div>
                            <input type="search" name="search" id="search" placeholder="Search" aria-describedby="button-addon2" class="form-control border-0 bg-light shade" style="color:white">
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-2 mt-3 text-center filterBtn">
                    <button type="button" class="btn rounded-pill btn-block shadow-sm orange" onclick="getGridData()">Search</button>
                </div>
            </div>
        </form>
    </div> --}}
    <!-- Search Bar End -->

</header>
<!-- Header End -->
