<?php

class BaseController extends Controller {


	public function __construct()
  {
    View::share('messagecount', Message::all()); 

  }
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
