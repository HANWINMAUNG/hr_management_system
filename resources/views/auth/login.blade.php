@extends('layouts.app_plain')
@section('title','Login')
@section('extra_css')
  <style>

  </style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center align-content-center" style="height:100vh;">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                        <h3>Login</h3>
                        <p>Please fill in login form</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-outline mb-4">
                                
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus>
                                <label class="form-label" for="form2Example1">Email</label>
                            </div>
                            @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                            <div class="form-outline mb-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <label class="form-label" for="form2Example2">Password</label>
                            </div>
                            @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror

                            <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Login</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
