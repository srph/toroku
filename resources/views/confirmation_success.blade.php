@extends('layouts.main')

@section('title')
  Valiant ROSE
@stop

@section('content')
  <div class="container">
    <div class="narrow-container">
      <div class="u-text-center form-group">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="u-img-responsive">
      </div>

    	<div class="alert alert-success u-text-center form-group">
        Your account has been successfully confirmed. You may now play!
      </div>

      <a href="{{ route('home') }}" class="btn">
        ← Back
      </a>
    </div>
  </div>
@stop