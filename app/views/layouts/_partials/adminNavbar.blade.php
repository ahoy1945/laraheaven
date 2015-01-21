 <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">{{ Message::messagescount()}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have {{ Message::messagescount()}} messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">

                                        @foreach(Message::messagesview() as $message)
                                              <li><!-- start message -->
                                              <div class="pull-left">
                                                  <i class="fa fa-user header fa-2x" style="padding:10px 0 0 10px;"></i>
                                              </div>
                                            <a href="{{ URL::to('heavenadmin/messages/show/'.$message->id) }}">
                                                <h4>
                                                   {{ $message->email }}
                                                    
                                                </h4>
                                                
                                                <p>{{ substr($message->body,0,35).'[...]' }}</p>                                               
                                            </a>
                                        </li><!-- end message -->

                                        @endforeach
                                      
                                       
                                    </ul>
                                </li>
                                 <p>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                             
                            
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>{{ Sentry::getUser()->first_name.' '.Sentry::getUser()->last_name }} <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                      
                                     {{ HTML::image(Sentry::getUser()->photo,'avatar') }}
                                    <p>
                                        {{ Sentry::getUser()->first_name.' '. Sentry::getUser()->last_name .' - '. Sentry::getUser()->skill }} 
                                         
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                
                                <!-- Menu Footer-->
                                <li >
                                        {{ HTML::link("heavenadmin/users/".Sentry::getUser()->id."/edit","Change Profile",['class'=>'btn btn-default btn-flat']) }}
                                    
                                </li>
                                <li >
                                        {{ HTML::link("heavenadmin/changepassword","Change Password",['class'=>'btn btn-default btn-flat']) }}
                                    
                                </li>
                                <li >
                                        <a href="{{ route('auth-getLogout') }}" class="btn btn-default btn-flat">Sign out</a>
                                    
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>