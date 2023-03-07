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
.card {
  margin: 0 auto;
  max-width: 1000px; /* ou la valeur de votre choix */
  border: 1px solid #ccc;
  border-radius: 0.5rem;
  padding: 1rem;
}

.flex-container {
	display: flex;
}

.content-warper {
	flex: 1;
	display: flex;
	flex-direction: column;
}
#monDiv {
	min-height: calc(100vh - 60px); /* Calculer la hauteur minimale pour éviter le recouvrement de la barre de navigation */
	margin-right: 80px; /* Ajouter une marge à droite pour s'ajuster à côté de la barre latérale */
	margin-left: 80px; /* Ajouter une marge à gauche pour rapprocher le div de la barre latérale */
	width: calc(100% - 80px); /* Ajuster la largeur pour qu'elle s'ajuste à la largeur restante de l'espace disponible à gauche de la barre latérale */
}

.small-sidebar {
	width: 70px; /* Spécifier une largeur fixe pour l'élément de la barre latérale */
}
.container-fluide {
    margin-bottom: 50px; /* Ajouter une marge en bas pour rapprocher la carte du contenu suivant */
}
	</style>
<style>
.intro {
  height: 100%;
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

.card {
  border: 1px solid #ccc;
  border-radius: 0.5rem;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}


.mask-custom {
  background: rgba(24, 24, 16, .2);
  border-radius: 2em;
  backdrop-filter: blur(25px);
  border: 2px solid rgba(255, 255, 255, 0.05);
  background-clip: padding-box;
  box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
}</style>

        
    </head>
   


  
<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;" >
	<div id="app" class="warpper">
	@include('admin.partials.topbar')
	<div id="layoutSidenav" class="flex-container">
       @include('admin.partials.sidebar', ['sidebarClass' => 'small-sidebar'])

  
    
  <div class="content-warper" id="monDiv" style="">
	<div class="content-header">
    <section class="content">
        <div class="container-fluid p-0">
            <div class="card card-default">
                <div class="card-header"class="col-sm-6"><h3>Settings</h3></div>
                <div class="card-body">     
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form method="POST" action="/generate-crud">
                                <div class="form-group">
                                    <label for="tableName">Table Name:</label>
                                    <input type="text" id="tableName" name="tableName" required>
                                </div>
                                <div class="form-group">
                                    <label for="ModelName">Model name</label>
                                    <input type="text" id="ModelName" name="ModelName">
                                </div>
                                <div class="form-group">
                                    <label for="ControllerName">Controller name</label>
                                    <input type="text" id="ControllerName" name="ControllerName">
                                </div>
                                <div class="form-group">
                                    <label>Which CRUD operations do you want to perform?</label>
                                    <div class="checkbox-group">
                                        <input type="checkbox" id="createCheckbox" name="createCheckbox" value="create">
                                        <label for="createCheckbox">Create</label>
                                    </div></br>
                                    <div class="checkbox-group">
                                        <input type="checkbox" id="readCheckbox" name="readCheckbox" value="read">
                                        <label for="readCheckbox">Read</label>
                                    </div></br>
                                    <div class="checkbox-group">
                                        <input type="checkbox" id="UpdateCheckBox" name="UpdateCheckBox" value="read">
                                        <label for="UpdateCheckBox">Update</label>
                                    </div></br>
                                    <div class="checkbox-group">
                                        <input type="checkbox" id="DeleteCheckbox" name="DeleteCheckbox" value="read">
                                        <label for="DeleteCheckbox">Delete</label>
                                    </div></br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-header"class="col-sm-6"><h3>TableFields</h3></div>
                <div class="card-body">     
                    <div class="row">
                        <section class="intro">
                            <div class="bg-image h-100" >
                                <div class="mask d-flex align-items-center h-100">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-borderless mb-0">
                                                               
                                                                               

                    <thead>
                      <tr>
                        <th scope="col">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                          </div>
                        </th>
                       <th>Feild Type</th>
            <th>Database Column name</th>
            <th>Visual title</th>
            <th>In List</th>
            <th> In Create</th>
            <th> In Show</th>
            <th> In edit</th>
            <th>Required </th>
           
            <th>Max</th>
            <th>Min</th>
            <th>Default Value</th>
            <th>edit</th>
            <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                          </div>
                        </th>
                        
<th>auto_increment</th>

<th>id</th>
<th>ID</th>
<th>yes</th>
<th>-</th>
<th>-</th>
<th>yes</th>
<th>-</th>
<th>-</th>
<th>-</th>
<th>-</th>
<th>-</th>
<th>-</th>

                        <td>
                          <button type="button" class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-times"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" />
                          </div>
                        </th>
                        <th>datetime</th>

<th>created_at</th>
<th>Created at </th>
<th>yes</th>
<th>-</th>
<th>-</th>
<th>yes</th>
<th>-</th>
<th>-</th>
<th>-</th>
<th>-</th>
<th>-</th>
<th>-</th>
                        <td>
                          <button type="button" class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-times"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" checked/>
                          </div>
                        </th>
                        <th>datetime</th>
<th>updated_at</th>

<th>Updated at</th>
<th>ID</th>
<th>yes</th>
<th>-</th>
<th>-</th>
<th>yes</th>
<th>-</th>
<th>-</th>
<th>-</th>
<th>-</th>
<th>-</th>
<th>-</th>
                        <td>
                          <button type="button" class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-times"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" checked/>
                          </div>
                        </th>
                        <th>datetime</th>
<th>deleted_at</th>

<th>Deleted at</th>
<th>ID</th>
<th>yes</th>
<th>-</th>
<th>-</th>
<th>yes</th>
<th>-</th>
<th>-</th>
<th>-</th>
<th>-</th>
<th>-</th>
<th>-</th>
                        <td>
                          <button type="button" class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-times"></i>
                          </button>
                        </td>
                      </tr>
                     
          <!-- Empty table rows, will be populated with new data -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

      <div class="form-group mt-4">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFeildModal">Add a Feild</button>
</div>

      <!-- Add Feild modal -->
      <form method="POST" action="{{ route('tablefiles.generate') }}">
    @csrf
      <div class="modal fade" id="addFeildModal" tabindex="-1" role="dialog" aria-labelledby="addFeildModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">

              <h4 class="modal-title" id="addProjectModalLabel">Feild Settings</h4>
            </div>
            <div class="modal-body">
              <form id ="add-Feild-form">
                <div class="form-group">




                
                  <label for="FeildType">Feild Type</label>
                 
<select id="FeildType" name="field-type">
  <optgroup label="number-field">Number Field</optgroup>
  <option value ="Text">Text</option>
  <option value ="Email">Email</option>
  <option value ="Textarea">Textarea</option>
  <option value ="Password">Password</option>
  </optgrpoup>
  <optgroup label="choice-field">Choice Field</optgroup>
  <option value ="Radio">Radio</option>
  <option value ="Select">Select</option>
  <option value ="Checkbox">Checkbox</option>
</optgrpoup>
<optgroup label="text-field">
  <option value ="Integer">Integer</option>
  <option value ="Float">Float</option>
  <option value ="money">money</option>
</optgroup>
<optgroup label="date-time-field">
<option value ="DatePicker">DatePicker</option>
<option value ="Date/TimePicker">Date/TimePicker</option>
<option value ="Time Picker">Time Picker</option>
</optgroup>

<optgroup label="file-upload-field">
  <option value ="File">File</option>
  <option value ="Photo">Photo</option>
</optgroup>

<optgroup label ="RelationshipFeilds">
  <option value ="Belongstorelationship">Belongs to relationship</option>
  <option value ="BelongsMany">Belongs to many relationships</option>
</optgroup>
</select>
                </div>
                <div class="form-group">
                  <label for="DBCName">Data base column Name:</label>
                  <input type="text" class="form-control" id="DBCName" placeholder="Enter DBC Name">
                </div>
                <div class="form-group">
                  <label for="VisualTitle">Visual Title ?</label>
                  <input type="text" class="form-control" id="VisualTitle" placeholder="Enter Visual title">
                </div>
<div class="form-group" >
<label for="validation">Validation</label>
<select id="validation" >
  <option value="Required" >Required</option>
  <option value="Optionnal" >optionnal</option>
  <option value="Required/Unique">Required/unique</option>
</select>
                </div>

<div class="form-group">
<label for="inlist">In List?</label>
<select id="inlist">
<option value="yes">yes</option>
<option value="no">no</option>
  
</select>
</div>
<div class="form-group" >
<label for="increate">In create?</label>
<select id="increate">
  <option value="yes">yes</option>
  <option value="no">no</option>
  
</select>
</div>
<div class="form-group" >
<label for="inedit">In edit?</label>
<select id="inedit">
  <option value="yes">yes</option>
  <option value="no">no</option>
  
</select>
</div>

<div class="form-group">
<label for="inshow">In show?</label>
<select id="inshow">
  <option value="yes">yes</option>
  <option value="no">no</option>
  
</select>
</div>
               
                <h4 class="modal-title" id="addProjectModalLabel">Additionnal Settings(Extra Options )</h4>

                <label for="field-max-limit">Max Limit:</label>
<input type="number" id="field-max-limit"></br>


<label for="field-min-limit">Min Limit:</label>
<input type="number" id="field-min-limit"></br>


<label for="field-default-value">Default Value:</label>
<input type="text" id="field-default-value"></br>

                <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>

            </form>
  </div>
</div>
</div></div>
<div class="form-group mt-4">

</div>
</form>

</div>
           </div>
           
        </div>
        </div>  
        
</section>
<div class="form-group mt-4">
           <button type="submit" class="btn btn-primary rounded-0 text-blod" > Save Crud</button></div>
        </div>

</div>
</div>
</div>
<script>
    $(document).ready(function() {
  // Add Feild form submit handler
  $('#add-Feild-form').submit(function(event) {
    // Prevent default form submission behavior
    event.preventDefault();

    // Get the values from the form
    var FeildType = $('#FeildType').val();
    var DBCName = $('#DBCName').val();
    var Visualtitle= $('#VisualTitle').val();
    var Validation= $('#validation').val();
    var Visibility = $('#Visibility').val();
    var inlist = $('#inlist').val(); 
   
     var increate = $('#increate').val(); 
     var inedit = $('#inedit').val();  
    var inshow = $('#inshow').val();
    var Max = $('#field-max-limit').val();
    var Min= $('#field-min-limit').val();
    var valuedefault = $('#field-default-value').val();

    // Create a new table row
    var newRow = '<tr>' +
                 '<td>' + FeildType + '</td>' +
                 '<td>' + DBCName + '</td>' +
                 '<td>' + Visualtitle + '</td>' +
                 '<td>' + inlist + '</td>'+
                 '<td>' + increate + '</td>'+
                 '<td>' + inshow + '</td>'+
                '<td>' +inedit+ '</td>' +
                '<td>' + Validation + '</td>' +
                '<td>' +Max+ '</td>'+
                '<td>' +Min+ '</td>'+
                 '<td>' +valuedefault + '</td>'+
                 '<td><button class="edit-btn">Edit</button></td>' +
              '<td><button class="delete-btn">Delete</button></td>' + 
                 '</tr>';

    // Append the new row to the table
    $('#table tbody').append(newRow);

    // Clear the form
    $('#add-Feild-form')[0].reset();
  });
});

    </script>
    <script>
  document.getElementById("submit").addEventListener("click", function() {
    // Get all the input fields
    const  FeildType= document.getElementById("FeildType").value;
    const DBCName = document.getElementById("DBCName").value;
    const Visualtitle = document.getElementById("VisualTitle").value;
    const Validation = document.getElementById("Validation").value;
    const Visibility = document.getElementById("Visibility").value;
    const Max = document.getElementById("set-max-limit").value;
    const Min = document.getElementById("set-min-limit").value;
    const Defaultvalue = document.getElementById("set-default-value").value;
  

    // Validate the input fields
    if (DBCName  === '' ||Visualtitle === '' ) {
      alert('Please fill all the required fields.');
      return;
  
    }
  });
</script>
@include('admin.partials.footer')
</body>
</html>