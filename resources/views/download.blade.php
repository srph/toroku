@extends('layouts.main')

@section('title')
  Download
@stop

@section('content')
  <div class="alert alert-narrow u-text-center form-group">
    It may take a while, so sit back and relax!
  </div>

  <a href="{{ $url }}" class="btn" target="_blank">
    Download Client →
  </a>
@stop