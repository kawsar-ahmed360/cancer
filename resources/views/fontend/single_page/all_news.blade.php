@extends('fontend.master')


@section('title')
{{@$NewsPageSeo->meta_title}}
@endsection

@section('meta_section')

@foreach($news as $key => $newss)
	


@if(empty($newss->meta_title) && empty($newss->meta_des))

<meta name="description" content="{!!str_replace(' ','-',@$newss->title)!!}" />
<meta name="keywords" content="{!!str_replace(' ','-',@$newss->title)!!}" />

@elseif(empty($newss->meta_title))
<meta name="description" content="{!!str_replace(' ','-',@$newss->meta_des)!!}" />
<meta name="keywords" content="{!!str_replace(' ','-',@$newss->title)!!}" />

@elseif(empty($newss->meta_des))

<meta name="description" content="{!!str_replace(' ','-',@$newss->title)!!}" />
<meta name="keywords" content="{!!str_replace(' ','-',@$newss->meta_title)!!}" />
@else


<meta name="description" content="{!!str_replace(' ','-',@$newss->meta_des)!!}" />
<meta name="keywords" content="{!!str_replace(' ','-',@$newss->meta_title)!!}" />

@endif


@endforeach

{{-- <meta name="description" content="StudyPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," /> --}}
@endsection


@section('content')

<div class="page-title-area" style="background-image: url(fontend/img/page-banner/2.jpg);">
	<div class="container">
		<div class="page-title-content">
			<h2>All News</h2>
			<ul>
				<li>	<a href="index.html">
					Home
					<i class="fa fa-chevron-right"></i>
					</a>
				</li>
				<li>All News</li>
			</ul>
		</div>
	</div>
</div>
<section class="our-event-area two">
	<div class="container">
		<div class="row">

        @foreach ($news as $key=> $allnews)
            
  
			<div class="col-lg-6 col-md-6">
				<div class="single-event">
					<div class="row align-items-center">
						<div class="col-lg-12 col-xl-6 pr-0">
							<div class="event-img">
								<img style="width:280px;height:270px" src="{{(@$allnews->image)?url('upload/news/'.$allnews->image):''}}" alt="Event">
								<div class="shape shape-11">
									<img src="{{asset('fontend/img/shape/11.jpg')}}" alt="Shape">
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-6 pl-0">
							<div class="event-text">
								<h3>{{@$allnews->title}}</h3>
								<p style="text-align: justify">{{@$allnews->summery}}</p>
								<ul>
									
								
									<li>	<i class="flaticon-calendar"></i>
									 {{date('d M Y',strtotime($allnews->created_at))}}</li>

                                     <li style="margin-top:30px">	
                                        <i class="fa fa-hand-o-right"></i>
                                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/{{route('SingleNews',$allnews->slug)}}" data-width="" data-layout="box_count" data-action="like" data-size="small" data-share="false"></div>
                                    </li>
								</ul>	<a class="read-more" href="{{route('SingleNews',$allnews->slug)}}">
					Read More
					</a>
								<span>{{@$key+1}}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
	
            @endforeach

			<div class="col-lg-12">
				<div class="pagenavigation-area">
					<nav aria-label="Page navigation example text-center">
						<ul class="pagination">
						  <li>{{@$news->links()}}</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection