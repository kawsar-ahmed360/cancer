@extends('backend/master')
@section('title','Service Edite Page')
@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edite Service</h2>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Edite Service
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-md-12">
                                    @include('backend.partial.msg')

                                       <form role="form" method="post" action="{{ route('ServiceUpdate') }}" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" value="{{@$edite->id}}" name="EditeId">

                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title" value="{{@$edite->title}}" placeholder="Title" />

                                        </div>

                                        <div class="form-group">
                                            <label>Sub Title</label>
                                            <input class="form-control" name="sub_title" value="{{@$edite->sub_title}}" placeholder="Sub Title" />

                                        </div>


                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control ckeditor" rows="3" name="description">{{@$edite->description}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Old Image</label> <br>
                                            <img src="{{(@$edite->image)?url('upload/service/'.$edite->image):''}}" width="100px" height="100px">
                                        </div>


                                        <div class="form-group">
                                            <label>Link</label>
                                            <input class="form-control" name="sub_title" placeholder="Sub Title" />

                                        </div>


                                        <a href="{{ route('ServiceIndex') }}" class="btn btn-danger">Back</a>
                                        <button type="submit" class="btn btn-primary">Save</button>

                                    </form>
                                    <br />
                              




                            </div>
                        </div>
                    </div>
                    <!-- End Form Elements -->
                </div>
            </div>
            <!-- /. ROW  -->

            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
@endsection