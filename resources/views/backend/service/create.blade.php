@extends('backend/master')
@section('title','Service Create Page')
@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add Service</h2>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Service
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-md-12">
                                    @include('backend.partial.msg')

                                       <form role="form" method="post" action="{{ route('ServiceStore') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title" placeholder="Title" />

                                        </div>

                                        <div class="form-group">
                                            <label>Sub Title</label>
                                            <input class="form-control" name="short_title" placeholder="Sub Title" />

                                        </div>


                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control ckeditor" rows="3" name="description"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image"/>
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