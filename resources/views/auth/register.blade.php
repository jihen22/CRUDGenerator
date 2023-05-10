<DOCTYPE>
<html>
    <header>
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
      <style>
        .dark-theme {
  background-color: #1c1c1c;
  color: #f2f2f2;
}
.card {
  background-color: #323232;
  color: #f2f2f2;
}



label.col-form-label {
  color: #000000;
}
.form-control {
  background-color: #4d4d4d;
  color: #f2f2f2;
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
@extends('layouts.app')
    </header>
<body lass="img js-fullheight" style="background-image: url(LoginpageRessources/images/bg.jpg);">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                <div  class="py-56">
                    <img src="{{ asset('logo.png') }}" style="height:180px;">
                  </div>
                    
                    <form id="form1" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                              <label for="nameproject" class="col-md-4 col-form-label text-md-end">{{ __('Project Name') }}</label>

                                  <div class="col-md-6">
                                     <input id="nameproject" type="text" class="form-control @error('nameproject') is-invalid @enderror" name="nameproject" value="{{ old('nameproject') }}" required autocomplete="nameproject">

                                          @error('nameproject')
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
  

    
   
    <div class="row mb-3">
    <label for="language" class="col-md-4 col-form-label text-md-end">{{ __('Language') }}</label>

    <div class="col-md-6">
        <select id="language" class="form-control @error('language') is-invalid @enderror" name="language" required>
        <option value="english">English</option>
                              <option value="french">French</option>
                              <option value="spanish">Spanish</option>
                              <option value="german">German</option>
            <!-- Ajouter d'autres langues si nécessaire -->
        </select>

        @error('language')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="date_format" class="col-md-4 col-form-label text-md-end">{{ __('Date Format') }}</label>
      <div class="col-md-6">
        <select id="date_format" class="form-control @error('date_format') is-invalid @enderror" name="date_format" required>
        <option value="dd/mm/yyyy">dd/mm/yyyy</option>
        <option value="mm/dd/yyyy">mm/dd/yyyy</option>
        <option value="yyyy-mm-dd">yyyy-mm-dd</option>
        </select>

        @error('date_format')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
  

    <div class="row mb-3">
                  <label for="laravel_version" class="col-md-4 col-form-label text-md-end">Laravel version</label>
                  <div class="col-md-6">
                      <select class="form-select" id="laravel_version" name="laravel_version" required>
                      <option selected disabled value="">version</option>
                      <option value="Laravel 9(PHP=>8.0.2)">Laravel 9(PHP=>8.0.2)</option>
                      <option value="Laravel 8(PHP=>7.4)">Laravel 8(PHP=>7.4)</option>
                      <option value="Laravel 7(PHP=>7.2.5)">Laravel 7(PHP=>7.2.5)</option>
                      </select>
                </div>
    </div>



    

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" id="submit-btn">
                                    {{ __('Register and start new project !') }}
                                </button>
                            </div>
                        </div>
    </form>

@endsection
</body>
