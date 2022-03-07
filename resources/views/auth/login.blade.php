@extends('layouts.app')

@section('content')
<div id="login">
    <div class="rounded">
        <div class="d-flex justify-content-center" style="padding-top:25px;">
            <img src="https://via.placeholder.com/50">
            <h1>Login to your account</h1>
        </div>
        <div id="card">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group input-material" style="margin-top: 25px;">
                    <input id="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label for="email">Email Address</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group input-material" style="margin-top: 25px;">
                    <input id="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('email') }}" required autocomplete="current-password">
                    <label for="password">Password</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn">
                    {{ __('Login') }}
                </button>
            </form>
            <div style="text-align: center;padding-top: 20px;">
                <a href="{{ route('register') }}">
                    Sign up
                </a>
                |
                @if (Route::has('password.request'))
                    <a  href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
