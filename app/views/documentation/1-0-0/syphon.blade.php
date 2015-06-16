@section('content')
  <h1>Syphon</h1>

  <p>
    Syphon serializes your forms into a JSON representation.
  </p>

  <script src="https://gist.github.com/GesJeremie/1c05777836c9eda3ddaf.js"></script>

  <p>Will become: </p>

  <script src="https://gist.github.com/GesJeremie/c5872928460c3155ae70.js"></script>

  <!-- How -->

  <h2 id="how"><a href="#how" class="anchor">#</a> How to use it</h2>

  <p>Let's say your backend render an HTML view like:</p>

  <script src="https://gist.github.com/GesJeremie/d30f05c65ad5af76a3f1.js"></script>

  <p>You can retrieve the form as a json like:</p>

  <script src="https://gist.github.com/GesJeremie/4a896b6cd59d24309c92.js"></script>

  <p>
    <div class="flash"><strong>get()</strong> allows any jquery selector.</div>
  </p>

  <!-- Exclude datas -->

  <h2 id="exclude-datas"><a href="#exclude-datas" class="anchor">#</a> Exclude some datas</h2>

  <p>Sometimes you don't want to keep some datas from the form in your JSON, you can use <em>exclude()</em>

  <script src="https://gist.github.com/GesJeremie/0fa6f349fa3e663b8eda.js"></script>

@stop
