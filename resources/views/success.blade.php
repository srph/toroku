@extends('layouts.main')

@section('title')
  Registration Success!
@stop

@section('content')
  <div class="alert alert-success u-text-center form-group">
    {{ $message }}
  </div>

  <a href="{{ route('home') }}" class="btn">
    ← Back
  </a>
@stop