@extends('backend.master')

@section('title','All Gllary ')
@section('content')

    <div id="wrapper">

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>All Product</h2>
                        <a style="float:right" href="{{ route('ProductCreate') }}" class="btn btn-primary square-btn-adjust">Add Product</a>
                        <div class="row">

                        </div>
                    </div>


                    <hr />


                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                All Product
                            </div>
                            <div class="panel-body">

                                @include('backend.partial.msg')
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>SL.</th>
                                            <th>Category name</th>
                                            <th>Product Name</th>
                                            <th>Product Image</th>
                                            <!-- <th>Image</th> -->
                                            
                                            <th width="17%;">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($product as $key=>$pro)
                                            <tr class="odd gradeX">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{@$pro->product_name}}</td>
                                                <td>{{ $pro->product_category['category_name'] }}</td>

                                                
                                                 <td><img style="width: 100px" src="{{(@$pro->product_image)?url('upload/product_image/'.$pro->product_image):''}}"></td>
                                                <td>
                                                    <a href="{{route('ProductEdite',$pro->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{route('ProductDelete',$pro->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i> Delete</a>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach



                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>

            </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection