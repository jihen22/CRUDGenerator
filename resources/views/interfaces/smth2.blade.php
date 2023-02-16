<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">CRUD Generator</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">My Projects</a></li>
          <li><a href="#">Edit Profile</a></li>
          <li><a href="#">Change Password</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </div>
    </nav>
    <!-- Main content -->
    <div class="container">
      <h2>My Projects</h2>
      <table class="table" id="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Project Name</th>
            <th>Type</th>
            <th>Laravel</th>
            <th>Cruds</th>
            <th>Created At</th>
          </tr>
        </thead>
        <tbody>
          <!-- Empty table rows, will be populated with new data -->
        </tbody>
      </table>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProjectModal">Add a Project</button>
      <!-- Add project modal -->
      <div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="addProjectModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="addProjectModalLabel">Add a New Project</h4>
            </div>
            <div class="modal-body">
              <form id ="add-project-form">
                <div class="form-group">
                  <label for="id">ID:</label>
                  <input type="text" class="form-control" id="id" placeholder="Enter ID">
                </div>
                <div class="form-group">
                  <label for="projectName">Project Name:</label>
                  <input type="text" class="form-control" id="projectName" placeholder="Enter Project Name">
                </div>
                <div class="form-group">
                  <label for="type">Type:</label>
                  <input type="text" class="form-control" id="type" placeholder="Enter Type">
                </div>
                <div class="form-group">
                  <label for="laravel">Laravel:</label>
                  <input type="text" class="form-control" id="laravel" placeholder="Enter Laravel">
                </div>
                <div class="form-group">
                  <label for="CRUDS">CRUDS</label>
                  <input type="text" class="form-control" id="CRUDS" placeholder="enter number of CRUDS">
                </div>
                <div class="form-group">
                  <label for="date-creation">Created at </label>
                  <input type="date" class="form-control" id="Date-creation" placeholder="enter Date">
                </div>
                <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>

            </form>
  </div>
</div>
<script>
    $(document).ready(function() {
  // Add project form submit handler
  $('#add-project-form').submit(function(event) {
    // Prevent default form submission behavior
    event.preventDefault();

    // Get the values from the form
    var id = $('#id').val();
    var projectName = $('#project-name').val();
    var type = $('#type').val();
    var laravel = $('#laravel').val();
    var cruds = $('#cruds').val();
    var createdAt = $('#created-at').val();

    // Create a new table row
    var newRow = '<tr>' +
                 '<td>' + id + '</td>' +
                 '<td>' + projectName + '</td>' +
                 '<td>' + type + '</td>' +
                 '<td>' + (laravel ? 'Yes' : 'No') + '</td>' +
                 '<td>' + (cruds ? 'Yes' : 'No') + '</td>' +
                 '<td>' + createdAt + '</td>' +
                 '</tr>';

    // Append the new row to the table
    $('#table tbody').append(newRow);

    // Clear the form
    $('#add-project-form')[0].reset();
  });
});

    </script>
    <script>
  document.getElementById("submit").addEventListener("click", function() {
    // Get all the input fields
    const Idproject= document.getElementById("id").value;
    const ProjectName = document.getElementById("project-name").value;
    const type = document.getElementById("type").value;
    const laravel = document.getElementById("database").value;
    const cruds = document.getElementById("adminUsername").value;
    const createdAt = document.getElementById("adminPassword").value;
  

    // Validate the input fields
    if (Idproject === '' ||ProjectName === '' ||type === '' ||laravel === '' || cruds  === '' || createdAt === '') {
      alert('Please fill all the required fields.');
      return;
  
    }
  });
</script>