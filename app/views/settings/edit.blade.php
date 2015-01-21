@extends('layouts.admin')

@section('breadcrumb')
	<li class="active">Settings</li>
@stop

@section('content')
	<div class="mailbox row">
                        <div class="col-lg-12">
                            <div class="box box-solid">
                                <div class="box-body">
                                    <div class="row" style="min-height:300px;">
                                       
                                        
                                        <div class="col-lg-8 col-lg-offset-2">
                                             
                                             
                                            
                                            
                                            <div class="table-responsive">
                                                <!-- THE MESSAGES -->
                                                {{ Form::open(['url'=>'heavenadmin/setting/update','method'=>'POST','class'=>'form-horizontal']) }}
                                                <table   class="table table-mailbox">

                                                	   @if(Session::has('errors'))
                                                        @include('layouts._partials.errors')
                                                       @endif
                                                		<tr>
                                                         
                                                        <td class="name" >Website Title</td>
                                                        <td width="1">:</td>
                                                        <td class="subject" width="200">{{ Form::text('website_title',$settings->website_title,['class'=>'form-control']) }}</td>
                                                    	</tr>
                                                    	<tr>
                                                         
                                                        <td class="name" >Website Metadescription</td>
                                                        <td width="1">:</td>
                                                        <td class="subject" width="200">{{ Form::text('website_description',$settings->website_description,['class'=>'form-control']) }}</td>
                                                    	</tr>
                                                    	<tr>
                                                         
                                                        <td class="name" >Website Metakeyword</td>
                                                        <td width="1">:</td>
                                                        <td class="subject" width="200">{{ Form::text('website_metakeyword',$settings->website_metakeyword,['class'=>'form-control']) }}</td>
                                                    	</tr>
                                                        <tr>
                                                         
                                                        <td class="name" >Website Email</td>
                                                        <td width="1">:</td>
                                                     <td class="subject" width="200">{{ Form::text('website_email',$settings->website_email,['class'=>'form-control']) }}</td>
                                                        </tr>
                                                        <tr>
                                                    	
                                                         
                                                        <td class="name" >Facebook URL</td>
                                                        <td width="1">:</td>
                                                        <td class="subject" width="200">{{ Form::text('facebook',$settings->facebook,['class'=>'form-control']) }}</td>
                                                    	</tr>
                                                    	<tr>
                                                         
                                                        <td class="name" >Twitter URL</td>
                                                        <td width="1">:</td>
                                                        <td class="subject" width="200">{{ Form::text('twitter',$settings->twitter,['class'=>'form-control']) }}</td>
                                                    	</tr>
                                                    	<tr>
                                                    	<td class="name" colspan="3" align="center" >
                                                         {{ Form::submit('Update',['class'=>'btn btn-primary']) }}   
                                                        </td>
                                                         
                                                    	</tr>
                                                    	
                                                         
                                                        
                                                     
                                                     
                                                </table>
                                                {{ Form::close() }}
                                            </div><!-- /.table-responsive -->
                                          
                                        </div><!-- /.col (RIGHT) -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                                 
                            </div><!-- /.box -->
                        </div><!-- /.col (MAIN) -->
                    </div>
@stop