 <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            {{ HTML::image(Sentry::getUser()->photo,'avatar',['class'=>'img-circle']) }}
                        </div>
                        <div class="pull-left info">
                            <p>Hello, {{ Sentry::getUser()->first_name }}</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                     @if(Sentry::getUser()->hasPermission('admin'))
                        <li>
                            <a href="{{ route('admin-getDashboard') }}">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                       
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-group"></i> <span>Users</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('heavenadmin.users.index') }}"><i class="fa fa-angle-double-right"></i> All Users</a></li>
                                <li><a href="{{ route('heavenadmin.users.create') }}"><i class="fa fa-angle-double-right"></i> Add new user</a></li>
                                <li><a href="{{ route('skill-getIndex') }}"><i class="fa fa-angle-double-right"></i> Add Skill</a></li>
                                 
                            </ul>
                        </li>
                        @endif
                        
                        <li>
                            <a href="{{ URL::to('heavenadmin/messages') }}">
                                <i class="fa fa-envelope"></i> <span>Message</span>
                                
                            </a>
                        </li>
                         
                        @if(Sentry::getUser()->hasPermission('admin'))
                        <li>
                            <a href="{{ URL::to('heavenadmin/setting') }}">
                                <i class="fa fa-gears"></i> <span>Settings</span>
                                 
                            </a>
                        </li>
                        @endif
                        
                          
                         
                      
                    </ul>