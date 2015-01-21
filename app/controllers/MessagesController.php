<?php 

Class MessagesController extends \BaseController{
	public function __construct(){
		 $this->beforeFilter('csrf',['on'=>'POST']);

	}
	public function getIndex(){
		 
		$messages = Message::orderBy('id','DESC')->get();
		return View::make('messages.index')
				->withMessages($messages);
				 
	}
	public function postMessage(){
		$validator = Validator::make(Input::only('body','email','name'),Message::$rules);

		if($validator->passes()){
			Message::create([
				'name' => Input::get('name'),
				'body' => Input::get('body'),
				'email' => Input::get('email')
				]);
			return Redirect::to('/#section-contactus')->with('successMessage','Pesan berhasil dikirm');
		}

		return Redirect::to('/#section-contactus')->withErrors($validator)->withInput();
	}
	public function getReply($id){
		return View::make('messages.message')->with('message',Message::find($id));
	}

	public function getShow($id){
		$message = Message::find($id);
		$message->view = 1;
		$message->save();
		return View::make('messages.show')->with('messageuser',Message::find($id));
	}
	public function postReply(){
		 
		 
		Mail::send('messages.reply',['body'=>Input::get('body')],function($message){
			$message->from('ahoy1945@gmail.com','Heaventech');
			$message->to(Input::get('to'),'Heaventech')->subject(Input::get('subject'));
		});
		return Redirect::to('heavenadmin/messages/success');
	}
	public function postDestroy($id){
		$message = Message::find($id);

		if($message){
			$message->delete(); 
			return Redirect::back()->with('successMessage','Pesan terhapus');
		}else{
			return Redirect::back()->with('errorsMessage','Gagal menghapus');
		}
	}

	public function getSuccess(){
		return View::make('messages.success');
	}
	
	 
	 
}