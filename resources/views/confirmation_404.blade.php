@extends('layouts.main')

@section('title')
  Valiant ROSE
@stop

@section('content')
  <div class="container">
    <div class="narrow-container">
      <div class="alert alert-danger u-text-center form-group">
        Oops, the confirmation code doesn't exist anymore. Perhaps, you may have already activated your email.
      </div>

      <a href="{{ route('home') }}" class="btn">
        ← Back
      </a>
    </div>
  </div>
@stop