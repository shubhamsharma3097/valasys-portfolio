<!-- Footer Start -->
<footer class="page-footer font-small mdb-color darken-3 pt-4">
   {{-- <div class="container footer">
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
   </div> --}}



   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6 col-sm-12 pr-lg-5">
            <div class="widget">
               <img src="{{ URL::asset('assets/images/valasys-logo.png') }}" class="footer-logo" alt="#" width="250px" height="50px">
               <p class=" mt-4 mr-lg-4">{{ $companyData->small_descp }}</p>
               <div class="">
                  <ul class="socialLinks">
                     <li><a href="{{ $companyData->fb_url }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="{{ $companyData->twitter_url }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="{{ $companyData->linkedin_url }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="{{ $companyData->insta_url }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  </ul>
               </div>
               {{-- <p class="mt-2 mb-0">Copyrights 2023 ©<span class="main-color">Valasys Media</span></p> --}}
            </div>
         </div>
         <div class="col-lg-2 col-md-6">
            <div class="widget">
               <h4 class="footer-title">Useful links</h4>
               <div class="menu-link">
                  <ul id="menu-link-menu" class="menu">
                     <li><a href=" {{ URL('/projects') }} ">Projects</a></li>
                     <li><a href=" {{ URL('/services') }} ">Services</a></li>
                     <li><a href=" {{ URL('/') }} ">Portfolio</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="widget">
               <h4 class="footer-title ">Contact Us</h4>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="footerSubMenu" id="footerSubMenu">
                        <ul id="addressMenuContainer">
                           <li class="addMenu addressMenuactive" id="USA">USA</li>
                           <li class="addMenu" id="UAE">UAE</li>
                           <li class="addMenu" id="INDIA">INDIA</li>
                        </ul>
                     </div>
                     <ul id="USA_addressContainer" class="subAddressContainer">
                        <li>
                           <i class="fa fa-home" aria-hidden="true"></i><strong> {{isset($companyData->USA_address_title1) ? $companyData->USA_address_title1 : ''}}</strong><span>{{isset($companyData->USA_address1) ? $companyData->USA_address1 : '--'}}</span>
                        </li>
                        <li>
                           <i class="fa fa-phone" aria-hidden="true"></i><span> {{$companyData->USA_contact1}}</span>
                        </li>
                     </ul>
                     <ul id="UAE_addressContainer" class="subAddressContainer">
                        <li>
                           <i class="fa fa-home" aria-hidden="true"></i><strong> {{isset($companyData->UAE_address_title1) ? $companyData->UAE_address_title1 : ''}}</strong><span> {{isset($companyData->UAE_address1) ? $companyData->UAE_address1 : ''}}</span>
                        </li>
                        <hr>
                        <li>
                           <i class="fa fa-home" aria-hidden="true"></i><strong> {{isset($companyData->UAE_address_title2) ? $companyData->UAE_address_title2 : ''}}</strong><span> {{isset($companyData->UAE_address2) ? $companyData->UAE_address2 : ''}}</span>
                        </li>
                        <li>
                        <i class="fa fa-phone" aria-hidden="true"></i><span> {{$companyData->UAE_contact2}}</span>
                        </li>
                        <hr>
                        <li>
                           <i class="fa fa-home" aria-hidden="true"></i><strong> {{isset($companyData->UAE_address_title3) ? $companyData->UAE_address_title3 : ''}}</strong><span> {{isset($companyData->UAE_address3) ? $companyData->UAE_address3 : ''}}</span>
                        </li>
                     </ul>
                     <ul id="INDIA_addressContainer" class="subAddressContainer">
                        <li>
                           <i class="fa fa-home" aria-hidden="true"></i><strong> {{isset($companyData->IND_address_title1) ? $companyData->IND_address_title1 : ''}}</strong><span> {{isset($companyData->IND_address1) ? $companyData->IND_address1 : ''}}</span>
                        </li>
                        <li>
                        <i class="fa fa-phone" aria-hidden="true"></i><span> {{$companyData->IND_contact1}}</span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <h4 class="mb-4">Instagram</h4>
            <div class="instagram-box">
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                     <div class="iq-instagram position-relative">
                        <img class="w-100" src="{{ URL::asset('assets/images/instagram/instagram-img1.png') }}" alt="#">
                        <a href="{{ $companyData->insta_url }}" target="_blank"><i class="fa fa-instagram text-white" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                     <div class="iq-instagram position-relative">
                        <img class="w-100"  src="{{ URL::asset('assets/images/instagram/instagram-img2.png') }}" alt="#">
                        <a href="{{ $companyData->insta_url }}" target="_blank"><i class="fa fa-instagram text-white" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                     <div class="iq-instagram position-relative">
                        <img class="w-100"  src="{{ URL::asset('assets/images/instagram/instagram-img3.png') }}" alt="#">
                        <a href="{{ $companyData->insta_url }}" target="_blank"><i class="fa fa-instagram text-white" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                     <div class="iq-instagram position-relative">
                        <img class="w-100"  src="{{ URL::asset('assets/images/instagram/instagram-img4.png') }}" alt="#">
                        <a href="{{ $companyData->insta_url }}" target="_blank"><i class="fa fa-instagram text-white" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                     <div class="iq-instagram position-relative">
                        <img class="w-100"  src="{{ URL::asset('assets/images/instagram/instagram-img5.png') }}" alt="#">
                        <a href="{{ $companyData->insta_url }}" target="_blank"><i class="fa fa-instagram text-white" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                     <div class="iq-instagram position-relative">
                        <img class="w-100"  src="{{ URL::asset('assets/images/instagram/instagram-img6.png') }}" alt="#">
                        <a href="{{ $companyData->insta_url }}" target="_blank"><i class="fa fa-instagram text-white" aria-hidden="true"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <hr class="bottomLine">
      <p class="mt-1 mb-1 text-center">Copyrights {{ date('Y') }} ©<span class="main-color"> Valasys Media</span></p>
      {{-- <p class="mb-0 text-center">&copy;{{ date('Y') }}. <span class="main-color font-weight-bold"> {{ $companyData->note }}</span></p> --}}
      
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
   jQuery(document).ready(function () {
      jQuery('#back-to-top').fadeOut();
      jQuery(window).on("scroll", function() {
         if (jQuery(this).scrollTop() > 250) {
            jQuery('#back-to-top').fadeIn(1400);
         } else {
            jQuery('#back-to-top').fadeOut(400);
         }
      });
      AOS.init();
      
      $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
      });


      
   
      var container = document.getElementById("footerSubMenu");
      var menus = container.getElementsByClassName("addMenu");
      for (var i = 0; i < menus.length; i++) {
         document.getElementById('USA_addressContainer').style.display = "block";
         menus[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("addressMenuactive");
            current[0].className = current[0].className.replace(" addressMenuactive", "");
            this.className += " addressMenuactive";
            var cntryId = this.id+'_addressContainer';
            document.getElementById('USA_addressContainer').style.display = "none";
            document.getElementById('UAE_addressContainer').style.display = "none";
            document.getElementById('INDIA_addressContainer').style.display = "none";
            document.getElementById(cntryId).style.display = "block";
         });
      }


   });
   
   // This is function is used for opening iframe modal using plugins after the service images initiate and Loads.
   function setIframeModal(){
      $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
      });
   }

   // This function is used for changing address container on click of countries
   function changeAddressContainer(country){
      // addressMenuContainer
   }
</script>
</html>
