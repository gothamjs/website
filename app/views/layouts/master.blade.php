<!DOCTYPE HTML>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Gotham | Simple Coffeescript Framework for front-end development</title>

  @section('seo')
    <!-- Meta -->
    <meta name="description" content="Simple Coffeescript Framework for front-end development" />
    <meta name="keywords" content="coffeescript, coffeescript framework, gothamjs, gotham-js, framework javascript" />

    <!-- Facebook -->
    <meta property="og:title" content="GothamJS" />
    <meta property="og:description" content="Simple Coffeescript Framework for front-end development" />
    <meta property="og:url" content="{{ url() }}" />
    <meta property="og:site_name" content="GothamJS"/>
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ url('share.png') }}"/>
  @show


  <!-- Fontawesome -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- Gotham -->
  <link rel="stylesheet" type="text/css" href="/stylesheets/vendor.css">
  <link rel="stylesheet" type="text/css" href="/stylesheets/app.css">

  <script src="/javascripts/vendor.js"></script>
  <script src="/javascripts/app.js"></script>

  <script>require('initialize');</script>

</head>
<body>
  <div id="main" class="animated fadeIn">

    @include('includes.nav')

    @yield('content')

    <div class="footer">
      Another thing from <a href="http://gesjeremie.io/en">gesjeremie.io</a>
    </div>
  </div>



  <!-- Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-64359509-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>
