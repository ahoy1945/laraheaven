<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Heaven Admin Panel </title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
         
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/font-awesome.min.css') }}
        {{ HTML::style('css/ionicons.min.css') }}
        {{ HTML::style('css/AdminLTE.css') }}
        @yield('css')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Heaven
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
               @include('layouts._partials.adminNavbar')
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                   @include('layouts._partials.adminSidebar')
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                     
                    <ol class="breadcrumb" style="float:left !important;">
                        @yield('breadcrumb')
                    </ol>
                    
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        
        {{ HTML::script('js/jquery-2.1.1.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/app.js') }}
        @yield('script')
    </body>
</html>
