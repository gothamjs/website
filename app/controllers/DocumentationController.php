<?php

class DocumentationController extends BaseController {

  public $layout = 'layouts.documentation';

	public function getIndex($version, $page)
	{

    View::share('version', $version);

    $version = str_replace('.', '-', $version);

    $path = app_path('views/documentation/' . $version . '/' . $page . '.blade.php');

    if (file_exists($path))
    {
      $this->layout->content = View::make('documentation.' . $version . '.' . $page);
    }
    else {
      return Redirect::to('/documentation/1.0.0/installation');
    }

	}


}
