<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
        




        <style>

     



</style>
    </head>

<body>

<!-- Button for adding new project -->
<button class="btn btn-primary" id="newProjectButton">New Project</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >

<form class="row g-3" id="newProjectForm" style="display:;">
  <div class="col-md-6">
    <label for="projectId" class="form-label">Project ID</label>
    <input type="text" class="form-control" id="projectId" required>
  </div>
  <div class="col-md-6">
    <label for="projectName" class="form-label">Project Name</label>
    <input type="text" class="form-control" id="projectName" required>
  </div>
  <div class="col-md-4">
    <label for="Laravelversion" class="form-label">Laravel version</label>
    <select class="form-select" id="Laravelversion" required>
      <option selected disabled value="">version</option>
      <option value="Laravel 9(PHP=>8.0.2)">Laravel 9(PHP=>8.0.2)</option>
      <option value="Laravel 8(PHP=>7.4)">Laravel 8(PHP=>7.4)</option>
      <option value="Laravel 7(PHP=>7.2.5)">Laravel 7(PHP=>7.2.5)</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="projectLanguage" class="form-label">Language</label>
    <select class="form-select" id="projectLanguage" required>
      <option selected disabled value="">Choose...</option>
      <option value="english">English</option>
      <option value="french">French</option>
      <option value="spanish">Spanish</option>
      <option value="german">German</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="projectDateFormat" class="form-label">Date Format</label>
    <select class="form-select" id="projectDateFormat" required>
      <option selected disabled value="">Choose...</option>
      <option value="dd/mm/yyyy">dd/mm/yyyy</option>
      <option value="mm/dd/yyyy">mm/dd/yyyy</option>
      <option value="yyyy-mm-dd">yyyy-mm-dd</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="projectDate" class="form-label">Date of Creation</label>
    <input type="date" class="form-control" id="projectDate" required>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Add Project</button>
  </div>
</form> 
</div>




<script>
  $(document).ready(function() {
    $("#newProjectButton").click(function() {
      $("#exampleModal").modal("show");
    });
  });
</script>

<!-- Table for displaying added projects -->



<script>
  // Define an array to hold the project data
  let projects = [];

  // Get references to the button and form
  const newProjectButton = document.getElementById('newProjectButton');
  const newProjectForm = document.getElementById('newProjectForm');
  const projectTableBody = document.getElementById('projectTableBody');

  // Add click event listener to button to toggle display of form
  newProjectButton.addEventListener('click', function() {
    newProjectForm.style.display = (newProjectForm.style.display === 'none') ? 'block' : 'none';
  });
  
  // Add submit event listener to form to handle adding new project
  newProjectForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get values from form and create a new project object
    const projectId = document.getElementById('projectId').value;
    const projectName = document.getElementById('projectName').value;
    const laravelVersion = document.getElementById('Laravelversion').value;
    const projectLanguage = document.getElementById('projectLanguage').value;
    const projectDateFormat = document.getElementById('projectDateFormat').value;
    const projectDate = document.getElementById('projectDate').value;

    const newProject = {
      id: projectId,
      name: projectName,
      level: laravelVersion,
      language: projectLanguage,
      dateFormat: projectDateFormat,
      dateCreated: projectDate
    };
    
    // Add the new project to the projects array and reset the form
    projects.push(newProject);
    newProjectForm.reset();
    newProjectForm.style.display = 'none';
    
    // Call the function to display the updated projects table
    displayProjectsTable();
  });

  // Function to display the projects table
  function displayProjectsTable() {
    // Clear the existing table body content
    projectTableBody.innerHTML = '';
    
    // Loop through the projects array and create a new table row for each project
    for (let i = 0; i < projects.length; i++) {
      const project = projects[i];
      
      const tableRow = document.createElement('tr');
      tableRow.innerHTML = `
        <td>${project.id}</td>
        <td>${project.name}</td>
        <td>${project.level}</td>
        <td>${project.language}</td>
        <td>${project.dateFormat}</td>
        <td>${project.dateCreated}</td>
      `;
      
      projectTableBody.appendChild(tableRow);
    }
  }
</script>

<table class="table" id="projectTable">
  <thead>
    <tr>
      <th>Project ID</th>
      <th>Project Name</th>
      <th>Laravel version</th>
      <th>Language</th>
      <th>Date Format</th>
      <th>Date of Creation</th>
    </tr>
  </thead>
  <tbody id="projectTableBody">
  </tbody>
</table>
<script>
function displayProjectsTable() {
  // Get a reference to the table body
  const projectTableBody = document.getElementById('projectTableBody');

  // Clear the existing table body content
  projectTableBody.innerHTML = '';

  // Loop through the projects array and create a new table row for each project
  for (let i = 0; i < projects.length; i++) {
    const project = projects[i];

    const tableRow = document.createElement('tr');
    tableRow.innerHTML = `
      <td>${project.id}</td>
      <td>${project.name}</td>
      <td>${project.level}</td>
      <td>${project.language}</td>
      <td>${project.dateFormat}</td>
      <td>${project.dateCreated}</td>
    `;

    projectTableBody.appendChild(tableRow);
  }

  // Show the table if it was hidden
  const projectTable = document.getElementById('projectTable');
  projectTable.style.display = 'table';
}




</script>
</body>

<html>
