<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Gotham | Documentation</title>

  <!-- Gotham -->
  <link rel="stylesheet" type="text/css" href="/stylesheets/vendor.css">
  <link rel="stylesheet" type="text/css" href="/stylesheets/app.css">

  <script src="/javascripts/vendor.js"></script>
  <script src="/javascripts/app.js"></script>

  <script>require('initialize');</script>

</head>
<body>
  <div id="main" class="animated fadeIn">
    <!-- Nav -->
    <div class="navbar">
      <div class="container">
        <div class="pull-left">
          <a href="http://brunch.io/" target="_blank"><img class="navbar__logo" title="Brunch" data-toggle="tooltip" src="/brunch.png" /></a>
          <a href="http://bower.io/" target="_blank"><img class="navbar__logo" title="Bower" data-toggle="tooltip" src="/bower.png" /></a>
          <a href="http://www.coffeescript.org/" target="_blank"><img class="navbar__logo" title="Coffeescript" data-toggle="tooltip" src="/coffeescript.png" /></a>
        </div>
        <div class="pull-right">
        <a data-toggle="animate-nav-button" class="navbar__button --home" href="{{ url('/') }}">Home</a>
        <a data-toggle="animate-nav-button" class="navbar__button --github" href="https://github.com/gothamjs/framework">Github</a>
        </div>
      </div>
    </div>

    <!-- Hero -->
    <div class="hero">
      <div class="container">
        <div class="hero__image">
          <img src="/logo-gotham.png" />
        </div>
        <div class="hero__title">
          Gotham
        </div>
        <div class="hero__punchline">
         Documentation
        </div>
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

          </ul>
        </div>
        <div class="col-md-9">
          <div class="content">
            @yield('content')
          </div>
  				<div class="disqus">
  					<div id="disqus_thread"></div>
  						<script type="text/javascript">
  						    var disqus_shortname = 'gothamjs';

  						    (function() {
  						        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
  						        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
  						        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
  						    })();
  						</script>
  						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
  				</div>
        </div>
      </div>
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
