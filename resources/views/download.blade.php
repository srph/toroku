@extends('layouts.main')

@section('title')
  Download
@stoP

@section('content')
  <h1 class="awesome-heading">Download Client</h1>

  <a href="{{ $url }}" class="btn form-group" target="_blank">
    Download Client →
  </a>


  <h1 class="awesome-heading">Download By Part</h1>

  <div class="form-actions">
    @foreach($mirrors as $key => $mirror)
    <a href="{{ $mirror }}" class="btn form-group" target="_blank">
      Part {{ $key + 1 }}
    </a>
    @endforeach
  </div>
@stop