<?php 

	Class AuthController extends BaseController{
		public function __construct(){
			 $this->beforeFilter('csrf',['on'=>'POST']);

		}

		public function getLogin(){
		 
		 if(Sentry::check()){
			return Redirect::to('heavenadmin/dashboard');		 	
		 }else{
		 	return View::make('auth.login');
		 }
		
		
			
		}

		public function postLogin(){

			$credentials = array(
	 		'email' => Input::get('email'),
	 		'password' => Input::get('password')
	 		);
	 	try{
	 		//authentikasi user
	 		$user = Sentry::authenticate($credentials, false);
	 		//redirect user ke dashboard
	 		//return Redirect::intended('dashboard');
	 		$user = Sentry::getUser();
	 			return Redirect::intended('heavenadmin/dashboard');
	 	
	 	}catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		    return Redirect::back()
		   			->with('errorsMessage','Tolong masukan Email');
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
		   return Redirect::back()
		   			->with('errorsMessage','Tolong masukan password');
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
		    return Redirect::back()
		   			->with('errorsMessage','Password yang anda masukan salah');
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		   return Redirect::back()
		   			->with('errorsMessage','User tidak ditemukan');
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
		  return Redirect::back()
		   			->with('errorsMessage','User belum diaktivasi');
		}

		// The following is only required if the throttling is enabled
		catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
		{
		    echo 'User is suspended.';
		}
		catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
		{
		   return Redirect::back()
		   			->with('errorsMessage','User dibanned');
		}
		}

	public function getChangepassword(){
		return View::make('auth.changepassword');
	}

	public function postChangepassword(){
		$user = Sentry::findUserById(Sentry::getUser()->id);
 		$checksame = $user->checkPassword(Input::get('old_password'));
		$rules = [
			'old_password' => "required",
			'password' => 'required|min:6',
			'password_confirmation' => 'required'
		];

		 

		$validator = Validator::make(Input::all(),$rules);
		 if($user->checkPassword(Input::get('old_password'))){
		 	if($validator->passes()){
		 		 $user->password = Input::get('password');
		 		 $user->save();
		 		 return Redirect::to('heavenadmin/dashboard');
		 	}

		 	return Redirect::back()
		 					->withErrors($validator)
		 					->withInput();
		 }else{
		 	return Redirect::back()
		 					->withErrors('Your password not match with the old password');
		 }
		 
	}

	public function getLogout(){
		if(!Sentry::check()){
			return 'anda sudah logout';
		}else{
			Sentry::logout();
			return Redirect::to('/');
		}

		
		}
	}