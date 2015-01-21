@extends('layouts.admin')

@section('breadcrumb')
	<li><a href="{{ URL::to('heavenadmin/users') }}">All Users</a></li>
	<li class="active">Add Skill</li>
@stop
@section('content')
 <div class="mailbox row">
                        <div class="col-xs-12 col-lg-12">
                            <div class="box box-solid">
                                <div class="box-body">
                                    <div class="row">
                                        @include('layouts._partials.validate')
                                        <div class="col-md-3 col-sm-4">

                                            <!-- BOXES are complex enough to move the .box-header around.
                                                 This is an example of having the box header within the box body -->
                                            <div class="box-header">
                                            
                                                <i class="fa fa-rocket"></i>
                                                <h3 class="box-title">All Skills</h3>
                                            </div>
                                            <!-- compose message btn -->
                                           
                                        </div><!-- /.col (LEFT) -->
                                      
                                        
                                         </div>
                                         <div class="row">
                                            <div class="table-responsive col-lg-6 col-lg-offset-3">
                                                <!-- THE MESSAGES -->
                                                <table class="table table-mailbox">
                                                    @if(Session::has('errors'))
                                                        @include('layouts._partials.errors')
                                                    @endif
                                                    {{ Form::open(['route'=>'skill-postCreate','method'=>'POST']) }}
                                                    <tr>
                                                        <td width="500"> {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Create new skill']) }}</td>
                                                        <td> {{ Form::submit('Create',['class'=>'btn btn-primary btn-xs','style'=>'margin-top:5px;']) }}</td>

                                                    </tr>
                                                    {{ Form::close() }}
                                                	@foreach($skills as $skill)
                                                		<tr>
                                                         
                                                        <td  width="500">{{ $skill->name }}</a></td>
                                                         
                                                        <td>
                                                             {{ Form::open(['url'=>'heavenadmin/messages/destroy/'.$skill->id]) }}
                                                               {{ Form::submit('Delete',['class'=>'btn btn-danger btn-xs']) }}
                                                             {{ Form::close() }}
                                                        </td>
                                                              

                                                    </tr>
                                                	@endforeach
                                                     
                                                </table>
                                            </div><!-- /.table-responsive -->
                                            </div>

                    </div>
@stop