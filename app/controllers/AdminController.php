<?php 

	Class AdminController extends BaseController{
		
		public function __construct(){
			
		}

		public function getDashboard(){
			$messageall = Message::all()->count();
			$userall = User::all()->count();
			return View::make('dashboard.index')
							->with('messageall',$messageall)
							->with('userall',$userall);
		}
	}