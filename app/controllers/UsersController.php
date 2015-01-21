<?php

class UsersController extends \BaseController {

	public function __construct(){
	  $this->beforeFilter('csrf',['on'=>'POST']);
	  $this->beforeFilter('admin');

	  
	}

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{	
		$users = User::all();
		return View::make('users.index')
						->with('users',$users);					 
	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('users.create')->with('skills',Skill::all());
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validate = [
		'first_name' => 'required|min:2',
		'last_name' => 'required|min:2',
		'email' => 'required|email|unique:users',
		'password' => 'required|min:8|confirmed',
		'password_confirmation' => 'required',
		'skill' => 'required',
		'photo' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:1000'
	
		];

		$validator = Validator::make(Input::all(),$validate);

		if($validator->passes()){
			$photo = Input::file('photo');
			$filename = $photo->getClientOriginalName();
			$path = public_path('img/team/'.$filename);
			Image::make($photo->getRealPath())->resize(200,200)->save($path);
			$user = Sentry::register([
				'email' => Input::get('email'),
				'first_name' => Input::get('first_name'),
				'last_name' => Input::get('last_name'),
				'password' => Input::get('password'),
				'twitter' => Input::get('twitter'),
				'facebook' => Input::get('facebook'),
				'github' => Input::get('github'),
				'skill' => Input::get('skill'),
				'photo' => 'img/team/'.$filename
				],true);

			$group = Sentry::findGroupByName(Input::get('roles'));

			$user->addGroup($group);	
		}

		return Redirect::back()->withErrors($validator)->withInput();

	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		return View::make('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);

		return View::make('users.edit')->with('user',$user)->with('skills',Skill::all());
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);
		 $rules = [
		 	'first_name' => 'required|',
		 	'last_name' => 'required',
		 	'skill' => 'required',
		 	'github' => 'url',
		 	'facebook' => 'url',
		 	'twitter' => 'url'
		 ];

		 $validator = Validator::make($data = Input::all(),$rules);

		 if($validator->passes()){
		 	$user->first_name = Input::get('first_name');
		 	$user->last_name = Input::get('last_name');
		 	$user->github = Input::get('github');
		 	$user->facebook = Input::get('facebook');
		 	$user->twitter = Input::get('twitter');
		 	$user->skill = Input::get('skill');
		 	$user->save();

		 	return Redirect::to('heavenadmin/users');
		 }

		 return Redirect::back()->withErrors($validator)->withInput();


	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::findOrFail($id);

		if($user){
			File::delete(public_path($user->photo));
			$user->delete();
			return Redirect::back()->with('successMessage','User deleted');
		}else{
			return Redirect::back()->with('errorsMessage','Something went wrong');
		}
	}

}
