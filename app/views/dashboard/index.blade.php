@extends('layouts.admin')

@section('breadcrumb')
	<li>Dashboard</li>
@stop

@section('content')
	 
                    <h4 class="page-header">
                        Welcome Admin
                        <small>Manage your system and settings with you want.</small>
                    </h4>
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        {{ $messagecount }}
                                    </h3>
                                    <p>
                                        New Messages
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <a href="{{ URL::to('heavenadmin/messages') }}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                         {{ $userall }}
                                    </h3>
                                    <p>
                                        User Registrations
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <a href="{{ URL::to('heavenadmin/users') }}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                     Setting   
                                    </h3>
                                    <p>
                                    Setup our website
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-gears"></i>
                                </div>
                                <a href="{{ URL::to('heavenadmin/setting') }}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

          
@stop