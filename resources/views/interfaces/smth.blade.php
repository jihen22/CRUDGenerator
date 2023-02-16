<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <title>Crud Generator</title>
  
 
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 bg-light sidebar">
                <div class="sidebar-header">
                    <header class="header">
  <nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="#">Crud Generator</a>
  </nav>
</header>
                </div>
                <div class="sidebar-body">
                    <p class="small-title">Profile</p>
                    <div class="sidebar-buttons">
                        <button class="btn btn-primary btn-block" id="my-projects-btn">Projects</button>
                        <button class="btn btn-primary btn-block" id="edit-profile-btn">Edit Profile</button>
                        <button class="btn btn-primary btn-block" id="change-password-btn">Change Password</button>
                        <button class="btn btn-primary btn-block" id="my-team-btn">My Team</button>
                        <button class="btn btn-danger btn-block" id="logout-btn">Logout</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-10">
            <div id="edit-profile-form" style="display: none;">
  <form>
    <div class="form-group">
      <label for="edit-name">Name:</label>
      <input type="text" class="form-control" id="edit-name">
    </div>
    <div class="form-group">
      <label for="edit-email">Email:</label>
      <input type="email" class="form-control" id="edit-email">
    </div>
    <button type="submit" class="btn btn-primary" id="validate-change-btn">Validate Change</button>
  </form>
</div>
<div id="edit-pwd-form" style="display: none;">
  <form>
    <div class="form-group">
      <label for="edit-pwd">Current Password</label>
      <input type="password" class="form-control" id="edit-pwd">
    </div>
    <div class="form-group">
      <label for="edit-newpwd">New Password</label>
      <input type="password" class="form-control" id="edit-newpwd">
    </div>
    <div class="form-group">
      <label for="editpwdrepeat">Repeat</label>
      <input type="password "class= "form-control" id="editpwdrepeat">
    </div>
    <button type="submit" class="btn btn-primary" id="validate-pwd-btn">Change password</button>
  </form>
</div>
<div id="edit-Team-form" style="display: none;">
  <form>
    
    <div class="form-group">
      <label for="edit-Team ">Team Name</label>
      <input type="email" class="form-control" id="edit-Team ">
    </div>
    <button type="submit" class="btn btn-primary" id="validate-team-btn">Create</button>
  </form>
</div>
    <div class="table-responsive">
        <table class="table table-striped" id="projects-table">
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
                <!-- Your table data will be inserted here dynamically -->
            </tbody>
        </table>
        <button class="btn btn-success" id="add-project-btn">Add Project</button>
    </div>
</div>

<div id="add-project-modal" class="modal" >
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Add Project</h2>
    <form id="add-project-form">
    <div class="form-group">
        <label for="project-name">ID</label>
        <input type="text" id="project-ID" name="project-ID" required>
      </div>
      <div class="form-group">
        <label for="project-name">Project Name:</label>
        <input type="text" id="project-name" name="project-name" required>
      </div>
      <div class="form-group">
        <label for="project-type">Project Type:</label>
        <input type="text" id="project-type" name="project-type" required>
      </div>
      <div class="form-group">
        <label for="laravel-version">Laravel </label>
        <input type="text" id="laravel-version" name="laravel-version" required>
      </div>
      <div class="form-group">
        <label for="number-cruds"> CRUDs:</label>
        <input type="number" id="number-cruds" name="number-cruds" min="0" required>
      </div>
      <div class="form-group">
        <label for="number-cruds">Created at :</label>
        <input type="number" id="date-creation" name="date-creation"  required>
      </div>
      <button type="submit" id="submit">Add Project</button>
    </form>
  </div>
</div>




<script>
// Get the form and table elements
const addProjectForm = document.getElementById("add-project-form");
const projectsTable = document.getElementById("projects-table");

// Add event listener to the form submit button
addProjectForm.addEventListener("submit", function(event) {
  // Prevent the default form submission behavior
  event.preventDefault();

  // Get the input values from the form
  const projectID = document.getElementById("project-ID").value;
  const projectName = document.getElementById("project-name").value;
  const projectType = document.getElementById("project-type").value;
  const laravelVersion = document.getElementById("laravel-version").value;
  const numberCruds = document.getElementById("number-cruds").value;
  const CreationDate = document.getElementById("date-creation").value;

  // Create a new row for the project data
  const newRow = projectsTable.insertRow(-1);
  const cell0 = newRow.insertCell(0);
  const cell1 = newRow.insertCell(1);
  const cell2 = newRow.insertCell(2);
  const cell3 = newRow.insertCell(3);
  const cell4 = newRow.insertCell(4);
  const cell5 = newRow.insertCell(5);
  cell0.innerHTML = projectID;
  cell1.innerHTML = projectName;
  cell2.innerHTML = projectType ;
  cell3.innerHTML =laravelVersion;
  cell4.innerHTML =numberCruds;
  cell5.innerHTML =CreationDate;
  // Reset the form inputs
  addProjectForm.reset();
});

// function to delete a project
    $("#projects-table").on("click", ".delete-project-btn", function() {
        // find the index of the project to be deleted
        var index = $(this).closest("tr").index();

        // remove the project from the projects array
        projects.splice(index, 1);

       // render the updated table
       renderTable();
    });


</script>

<script>
$(document).ready(function() {
  var $projectsTable = $("#projects-table"),
      $addProjectBtn = $("#add-project-btn"),
      $editProfileForm = $("#edit-profile-form"),
      $editPwdForm = $("#edit-pwd-form"),
      $editTeamForm = $("#edit-Team-form"),
      $addProjectForm = $("#add-project-form");
       $projectsTable.hide();
 $addProjectBtn.hide();


  $(document).on("click", "#my-projects-btn", function() {
    $projectsTable.show();
    $addProjectBtn.show();
    $editProfileForm.hide();
    $editPwdForm.hide();
    $editTeamForm.hide();
    $addProjectForm .hide();
  });

  $(document).on("click", "#edit-profile-btn", function() {
    $editProfileForm.show();
    $editPwdForm.hide();
    $projectsTable.hide();
    $addProjectBtn.hide();
    $editTeamForm.hide();
    $addProjectForm .hide();
  });

  $(document).on("click", "#change-password-btn", function() {
    $editPwdForm.show();
    $editProfileForm.hide();
    $projectsTable.hide();
    $addProjectBtn.hide();
    $editTeamForm.hide();
    $addProjectForm .hide();

  });

  $(document).on("click", "#my-team-btn", function() {
    $editTeamForm.show();
    $editPwdForm.hide();
    $editProfileForm.hide();
    $projectsTable.hide();
    $addProjectBtn.hide();
    $addProjectForm .hide();
  });
 

});
</script>
    </body>
    </html>

          
