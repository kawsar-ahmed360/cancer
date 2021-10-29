<div class="nivo-header-style-one fixed-top">
    <div class="header-wrap">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-lg-6 col-md-6">
                <ul class="header-information ">
                   <li>
                      <a href="tel:{{@$contact->mobile_one}}">
                      <i class="fa fa-phone"></i>
                      {{@$contact->mobile_one}}
                      </a>
                   </li>
                   
                </ul>
             </div>
             <div class="col-lg-6 col-md-6">
                <ul class="social-icon">
                   <li>
                      Follow Us:
                   </li>
               @foreach ($socialIcon as $socail)
                  
             
                   <li>
                      <a href="{{@$socail->url}}">
                      <i class="{{@$socail->icon}}"></i>
                      </a>
                   </li>
                   @endforeach 
                </ul>
             </div>
          </div>
       </div>
    </div>
    <div class="navbar-area">
       <div class="mobile-nav">
          <a href="{{route('MainIndex')}}" class="logo">
          <img src="{{(@$logo->logo)?url('upload/logo/'.$logo->logo):''}}" alt="Nivo Logo">
          </a>
       </div>
       <div class="nivo-nav-one">
          <div class="main-nav">
             <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                   <a class="navbar-brand" href="{{route('MainIndex')}}">
                   <img src="{{(@$logo->logo)?url('upload/logo/'.$logo->logo):''}}" alt="Nivo Logo">
                   </a>
                   <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">

                         <li class="nav-item">
                            <a href="{{route('MainIndex')}}" class="nav-link active">Home</a>
                         </li>

                         <!-- <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle active">Home</a>
                            <ul class="dropdown-menu">
                               <li class="nav-item">
                                  <a href="index.html" class="nav-link active">Home One</a>
                               </li>
                               <li class="nav-item">
                                  <a href="index-2.html" class="nav-link">Home Two</a>
                               </li>
                            </ul>
                         </li> -->
                         {{-- <li class="nav-item">
                            <a href="#" class="nav-link">About Us</a>
                         </li>

                         <li class="nav-item">
                            <a href="#" class="nav-link">Our Patients</a>
                         </li>

                         <li class="nav-item">
                            <a href="#" class="nav-link">Consultant</a>
                         </li>

                         <li class="nav-item">
                            <a href="#" class="nav-link">News & Events</a>
                         </li> --}}

                              
                        @foreach($main as $main_menu)
                        <?php
                        $submenus = App\Menu::where('root_id',$main_menu->id)
                        ->where('sroot_id',NULL);
                        if($submenus->count() > 0){
                            $class='dropdown-toggle';
                        }
                        else{
                            $class='';

                        }

                        ?>

                          <li class="nav-item">
                            <a href="@if($main_menu->page_type =='url') {{$main_menu->external_link}} @else {{route('page.details',$main_menu->slug)}} @endif" class="nav-link <?php echo $class?>">{{$main_menu->menu_name}}</a>
                            @if($submenus->count() > 0)
                            <ul class="dropdown-menu">
                              @foreach($submenus->get() as $smenus)
                              <?php $thirdmenus = App\Menu::where('sroot_id',$smenus->id)
                                  ->where('troot_id',NULL);?> 

                               <li class="nav-item">
                                  <a href="@if($smenus->page_type =='url') {{$smenus->external_link}} @else {{route('page.details',$smenus->slug)}} @endif" class="nav-link">{{ $smenus->menu_name }}</a>
                               </li>

                               @endforeach
                               
                            </ul>
                            @endif
                         </li>

                         @endforeach
{{-- 
                         <li class="nav-item">
                            <a href="#" class="nav-link">About U</a>
                         </li> --}}

                         <!-- <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Event</a>
                            <ul class="dropdown-menu">
                               <li class="nav-item">
                                  <a href="event-grid.html" class="nav-link">Event Grid</a>
                               </li>
                               <li class="nav-item">
                                  <a href="event-list.html" class="nav-link">Event List</a>
                               </li>
                               <li class="nav-item">
                                  <a href="event-details.html" class="nav-link">Event Details</a>
                               </li>
                            </ul>
                         </li>
                         <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Project</a>
                            <ul class="dropdown-menu">
                               <li class="nav-item">
                                  <a href="project.html" class="nav-link">Project</a>
                               </li>
                               <li class="nav-item">
                                  <a href="project-details.html" class="nav-link">Project Details</a>
                               </li>
                            </ul>
                         </li>
                         <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Causes</a>
                            <ul class="dropdown-menu">
                               <li class="nav-item">
                                  <a href="causes-grid.html" class="nav-link">Causes Grid</a>
                               </li>
                               <li class="nav-item">
                                  <a href="causes-details.html" class="nav-link">Causes Details</a>
                               </li>
                            </ul>
                         </li>
                         <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Pages</a>
                            <ul class="dropdown-menu">
                               <li class="nav-item">
                                  <a href="project.html" class="nav-link">Project</a>
                               </li>
                               <li class="nav-item">
                                  <a href="project-details.html" class="nav-link">Project Details</a>
                               </li>
                               <li class="nav-item">
                                  <a href="causes-grid.html" class="nav-link">Causes Grid</a>
                               </li>
                               <li class="nav-item">
                                  <a href="causes-details.html" class="nav-link">Causes Details</a>
                               </li>
                               <li class="nav-item">
                                  <a href="blog-grid.html" class="nav-link">Blog Grid</a>
                               </li>
                               <li class="nav-item">
                                  <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                               </li>
                               <li class="nav-item">
                                  <a href="blog-details.html" class="nav-link">Blog Details</a>
                               </li>
                               <li class="nav-item">
                                  <a href="donate.html" class="nav-link">Donate</a>
                               </li>
                               <li class="nav-item">
                                  <a href="faq.html" class="nav-link">FAQ</a>
                               </li>
                               <li class="nav-item">
                                  <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                               </li>
                               <li class="nav-item">
                                  <a href="404.html" class="nav-link">404 Error</a>
                               </li>
                            </ul>
                         </li>
                         <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Blog</a>
                            <ul class="dropdown-menu">
                               <li class="nav-item">
                                  <a href="blog-grid.html" class="nav-link">Blog Grid</a>
                               </li>
                               <li class="nav-item">
                                  <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                               </li>
                               <li class="nav-item">
                                  <a href="blog-details.html" class="nav-link">Blog Details</a>
                               </li>
                            </ul>
                         </li>
                         <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact</a>
                         </li> -->
                      </ul>
                      <div class="others-option">
                         <div class="others-options">
                            <div class="option-item">
                               <i class="search-btn fa fa-search"></i>
                               <i class="close-btn fa fa-close"></i>
                               <div class="search-overlay search-popup">
                                  <div class='search-box'>
                                     <form class="search-form" action="{{route('SeachingSystem')}}" method="post">
                                        @csrf
                                        <input class="search-input" name="search" placeholder="Search" type="text">
                                        <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                                     </form>
                                  </div>
                               </div>
                            </div>
                         </div>
                          <a href="{{route('Donation')}}" class="donate">Donate Now</a> 
                      </div>
                   </div>
                </div>
             </nav>
          </div>
       </div>
    </div>
 </div>