<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Admin Interface</title>
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center"> Sign-in</h1>
    <div class="row mt-5">
      <div class="col-md-6 offset-md-3">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          
        </form>
        <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
      </div>
    </div>
  </div>
  
  <script>
  document.getElementById("submitButton").addEventListener("click", function() {
    if (confirm("Are you sure you want to submit the form and go to Home page?")) {
      console.log('yes')
      window.location.href = "/Interfaces/smth";
    }
  });
</script>
</body>
</html>
