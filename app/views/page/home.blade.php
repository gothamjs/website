@section('content')

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
      <div class="hero__github">
        <iframe src="https://ghbtns.com/github-btn.html?user=gothamjs&repo=framework&type=star&count=true&size=large" frameborder="0" scrolling="0"></iframe>
      </div>
      <div class="code --intro">
        <div class="code__topbar">
          <div class="code__circle --red"></div>
          <div class="code__circle --yellow"></div>
          <div class="code__circle --green"></div>
        </div>
        <script src="https://gist.github.com/GesJeremie/f6883def0fda42ad5e4e.js"></script>
        <div class="code__bottombar"></div>
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

  <!-- Features -->
  <div class="features">
    <div class="container">
      <div class="features__title">Features</div>

      <div class="row">
        <div class="col-md-6">
          <h3 class="features__label">Workflow</h3>
          <div class="code">
            <div class="code__topbar">
              <div class="code__circle --red"></div>
              <div class="code__circle --yellow"></div>
              <div class="code__circle --green"></div>
            </div>
            <script src="https://gist.github.com/GesJeremie/67a7c628181a2c9c75fc.js"></script>
            <div class="code__bottombar"></div>
          </div>

          <p>
            Gotham is based on <a href="http://brunch.io/">Brunch.io</a>, a build system like <a href="http://gruntjs.com/">Grunt</a> and <a href="http://gulpjs.com/">Gulp</a>.

            <br/>

            So with Gotham you can enjoy <strong>commonJS</strong>, <strong>require files</strong> when you need it, work with an <strong>elegant syntax</strong> (coffeescript), <strong>compile</strong>, <strong>minify</strong> your files and install a <strong>third-package</strong> with <a href="http://bower.io/">Bower</a> (Brunch handles for you the orders of your dependencies automatically).
          </p>
        </div>
        <div class="col-md-6">
          <h3 class="features__label">Routing</h3>
          <div class="code">
            <div class="code__topbar">
              <div class="code__circle --red"></div>
              <div class="code__circle --yellow"></div>
              <div class="code__circle --green"></div>
            </div>
            <script src="https://gist.github.com/GesJeremie/582389a741081cc94f0b.js"></script>
            <div class="code__bottombar"></div>
          </div>
          <p>
            The routing system is the first piece of Gotham, when your browser hits an url, Gotham will execute <strong>what you want</strong>, it can be a callback or a controller.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h3 class="features__label">Controllers</h3>
          <div class="code">
            <div class="code__topbar">
              <div class="code__circle --red"></div>
              <div class="code__circle --yellow"></div>
              <div class="code__circle --green"></div>
            </div>
            <script src="https://gist.github.com/GesJeremie/dc643dfc1b4c9081c88f.js"></script>
            <div class="code__bottombar"></div>
          </div>

          <p>
            A controller is a basic <strong>CommonJS class</strong>, you can do whatever you want. Gotham after the routing system load the controller wanted, executes the method <em>before()</em> to let you validate the request, etc. After that Gotham executes the method <em>run()</em>. It's the main entry of your code !

            <br/><br/>

            When you are working in a controller, some <a href="{{ url('documentation/1.0.0/controllers#shortcuts') }}">shortcuts</a> are available.

          </p>
        </div>
        <div class="col-md-6">
          <h3 class="features__label">Views</h3>
          <div class="code">
            <div class="code__topbar">
              <div class="code__circle --red"></div>
              <div class="code__circle --yellow"></div>
              <div class="code__circle --green"></div>
            </div>
            <script src="https://gist.github.com/GesJeremie/d6e0f07863828ea917b1.js"></script>
            <div class="code__bottombar"></div>
          </div>

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

  <div class="try">
    <a href="{{ url('screencasts') }}">Let's try Gotham</a>
  </div>
@stop
