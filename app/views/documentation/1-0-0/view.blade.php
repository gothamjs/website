@section('content')
  <h1>View</h1>

  <p>
    Sometimes you need to build some HTMl blocks in your application like:
  </p>

  <script src="https://gist.github.com/GesJeremie/9b4734aee1b8f2341d49.js"></script>

  <p>
    It's enough when you have tiny HTML blocks, but sometimes it can be very ugly. That's why Gotham uses the templating system <a href="https://github.com/sstephenson/eco">ECO</a>.
  </p>

  <h2>Render a view</h2>

  <p>
    <div class="flash">Create a file <strong>app/views/batman.eco</strong></div>
  </p>

  <script src="https://gist.github.com/GesJeremie/beb06df98c0f245d2c6a.js"></script>

  <p>Now you can do something like:</p>

  <script src="https://gist.github.com/GesJeremie/a6edc790d67ff8462b36.js"></script>

  <h2>Shortcut view controller</h2>

  <p>
    If you are working in a controller, Gotham has a shortcut <em>@view</em>
  </p>

  <script src="https://gist.github.com/GesJeremie/bd05c9b3d02c1d8f0fcd.js"></script>



@stop
