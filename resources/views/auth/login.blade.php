@extends('layouts.app_plain')
@section('title','Login')
@section('content')
<div class="container">
    <div class="row justify-content-center align-content-center" style="height:100vh;">
        <div class="col-md-6">
            <div class="text-center mb-0">
                <img src="{{ asset('images/hr-logo.png')}}" alt="Hr Logo" style="width: 100px;">
            </div>
            <div class="card">
                <div class="card-body">
                        <h3>Login</h3>
                        <p>Please fill in login form</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-outline mb-4">  
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required  autofocus>
                                <label class="form-label" for="form2Example1">Phone</label>
                            </div>
                            @error('phone')
                                        <div>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </div>
                            @enderror
                            <div class="form-outline mb-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <label class="form-label" for="form2Example2">Password</label>
                            </div>
                            @error('password')
                                        <div>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </div>
                            @enderror

                            <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                            </div>
                            <button type="submit" class="btn btn-theme btn-block mt-4">Login</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
