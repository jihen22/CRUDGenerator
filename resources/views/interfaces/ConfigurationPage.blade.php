<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>Admin Panel Configuration</title>

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
  </head>
  <body>

<div class="container my-5">
  <h1 class="text-center">Admin Panel configuration</h1>
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
        <div class="form-group">
          <label for="database">Database</label>
          <input type="text" class="form-control" id="database" placeholder="Enter database name" required>
        </div>
      </div>
    </div>
    <div class="card my-3">
      <div class="card-header">
        Admin Login
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="adminUsername">Username</label>
          <input type="text" class="form-control" id="adminUsername" placeholder="Enter admin username" required>
        </div>
        <div class="form-group">
          <label for="adminPassword">Password</label>
          <input type="password" class="form-control" id="adminPassword" placeholder="Enter admin password" required>
        </div>
      </div>
    </div>
    <div class="card my-3">
      <div class="card-header">
        Email Settings
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email address" required>
        </div>
        <div class="form-group">
          <label for="emailPassword">Password</label>
          <input type="password" class="form-control" id="emailPassword" placeholder="Enter email password" required>
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
  <button type="submit" class="btn btn-primary" id="submitButton">Create Admin panel</button>




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

</script>

</body>
</html>
