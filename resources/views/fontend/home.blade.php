@extends('fontend/master')

@section('title')

{{@$home->meta_title}}
@endsection


@section('meta_section')
<meta name="keywords" content="{!!str_replace(' ','-',@$home_seo->meta_des)!!}" />
<meta name="description" content="{!!str_replace(' ','-',@$home_seo->meta_title)!!}" />

@endsection

@section('slider')

<section class="hero-slider-area">
    <div class="hero-slider owl-carousel owl-theme">

  @foreach($slide as $sli)
       <div class="hero-slider-item background" style="background-image: url({{url('upload/slider/'.$sli->image)}})">
          <!-- <img src="assets/img/slider/1.jpg"> -->
          <div class="d-table">
             <div class="d-table-cell">
                <div class="container">
                   <div class="hero-slider-text">
                      <!-- <span>Bringing Smiles</span> -->
                      <h1>{{@$sli->title}}</h1>
                      <p>{{@$sli->sub_title}}</p>
                      {{-- <div class="slider-button">
                         <a class="default-btn" href="#">
                         Read More
                         </a>
                      </div> --}}
                   </div>
                </div>
             </div>
          </div>
       </div>

      @endforeach
    </div>
    <div class="shape shape-11">
       <img src="{{asset('fontend/img/shape/11.png')}}" alt="">
    </div>
    <div class="shape shape-12">
       <img src="{{asset('fontend/img/shape/12.png')}}" alt="">
    </div>
 </section>

@endsection


@section('about')

<section class="about-area two">
    <div class="container">
       <div class="row align-items-center">
       
          <div class="col-lg-6">
             <div class="about-text">
                <span>About Us</span>
                <h2>{{@$About->title}}</h2>
                <p class="mb-15">{!!@$About->short!!}</p>
              
                <a class="default-btn" href="{{route('AboutSingle',$About->id)}}">More Details</a>
             </div>
          </div>

          <div class="col-lg-6">
             <div class="about-img">
                <img class="img-thumbnail" src="{{(@$About->image)?url('upload/about/'.$About->image):''}}" alt="About">
                <!-- <div class="videos-wraps">
                   <div class="video-wrap">
                      <a href="play-video.html" class="video-btn" data-ilb2-video='{"controls":"controls", "autoplay":false, "sources":[{"src":"assets/img/charity.mp4", "type":"video/mp4"}]}' data-imagelightbox="video">
                      <i class="flaticon-play-button"></i>
                      </a>
                   </div>
                </div> -->
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection


@section('all_pations')

<section class="active-campaing-area f7fafe-bg two pt-100">
    <div class="container">
       <div class="section-title">
          <!-- <span>Active Campaign</span> -->
          <h2>All Patient</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
       </div>
       
       <div class="campaing-wrap owl-carousel owl-theme">
        @foreach ($all_patient as $patient)
           
   
          <div class="single-campaing">
             <div class="campaing-img">
                <img src="{{(@$patient->image)?url('upload/all_patient/'.$patient->image):''}}" alt="">
             </div>
             <div class="campaing-text">
                
                <h3>{{@$patient->title}}</h3>
                <p>{{str_limit(@$patient->short_title,150)}}</p>
                <a class="read-more" href="{{route('SinglePatient',$patient->slug)}}">Read More</a>
             </div>
          </div>
     @endforeach
       

       </div>
    </div>
    <div class=" shape shape-1">
       <img src="{{asset('fontend/img/shape/1.png')}}" alt="Shape">
    </div>
 </section>


@endsection


@section('Oncology_Consultant')
<section class="our-team-area pb-70">
    <div class="container">
       <div class="section-title">
          <!-- <span>Team</span> -->
          <h2> Oncology Consultant</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
       </div>
       <div class="row">


         @foreach ($consu as $co)
            


          <div class="col-lg-3 col-sm-6 col-md-6">
             <div class="single-team">
                <img src="{{(@$co->image)?url('upload/consultnt/'.$co->image):''}}" alt="Team">
                <div class="team-text">
                   <h3>{{@$co->name}}</h3>
                   <p>{{@$co->short_title}}</p>
                   
                </div>
             </div>
          </div>

          @endforeach

       </div>
    </div>
 </section>

@endsection

