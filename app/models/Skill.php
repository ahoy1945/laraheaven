<?php

	CLass Skill extends \Eloquent{

		protected $table = "skills";

		protected $fillable = ['name'];
		
		public function user(){
			return $this->belongsToMany('User');
		}

		public static $rules = [
				'name' =>'required|unique:skills'
		];

	}