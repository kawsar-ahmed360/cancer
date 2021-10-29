

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="{{asset('fontend/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('fontend/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="{{asset('fontend/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('fontend/css/animate.css')}}">
      <link rel="stylesheet" href="{{asset('fontend/css/flaticon.css')}}">
      <link rel="stylesheet" href="{{asset('fontend/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('fontend/css/imagelightbox.min.css')}}">
      <link rel="stylesheet" href="{{asset('fontend/css/meanmenu.css')}}">
      <link rel="stylesheet" href="{{asset('fontend/css/odometer.css')}}">
      <link rel="stylesheet" href="{{asset('fontend/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('fontend/css/responsive.css')}}">
      <link rel="icon" type="image/png" href="{{asset('fontend/img/favicon.png')}}">
      <link rel="stylesheet" href="{{asset('fontend/toastr.min.css')}}">
      
      <title>@yield('title')</title>
      @yield('meta_section')
   


  @yield('head')
  
  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=60618ff0b7dede001191f53a&product=sop' async='async'></script>
      
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="1MqWBYw"></script>
   </head>
   <body>
      <!--<div class="preloader">-->
      <!--   <div class="spinner">-->
      <!--      <div class="double-bounce1"></div>-->
      <!--      <div class="double-bounce2"></div>-->
      <!--   </div>-->
      <!--</div>-->
       @include('fontend.common.header')


       @yield('slider')



      <!-- <section class="good-causes-area two ptb-100-70">
         <div class="container">
            <div class="section-title">
               <span>Good Causes</span>
               <h2>Help the Poor Through Us</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <div class="single-good-causes two">
                     <i class="flaticon-drop"></i>
                     <h3>Save Water</h3>
                     <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod incididunt labore dolore.</p>
                     <a class="read-more" href="causes-details.html">
                     Read More
                     </a>
                     <div class="shape-icon">
                        <i class="flaticon-drop"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-good-causes two">
                     <i class="flaticon-volunteer"></i>
                     <h3>Become Volunteer</h3>
                     <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod incididunt labore dolore.</p>
                     <a class="read-more" href="causes-details.html">
                     Read More
                     </a>
                     <div class="shape-icon">
                        <i class="flaticon-volunteer"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                  <div class="single-good-causes two">
                     <i class="flaticon-human-outline-with-heart"></i>
                     <h3>Make World Happy</h3>
                     <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod incididunt labore dolore.</p>
                     <a class="read-more" href="causes-details.html">
                     Read More
                     </a>
                     <div class="shape-icon">
                        <i class="flaticon-human-outline-with-heart"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->

       @yield('about')



      <!-- <section class="get-started-today-area two ptb-100">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="get-started-img">
                     <img src="assets/img/get-started/get-started.png" alt="Donation">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="get-started-title">
                     <span>Get Started Today</span>
                     <h2>Our Fundraise Plans</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <div class="get-started-list">
                     <img src="assets/img/get-started/1.png" alt="Started">
                     <h3>Education For Children</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                  </div>
                  <div class="get-started-list">
                     <img src="assets/img/get-started/2.png" alt="Started">
                     <h3>Home For Homeless People</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                  </div>
                  <div class="get-started-list">
                     <img src="assets/img/get-started/3.png" alt="Started">
                     <h3>Free Medical Services</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                  </div>
                  <a class="default-btn" href="#">
                  Learn More
                  </a>
               </div>
            </div>
         </div>
      </section> -->


       @yield('all_pations')



   <!-- Oncology Consultant -->

   @yield('Oncology_Consultant')


   @yield('content')

    

      <!-- Oncology Consultant -->

   <!--    <section class="reasons-area ptb-100">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="reasons-img">
                     <img src="assets/img/organaization.png" alt="Reasons">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="row">
                     <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="single-good-causes reasons">
                           <i class="flaticon-gift"></i>
                           <h3>Happy Hour</h3>
                           <p>Lorem ipsum dolor amet,sed do eli elit, sed.</p>
                           <a class="read-more" href="#">
                           Read More
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="single-good-causes reasons">
                           <i class="flaticon-harvest"></i>
                           <h3>Healthy Life</h3>
                           <p>Lorem ipsum dolor amet,sed do eli elit, sed.</p>
                           <a class="read-more" href="#">
                           Read More
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="single-good-causes reasons">
                           <i class="flaticon-home"></i>
                           <h3>Home shelter</h3>
                           <p>Lorem ipsum dolor amet,sed do eli elit, sed.</p>
                           <a class="read-more" href="#">
                           Read More
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="single-good-causes reasons">
                           <i class="flaticon-water-bottle"></i>
                           <h3>Drinking Water</h3>
                           <p>Lorem ipsum dolor amet,sed do eli elit, sed.</p>
                           <a class="read-more" href="#">
                           Read More
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->


       @yield('donation')
<!-- 
      <section class="organaization-area ptb-100">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-7">
                  <div class="organaization-text">
                     <h2>Small Growing charity organization wants to raise money</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis suspendisse gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simple dummy text of the printing and typesetting industry.</p>
                     <a class="default-btn" href="donate.html">
                     How To Donate
                     </a>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="organaization">
                     <img src="assets/img/organaization-2.jpg" alt="Organization">
                  </div>
               </div>
            </div>
         </div>
      </section> -->

      

 <!--      <section class="our-event-area">
         <div class="container">
            <div class="section-title">
               <span>Upcoming Events</span>
               <h2>Our Event</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
            </div>
            <div class="row">
               <div class="col-lg-6 col-md-6">
                  <div class="single-event">
                     <div class="row align-items-center">
                        <div class="col-lg-12 col-xl-6 pr-0">
                           <div class="event-img">
                              <img src="assets/img/event/1.jpg" alt="Event">
                              <div class="shape shape-11">
                                 <img src="assets/img/shape/11.jpg" alt="Shape">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 col-xl-6 pl-0">
                           <div class="event-text">
                              <h3>Donation is hope</h3>
                              <p>Lorem ipsum dolor sit amet, elip consectetur adipiscing sed.</p>
                              <ul>
                                 <li>
                                    <i class="flaticon-maps-and-flags"></i>
                                    Newyork city
                                 </li>
                                 <li>
                                    <i class="flaticon-clock-circular-outline"></i>
                                    8.00 am-5.00 pm
                                 </li>
                                 <li>
                                    <i class="flaticon-calendar"></i>
                                    5 November 2019
                                 </li>
                              </ul>
                              <a class="read-more" href="blog-details.html">
                              Read More
                              </a>
                              <span>01</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="single-event">
                     <div class="row align-items-center">
                        <div class="col-lg-12 col-xl-6 pr-0">
                           <div class="event-img">
                              <img src="assets/img/event/2.jpg" alt="Event">
                              <div class="shape shape-11">
                                 <img src="assets/img/shape/11.jpg" alt="Shape">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 col-xl-6 pl-0">
                           <div class="event-text">
                              <h3>Donation is hope</h3>
                              <p>Lorem ipsum dolor sit amet, elip consectetur adipiscing sed.</p>
                              <ul>
                                 <li>
                                    <i class="flaticon-maps-and-flags"></i>
                                    Newyork city
                                 </li>
                                 <li>
                                    <i class="flaticon-clock-circular-outline"></i>
                                    8.00 am-5.00 pm
                                 </li>
                                 <li>
                                    <i class="flaticon-calendar"></i>
                                    5 November 2019
                                 </li>
                              </ul>
                              <a class="read-more" href="blog-details.html">
                              Read More
                              </a>
                              <span>02</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="single-event">
                     <div class="row align-items-center">
                        <div class="col-lg-12 col-xl-6 pr-0">
                           <div class="event-img">
                              <img src="assets/img/event/3.jpg" alt="Event">
                              <div class="shape shape-11">
                                 <img src="assets/img/shape/11.jpg" alt="Shape">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 col-xl-6 pl-0">
                           <div class="event-text">
                              <h3>A hand for children</h3>
                              <p>Lorem ipsum dolor sit amet, elip consectetur adipiscing sed.</p>
                              <ul>
                                 <li>
                                    <i class="flaticon-maps-and-flags"></i>
                                    Newyork city
                                 </li>
                                 <li>
                                    <i class="flaticon-clock-circular-outline"></i>
                                    8.00 am-5.00 pm
                                 </li>
                                 <li>
                                    <i class="flaticon-calendar"></i>
                                    5 November 2019
                                 </li>
                              </ul>
                              <a class="read-more" href="blog-details.html">
                              Read More
                              </a>
                              <span>03</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="single-event">
                     <div class="row align-items-center">
                        <div class="col-lg-12 col-xl-6 pr-0">
                           <div class="event-img">
                              <img src="assets/img/event/4.jpg" alt="Event">
                              <div class="shape shape-11">
                                 <img src="assets/img/shape/11.jpg" alt="Shape">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 col-xl-6 pl-0">
                           <div class="event-text">
                              <h3>Make Donation</h3>
                              <p>Lorem ipsum dolor sit amet, elip consectetur adipiscing sed.</p>
                              <ul>
                                 <li>
                                    <i class="flaticon-maps-and-flags"></i>
                                    Newyork city
                                 </li>
                                 <li>
                                    <i class="flaticon-clock-circular-outline"></i>
                                    8.00 am-5.00 pm
                                 </li>
                                 <li>
                                    <i class="flaticon-calendar"></i>
                                    5 November 2019
                                 </li>
                              </ul>
                              <a class="read-more" href="blog-details.html">
                              Read More
                              </a>
                              <span>04</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->


       @yield('new_event')

<!-- Gallery -->
  @yield('gallery')
<!-- Gallery -->

    @yield('support')






       @include('fontend.common.footer')


      <div class="go-top">
         <i class="fa fa-angle-double-up"></i>
         <i class="fa fa-angle-double-up"></i>
      </div>



      <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      {{-- <script src="{{asset('fontend/js/jquery-3.2.1.slim.min.js')}}"></script> --}}
      <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

      <script src="{{asset('fontend/js/popper.min.js')}}"></script>
      <script src="{{asset('fontend/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('fontend/js/jquery.meanmenu.js')}}"></script>
      <script src="{{asset('fontend/js/wow.min.js')}}"></script>
      <script src="{{asset('fontend/js/owl.carousel.js')}}"></script>
      <script src="{{asset('fontend/js/imagelightbox.min.js')}}"></script>
      <script src="{{asset('fontend/js/jquery.appear.js')}}"></script>
      <script src="{{asset('fontend/js/odometer.min.js')}}"></script>
      <script src="{{asset('fontend/js/jquery.mixitup.min.js')}}"></script>
      <script src="{{asset('fontend/js/custom.js')}}"></script>
      <script src="{{asset('fontend/toastr.min.js')}}"></script>
      {{-- <script src="{{asset('fontend/js/jquery.image-popup.js')}}"></script> --}}
      @yield('footer')

       <script>
            @if(Session::has('message'))
        
        var type ="{{ Session::get('alert-type','success') }}";

        switch(type){
           case "success":
           toastr.success("{{ Session::get('message') }}");
           break;
           case "error":
           toastr.error("{{ Session::get('message') }}");
           break;
        }

           @endif
       </script>


 

   </body>
   <!-- https://templates.envytheme.com/nivo/default/index.html -->
</html>

