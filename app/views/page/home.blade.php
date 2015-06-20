@section('content')

  <div class="spacer --lg"></div>

  <div class="container">
    <div class="align --center">
      <img class="img --logo" src="logo-gotham.png" />
      <h1 class="title --logo">Gotham</h1>
      <h2 class="title --punchline">Coffeescript Framework for back-end developers who hate front-end development</h2>

      <div class="spacer --md"></div>

      <a class="btn --info --xl" href="{{ url('documentation') }}">Documentation</a>
      <a class="btn --default --xl" href="https://github.com/gothamjs/framework">Github</a>

    </div>
  </div>

  <div class="spacer --md"></div>

  <div class="container">
    <div class="col-md-8 col-md-offset-2">
        <!-- Easy to learn -->
        <div class="feature">
          <h3>Super easy to learn</h3>
          <script src="https://gist.github.com/GesJeremie/c8a12e9292a5b057ceb1.js"></script>
          <p>If you already learned an MVC backend framework (Ruby on rails, Laravel, etc.) then you already know how to use gotham.</p>
        </div>

        <!-- Bower integration -->
        <div class="feature">
          <h3>Bower Integration</h3>
          <p>
            Installing a third-party package couldn't be easier.
          </p>
          <script src="https://gist.github.com/GesJeremie/dcc7eacaa64b05fcd55d.js"></script>
          <script src="https://gist.github.com/GesJeremie/7d28577197ce50bb84f2.js"></script>
        </div>

        <!-- Router -->
        <div class="feature">
          <h3>Router Component</h3>
          <p>
            Execute a script/controller when you need it.
          </p>
          <script src="https://gist.github.com/GesJeremie/8007d94ea03abbd5451e.js"></script>
        </div>

        <!-- Validation -->
        <div class="feature">
          <h3>Validator Component</h3>
          <p>
            Too lazy to validate your forms ? Use the Validator Component.
          </p>
          <script src="https://gist.github.com/GesJeremie/f19d1cd30543253fdc25.js"></script>
        </div>
    </div>



  </div>

@stop
