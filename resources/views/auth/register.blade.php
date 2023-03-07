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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
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
                        <div class="container my-5">
  <h1 class="text-left">Additionnal Settings</h1>
  <form>
   
    
    <div class="card my-3">
      <div class="card-header">
        Database Connection
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="hostname">Hostname</label>
          <input type="text" class="form-control" id="hostname" placeholder="Enter hostname" required>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Enter username" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>
     
      </div>
    </div>

    <div class="card my-3">
      <div class="card-header">
        Application Settings
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="appName">Application Name</label>
          <input type="text" class="form-control" id="appName" placeholder="Enter application name" required>
        </div>
        <div class="form-group">
          <label for="language">Select Language:</label>
          <select class="form-control" id="language">
            <option value="en">English</option>
            <option value ="fr">French</option>
    <option value="es">Spanish</option>
    <option value="de">German</option>
    <option value="it">Italian</option>
  </select>
</div>
</div>
</div>
 




                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register and start new project !') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


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
// Redirect to the login page


    else if (confirm("Are you sure you want to submit the form and go to logging page?")) {
      window.location.href = "/Interfaces/loging";
      
    }
  
  });
</script>

@endsection


  
    
   

  





</body>
</html>