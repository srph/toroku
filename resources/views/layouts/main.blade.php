<!DOCTYPE html>
<html>
<head>
  <title>@yield('title') - Valiant ROSE</title>
  <meta charset="UTF-8">
  <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/scaffold.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/grid.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/form.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/btn.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/panel.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/alert.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/list-group.css') }}" rel="stylesheet">
  @yield('stylesheets')
</head>
<body>
  <div class="container">
    <div class="grid">
      <div class="grid-cell-4">
        <div class="u-text-center form-group">
          <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="u-img-responsive">
        </div>
      </div>
    </div>

    <div class="grid">
      <div class="grid-cell grid-cell-4">
        <div class="list-group">
          <a href="{{ route('home') }}" class="active">Registration</a>
          <a href="{{ route('download') }}">Download</a>
        </div>
      </div>

      <div class="grid-cell grid-cell-8">
        <div class="panel">
          <div class="panel-heading">
            @yield('title')
          </div>

          <div class="panel-body">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </div>

  @yield('scripts')
</body>
</html>