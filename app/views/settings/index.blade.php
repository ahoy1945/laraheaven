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
                                             
                                             
                                            @include('layouts._partials.validate')
                                            
                                            <div class="table-responsive">
                                                <!-- THE MESSAGES -->
                                                <table   class="table table-mailbox">
                                                	 
                                                		<tr>
                                                         
                                                        <td class="name" >Website Title</td>
                                                        <td width="1">:</td>
                                                        <td class="subject" width="200">{{ $settings->website_title }}</td>
                                                    	</tr>
                                                    	<tr>
                                                         
                                                        <td class="name" >Website Metadescription</td>
                                                        <td width="1">:</td>
                                                        <td class="subject" width="200">{{ $settings->website_description }}</td>
                                                    	</tr>
                                                    	<tr>
                                                         
                                                        <td class="name" >Website Metakeyword</td>
                                                        <td width="1">:</td>
                                                        <td class="subject" width="200">{{ $settings->website_metakeyword }}</td>
                                                    	</tr>
                                                        <tr>
                                                         
                                                        <td class="name" >Website Email</td>
                                                        <td width="1">:</td>
                                                        <td class="subject" width="200">{{ $settings->website_email }}</td>
                                                        </tr>
                                                    	<tr>
                                                         
                                                        <td class="name" >Facebook URL</td>
                                                        <td width="1">:</td>
                                                        <td class="subject" width="200">{{ $settings->facebook  }}</td>
                                                    	</tr>
                                                    	<tr>
                                                         
                                                        <td class="name" >Twitter URL</td>
                                                        <td width="1">:</td>
                                                        <td class="subject" width="200">{{ $settings->twitter  }}</td>
                                                    	</tr>
                                                    	<tr>
                                                    	<td class="name" colspan="3" align="center" ><a href="{{ URL::to('heavenadmin/setting/update') }}" class="btn btn-primary" style="color:#ffffff;">Update</a></td>
                                                         
                                                    	</tr>
                                                    	
                                                         
                                                        
                                                     
                                                     
                                                </table>
                                            </div><!-- /.table-responsive -->
                                          
                                        </div><!-- /.col (RIGHT) -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                                 
                            </div><!-- /.box -->
                        </div><!-- /.col (MAIN) -->
                    </div>
@stop