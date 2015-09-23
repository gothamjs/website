<?php

class ScreencastController extends BaseController {

  public $layout = 'layouts.master';

  public function getIndex($version)
  {

    View::share('version', $version);

    $version = str_replace('.', '-', $version);

    $path = app_path('views/screencasts/' . $version . '/index.blade.php');

    if (file_exists($path))
    {
      $this->layout->content = View::make('screencasts.' . $version . '.index')->with('screencasts', $this->screencasts());
    }
    else {
      return Redirect::to('/screencasts/1.0.0');
    }

  }


  private function screencasts()
  {
    return [

      [
        'name' => '1. Installation',
        'duration' => '05:08',
        'description' => 'Learn how to install GothamJS.',
        'url' => 'https://www.youtube.com/watch?v=UQAw7wSdLLs'
      ],

      [
        'name' => '2. Basic Routing',
        'duration' => '04:13',
        'description' => 'Learn how to use the routing system.',
        'url' => 'https://www.youtube.com/watch?v=HoG7BIldqeE'
      ],

      [
        'name' => '3. Controllers',
        'duration' => '04:04',
        'description' => 'Learn how to create and attach a controller to a route.',
        'url' => 'https://www.youtube.com/watch?v=dm_ikZ_hrTQ'
      ]


    ];
  }

}
