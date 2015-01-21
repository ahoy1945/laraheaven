@extends('layouts.admin')

@section('breadcrumb')
	<li class="active">All Users</li>
@stop

@section('content')
	<div class="row">
		<div class="col-lg-12">
            @include('layouts._partials.validate')
            @foreach($users as $user)
            <div class="col-lg-4">
                <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h4 style="font-weight:bold;">
                                       {{ $user->first_name.' '.$user->last_name }}
                                    </h4>
                                    <p>
                                       {{ $user->skill }}
                                    </p>
                                    {{ Form::open(['url'=>'heavenadmin/users/'.$user->id,'method'=>'DELETE']) }}
                                        {{ Form::submit('Delete',['class'=>'btn btn-default btn-xs']) }}
                                    {{ Form::close() }}
                                    
                                </div>
                                <div class="icon">
                    {{ HTML::image($user->photo,'null',['class'=>'img-responsive img-circle','width'=>'110px']) }}                
                                </div>
                                <div class="small-box-footer">
                                   {{ $user->email }}
                                </div>
                             
                                    
                               
                            </div>
                </div>
            @endforeach
			
				<div class="col-lg-4">
				<div class="small-box bg-aqua">
                                <div class="inner " style="text-align:center;padding-top:24px;">
                                     
                                    <a href="{{ route('heavenadmin.users.create') }}" style="color:#ffffff;"><i class="fa fa-plus fa-4x"></i></a> 
                                </div>
                                  
                                <a href="{{ route('heavenadmin.users.create') }}" class="small-box-footer">
                                    Add new user
                                </a>
                            </div>
				</div>
		</div>
	</div>
@stop