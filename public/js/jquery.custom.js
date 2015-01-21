  $(window).load(function(){
    $("#spinner").fadeOut("slow");
    
  });
  $(document).ready(function(){
     $('#section-portpolio .container').mixItUp(
          {
            animation: {
            duration: 510,
            effects: 'fade translateZ(-360px) stagger(34ms) scale(0.75)',
            easing: 'cubic-bezier(0.55, 0.055, 0.675, 0.19)'
          }
      }
      );

       $('.folio-link').magnificPopup({ 
        type: 'image'
  // other options
       });
     

  	$(window).scroll(function(event){
  		var y = $(this).scrollTop();

     if(y >=40){
       $('.navbar-default').addClass('navbar-fixed-top').addClass('my-fixed');

     }else{
      if(y <= 40){
         $('.navbar-default').removeClass('navbar-fixed-top').removeClass('my-fixed');
      }
     }
   
  		$('.service-animate').hide();

  		$('#section-about .container h1,#section-about .container img,#section-about .container p,.my-team').addClass('visibility');
  		 if(y >= 70){
  		 	$('#section-about .container h1')
  		 		.removeClass('visibility')
  		 			.addClass('animated')
  		 				.addClass('fadeIn')
  		 					.addClass('slow');
  		 }

  		 if(y >= 180){
  		 	$('#section-about .container img')
  		 		.removeClass('visibility')
  		 			.addClass('animated')
  		 				.addClass('fadeIn')
  		 					.addClass('slow');

  		 }
  		 if(y >= 350){
  		 	 $('#section-about .container p')
  		 	 	.removeClass('visibility')
  		 	 		.addClass('animated')
  		 	 			.addClass('fadeIn')
  		 	 				.addClass('slow');

  		 }
  		if(y >= 700){

  			$('.service-animate')
  				.show()
  					.addClass('animated')
  						.addClass('rotateInDownLeft')
  							.addClass('slow');
  		}

      if(y >= 1400){
        $('.my-team')
          .removeClass('visibility')
            .addClass('animated')
              .addClass('fadeIn')
                .addClass('slower');
           
      }else{
        $('.my-team')
            .addClass('visibility')
              .removeClass('animated')
                .removeClass('fadeIn')
                  .removeClass('slower');
      }
     

  	});

  
 

 $('.menu-bar').click(function(event){
  event.preventDefault();
  var id = $(this).attr('href');
  var content = $(document).find(id);
  $('html,body').animate({
    scrollTop: $(content).offset().top
  },1000);
   
     
 });
  	
     $("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"2px",cursorcolor:"#191919",cursoropacitymin:.5});
	function initNice() {
		if($(window).innerWidth() <= 960) {
			$('html').niceScroll().remove();
		} else {
			$("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"2px",cursorcolor:"#191919",cursoropacitymin:.5});
		}
	}
	$(window).load(initNice);
	$(window).resize(initNice);
      
    
 });