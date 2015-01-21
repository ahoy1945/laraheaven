<?php

class HomeController extends BaseController {

	public function __construct(){

	}

	public function index(){
		return View::make('index.index')
							->with('users',User::all())
							->with('settings',Setting::find(1));
	}

}
