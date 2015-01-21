@extends('layouts.admin')

@section('breadcrumb')
	<li><a href="URL::to('heavenadmin/messages')">All Messages</a></li>
@stop

@section('content')
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="box box-primary">
				<div class="row">
					<div class="box-header col-lg-8">
					<h3 class="box-title">Reply Message</h3>
				</div>
				</div>
				  <div class="col-lg-8 box box-primary">
				  <br>
				{{ Form::open(['url'=>'heavenadmin/messages/reply','role'=>'form','method'=>'POST']) }}
				 
					<div class="input-group">
					  <span class="input-group-addon">To</span>
					  {{ Form::text('to',$message->email,['class'=>'form-control']) }}
					 
					  
					</div>
					
		
					 <br>
					<div class="input-group">
					  <span class="input-group-addon">Subject</span>
					  {{ Form::text('subject',null,['class'=>'form-control']) }}
					 
					  
					</div>
					<br>
					<div class="input-group">
					<span class="input-group-addon">Message</span>
						{{ Form::textarea('body',null,['class'=>'form-control']) }}
					 
					</div>
					<br>
					<div class="modal-footer clearfix">

       

                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-envelope"></i> Send Message</button>
                        </div>
					

				{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
	
@stop