<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <meta charset="UTF-8">
  <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/scaffold.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/form.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/btn.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/panel.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/alert.css') }}" rel="stylesheet">
  @yield('stylesheets')
</head>
<body>
  @yield('content')
</body>
</html>