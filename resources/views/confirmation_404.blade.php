@extends('layouts.main')

@section('title')
  Valiant ROSE
@stop

@section('content')
  <div class="alert alert-danger u-text-center form-group">
    Oops, the confirmation code doesn't exist. Perhaps, you may have already activated your email.
  </div>

  <a href="{{ route('home') }}" class="btn">
    ← Back
  </a>
@stop