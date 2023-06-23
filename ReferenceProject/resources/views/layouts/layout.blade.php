<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script>document.getElementsByTagName("html")[0].className += " js";</script>
      <title>@yield('title')</title>
      {{-- <title>Valasys - Creative Agency HTML Template</title> --}}
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ URL::asset('assets/css/typography.css') }}">
      {{-- <link rel="stylesheet" href="css/typography.css"> --}}
      <!-- Style CSS -->
      <link rel='stylesheet' href='{{ URL::asset('assets/css/phifi-style.css') }}' />
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">
      
      <link rel="stylesheet" href="{{ URL::asset('assets/css/swiper.min.css') }}" />
   </head>
   <body>
        <!-- loading -->
        <div id="loading">
        <div id="loading-center">
            <div class="load-img">
                <img src="{{ URL::asset('assets/images/loader.gif') }}" alt="loader">
            </div>
        </div>
        </div>
        <!-- loading End -->
        @include('layouts.header')
    
            @yield('content')
        
        @include('layouts.footer')
    
        @stack('js')
    </body>
</html>