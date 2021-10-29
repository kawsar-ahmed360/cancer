<section class="footer-top-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-sm-6 col-md-6">
            <div class="single-widget">
               <a href="index.html">
               <img src="{{(@$logo->logo)?url('upload/logo/'.$logo->logo):''}}" alt="">
               </a>
               <p>{!!@$logo->description!!}</p>
               <ul class="social-icon">
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
         
         <div class="col-lg-4 col-sm-6 col-md-6">
            <div class="single-widget">
               <h3>Quick Link</h3>
               

               @foreach($quick_link as $main_menu)
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
               <ul>
                  <li>
                     <a href="@if($main_menu->page_type =='url') {{$main_menu->external_link}} @else {{route('page.details',$main_menu->slug)}} @endif">{{$main_menu->menu_name}}</a>
                  </li>
                  {{-- <li>
                     <a href="#">Contact</a>
                  </li>
                  <li>
                     <a href="#">Help Center</a>
                  </li>
                  <li>
                     <a href="#">Blog</a>
                  </li>
                  <li>
                     <a href="#">Press Center</a>
                  </li>
                  <li>
                     <a href="#">Careers</a>
                  </li> --}}
                  
               </ul>

               @endforeach
            </div>
         </div>
         <div class="col-lg-4 col-sm-6 col-md-6">
            <div class="single-widget">
               <h3>Address</h3>
               <ul class="address">
                  <li>
                     <i class="fa fa-map-marker"></i>
                     {{@$contact->office_address}}
                  </li>
                  <li>
                     <i class="fa fa-envelope"></i>
                     <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#b8d6d1ced7f896dbd7d5"><span class="__cf_email__" data-cfemail="{{@$contact->email_one}}">[{{@$contact->email_one}}]</span></a>
                  </li>
                  <li>
                     <i class="fa fa-phone"></i>
                     <a href="tel:+(321)-948-754">{{@$contact->mobile_one}}</a>
                  </li>
                  <li>
                     <i class="fa fa-envelope"></i>
                     <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#7f161119103f18121e1613511c1012"><span class="__cf_email__" data-cfemail="98f0fdf4f4f7d8f1f6fef7b6fbf7f5">[{{@$contact->email_two}}]</span></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>


<footer class="footer-bottom-area">
    <div class="container">
       <div class="row">
          <div class="col-lg-6 col-md-6">
             <div>
                <p>Copyright {{date('Y')}}© Cancer . All Rights Reserved</p>
             </div>
          </div>
          <div class="col-lg-6 col-md-6">
             <ul class="terms-conditions">
                <p> <a href="https://esoft.com.bd/" target="blank">Web Design Company</a> e-Soft</p>
             </ul>
          </div>
       </div>
    </div>
 </footer>