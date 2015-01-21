@extends('layouts.admin')

@section('breadcrumb')
	<li class="active"> Change password </li>
@stop

@section('content')

	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">

			<div class="box box-primary">
                                <div class="box-header">
                                @if($errors->any())
                                 @include('layouts._partials.errors')
                                @endif
                               
                                    <h3 class="box-title">Change Password</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                {{ Form::open(['','role'=>'form','method'=>'POST']) }}
                                	 
                                    <div class="box-body" style="min-height:400;">
                                         <div class="form-group">
                                         	<div class="col-lg-12">
                                         		{{ Form::label('Old Password') }}
                                         	{{ Form::password('old_password',['class'=>'form-control','placeholder'=>'Insert your old password']) }}
                                         	</div>
 
                                         	 
                                         </div>

                                        <div class="form-group">
                                            <div class="col-lg-12">
                                            	{{ Form::label('New Password') }}
                                            	{{ Form::password('password',['class'=>'form-control','placeholder'=>'Insert your new password']) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-12">
                                            	{{ Form::label('Retype new password') }}
                                            	{{ Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Retype your new password']) }}
                                            </div>
                                        </div>
                                    
                                         <div class="form-group">
                                         	<div class="col-lg-12">
                                    		<br>
                                    		<button type="submit" class="btn btn-primary">Submit</button>
                                    		</div>
                                        </div>
                                         <div class="row"></div>
                                    </div><!-- /.box-body -->

                                    
                                {{ Form::close() }}
                            </div><!-- /.box -->
		</div>
	</div>
@stop