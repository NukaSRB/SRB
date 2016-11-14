<!doctype html>
<html>
  <head>
    @include('layouts.partials.header')
  </head>

  <body>
    <div class="container" id="container">
      @include('layouts.partials.menu')

      <div id="content">
        @if (isset($content))
          {!! $content !!}
        @else
          @yield('content')
        @endif
      </div>

      @section('footer')
        @include('layouts.partials.footer')
      @show
    </div>

    @include('layouts.partials.modals')

    @include('layouts.partials.javascript')

  </body>
</html>