@section('donation')
<section class="help-area two">
    <div class="container">
       <div class="help-title">
          <h2>Some Good Causes</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
           <a class="default-btn" href="{{route('Donation')}}">Donate Now</a> 
          <!-- <a class="default-btn join" href="#">Join Now</a> -->
       </div>
    </div>
    <div class="container">
       <div class="counter-wrap">
          <div class="row">
             <div class="col-lg-3 col-sm-6 col-md-3">
                <div class="single-conuter">
                   <span class="odometer" data-count="{{@$counter->total_donation_count}}">00</span>
                   <p>{{@$counter->total_donation}}</p>
                </div>
             </div>
             <div class="col-lg-3 col-sm-6 col-md-3">
                <div class="single-conuter">
                   <span class="odometer" data-count="{{@$counter->total_project_count}}">00</span>
                   <p>{{@$counter->total_project}}</p>
                </div>
             </div>
             <div class="col-lg-3 col-sm-6 col-md-3">
                <div class="single-conuter">
                   <span class="odometer" data-count="{{@$counter->total_volunteers_count}}">00</span>
                   <p>{{@$counter->total_volunteers}}</p>
                </div>
             </div>
             <div class="col-lg-3 col-sm-6 col-md-3">
                <div class="single-conuter">
                   <span class="odometer" data-count="{{@$counter->total_Projects_two_count}}">00</span>
                   <p>{{@$counter->total_Projects_two}}</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection

@section('new_event')
<section class="latest-news-area">
    <div class="container">
       <div class="section-title">
          <!-- <span> News & Events</span> -->
          <h2>News & Events</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p> -->
       </div>
       <div class="row">
         @foreach ($news as $ne)
            

          <div class="col-lg-4 col-md-6">
             <div class="single-news">
                <div class="news-img">
                   <a href="{{route('SingleNews',$ne->slug)}}">
                   <img style="height:289px" src="{{(@$ne->image)?url('upload/news/'.$ne->image):''}}" alt="News">
                   </a>
                   <div class="date">
                      <span>{{date('d M',strtotime($ne->created_at))}}</span>
                   </div>

                   <div class="rig" style="position: absolute;
                   bottom: 0;
                   right: 0;
                   margin-top:20px;
                   color: #fff;
                   padding: 5px 20px;">
                      <div style="margin-top:10px" class="fb-like" data-href="https://developers.facebook.com/docs/plugins/{{route('SingleNews',$ne->slug)}}" data-width="" data-layout="box_count" data-action="like" data-size="small" data-share="false"></div>
                  </div>
                </div>
                <div class="news-text">
                   <h3>
                      <a href="{{route('SingleNews',$ne->slug)}}">{{@$ne->title}}</a>
                   </h3>
                   <p>{{@$ne->summery}}..........</p>
                   <a class="read-more" href="blog-details.html">
                   Read More
                   </a>
                </div>
             </div>
          </div>

          @endforeach    
       </div>
    </div>
 </section>
@endsection


@section('gallery')
<div class="project-area f7fafe-bg ">
    <div class="container">
       <div class="section-title">
          <!-- <span>Team</span> -->
          <h2> Our Gallery</h2>
       </div>
       
       <div id="Container" class="row">
      
    @foreach ($gallery as $gall)
       
   

          <div class="col-lg-4 col-md-4 mix gallery-item 1 3">
             <div class="single-project" >
                <img style="width:350px" src="{{(@$gall->gallery_image)?url('upload/gallery/'.$gall->gallery_image):''}}" alt="">
                <div class="project-text">
                   <a href="{{(@$gall->gallery_image)?url('upload/gallery/'.$gall->gallery_image):''}}" >
                   <i class="fa fa-eye"></i>
                   </a>
                </div>
             </div>
          </div>

         @endforeach
       </div>
    </div>
 </div>
@endsection



@section('support')
<section class="partner-area pb-100">
    <div class="container">
       <div class="section-title">
          <!-- <span>Our Fundraising</span> -->
          <h2>Our Supported </h2>
         
       </div>
       <div class="partner-wrap owl-carousel owl-theme">

      @foreach ($supported as $supp)
         
     
          <div class="single-logo">
             <img src="{{(@$supp->image)?url('upload/supported/'.$supp->image):''}}" alt="Partner">
          </div>

    @endforeach

        
       </div>
    </div>
 </section>
@endsection

