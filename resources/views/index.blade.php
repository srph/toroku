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

    	<form action="{{ URL::route('register') }}" method="POST">
    		{{ csrf_field() }}

        <div class="form-group">
          <label for="username">Username</label>
    		  <input type="text" name="username" id="username" class="form-control" placeholder="johndoe" value="{{ old('username') }}">
          @if($errors->has('username'))
            <div class="alert alert-danger">{{ $errors->first('username') }}</div>
          @endif
        </div>

        <div class="form-group">
          <label for="password">Password</label>
    		  <input type="password" name="password" id="password" class="form-control" placeholder="******">
          @if($errors->has('password'))
            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
          @endif
        </div>

    		<button class="btn btn-block">Register</button>
    	</form>
    </div>
  </div>
@stop