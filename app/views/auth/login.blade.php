<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/font-awesome.min.css') }}
        {{ HTML::style('css/ionicons.min.css') }}
        {{ HTML::style('css/AdminLTE.css') }}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">
     
        <div class="form-box" id="login-box">
            <div class="row">
                 @include('layouts._partials.validate')
            </div>
           
            <div class="header">Sign In</div>
            {{ Form::open(['route'=>'auth-postLogin','method'=>'POST']) }}

                <div class="body bg-gray">
                    <div class="form-group">
                        
                        {{ Form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) }}
                    </div>
                    <div class="form-group">
                         
                        {{ Form::password('password',['class'=>'form-control','placeholder'=>'Password']) }}
                    </div>          
                     
                </div>
                <div class="footer">                                                               
                    {{ Form::submit('Sign in',['class'=>'btn bg-olive btn-block']) }}
                      
                    
                   
                    
                   
                </div>
           {{ Form::close() }}

            
        </div>


        {{ HTML::script('js/jquery-2.1.1.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/app.js') }}
        @yield('script')       

    </body>
</html>