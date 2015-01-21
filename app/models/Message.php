<?php 
	
	Class Message extends \Eloquent{
		protected $table = 'messages';

		protected $fillable = ['body','email','name'];

		public static $rules = [
			'name' => 'required|min:2',
			'body' => 'required|min:10',
			'email' => 'required|email'
		];

		public static function messagescount(){
		  $count =  	DB::table('messages')
				->where('view',0)
				->count();
			return $count;
		 
		}

		public static function messagesview(){
		$dika =	DB::table('messages')
				->where('view',0)
				->orderBy('id','DESC')
				->get();
		return $dika;
		}
	}