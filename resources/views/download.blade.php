@extends('layouts.main')

@section('title')
  Download
@stop

@section('content')
  <h1 class="awesome-heading">Download Client</h1>

  <a href="{{ $url }}" class="btn form-group" target="_blank">
    Download Client →
  </a>
@stop