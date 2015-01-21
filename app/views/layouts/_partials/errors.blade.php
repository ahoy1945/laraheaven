<br>
 <div class="alert alert-danger alert-dismissable">
         <i class="fa fa-ban"></i>
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <b>Warning.</b>
         <ul>
	          @foreach($errors->all() as $error)
	          <li>{{ $error }}</li>
	          @endforeach
         </ul>
 </div>