@section('content')
  <h1>Syphon</h1>

  <p>
    Syphon serializes your forms into a JSON representation.
  </p>

  <script src="https://gist.github.com/GesJeremie/1c05777836c9eda3ddaf.js"></script>

  <p>Will become: </p>

  <script src="https://gist.github.com/GesJeremie/c5872928460c3155ae70.js"></script>

  <h2>How to use it</h2>

  <p>Let's say your backend render an HTML view like:</p>

  <script src="https://gist.github.com/GesJeremie/d30f05c65ad5af76a3f1.js"></script>

  <p>You can retrieve the form as a json like:</p>

  <script src="https://gist.github.com/GesJeremie/4a896b6cd59d24309c92.js"></script>

  <p>
    <div class="flash"><strong>get()</strong> allows any jquery selector.</div>
  </p>
@stop
