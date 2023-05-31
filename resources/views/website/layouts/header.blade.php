<!-- Header -->
<header id="main-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img class="" src="{{ URL::asset('assets/images/valasys-logo.png') }}" alt="Logo-Image" style="width: 50%;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-btn d-inline-block text-warning" id="menu-btn">
                            <i class="fa fa-align-justify"></i>
                            {{-- <span class="navbar-toggler-icon icon-green"></span> --}}
                        </span>
                        <span class="ion-navicon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto w-100 justify-content-end">
                            <li class="nav-item m-3">
                                <a class="header-nav" href="/">
                                Projects
                                </a>
                            </li>
                            <li class="nav-item m-3">
                                <a class="header-nav" href="/categories" role="button">
                                Categories
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Portfolio
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-3">
                                <a class="dropdown-item" href="/portfolio">Portfolio</a>
                                </div>
                                
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Search Bar Start -->
    <div class="container">
        <form>
            <div class="row m-4" style="justify-content: center">
                <div class="col-md-7 mt-2">
                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4 shade">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button id="button-addon2" type="submit" class="btn btn-link text-warning shade"><i class="fa fa-search"></i></button>
                            </div>
                            <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon2" class="form-control border-0 bg-light shade" style="color:white">
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-2 mt-3">
                    <button type="submit" class="btn btn-warning rounded-pill btn-block shadow-sm">Search</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Search Bar End -->
</header>
<!-- Header End -->