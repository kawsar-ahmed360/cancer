@extends('backend.master')

@section('title','Dashboard')

@push('css')
<style>
    .text-muted a{
       color : #4a4007
    }
</style>
@endpush

@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Dashboard</h2>


                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">Menu</p>
                            <p class="text-muted"><a style="text-decoration:none;" href="">All Menu</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">Page</p>
                            <p class="text-muted"><a style="text-decoration:none;" href="">All Page</a></p>
                        </div>
                    </div>
                </div>
              
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-sliders"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">All Slider</p>
                            <p class="text-muted"><a style="text-decoration:none;" href="{{route('SliderIndex')}}">All Slider</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-envelope"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text"> Message</p>
                            <p class="text-muted"><a style="text-decoration:none;" href="{{route('MailIndex')}}">All Message</a></p>
                        </div>
                    </div>
                </div>

                
                {{--<div class="col-md-3 col-sm-6 col-xs-6">--}}
                    {{--<div class="panel panel-back noti-box">--}}
                {{--<span class="icon-box bg-color-brown set-icon">--}}
                    {{--<i class="fa fa-qrcode"></i>--}}
                {{--</span>--}}
                        {{--<div class="text-box" >--}}
                            {{--<p class="main-text">Initative</p>--}}
                            {{--<p class="text-muted"><a style="text-decoration:none;" href="{{ route('activity.index') }}">Initative</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-6 col-xs-6">--}}
                    {{--<div class="panel panel-back noti-box">--}}
                {{--<span class="icon-box bg-color-red set-icon">--}}
                    {{--<i class="fa fa-file-text-o"></i>--}}
                {{--</span>--}}
                        {{--<div class="text-box" >--}}
                            {{--<p class="main-text">Company</p>--}}
                            {{--<p class="text-muted"><a style="text-decoration:none;" href="{{ route('company.index') }}">Management</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

              

                {{--<div class="col-md-3 col-sm-6 col-xs-6">--}}
                    {{--<div class="panel panel-back noti-box">--}}
                {{--<span class="icon-box bg-color-red set-icon">--}}
                    {{--<i class="fa fa-video-camera"></i>--}}
                {{--</span>--}}
                        {{--<div class="text-box" >--}}
                            {{--<p class="main-text">Gallery</p>--}}
                            {{--<p class="text-muted"><a style="text-decoration:none;" href="{{ route('video.index') }}">Video</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

             


            </div>
            <!-- /. ROW  -->
            <hr />



            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
@endsection

@push('scripts')

@endpush