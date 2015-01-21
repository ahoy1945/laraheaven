@if(Session::has('successMessage'))
   
	<div class="alert alert-success alert-dismissable">
         <i class="fa fa-check"></i>
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         
         <h3>{{ Session::get('successMessage') }}</h3>
 
 </div>
@elseif(Session::has('errorsMessage'))

	<div class="alert alert-danger alert-dismissable">
         <i class="fa fa-ban"></i>
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         
         <h3>{{ Session::get('errorsMessage') }}</h3>
 
 </div>
@endif