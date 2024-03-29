@extends('backend.master')

@section('title','All Mail')
@section('content')

<div id="wrapper">

    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>All Mail</h2>
                    <a style="float:right" href="{{ route('MailSend') }}" class="btn btn-primary square-btn-adjust">Send Form</a>
                    <div class="row">

                </div>
            </div>


            <hr />


                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Mail
                        </div>
                        <div class="panel-body">

                            @include('backend.partial.msg')
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                   <thead>
                                        <tr>
                                            <th>SL.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Company</th>
                                            <th>Message</th>
                                            <th>Created At</th>
                                            <th width="17%;">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($mail as $key=>$mail)
                                            <tr class="odd gradeX">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $mail->name }}</td>
                                                <td>{{ $mail->email }}</td>
                                                <td>{{ $mail->phone_number }}</td>
                                                <td>{{ $mail->msg_subject }}</td>
                                                <td>{{ $mail->message }}</td>
                                               
                                                <td class="center">{{ $mail->created_at->format('d M Y') }}</td>
                                                <td style="text-align: center">
                                                 {{-- <button href="#" class="btn btn-success btn-sm" onclick="shows('{{$mail->id}}','{{@$mail->message}}')"><i class="fa fa-envelope"></i></button> --}}
                                                    {{-- <a href="{{route('MailSend')}}" class="btn btn-info btn-sm"> Replay</a> --}}
                                                   <!--  <a href="{{route('MailDelete',$mail->id)}}"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a> -->

                                                     <form id="delete-form-{{ $mail->id }}" action="{{route('MailDelete',$mail->id)}}" style="display: none;" method="get">
                                               
                                               
                                                   </form>
                                                    <button type="submit" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $mail->id }}').submit();
                                                    }else {
                                                    event.preventDefault();
                                                    }" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                                 
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

<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       
          <textarea class="form-control" name="message" id="message"></textarea>
          <input type="hidden" id="showid" name="">
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary colse" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



@endsection

 

 
