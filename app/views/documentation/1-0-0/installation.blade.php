@section('content')
  <h1>Installation</h1>

  <!-- Nodejs -->

  <h2 id="install-nodejs"><a href="#install-nodejs" class="anchor">#</a> Install node.js</h2>
  <p>
    Node is used by Brunch to build your application. Don't panic Gotham is really for front-end development.<br/>
    Go the website of node.js and download the right package for you : <a href="https://nodejs.org/download/">https://nodejs.org/download/</a>.<br/>
    Run these commands to know if everything worked :
    <script src="https://gist.github.com/GesJeremie/3c5587fcbf2469f8fd4e.js"></script>
  </p>

  <!-- Bower -->

  <h2 id="install-bower"><a href="#install-bower" class="anchor">#</a> Install bower</h2>
  <p>
    Bower is a package manager for the web. With it you can install third-packages in your application like a boss.<br/>
    Run that command: <br/>
    <script src="https://gist.github.com/GesJeremie/90a316d0f26d0ff7c566.js"></script>
  </p>

  <!-- Brunch -->

  <h2 id="install-brunch"><a href="#install-brunch" class="anchor">#</a> Install brunch</h2>
  <p>
    Brunch is the build tool used by Gotham.<br/>
    <script src="https://gist.github.com/GesJeremie/28db51a99240fa1a4a28.js"></script>
  </p>

  <!-- Gotham -->

  <h2 id="install-gotham"><a href="#install-gotham" class="anchor">#</a> Install Gotham</h2>
  <p>
    We will download gotham with the following command: <br/>
  </p>

  <script src="https://gist.github.com/GesJeremie/96733e64bdaaa1632d92.js"></script>

  <p>
    Brunch will create a folder <em>example_folder</em>, will put Gotham into and install the npm and bower dependencies.
  </p>

  <!-- Compile -->

  <h2 id="compile"><a href="#compile" class="anchor">#</a> Compile</h2>
  <p>
    Go to the folder created and run the command:<br/>
  </p>

  <script src="https://gist.github.com/GesJeremie/59eb0ed3f1a8915d1591.js"></script>

  <p>
    When you change something in the <em>app folder</em> brunch will recompile and put everything in the folder <em>public</em>
  </p>

  <div class="flash">
    You can change where brunch output the files compiled in the file <strong>brunch-config.coffee</strong>, option <strong>public</strong>
  </div>

  <!-- Include gotham -->

  <h2 id="include-gotham"><a href="#include-gotham" class="anchor">#</a> Include gotham in your web application</h2>

  <p>
    Just add that part in a layout / view of your backend:
  </p>

  <script src="https://gist.github.com/GesJeremie/c93e681bd8a868c3df2e.js"></script>

  <p>
    Visit your web application you must see that:<br/><br/>

    <img class="img --documentation" src="{{ url('gotham-screen-welcome.png') }}" />
  </p>



@stop
