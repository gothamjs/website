<?php

class PageController extends BaseController {

  public $layout = 'layouts.master';

	public function getHome()
	{
    $this->layout->content = View::make('page.home');
	}
  

}
