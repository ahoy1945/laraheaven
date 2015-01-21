<?php 

	Class Setting extends \Eloquent{
		protected $table = "settings";
		protected $fillable = ['website_title',
							   'website_description',
							   'website_metakeyword',
							   'facebook','twitter',
							   'website_email'];
		protected $guarded = [];

		public static $rules = [
			'website_title' => 'required',
			'website_description' => 'required',
			'website_metakeyword' => 'required',
			'facebook' => 'required',
			'twitter' => 'required',
			'website_email' => 'required|email'
		];
	}