@extends('layouts.admin')

@section('breadcrumb')
	<li><a href="{{ URL::to('heavenadmin/messages') }}">All Messages</a></li>
	<li class="active">{{ $messageuser->email }}</li>
@stop

@section('content')
	<div class="row">
		<div class="col-lg-12  ">
			<div class="box box-primary">
				<div class="row">
					<div class="col-lg-6 box-header">
						<h4 style="padding-left:10px;" class="box-title">Name : {{ $messageuser->name }}</h4>
						 
					</div>
					<div class="col-lg-6 box-header">
						<h4 style="padding-left:10px;" class="box-title">Email : {{ $messageuser->email }}</h4>
						 
					</div>
				</div>
				<br>
				<div class="row" style="min-height:300px;">
					<div class="col-lg-10">
						<h4 style="padding-left:10px;">Message <a href="{{ URL::to('heavenadmin/messages/reply/'.$messageuser->id) }}" class="btn btn-primary btn-xs">Reply</a></h4>
						<p style="padding-left:10px;">{{ $messageuser->body }}</p>
						 
					</div>
				 
				</div>
				 <div class="row clearfix" style="padding-left:25px;">
					<div class="col-lg-12">
						
					</div>
				</div>	
				   
			</div>
		</div>
	</div>
	
@stop