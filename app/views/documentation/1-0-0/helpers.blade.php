@section('content')
  <h1>Helpers</h1>

  <p>
    Gotham uses <a href="https://github.com/lodash/lodash">lo-dash</a> who provide a bunch of helpers for your application.<br/>
    Take a look to the <a href="https://lodash.com/docs">documentation of lo-dash</a>
  </p>

  <!-- How to -->
  <h2 id="create-helper"><a class="anchor" href="#create-helper">#</a> How to create an helper</h2>

  <p>
    Gotham uses the concept of <em>mixins</em> of lo-dash. You can create an helper everywhere in your application, but the right place is the file
    <em>helpers.coffee</em>
  </p>

  <script src="https://gist.github.com/GesJeremie/67c73bd88e785503091e.js"></script>

  <p>
    Now you can use it where you want:
  </p>

  <script src="https://gist.github.com/GesJeremie/acc69b08ab902bbb24ec.js"></script>

@stop
