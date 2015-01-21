<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="description" content="{{ $settings->website_description }}">
	<meta name="keywords" content="{{ $settings->website_metakeyword }}">
	<title>{{ $settings->title }}</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/animate.css') }}
	{{ HTML::style('css/font-awesome.min.css') }}
	{{ HTML::style('css/normalize.css') }}
	{{ HTML::style('css/magnific-popup.css') }}
	{{ HTML::style('css/custom.css') }}
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</head>
<body>
	 
	<div id="spinner"></div>
<header id="header" class="container-fluid myheader " >
	<div class="row">
		

 	<nav class="navbar navbar-default " role="navigation"  >
   
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
 	 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="menu-bar" href="#header">Home</a></li>
        <li><a class="menu-bar" href="#section-about">About</a></li>
        <li><a class="menu-bar" href="#section-services">Services</a></li>
         <li><a class="menu-bar" href="#section-portpolio">Portpolio</a></li>
        <li><a class="menu-bar" href="#section-team">Team</a></li>
        <li><a class="menu-bar"href="#section-contactus">Contact</a></li>
         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


		<div class="row myheader-content center-block"  >
		 	  
			<img src="img/logo/heavenbwnotext.png" class="img-responsive mylogo center-block">
				 
			<h3 style="margin-top: -25px;" class="logo-caption night-regular">heaven</h3>
		 
			

			<div class="cycle-slideshow" style="color: #ffffff; " 
    
    data-cycle-timeout="5000"
    data-cycle-slides="> div"
    >
	    <div  style="width:100%; margin: 0 auto;"  >
	        <p class="slider-text">success for the future
	    </div>
	    <div   style="width:100%; margin: 0 auto;"  >
	        <p class="slider-text">we are creative startup
	    </div>
	    <div  style="width:100%; margin: 0 auto;" >
	        <p class="slider-text">we create awesome stuff
	    </div>
	</div>

	<div class="row center-block">
		
	</div>
			
		</div>
	</div>
	
</header>
<section id="section-about" class="margin-section">
	<div class="container">
		<h1 class="section-header"><span>About Heaven</span></h1>
		<img src="img/logo/heavenbwnotext.png" class="img-responsive mylogo center-block" width="200px">
		<div class="col-md-8 col-md-offset-2">
			<p style="text-align:center;">Heaven Tech, merupakan Software House yang didirikan pada 20 Juli 2014 oleh beberapa technopreneur muda yang kompeten dalam menumbuh kembangkan bisnis berbasis teknologi informasi dan komunikasi, baik dalam skala kecil, medium maupun besar.</p>
		</div>
		
		 
	</div>
</section>

<section id="section-services"  >
	<div class="container text-center">
		<h1 class="section-header white"><span>services</span></h1>
		<h4 class="margin-button">Heaven Tech memberikan kemudahan kepada Pelanggan Dengan Pelayanan Yang Kami Miliki.</h4>
		<div class="row margin-content ">
            <div class="col-xs-12 col-sm-4 col-md-4 center-block">
				<div  class="service-animate">
						<img src="img/logo/l1.png" class="img-responsive center-block">					
						<h3 style="text-transform:uppercase;">Development</h3>
						<p style="height:100px;">
						Heaven Tech Development memberikan layanan pembuatan Website, Aplikasi Desktop, dan Aplikasi Mobile ...
						</p>
						<a href="#" class="btn btn-skin margin-button">Learn more</a>
				</div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
				<div class="service-animate">

					 	<img src="img/logo/l2.png" class="img-responsive center-block" >				
						<h3 style="text-transform:uppercase;">Design</h3>
					 
						<p style="height: 100px;">
						Heaven Tech Desain memberikan layanan pembuatan Logo, Desain Website, UI Aplikasi, Editing Foto....
						 


						</p>
						<a href="#" class="btn btn-skin margin-button">Learn more</a>
					 
				</div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
				<div class="service-animate">
                
					 	<img src="img/logo/l3.png" class="img-responsive center-block">			
						<h3 style="text-transform:uppercase;">Training Center</h3>
					 	 
						<p style="height: 100px;">
						HeavenTech memberikan layanan kepada pelanggan dengan membuat  Seminar, Workshop, inHT ...
						</p>
						 
						<a href="#" class="btn btn-skin margin-button">Learn more</a>
					 
               
				</div>
            </div>
            </div>

	</div>
