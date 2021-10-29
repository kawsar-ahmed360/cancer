@extends('fontend.master')



@section('meta_section')


	


@if(empty($single_news->meta_title) && empty($single_news->meta_des))

<meta name="description" content="{!!str_replace(' ','-',@$single_news->title)!!}" />
<meta name="keywords" content="{!!str_replace(' ','-',@$single_news->title)!!}" />

@elseif(empty($single_news->meta_title))
<meta name="description" content="{!!str_replace(' ','-',@$single_news->meta_des)!!}" />
<meta name="keywords" content="{!!str_replace(' ','-',@$single_news->title)!!}" />

@elseif(empty($single_news->meta_des))

<meta name="description" content="{!!str_replace(' ','-',@$single_news->title)!!}" />
<meta name="keywords" content="{!!str_replace(' ','-',@$single_news->meta_title)!!}" />
@else


<meta name="description" content="{!!str_replace(' ','-',@$single_news->meta_des)!!}" />
<meta name="keywords" content="{!!str_replace(' ','-',@$single_news->meta_title)!!}" />

@endif


@endsection

@section('content')




<div class="page-title-area" style="background-image: url(fontend/img/page-banner/2.jpg);">
    <div class="container">
        <div class="page-title-content">
         <h2>News Details</h2>
    <ul>
       <li>
    <a href="{{route('MainIndex')}}">Home <i class="fa fa-chevron-right"></i></a>
     </li>
    <li>{{@$single_news->title}}</li>
  </ul>
 </div>
</div>
</div>



<section class="blog-details-area ptb-100">
 <div class="container">
     <div class="row">
       <div class="col-lg-8 col-md-12">
         <div class="blog-details-desc">
           <div class="article-image">
             <img src="{{(@$single_news->image)?url('upload/news/'.$single_news->image):''}}" alt="image">
         </div>

    <div class="article-content">
      <div class="entry-meta">
        <ul>
          <li><span>Posted On:</span> <a href="#"> {{date('M d, Y',strtotime($single_news->created_at))}}</a></li>
       </ul>
    </div>

 
 
    <p>{!!@$single_news->description!!}</p>


 </div>

    <div class="article-footer two">
         <div class="article-tags">
            <span><i class="fa fa-share"></i></span>
            <a href="#">Share</a>
        </div>
    <div class="article-share">

    <ul class="social">
     



    <li>
         <div class="sharethis-inline-share-buttons"></div>
    </li>

  </ul>
 </div>
</div>

<div class="mini-title">
    <h3>Comments</h3>
</div>


<div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="5"></div>

<!-- Blog Comments -->

<!-- End Blog Comments -->



<!-- End Blog Comments -->

<hr>


      </div>
</div>




    <div class="col-lg-4 col-md-12">
    <aside class="widget-area" id="secondary">


    <section class="widget widget_zovio_posts_thumb">
    <h3 class="widget-title">Popular Posts</h3>

    @foreach ($popular_post as $post)
        

    <article class="item">
    <a href="{{route('SingleNews',$post->slug)}}" class="thumb">
    <span class="fullimage cover" style="background-image: url({{url('upload/news/'.$post->image)}})"></span>
    </a>
    <div class="info">
    <time datetime="2019-06-30">{{date('M d, Y',strtotime($post->created_at))}}</time>
    <h4 class="title usmall">
    <a href="{{route('SingleNews',$post->slug)}}">{{@$post->title}}</a>
    </h4>
    </div>
    <div class="clear"></div>
    </article>

    @endforeach

    </section>


    <!--<section class="widget widget_categories">-->
    <!--<h3 class="widget-title">Archives</h3>-->
    <!--<ul>-->
    <!--<li><a href="#">May 2019</a></li>-->
    <!--<li><a href="#">April 2019</a></li>-->
    <!--<li><a href="#">June 2019</a></li>-->
    <!--<li><a href="#">julay 2019</a></li>-->
    <!--</ul>-->
    <!--</section>-->


    </aside>
    </div>
    </div>
    </div>
    </section>


@endsection

@section('head')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=2788585188024695&autoLogAppEvents=1" nonce="HAduwtrD">
</script>


 <meta property="og:title" content="{{@$single_news->title}}" />
  <meta property="og:url" content="https://drsabina.com" />
  <meta property="og:image" content="{{(@$single_news->image)?url('upload/news/'.$single_news->image):''}}" />
  <meta property="og:description" content="{!!@$single_news->description!!}" />
  <meta property="og:site_name" content="ShareThis" />

@endsection