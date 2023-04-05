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
    </style>
@extends('layouts.app')
    </header>
<body>
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
            <option value="en" @if(old('language') == 'en') selected @endif>English</option>
            <option value="fr" @if(old('language') == 'fr') selected @endif>Français</option>
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
<<<<<<< HEAD
    </form>

@endsection
=======
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection


  
    
   

  





</body>
<script>
  document.getElementById("submitButton").addEventListener("click", function() {
    // Get all the input fields
    const hostname = document.getElementById("hostname").value;
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const database = document.getElementById("database").value;
    const adminUsername = document.getElementById("adminUsername").value;
    const adminPassword = document.getElementById("adminPassword").value;
    const email = document.getElementById("email").value;
    const appname = document.getElementById("appName").value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Validate the input fields
    if (hostname === '' || username === '' || password === '' || database === '' || adminUsername === '' || appname === ''|| email === '' ) {
      alert('Please fill all the required fields.');
      return;
      
      if (!emailRegex.test(email)) {
      alert('Please enter a valid email address.');
      return;
    }
    }



  
  });
</script>

</html>
>>>>>>> 306231112456bc8a55ec95e18190491846c6620a
