@extends('layouts.admin')

@section('breadcrumb')
	<li>Messages</li>
@stop

@section('content')
	 <div class="mailbox row">
                        <div class="col-xs-12">
                            <div class="box box-solid">
                                <div class="box-body">
                                    <div class="row">
                                        @include('layouts._partials.validate')
                                        <div class="col-md-3 col-sm-4">

                                            <!-- BOXES are complex enough to move the .box-header around.
                                                 This is an example of having the box header within the box body -->
                                            <div class="box-header">
                                            
                                                <i class="fa fa-inbox"></i>
                                                <h3 class="box-title">Messages</h3>
                                            </div>
                                            <!-- compose message btn -->
                                            <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-pencil"></i> New Message</a>
                                            <!-- Navigation - folders-->
                                            <div style="margin-top: 15px;">
                                                <ul class="nav nav-pills nav-stacked">
                                                    <li class="header">Folders</li>
                                                    <li  ><a href="#"><i class="fa fa-inbox"></i> Inbox ({{ $messages->count() }})</a></li>
                                                    <li><a href="#"><i class="fa fa-pencil-square-o"></i> New Message</a></li>
                                                     
                                                </ul>
                                            </div>
                                        </div><!-- /.col (LEFT) -->
                                        <div class="col-md-9 col-sm-8">
                                            <div class="row pad">
                                                <div class="col-sm-6">
                                                    <label style="margin-right: 10px;">
                                                        <input type="checkbox" id="check-all"/>
                                                    </label>
                                                    <!-- Action button -->
                                                     

                                                </div>
                                                <div class="col-sm-6 search-form">
                                                    <form action="#" class="text-right">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control input-sm" placeholder="Search">
                                                            <div class="input-group-btn">
                                                                <button type="submit" name="q" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- /.row -->
                                            @if($messages->count() == 0)
                                            <div class="row" style="text-align:center;margin-top:50px;">No message</div>
                                            @else
                                            <div class="table-responsive">
                                                <!-- THE MESSAGES -->
                                                <table class="table table-mailbox">
                                                	@foreach($messages as $message)
                                                		<tr>
                                                         
                                                        <td class="name">{{ $message->name }}</a></td>
                                                        <td class="subject" width="450">
                                                         <a href="{{ URL::to('heavenadmin/messages/show/'.$message->id) }}">{{ substr($message->body,0,70).'[...]' }}</a>
                                                        </td>
                                                        <td class="time" >{{ $message->created_at->diffForHumans() }}</td>
                                                        <td><a href="{{ URL::to('heavenadmin/messages/reply/'.$message->id) }}" class="btn btn-primary btn-xs" s >Reply</a></td>
                                                        <td>
                                                             {{ Form::open(['url'=>'heavenadmin/messages/destroy/'.$message->id]) }}
                                                               {{ Form::submit('Delete',['class'=>'btn btn-danger btn-xs']) }}
                                                             {{ Form::close() }}
                                                        </td>
                                                              

                                                    </tr>
                                                	@endforeach
                                                    
                                                     
                                                     
                                                     
                                                </table>
                                            </div><!-- /.table-responsive -->
                                            @endif
                                        </div><!-- /.col (RIGHT) -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                                 
                            </div><!-- /.box -->
                        </div><!-- /.col (MAIN) -->
                    </div>
@stop