</section>

<section id="section-portpolio">
	<div class="container text-center ">
		<h1 class="section-header white"><span>Our Portfolio</span></h1>
		<h4 class="margin-button">Produk Yang Telah Kita Buat Untuk Para Pelanggan Heaven Tech.</h4>
	 
		<button class="filter" data-filter="all">All</button>
		<button class="filter" data-filter=".web">Web </button>
		<button class="filter" data-filter=".mobile">Mobile</button>
		<button class="filter" data-filter=".design">Design</button>

			<div class="row text-center">
	 			<div class="col-md-3 web mix" data-custom-order="1">
	 				<div class="folio-item">
						<div class="folio-info">
	 						<a   class="folio-link" href="{{ asset('img/portpolio/6.jpg') }}">
	 							<i class="fa fa-eye fa-3x"></i>
	 						</a>
	 						
	 					</div>
	 					{{ HTML::image('img/portpolio/6.jpg','d',['height'=>'165','width'=>'280','class'=>'myimage']) }}
	 					<span class="arrow-up"></span>
	 					<h5>&nbsp;&nbsp;Zen Consultans</h5>
	 				</div>
	 				 
	 				 
	 				
	 				
	 			</div>
	 			 
				<div class="col-md-3 mix mobile  " data-custom-order="2">
					<div class="folio-item">
						<div class="folio-info">
	 						<a   class="folio-link" href="{{ asset('img/portpolio/6.jpg') }}">
	 							<i class="fa fa-eye fa-3x"></i>
	 						</a>
	 						
	 					</div>
	 					{{ HTML::image('img/portpolio/6.jpg','d',['height'=>'165','width'=>'280','class'=>'myimage']) }}
	 					<span class="arrow-up"></span>
	 					<h5>&nbsp;&nbsp;Zen Consultans</h5>
	 				</div>
	 				 
				</div>
				 
				<div class="col-md-3 mix web  " data-custom-order="3">
					<div class="folio-item">
						<div class="folio-info">
	 						<a   class="folio-link" href="{{ asset('img/portpolio/6.jpg') }}">
	 							<i class="fa fa-eye fa-3x"></i>
	 						</a>
	 						
	 					</div>
	 					{{ HTML::image('img/portpolio/6.jpg','d',['height'=>'165','width'=>'280','class'=>'myimage']) }}
	 					<span class="arrow-up"></span>
	 					<h5>&nbsp;&nbsp;Zen Consultans</h5>
	 				</div>
	 				 
	 			 
					 
	 				 
				</div>
				 
				<div class="col-md-3 mix design " data-custom-order="4">

				 	<div class="folio-item">
						<div class="folio-info">
	 						<a   class="folio-link" href="{{ asset('img/portpolio/6.jpg') }}">
	 							<i class="fa fa-eye fa-3x"></i>
	 						</a>
	 						
	 					</div>
	 					{{ HTML::image('img/portpolio/6.jpg','d',['height'=>'165','width'=>'280','class'=>'myimage']) }}
	 					<span class="arrow-up"></span>
	 					<h5>&nbsp;&nbsp;Zen Consultans</h5>
	 				</div>
	 				 
	 				 
				</div>
				 
				<div class="col-md-3 mix mobile  " data-custom-order="5">
					<div class="folio-item">
						<div class="folio-info">
	 						<a   class="folio-link" href="{{ asset('img/portpolio/6.jpg') }}">
	 							<i class="fa fa-eye fa-3x"></i>
	 						</a>
	 						
	 					</div>
	 					{{ HTML::image('img/portpolio/6.jpg','d',['height'=>'165','width'=>'280','class'=>'myimage']) }}
	 					<span class="arrow-up"></span>
	 					<h5>&nbsp;&nbsp;Zen Consultans</h5>
	 				</div>
	 				 
	 				 
				</div>
				 
			</div>
	</div>
</section>

