<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script>
        document.getElementsByTagName("html")[0].className += " js";
    </script>
    <title>Phifi - Creative Agency HTML Template</title>

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
    <!-- Main-Content Start -->
    <div class="main-content">
        <section class="error-404">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="fourzero-image mb-5">
                            <img src="{{ URL::asset('assets/images/others/404-2.png') }}" class="img-fluid" alt="Responsive image">
                        </div>
                        <h1 class="iq-font-light">Oopss Nothing Here..!!</h1>
                        <p>The Requested Page Dose Not Exist.</p>
                        <div class="d-block text-center">
                            <a class="iq-button" href="/"><span>Go Back</span><em></em></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Main-Content End -->
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!-- back-to-top End -->

    
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="{{ URL::asset('assets/js/jquery-3.4.1.js') }}"></script>
 <!-- jQuery  for scroll me js -->
 <script src="{{ URL::asset('assets/js/jquery-min.js') }}"></script>
 <!-- popper  -->
 <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
 <!--  bootstrap -->
 <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
 <!-- Appear JavaScript -->
 <script src="{{ URL::asset('assets/js/appear.js') }}"></script>
 <!-- Circle Progress -->
 <script src="{{ URL::asset('assets/js/circle-progress.min.js') }}"></script>
 <!-- Jquery-migrate JavaScript -->
 <script src="{{ URL::asset('assets/js/jquery-migrate.min.js') }}"></script>
 <!-- countdownTimer JavaScript -->
 <script src="{{ URL::asset('assets/js/jQuery.countdownTimer.min.js') }}"></script>
 <!-- Owl.carousel JavaScript -->
 <script src='{{ URL::asset('assets/js/owl.carousel.min.js') }}'></script>
 <!-- Countdown JavaScript -->
 <script src='{{ URL::asset('assets/js/countdown.js') }}'></script>
 <!-- Jquery.countTo JavaScript -->
 <script src='{{ URL::asset('assets/js/jquery.countTo.js') }}'></script>
 <!-- Magnific-popup JavaScript -->
 <script src='{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}'></script>
 <!-- Wow JavaScript -->
 <script src='{{ URL::asset('assets/js/wow.min.js') }}'></script>
 <!--  Custom JavaScript -->
 <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
