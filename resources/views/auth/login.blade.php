@extends('layouts.app')

@section('content')
<div class="container">
    @if ( session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif
    <div class="col-md-4 col-md-offset-4">
    <h2>Login Here</h2><hr>
    <form class="form-horizontal" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
          <label for="exampleInputEmail1">Email address</label>
          <input class="form-control" value="{{ old('email') }}" required autofocus name="email" placeholder="Email Address">
          <br>
          <label for="exampleInputPassword1">Password</label>
          <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password">
          <br><br>
        <button type="submit" class="btn btn-primary btn-block">
          Login
        </button>
    </form>
    </div>
  </div>
@endsection
