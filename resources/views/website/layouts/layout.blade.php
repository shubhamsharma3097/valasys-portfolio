<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
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

      <link rel="stylesheet" href="{{ URL::asset('assets/css/magnific-popup.css') }}"/>
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
   </head>
   <body>
        @include('website.layouts.header')
            @yield('content')
        @include('website.layouts.footer')
        @stack('js')
   </body>
</html>