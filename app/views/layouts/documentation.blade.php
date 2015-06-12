<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>GothamJS</title>

  <!-- Gotham -->
  <link rel="stylesheet" type="text/css" href="/stylesheets/vendor.css">
  <link rel="stylesheet" type="text/css" href="/stylesheets/app.css">

  <script src="/javascripts/vendor.js"></script>
  <script src="/javascripts/app.js"></script>

  <script>require('initialize');</script>

</head>
<body>
  <div class="spacer --lg"></div>

  <div class="container">
    <div class="align --center">
      <img class="img --logo" src="{{ url('logo-gotham.png') }}" />
      <h1 class="title --logo">Gotham</h1>
      <h2 class="title --punchline">Documentation</h2>

      <div class="spacer --md"></div>

      <a class="btn --primary --xl" href="{{ url('') }}">Website</a>
      <a class="btn --default --xl">Screencasts</a>


    </div>
  </div>

  <div class="spacer --md"></div>

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <ul class="sidebar">
          <li class="sidebar__title">Setup</li>
          <li><a href="{{ url('documentation/' . $version . '/installation') }}">Installation</a></li>

          <li class="sidebar__title">The basics</li>
          <li><a href="{{ url('documentation/' . $version . '/routing') }}">Routing</a></li>
          <li><a href="{{ url('documentation/' . $version . '/controllers') }}">Controllers</a></li>
          <li><a href="{{ url('documentation/' . $version . '/helpers') }}">Helpers</a></li>

          <li class="sidebar__title">Libraries</li>
          <li><a href="{{ url('documentation/' . $version . '/view') }}">View</a></li>
          <li><a href="{{ url('documentation/' . $version . '/syphon') }}">Syphon</a></li>
          <li><a href="{{ url('documentation/' . $version . '/validator') }}">Validator</a></li>

          <li class="sidebar__title">Advanced</li>
          <li><a href="{{ url('documentation/' . $version . '/production') }}">Production mode</a></li>
          <li><a href="{{ url('documentation/' . $version . '/styles') }}">Styles</a></li>
          <li><a href="{{ url('documentation/' . $version . '/images') }}">Images</a></li>


        </ul>
      </div>
      <div class="col-md-9">
        <div class="content">
          @yield('content')
        </div>
      </div>
    </div>
  </div>
</body>
</html>
