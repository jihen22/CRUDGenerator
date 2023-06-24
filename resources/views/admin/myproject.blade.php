<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Settings</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


		<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('Dashboardassets/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script> 


        <!-- CSS pour Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Fichier JavaScript pour Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="{{asset('css/styles.css')}}" rel="stylesheet" />
		

        




        
          <style>


          .flex-container {
  display: flex;
}

.content-warper {
  flex: 1;
  display: flex;
  flex-direction: column;
}

#monDiv {
  min-height: calc(100vh - 60px);
  margin-right: 70px;
  margin-left: 100px;
  width: calc(100% - 80px);
}

.small-sidebar {
  width: 70px;
}

.container-fluide {
  margin-bottom: 50px;
}

.content {
  max-height: 500px;
  padding: 20px;
}

.content-header {
  margin-bottom: 20px;
}

.content-header h1 {
  padding: 42px 57px;
  display: inline-block;
}

     



</style>
    </head>

    <body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;">

<div id="app" class="wrapper">
  @include('admin.partials.topbar')
  <div id="layoutSidenav" class="flex-container">
    @include('admin.partials.sidebar', ['sidebarClass' => 'small-sidebar'])

    <div class="content-warper" id="monDiv" style="">
      <div class="content-header">
        <div class="container-fluid p-0">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluide p-0">
        <div class="card card-default">
          <div class="card-body">

            <!-- Button for adding new project -->
            <div date-v-cd083fee>
              <button data-v-cd083fee type="button" class="btn btn-primary" id="newProjectButton">
                <i data-v-cd083fee class="fas fa-plus mr-1"></i> New Project
              </button>

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">New Project</h5>
                      <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form class="row g-3" id="newProjectForm" style="display:none;">
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
                          <a class="nav-link" href="{{ url('/monCrud') }}">
                            <button class="btn btn-primary" type="submit">Add Project</button>
                          </a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body p-0">
    <table class="table table-sm table-striped table-hover" id="projectTable">
        <thead>
            <tr>
                <th scope="col" width="">Project ID</th>
                <th scope="col">Project Name</th>
                <th scope="col" width="">Language</th>
                <th scope="col" width="">Date Format</th>
                <th scope="col" width="130" class="text-center">Laravel version</th>
                <th scope="col" width="160">Date of Creation</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody id="projectTableBody">
            @foreach($donnees as $donnee)
            <tr>
                <td>{{ $donnee->id }}</td>
                <td><a href="{{ route('admin.dashboard') }}?nameproject={{ $donnee->nameproject }}">{{ $donnee->nameproject }}</a></td>
                <td>{{ $donnee->language }}</td>
                <td>{{ $donnee->date_format }}</td>
                <td>{{ $donnee->laravel_version }}</td>
                <td>{{ $donnee->created_at }}</td>
                <td><a href="{{ route('admin.settings') }}" class="btn btn-primary">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
<div></div>
</div>
</div>


</body>







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

@include('admin.partials.footer')
</body>

<html>
