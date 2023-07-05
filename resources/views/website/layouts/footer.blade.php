<!-- Footer Start -->
<footer class="page-footer font-small mdb-color darken-3 pt-4">
   <div class="container footer">
      <div class="row">
         <div class="col-lg-5 col-md-6 col-sm-12 pr-lg-5">
            <div class="widget">
               <img src="{{ URL::asset('assets/images/valasys-logo.png') }}" class="footer-logo" alt="#" height="auto" width="200px">
               <p class=" mt-4 mr-lg-4">{{ $companyData->small_descp }}</p>
            </div>
            <div class="">
               <ul class="socialLinks">
                  <li><a href="{{ $companyData->fb_url }}"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="{{ $companyData->twitter_url }}"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="{{ $companyData->linkedin_url }}"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="{{ $companyData->insta_url }}"><i class="fa fa-instagram"></i></a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="widget">
               <h4 class="footer-title">Quick links</h4>
               <div class="menu-link">
                  <ul id="menu-link-menu" class="footerMenus">
                     <li> <a href=" {{ URL('/projects') }} ">Projects</a></li>
                     <li><a href=" {{ URL('/services') }} ">Services</a></li>
                     <li><a href=" {{ URL('/') }} ">Portfolio</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="widget">
               <h4 class="footer-title ">Contact</h4>
               <div class="row">
                  <div class="col-sm-12">
                     <ul class="footerMenus">
                        <li>
                           <a><i class="fa fa-home" aria-hidden="true"></i> Address: <span> {{$companyData->address}}</span></a>
                        </li>
                        <li>
                           <a href="tel:+0123456789"><i class="fa fa-phone" aria-hidden="true"></i> Phone: <span>{{$companyData->contact}}</span></a>
                        </li>
                        <li>
                           <a href="mailto:support@themes.com"><i class="fa fa-envelope" aria-hidden="true"></i> Email: <span> {{$companyData->email}}</span></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <hr style="border: 1px solid white;">
      <p class="mt-2 mb-0 text-center">&copy;{{ date('Y') }}. <span class="main-color font-weight-bold"> {{ $companyData->note }}</span></p>
   </div>
</footer>
 <!-- Footer End -->
 <!-- === back-to-top === -->
 <div id="back-to-top">
    <a class="top" id="top" href="#top"> <i class="fa fa-angle-up" aria-hidden="true"></i><i class="ion-ios-arrow-up"></i> </a>
 </div>
 <!-- === back-to-top End === -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="{{ URL::asset('assets/js/jquery-3.4.1.js') }}"></script>
 <!-- jQuery  for scroll me js -->
 <script src="{{ URL::asset('assets/js/jquery-min.js') }}"></script>
 <!--  bootstrap -->
 <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
 <!-- AOS Animation Javascript -->
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

 <!-- Jquery-migrate JavaScript -->
 <!-- Owl.carousel JavaScript -->
 {{-- <script src='{{ URL::asset('assets/js/owl.carousel.min.js') }}'></script> --}}
 <!-- Custom JavaScript -->
 {{-- <script src="{{ URL::asset('assets/js/custom.js') }}"></script> --}}
<script>
    jQuery('#back-to-top').fadeOut();
    jQuery(window).on("scroll", function() {
         if (jQuery(this).scrollTop() > 250) {
            jQuery('#back-to-top').fadeIn(1400);
         } else {
            jQuery('#back-to-top').fadeOut(400);
         }
    });
    AOS.init();
</script>
</html>
