@section('content')
  <h1>Controllers</h1>

  <p>
    Instead of defining all of your route-level logic in a single <em>routes.coffee</em> file, you may wish to organize this behavior using Controller classes. Controllers can group related route logic into a class.
  </p>

  <p>
    Here is an example of a basic controller class:
  </p>

  <script src="https://gist.github.com/GesJeremie/5e5b6b4ae213b8e42f16.js"></script>

  <div class="flash">All controllers must be put in <strong>app/controllers</strong></div>

  <h2>Attach a controller to a route</h2>

  <p>
    Let's say you created a controller Joker:
  </p>

  <script src="https://gist.github.com/GesJeremie/93dd601db01ea71f5461.js"></script>

  <div class="flash">And you <strong>saved</strong> the file as <strong>app/controllers/joker.coffee</strong></div>

  <p>Now you can attach the controller to a route:</p>

  <script src="https://gist.github.com/GesJeremie/d102ab1a4b6091e78ae5.js"></script>

  <div class="flash">Now when the url is <strong>domain.com/gotham</strong> it execute the controller <strong>Joker</strong></div>

  <p>
    <strong>Examples:</strong>
  </p>

  <script src="https://gist.github.com/GesJeremie/cb25e62acbc431e80194.js"></script>


  <h2>Shortcuts</h2>

  <p>Controllers provide some shortcuts:</p>

  <p><strong>@on</strong></p>
  <script src="https://gist.github.com/GesJeremie/3cfb7631f1169ac45709.js"></script>

  <p><strong>@off</strong></p>

  <script src="https://gist.github.com/GesJeremie/c84c99712f6927bf8dea.js"></script>

  <p><strong>@delayed</strong></p>

  <script src="https://gist.github.com/GesJeremie/0345b3f0018e55423551.js"></script>

  <p><strong>@log</strong></p>

  <script src="https://gist.github.com/GesJeremie/5e98e27b83e4a2bb16bd.js"></script>

  <p><strong>@view</strong></p>

  <p>It will render a view, see the <a href="{{ url('documentation/1.0.0/view') }}">view documentation</a> for more details.</p>
@stop
