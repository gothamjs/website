@section('content')

  <!-- Nav -->
  <div class="navbar">
    <div class="container">
      <div class="pull-left">
        <a href="http://brunch.io/" target="_blank"><img class="navbar__logo" title="Brunch" data-toggle="tooltip" src="brunch.png" /></a>
        <a href="http://bower.io/" target="_blank"><img class="navbar__logo" title="Bower" data-toggle="tooltip" src="bower.png" /></a>
        <a href="http://www.coffeescript.org/" target="_blank"><img class="navbar__logo" title="Coffeescript" data-toggle="tooltip" src="coffeescript.png" /></a>
      </div>
      <div class="pull-right">
      <a data-toggle="animate-nav-button" class="navbar__button --doc" href="{{ url('documentation') }}">Documentation</a>
      <a data-toggle="animate-nav-button" class="navbar__button --github" href="https://github.com/gothamjs/framework">Github</a>
      </div>
    </div>
  </div>


  <!-- Hero -->
  <div class="hero">
    <div class="container">
      <div class="hero__image">
        <img src="logo-gotham.png" />
      </div>
      <div class="hero__title">
        Gotham
      </div>
      <div class="hero__punchline">
        Simple Coffeescript framework for front-end development.
      </div>
      <div class="hero__code">
        <div class="hero__topbar">
          <div class="hero__circle --red"></div>
          <div class="hero__circle --yellow"></div>
          <div class="hero__circle --green"></div>
        </div>
        <script src="https://gist.github.com/GesJeremie/f6883def0fda42ad5e4e.js"></script>
        <div class="hero__bottombar"></div>
      </div>
    </div>
  </div>

  <!-- Manifest -->
  <div class="manifest">
    <div class="container">
      <div class="manifest__title">Manifest</div>
      <div class="manifest__description">
        After crafting many web applications using <stong>Laravel and Rails</strong>, I couldn't find a simple front-end framework <strong>to manage</strong> my Javascript. I wanted to code my front-end with an <strong>expressive syntax</strong>, install a package and use it <strong>without any pain</strong>. Get the possibility to have a <strong>require/include</strong> function like you have by default in others languages, execute something when <strong>i need it</strong>, have a <strong>basic Class</strong> structure and do it all in an <strong>elegant</strong>, logical way. <br/><br/>

        <strong>Note:</strong> If you are writing a single page application Gotham is not for you. Gotham is definitely not a MV(X) framework. But if you have the same problems I listed above, Gotham will really help you !
      </div>
    </div>
  </div>

  <div class="features">
    <div class="container">
      <div class="features__title">Features</div>

      <div class="row">
        <div class="col-md-6">
          <h3 class="features__label">Workflow</h3>
          <p>
            Gotham is based on <a href="http://brunch.io/">Brunch.io</a>, a build system like <a href="http://gruntjs.com/">Grunt</a> and <a href="http://gulpjs.com/">Gulp</a>.

            <br/>

            So with Gotham you can enjoy <strong>commonJS</strong>, <strong>require files</strong> when you need it, work with an <strong>elegant syntax</strong> (coffeescript), <strong>compile</strong>, <strong>minify</strong> your files and install a <strong>third-package</strong> with <a href="http://bower.io/">Bower</a> (Brunch handles for you the orders of your dependencies automatically).
          </p>
        </div>
        <div class="col-md-6">
          <h3 class="features__label">Routing</h3>
          <p>
            The routing system is the first piece of Gotham, when your browser hits an url, Gotham will execute what you want, it can be a callback or a controller.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h3 class="features__label">Controllers</h3>
          <p>
            A controller is a basic <strong>CommonJS class</strong>, you can do whatever you want. Gotham after the routing system load the controller wanted, executes the method <em>before()</em> to let you validate the request, etc. After that Gotham executes the method <em>run()</em>. It's the main entry of your code !

            <br/><br/>

            When you are working in a controller, some <a href="{{ url('documentation/1.0.0/controllers#shortcuts') }}">shortcuts</a> are available.

          </p>
        </div>
        <div class="col-md-6">
          <h3 class="features__label">Views</h3>
          <p>
            A view is an <a href="https://github.com/sstephenson/eco">ECO</a> template. It's really helpful when you need to <strong>generate</strong> some pieces of HTML based on variables.
          </p>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3">
        <h3 class="features__label">Libraries / Helpers</h3>
          <p>
            You can create your <a href="{{ url('documentation/1.0.0/helpers') }}">helpers</a> thanks to lodash and enjoy the libraries shipped with Gotham: <a href="{{ url('documentation/1.0.0/validator') }}">Validator</a>, <a href="{{ url('documentation/1.0.0/syphon') }}">Syphon</a>, etc ...
          </p>
      </div>
    </div>
  </div>


  <!--
  <div class="spacer --lg"></div>

  <div class="container">
    <div class="align --center">
      <img class="img --logo" src="logo-gotham.png" />
      <h1 class="title --logo">Gotham</h1>
      <h2 class="title --punchline">Simple Coffeescript Framework for front-end development.</h2>

      <div class="spacer --md"></div>

      <a class="btn --info --xl" href="{{ url('documentation') }}">Documentation</a>
      <a class="btn --default --xl" href="https://github.com/gothamjs/framework">Github</a>

    </div>
  </div>

  <div class="spacer --xxl"></div>

  <div class="container">

    <div class="col-md-8 col-md-offset-2">

      <div class="manifest">
        <h2 class="manifest__title">Manifest</h2>
        <p class="manifest__content">

          Gotham is based on <a href="http://brunch.io/">Brunch.io</a>, a build system like <a href="http://gruntjs.com/">Grunt</a> and <a href="http://gulpjs.com/">Gulp</a>.

          <br/>

          So with Gotham you can enjoy <strong>commonJS</strong>, <strong>require files</strong> when you need it, work with an <strong>elegant syntax</strong> (coffeescript), <strong>compile</strong>, <strong>minify</strong> your files and install a <strong>third-package</strong> with <a href="http://bower.io/">Bower</a> (Brunch handles for you the orders of your dependencies automatically).

        </p>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="img --manifest"><img src="/screen-intro.png" /></div>



    <div class="manifest">
      <div class="col-md-8 col-md-offset-2">

        <h3 class="manifest__title --sm">Routing</h3>
        <p class="manifest__content">

          Let's imagine for the request <em>http://domain.com/users/edit/10</em> your back-end renders an HTML view but you want execute some Javascript (Validate a form, apply some effects, initialize a jQuery plugin, whatever). The first step is to bind the request with the router system.

        </p>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="img --manifest"><img src="/screen-routes.png" /></div>


    <div class="col-md-8 col-md-offset-2">

      <div class="manifest">
        <p class="manifest__content">

          In that example Gotham executes a controller located in <em>controllers/users/edit.coffee</em> <br/>

          You can execute a callback than a controller and mount some constraints.

        </p>
      </div>
    </div>

    <div class="clearfix"></div>


    <div class="col-md-8 col-md-offset-2">

      <div class="manifest">
        <h3 class="manifest__title --sm">Controllers</h3>
      </div>
    </div>


    <div class="img --manifest"><img src="/screen-controller.png" /></div>

    <div class="col-md-8 col-md-offset-2">

      <div class="manifest">
        <p class="manifest__content">

          A controller is a basic <strong>CommonJS class</strong>, you can do whatever you want. Gotham after the routing system load the controller wanted, executes the method <em>before()</em> to let you validate the request, etc. After that Gotham executes the method <em>run()</em>. It's the main entry of your code !

          <br/><br/>

          When you are working in a controller, some <a href="{{ url('documentation/1.0.0/controllers#shortcuts') }}">shortcuts</a> are available.

        </p>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-8 col-md-offset-2">
      <h3 class="manifest__title --sm">Views</h3>
    </div>

    <div class="img --manifest"><img src="/screen-view.png" /></div>

    <div class="col-md-8 col-md-offset-2">

      <div class="manifest">
        <p class="manifest__content">
          A view is an <a href="https://github.com/sstephenson/eco">ECO</a> template. It's really helpful when you need to <strong>generate</strong> some pieces of HTML based on variables.
        </p>
      </div>
    </div>

    <div class="col-md-8 col-md-offset-2">
      <h3 class="manifest__title --sm">What else ?</h3>
    </div>

    <div class="col-md-8 col-md-offset-2">

      <div class="manifest">
        <p class="manifest__content">
          You can create your <a href="{{ url('documentation/1.0.0/helpers') }}">helpers</a>, enjoy the libraries shipped with Gotham: <a href="{{ url('documentation/1.0.0/validator') }}">Validator</a>, <a href="{{ url('documentation/1.0.0/syphon') }}">Syphon</a>, etc ...
        </p>

        <div class="spacer"></div>

        <div class="manifest__button">
          <a class="btn --info --xl" href="{{ url('documentation') }}">Try Gotham</a>
        </div>


      </div>
    </div>

  </div>

  <div class="spacer --xxl"></div>
  -->
@stop
