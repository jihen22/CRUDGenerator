<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="{{ asset('LoginpageRessources/css/style.css') }}">

    
</head>
<style>
    .btn {
        transition: opacity 0.3s ease;
    }

    .btn:hover {
        opacity: 0.7;
    }

    .form-group {
        margin-bottom: 2rem;
    }

    .form-group label {
        font-weight: bold;
        color: white; /* Updated: Label color */
    }

    .form-control {
        width: 70%;
        height: 40px;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .social .btn {
        width: 30%; /* Updated: Less wide */
        height: 40px;
        margin-bottom: 10px;
        color: #fff;
        display: inline-block;
        box-sizing: border-box;
        padding: 10px;
        text-align: center;
    }

    .social .btn i {
        margin-right: 5px;
    }

    .social .btn-github {
        background-color: black;
    }

    .social .btn-facebook {
        background-color: #3b5998;
    }

    .social .btn-google {
        background-color: yellow;
    }

    .custom-margin {
        margin-left: auto;
        margin-right: auto;
        max-width: 300px;
    }

    /* Updated CSS */
    .login-wrap {
        text-align: center;
    }

    .login-wrap h2 {
        color: white;
        text-align: center;
    }

    .social .btn:hover {
        opacity: 0.7;
        transition: opacity 0.3s ease;
    }

    .social {
        opacity: 1;
        transition: opacity 0.3s ease;
    }

    .social:hover {
        opacity: 0.7;
    }

    .btn-primary {
        background-color: green; /* Updated: Login button color */
    }
</style>

<body class="img js-fullheight" style="background-image: url(LoginpageRessources/images/header-bg.jpg);">
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="login-wrap p-0">

                    <h2 class="mb-4">Welcome Back!</h2> <!-- New: Improved text -->
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="username">Email Address or Username</label>
                            <input id="username" type="username"  class="@error('username') is-invalid @enderror @error('email') is-invalid @enderror form-control"
                                   name="username" value="{{ old('username') }}" required autocomplete="username"
                                   autofocus>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror form-control"
                                   name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                       {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label checkbox-left" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group mb-0 text-center">
                        <button type="submit" style="width: 80%; background-color: lightgreen; color: white; padding: 10px; border: none; border-radius: 5px; font-size: 16px; font-weight: bold; opacity: 0.8; transition: opacity 0.3s;">
    {{ __('Login') }}
</button>


                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>

                    <p class="w-100 text-center" style="color: yellow;">&mdash; Or Sign In With &mdash;</p>

                    <div class="social d-flex flex-row justify-content-center"> <!-- New: Make buttons aligned in a row -->
                        <div class="btn btn-github">
                            <i class="fa fa-github mr-2"></i><a href="/login/github" style="color: white;">
                            Github</a>
                        </div>
                        <div class="btn btn-facebook">
                        <a href="/login/facebook" style="color: white;">
                            <i class="fa fa-facebook mr-2"></i>
                            Facebook
</a>
                        </div>
                        <div class="btn btn-google">
                        <a href="/login/google"style="color: white;">
                            <i class="fa fa-google mr-2"></i>
                            Google
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
