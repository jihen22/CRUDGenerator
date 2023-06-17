<!doctype html>
<html lang="en">
@extends('layouts.app')

    <head>
  	<title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('LoginpageRessources/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	
    <link rel="stylesheet" href="{{asset('buttons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('buttons/css/style.css')}}">
  
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
      </style>
    <style>
        .dark-theme {
  background-color: #1c1c1c;
  color: #f2f2f2;
}




label.col-form-label {
  color: #ffffff;
}
.form-control {

  
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}
.form-control:focus {
  background-color: #696969;
  color: #f2f2f2;
}
.logo-image {
  height: 180px;
  width: 180px;
}
</style>
    </style>
   
    <body class="img js-fullheight" style="background-image: url(LoginpageRessources/images/header-bg.jpg);">
	@section('content')
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h2 class="mb-4 text-center">Have an account?</h2>
                  <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row mb-3">
           
            <div class="col-md-6">
                <input id="username" type="username" class=" @error('username') is-invalid @enderror
                @error('email') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus  style="width: 200%;" placeholder="Email Address or Username">

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
         

            <div class="col-md-6">
                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  style="width: 200%;" placeholder="Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        <div class="row mb-3">
    <div class="col-md-6">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label checkbox-left" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>
</div>
<div class="row mb-0">
    <div >
        <button type="submit" class="btn btn-primary mb-2">
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
              <div class="social d-flex text-center">
              <a href="/login/github">
  <button type="button" class="btn btn-github rounded-circle d-flex align-items-center">
    <i class="ion-logo-github mr-2"></i>
    Github
  </button>
</a>
<a href="/login/facebook">
  <button type="button" class="btn btn-facebook rounded-circle d-flex align-items-center">
    <i class="ion-logo-facebook mr-2"></i>
    Facebook
  </button>
</a>
  <a href="/login/google">
  <button type="button" class="btn btn-google rounded-circle d-flex align-items-center">
    <i class="ion-logo-google mr-2"></i>
  google
  </button>
</a>
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

