@extends('fontend.master')

@section('title')
{{@$page->title}}
@endsection

@section('content')

<div class="page-title-area" style="background-image: url(fontend/img/page-banner/2.jpg);">
    <div class="container">
        <div class="page-title-content">
         <h2>Page Details</h2>
    <ul>
       <li>
    <a href="{{route('MainIndex')}}">Home <i class="fa fa-chevron-right"></i></a>
     </li>
    <li>{{@$page->title}}</li>
  </ul>
 </div>
</div>
</div>



<section class="blog-details-area ptb-100">
 <div class="container">
     <div class="row">
        <h2>=> &nbsp;&nbsp;{{@$page->title}}:</h2>
       <div class="col-lg-12 col-md-12">
     
         <div class="blog-details-desc">
             
           <div class="article-image">
             <img style="width:400px;display:block;margin:0 auto;" src="{{(@$page->image)?url('upload/page/'.$page->image):''}}">
         </div>

    <div class="article-content">
    

 
 
    <p>{!!@$page->description!!}</p>


 </div>






      </div>
</div>




  
    </div>
    </div>
    </section>


@endsection
