@section('content')
  <h1>Routing</h1>

  <h2>Basic routing</h2>
  <p>The routes for your application will be defined in the <em>routes.coffee</em> file. The simplest Gotham routes consist of a URI and a Closure callback.</p>

  <script src="https://gist.github.com/GesJeremie/9d7486dcfadd38c20990.js"></script>

  <div class="flash">When you will reach the URL <strong>domain.com/welcome</strong>, Gotham will display in the console log <strong>Hello</strong></div>

  <h2>Route parameters</h2>

  <script src="https://gist.github.com/GesJeremie/e4bbe81e8672346a1ac4.js"></script>

  <h2>Route constraints</h2>

  <p>You can add some constraints in your routes.</p>

  <script src="https://gist.github.com/GesJeremie/f0c55824d9c64e239ec3.js"></script>

  <div class="flash">If the name is not <strong>batman</strong>, the code will not be executed.</div>

  <h2>Routing to controllers</h2>

  <p>
    Gotham allows you to not only route to Closures, but also to controller classes.<br />
    See the documentation on <a href="{{ url('documentation/1-0-0/controllers') }}">controllers</a> for more details.
  </p>
@stop
