<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <script>document.getElementsByTagName("html")[0].className += " js";</script>
      <title>@yield('title')</title>
      {{-- <title>Valasys - Creative Agency HTML Template</title> --}}
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}"/>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}"/>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}"/>
      <!-- Style CSS -->
      <link rel='stylesheet' href='{{ URL::asset('assets/css/style.css') }}'/>
      <!-- OWL Carousal CSS -->
      <link rel='stylesheet' href='{{ URL::asset('assets/css/owl.carousel.min.css') }}'/>
      <!-- Responsive CSS -->
      {{-- <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}"/> --}}
      <!-- Google Fonts -->
      {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gilroy"> --}}
      <!-- Responsive CSS -->
      {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/> --}}
      <!-- AOS CSS Animation -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="{{ URL::asset('assets/css/magnific-popup.css') }}"/>
   </head>
   <body>
      {{-- <div class="mainBodyContainer">
         <div class="bubbles">
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:14;"></span>
            <span style="--i:23;"></span>
            <span style="--i:18;"></span>
            <span style="--i:16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:22;"></span>
            <span style="--i:25;"></span>
            <span style="--i:18;"></span>
            <span style="--i:21;"></span>
            <span style="--i:15;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:14;"></span>
            <span style="--i:23;"></span>
            <span style="--i:18;"></span>
            <span style="--i:16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:22;"></span>
            <span style="--i:25;"></span>
            <span style="--i:18;"></span>
            <span style="--i:21;"></span>
            <span style="--i:15;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
            
            <div class="bodyContent" style="position: absolute"> --}}
               @include('website.layouts.header')

               @yield('content')
               @include('website.layouts.footer')
               @stack('js')
            {{-- </div>

         </div>
      </div> --}}
   </body>
</html>
