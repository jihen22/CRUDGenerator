@extends('layouts.app')
<body lass="img js-fullheight" style="background-image: url(LoginpageRessources/images/header-bg.jpg);">
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
    .form-group {
        margin-bottom: 2rem;
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
    /* New CSS */
    .form-control {
        height: 40px;
        font-size: 14px;
    }
    .social .btn {
        width: 100%;
        height: 40px;
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
</style>

<body class="img js-fullheight" style="background-image: url(LoginpageRessources/images/header-bg.jpg);">
@extends('layouts.app')

@section('content')
@section('content')
<style>
    body {
        background-color: #222;
        color: #fff;
    }
</style>

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
         
                <div >{{ __('Reset Password') }}</div>

               
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
              
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

@endsection
</body>
