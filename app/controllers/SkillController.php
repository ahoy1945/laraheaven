<?php 

	Class SkillController extends BaseController{
		public function __construct(){
			$this->beforeFilter('csrf',['on'=>'POST']);
			$this->beforeFilter('admin');
		}

		public function getIndex(){
			$skills = Skill::orderBy('id','DESC')->get();
			return View::make('skills.index',compact('skills'));
		}

		public function postCreate(){
			$validator = Validator::make($data = Input::only('name'),Skill::$rules);
			if($validator->passes()){
				Skill::create($data);
				return Redirect::back();

			}

			return Redirect::back()->withErrors($validator)->withInput();
		}
	}
 ?>