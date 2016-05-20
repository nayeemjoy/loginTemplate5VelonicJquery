@extends('layouts.default')
@section('content')
    @include('includes.alert')
    <div class="container-fluid">
        <!-- <div class="page-title"> 
            <h3 class="title">{{$title}}</h3>
            <a class="btn btn-danger deleteBtn pull-right">Create Manager</a> 
        </div> -->
        <!-- <form action="/file-upload" class="dropzone dz-clickable" id="my-awesome-dropzone"><div class="dz-default dz-message"><span>Drop files here to upload</span></div></form> -->
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading clear-fix">
                        <h3 class="panel-title pull-left">{{$title}}</h3>
                        <span class="pull-right">
                            <a href="{{route('passportmaking.create')}}" class="btn btn-primary">Create Passport Making</a>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Passport No</th>
                                            <th>Broker Name</th>
                                            <th>Amount Of Money</th>
                                            <th>Status</th>
                                           <!--  <th>Gamcca</th>
                                            <th>Enzaz</th>
                                            <th>Fit Receive</th>
                                            <th>Police Paper</th>
                                            <th>Embassy</th>
                                            <th>Fingering</th>
                                            <th>Manpower</th>
                                            <th>Ticket</th> -->
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                             
                                    <tbody>
                                        @foreach($passport_makings as $passport_making)
                                            <tr>

                                                <td>{{$passport_making->id}}</td>
                                                <td>{{$passport_making->name}}</td>
                                                <td>{{$passport_making->passport_no}}</td>
                                                <td>{{$passport_making->broker_name}}</td>
                                                <td>{{$passport_making->amount_of_money}}</td>
                                                 <td>
                                                    @if($passport_making->isComplete)
                                                        <p style="color:green;">{{'Complete'}}</p>
                                                    @else
                                                        <p style="color:red;">{{'Incomplete'}}</p>
                                                    @endif
                                                </td>
                                                
                                                <!-- <td>
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </td>
                                                <td>
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </td>
                                                <td>
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </td>
                                                <td>
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </td>
                                                <td>
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </td>
                                                <td>
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </td>
                                                <td>
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </td>
                                                <td>
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </td>  -->

                                                <!-- <td>Description</td> -->
                                                <!-- {{route('passportmaking.edit',$passport_making->id)}} -->
                                                <td class="actions">
                                                    <a href="#" class="btn btn-info editPassportBtn" data-toggle="modal" data-target="#editPassport" deleteId="{{$passport_making->id}}">Edit</a>
                                                    <a href="#" class="btn btn-danger deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{{ $passport_making->id }}">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div> <!-- End Row -->

        

    </div>
    <div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>
                <div class="modal-body">
                    Are you sure to delete?
                </div>
                <div class="modal-footer">
                    {!! Form::open(array('route' => array('passportmaking.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    {!! Form::submit('Yes, Delete', array('class' => 'btn btn-success')) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="editPassport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close passport-modal-close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Passport Making</h4>
                </div>
                <div class="modal-body passport-making-modal-body">
                    
                </div>
                <!-- <div class="modal-footer">
                    {!! Form::open(array('route' => array('passportmaking.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    {!! Form::submit('Yes, Delete', array('class' => 'btn btn-success')) !!}
                    {!! Form::close() !!}
                </div> -->
            </div>
        </div>
    </div>
@stop

@section('script')
    
    <script src="{{asset('js/dropzone.js')}}"></script>
    <script src="{{asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/datatables/dataTables.bootstrap.js')}}"></script>



    <script type="text/javascript">
        var baseUrl = '{{asset('/')}}';
        $(document).ready(function() {
            Dropzone.autoDiscover = false;
            $('#datatable').dataTable();
            $(document).on("click", ".deleteBtn", function() {
                var deleteId = $(this).attr('deleteId');
                var url = "<?php echo URL::route('passportmaking.delete',false); ?>";
                $(".deleteForm").attr("action", url+'/'+deleteId);
            });

            $(document).on("click", ".editPassportBtn", function() {
                var deleteId = $(this).attr('deleteId');
                // console.log(deleteId);
                $.ajax({
                    url: baseUrl+"admin/passportmaking/edit/"+deleteId, 
                    success: function(response){
                        var modal = $('.passport-making-modal-body');
                        modal.html('');
                        modal.append(response);

                        $('#medical').dropzone({ 
                            url: "{{route('test')}}",
                            paramName: 'medical_test_file',
                            maxFilesize : 1,
                            uploadMultiple : false,
                            success: function(file, response){
                                console.log(response.fileName);
                                $('#medical_test_file_upload').val(response.fileName);
                            }
                        });
                        $('#enzaz_file').dropzone({ 
                            url: "{{route('test')}}",
                            paramName: 'medical_test_file',
                            maxFilesize : 1,
                            uploadMultiple : false,
                            success: function(file, response){
                                console.log(response.fileName);
                                $('#enzaz_file_upload').val(response.fileName);
                            }
                        });

                        $('#fit_receive_file').dropzone({ 
                            url: "{{route('test')}}",
                            paramName: 'medical_test_file',
                            maxFilesize : 1,
                            uploadMultiple : false,
                            success: function(file, response){
                                console.log(response.fileName);
                                $('#fit_receive_file_upload').val(response.fileName);
                            }
                        });

                         $('#embassy_file').dropzone({ 
                            url: "{{route('test')}}",
                            paramName: 'medical_test_file',
                            maxFilesize : 1,
                            uploadMultiple : false,
                            success: function(file, response){
                                console.log(response.fileName);
                                $('#embassy_file_upload').val(response.fileName);
                            }
                        });
                         
                    
                    },
                    error: function(errorResponse){
                        console.log('error on edit url');
                    }
                });
            });
            $('.passport-modal-close').click(function(){
                location.reload();
            });
            $('#editPassport').on('submit', '.form-horizontal', function(){
                var value = $(this).serializeArray();
                // $(this).parent();
                console.log(value);
                var span = $(this).parent().find('.error');
                $.ajax({
                    url: $(this).attr('action'), 
                    data : value,
                    method : 'PUT',
                    dataType : 'json',
                    span : span,
                    success: function(response){
                        // var span = this.form.parent().find('.error');
                        // console.log(response);
                        // return ;
                        var message = response.data.message;
                        var success = '<div class="alert alert-success alert-dismissable fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+message+'</div>'
                        this.span.html('');
                        this.span.append(success);
                        // console.log(span);
                    },
                    error: function(errorResponse){
                        // console.log('error on edit url');
                        // var span = $(this).parent().find('.error');
                        var message = "";
                        var messages = jQuery.parseJSON(errorResponse.responseText);
                        if(messages.error.http_status == 400){
                             $.each(messages.error.message, function(i, item) {
                                message += item+"<br>";
                            })
                        }
                        else
                        {
                            message = messages.error.message;
                        }
                       
                        var error = '<div class="alert alert-danger alert-dismissable fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+message+'</div>';
                        this.span.html('');
                        this.span.append(error);
                    }
                });
                // console.log(value);
                return false;
            });
            
           // Dropzone.options.medical = {
           //    paramName: "medical_test_file", // The name that will be used to transfer the file
           //    maxFilesize: 2, // MB
           //    uploadMultiple : true,
           //    accept: function(file, done) {
           //      console.log('accept');
           //    },
           //    init: function() {
           //      this.on("addedfile", function(file) {
           //          console.log('File Name',file.name);
           //      });
           //    }
           //  };
        });
        

    </script>
@stop