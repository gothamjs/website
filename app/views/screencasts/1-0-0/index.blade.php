@section('content')

  <!-- Hero -->
  <div class="hero">
    <div class="container">
      <div class="hero__image">
        <img src="{{ url('logo-gotham.png') }}" />
      </div>
      <div class="hero__title">
        Gotham
      </div>
      <div class="hero__punchline">
        Screencasts
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="screencasts">
    <div class="container">
      @foreach ($screencasts as $index => $screencast)
        <a target="_blank" href="{{ $screencast['url'] }}" class="screencasts__link">
          <div class="col-md-4">
            <div class="screencasts__entry">
              <h3>{{ $screencast['name'] }}</h3>
              <p>
                {{ $screencast['description'] }}
              </p>
              <h4>{{ $screencast['duration'] }}</h4>
            </div>
          </div>
        </a>
      @endforeach

    </div>
  </div>
@stop
