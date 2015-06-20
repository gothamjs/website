@section('content')
  <h1>Helpers</h1>

  <p>
    Gotham uses <a href="https://github.com/lodash/lodash">lo-dash</a>. It provides a bunch of helpers for your application.<br/>
    You can see the <a href="https://lodash.com/docs">lo-dash documentation</a> here.
  </p>

  <!-- How to -->
  <h2 id="create-helper"><a class="anchor" href="#create-helper">#</a> How to create a helper</h2>

  <p>
    Gotham uses the lo-dash <em>mixins</em> function. You can create helpers anywhere withihn your application, but the right place is the file
    <em>helpers.coffee</em>
  </p>

  <script src="https://gist.github.com/GesJeremie/67c73bd88e785503091e.js"></script>

  <p>
    Now you can use it where you want:
  </p>

  <script src="https://gist.github.com/GesJeremie/acc69b08ab902bbb24ec.js"></script>

@stop
