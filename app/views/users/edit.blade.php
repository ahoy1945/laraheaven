@extends('layouts.admin')

@section('css')
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop


@section('breadcrumb')
	<li><a href="{{ route('heavenadmin.users.index') }}">All Users</a></li>
	<li class="active">Update Profile</li>
@stop

@section('content')

	<div class="row">
        <div class="col-lg-10 col-lg-offset-1">

            <div class="box box-primary">
                                <div class="box-header">
                                @if($errors->any())
                                 @include('layouts._partials.errors')
                                @endif
                               
                                    <h3 class="box-title">Update Profile</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                {{ Form::model($user,['method'=>'PATCH','route'=>['heavenadmin.users.update',$user->id]]) }}
                                
                                    <div class="box-body">
                                         <div class="form-group">
                                            <div class="col-lg-6">
                                                {{ Form::label('First Name') }}
                                            {{ Form::text('first_name',null,['class'=>'form-control','placeholder'=>'Insert your first name']) }}
                                            </div>
                                            <div class="col-lg-6">
                                                {{ Form::label('Last Name') }}
                                            {{ Form::text('last_name',null,['class'=>'form-control','placeholder'=>'Insert your last name']) }}
                                            </div>
                                             
                                         </div>

                                         
                                       
                                         
                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                {{ Form::label('Skill') }}
                                                <select name="skill" class="form-control">
                                                    <option value="">-</option>
                                                     
                                                    @foreach($skills as $skill)
                                                     <option value="{{ $skill->name }}">{{ $skill->name }}</option>
                                                    @endforeach
                                                   
                                                </select>
                                            
                                                
                                            </div>

                                        </div>
                                        <div class="row"></div>
                                         

                                        <div class="form-group">
                                            <div class="col-lg-12">
                                             
                                            <hr style="border:#333 1px solid;">
                                                <label for="Social account">Social account <em>(Optional)</em></label>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-4">
                                                {{ Form::label('Facebook') }}
                                                {{ Form::text('facebook',null,['class'=>'form-control','placeholder'=>'Your facebook url']) }}
                                            </div>
                                            <div class="col-lg-4">
                                                {{ Form::label('Twitter') }}
                                                {{ Form::text('twitter',null,['class'=>'form-control','placeholder'=>'Your twitter url']) }}
                                            </div>
                                            <div class="col-lg-4">
                                                {{ Form::label('Github') }}
                                                {{ Form::text('github',null,['class'=>'form-control','placeholder'=>'Your github url']) }}
                                            </div>
                                        </div>
                                         
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <div class="col-lg-12">
                                        <br>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        
                                    </div>
                                {{ Form::close() }}
                            </div><!-- /.box -->
        </div>
    </div>
@stop

 