  @extends('fontend/master')
 @section('title', 'Service Details')

  @section('content')

  <style type="text/css">

  </style>

   <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3 title="About us"><img class="left_img" src="{{asset('front/img/banner/t-left-img.png') }}" alt=""><img class="right_img" src="{{asset('front/img/banner/t-right-img.png') }}" alt=""></h3>

            </div>
        </div>
    </section>


       <div class="page-title-area bg-18">
            <div class="container">
                <div class="page-title-content">
                    <h2>Service Details</h2>
                    <ul>
                        <li>
                            <a href="{{route('MainIndex')}}">
                                Home 
                            </a>
                        </li>

                        
                    </ul>
                </div>
            </div>
        </div>
    <!--================End Banner Area =================-->

    <!--================who we are Area =================-->
    <section class="who_we_are_area">
        <div class="container">
            <div class="welcome_title">
                <h3>{{$service_details->title}}</h3>
                <img src="{{(@$service_details->image)?url('upload/service/'.$service_details->image):''}}" alt="" style="text-align: center;margin-left: 188px"  height="400px" width="750px">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="who_we_left" style="padding: 20px">

                        {!! $service_details->description !!}
                    </div>
                </div>

            </div>
        </div>
    </section>


  
  @endsection  