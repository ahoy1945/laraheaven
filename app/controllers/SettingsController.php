<?php 
	Class SettingsController extends \BaseController{
		
		public function __construct(){
			$this->beforeFilter('csrf',['on'=>'POST']);
			$this->beforeFilter('admin');
		}
		public function getIndex(){

			return View::make('settings.index')->with('settings',Setting::find(1)->first());
		}

		public function getUpdate(){
			return View::make('settings.edit')->with('settings',Setting::find(1)->first());
		}

		public function postUpdate(){
			$setting = Setting::findOrFail(1);
			$validator = Validator::make($data = Input::all(),Setting::$rules);
			if($validator->passes()){
				$setting->fill($data);
				$setting->save();
				return Redirect::to('heavenadmin/setting')->with('successMessage','Data berhasil di update');
			}

			return Redirect::back()->withErrors($validator)->withInput();
			
		}
	}