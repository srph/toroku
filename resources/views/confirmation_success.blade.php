@extends('layouts.main')

@section('title')
  Valiant ROSE
@stop

@section('content')
	<div class="alert alert-success u-text-center form-group">
    Your account has been successfully confirmed. You may now play!
  </div>

  <a href="{{ route('home') }}" class="btn">
    ← Back
  </a>
@stop