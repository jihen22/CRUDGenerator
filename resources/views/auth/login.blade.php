<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('LoginpageRessources/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
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
        margin: 0 auto;
        margin-bottom: 10px;
    }
    .form-group label {
        font-weight: bold;
    }
    .card {
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }
    .card-header {
        background-color: #f7f7f7;
        border-bottom: 1px solid #dee2e6;
        padding: 1.5rem;
        font-weight: bold;
        font-size: 1.2rem;
    }
    /* Updated CSS */
    .form-control {
        width: 100%;
        height: 40px;
        font-size: 14px;
        margin: 0 auto;
        margin-bottom: 10px;
    }
    .social .btn {
        width: 50%;
        height: 40px;
        margin: 0 auto;
        margin-bottom: 10px;
    }
    .social .btn i {
        margin-right: 5px;
    }
    .social .btn-github {
        background-color: #333;
        color: #fff;
    }
    .social .btn-facebook {
        background-color: #3b5998;
        color: #fff;
    }
    .social .btn-google {
        background-color: #dd4b39;
        color: #fff;
    }
    .custom-margin {
      width: 100%;
        margin-left: 60px; /* Adjust the value as per your requirement */
    }
</style>
</style>


<body class="img js-fullheight" style="background-image: url(LoginpageRessources/images/header-bg.jpg);">
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8 col-lg-6">
<div class="login-wrap p-0">
<h2 class="mb-4 text-center">Have an account?</h2>
<form method="POST" action="{{ route('login') }}" class="text-center">
@csrf


                    <div class="row mb-3">
                        <div class="col-md-8 custom-margin">
                            <input id="username" type="username"  class="text-center" class="@error('username') is-invalid @enderror @error('email') is-invalid @enderror form-control"
                                   name="username" value="{{ old('username') }}" required autocomplete="username"
                                   autofocus placeholder="Email Address or Username">
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
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-8 custom-margin"> <!-- Adjust the column size as per your requirement -->
                            <input id="password" type="password"  class="text-center"class="@error('password') is-invalid @enderror form-control"
                                   name="password" required autocomplete="current-password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                       {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label checkbox-left" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary mb-2" style="color : darkyellow;">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>

                <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                <div class="social d-flex flex-column text-center">
  <div class="btn btn-github">
    <i class="ion-logo-github mr-2"></i>
    Github
  </div>
  <div class="btn btn-facebook">
    <i class="ion-logo-facebook mr-2"></i>
    Facebook
  </div>
  <div class="btn btn-google">
    <i class="ion-logo-google mr-2"></i>
    Google
  </div>
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