<section id="section-team" class="margin-section">
	<div class="container text-center">
		<h1 class="section-header"><span>our team</span></h1>
		<h4 class="margin-button" style=" display: block !important;"> Kita adalah team kreatif, kita akan membantu permasalahan di setiap project anda.</h4>
		 
		<div class="row margin-content">
		@foreach($users as $user)
			 <div class="my-team" style="display:inline-block !important;">
		 		<div class="team-img">
		 		{{ HTML::image($user->photo,null,['class'=>'img-responsive img-circle center-block']) }}
				</div>
				<div class="team-title">
					<h4><b>{{ $user->first_name." ".$user->last_name }}</b></h4>
					<h4>{{ $user->skill }}</h4>
				</div>
				 
				<div class="team-social">
				<p>
					<a href="{{ $user->facebook }}"><i class="fa fa-facebook"></i></a>
					<a href="{{ $user->twitter }}"><i class="fa fa-twitter"></i></a>
					<a href="{{ $user->github }}"><i class="fa fa-github"></i></a>
					</p>
				</div>
			 </div>
		@endforeach
			 
		</div>
	</div>
</section>
<section id="section-contactus">
	<div class="container  text-center ">
		<h1 class="section-header white"><span>contact us</span></h1>
		<h4 class="margin-button">Berikan Pesan Menarik Baik Saran / Kritik Kepada Kami</h4>
		
		<div class="col-md-12    margin-content" style="text-align:left !important;">
		 	<div class="col-md-6 contact-info">

		 		<h4>Contact Info</h4>
		 		 
		 		 	 <p> <i class="fa fa-map-marker "></i><span>&nbsp;&nbsp;Jln aria natamanggala km 09</span></p>
		 		 	<p> <i class="fa fa-phone "></i> <span>6285-7246-8969-1</span></p>
		 		 	<p> <i class="fa fa-envelope "></i><span>email@heaventech.com</span></p>

		 		 	<br>
		 		<h4>Social Network</h4>
		 		 
		 			<a class="fa-stack fa-lg" href="{{ $settings->twitter }}" style="cursor:pointer;">
					  <i class="fa fa-circle-o fa-stack-2x"></i>
					  <i class="fa fa-twitter fa-stack-1x"></i>
					</a>
					<a class="fa-stack fa-lg" href="{{ $settings->twitter }}" style="cursor:pointer;">
					  <i class="fa fa-circle-o fa-stack-2x"></i>
					  <i class="fa fa-facebook fa-stack-1x"></i>
					</a>
					<a class="fa-stack fa-lg" href="{{ $settings->twitter }}" style="cursor:pointer;">
					  <i class="fa fa-circle-o fa-stack-2x"></i>
					  <i class="fa fa-facebook fa-stack-1x"></i>
					</a>

		 	  
		 		 
		 		 
		 	</div>
		 	<div class="col-md-6">
		 	 @if(Session::has('successMessage'))
		 		<div class="alert alert-success">
				  <h3></i>Pesan berhasil dikirim</h3>
				</div>
		 	@endif
			{{ Form::open(['url'=>'messages/sendmessage','class'=>'form-horizontal']) }}
				 <div class="form-group">
    				<div class="col-md-6 col-xs-6">
    					 
    					{{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) }}
    					 
    						{{ $errors->first('name','<span class="error">:message</span>') }}
    				 
    				</div>
    				<div class="col-md-6 col-xs-6">
    					 
    					{{ Form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) }}
    				 
    						{{ $errors->first('email','<span class="error">:message</span>') }}
    					 
    				</div>
    
 				 </div>
 				 <div class="form-group">
 				 	<div class="col-md-12">
 				 	{{ Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Message','height'=>'200']) }}
 				 	 
    						{{ $errors->first('body','<span class="error">:message</span>') }}
    				 
 				 	</div>
 				 	
 				 </div>
 				 <div class="form-group">
 				 	<div class="col-md-12">
 				 		 
 				 		{{ Form::submit('Submit',['class'=>'btn btn-success my-button','style'=>'float:right;']) }}
 				 	</div>
 				 	 
 				 </div>
			</form>
		</div>
		 		
		 	</div>
		</div>
</section>
<footer id="my-footer" class="container-fluid text-center" >
	 
	<p style="color:#ffffff">&copy; Copyright  Heaven 2014</p>
</footer>

	{{ HTML::script('js/jquery-2.1.1.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/jquery.mixitup.js') }}
	{{ HTML::script('js/jquery.crycle2.min.js') }}
	{{ HTML::script('js/jquery.nicescroll.min.js') }}
	{{ HTML::script('js/modernizr.js') }}
	{{ HTML::script('js/jquery.magnific-popup.min.js') }}
	{{ HTML::script('js/jquery.custom.js') }}
	 
	
	 
	 
	
	 

	 
	 
</body>
</html>