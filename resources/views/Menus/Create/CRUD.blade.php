<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Create Table</title>
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
         <meta name="csrf-token" content="{{ csrf_token() }}">

            <!-- jQuery -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <!-- Fichier JavaScript pour Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
             <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
             <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css">
               <!-- Sweetalert-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.js"></script>


		

	
                  <style>
               .card {
                     margin: 0 auto;
             max-width: 1000px; /* ou la valeur de votre choix */
               border: 1px solid #ccc;
               border-radius: 0.5rem;
               padding: 1rem;
               margin-bottom: 20px;
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
                  }
                  .table {
  font-size: 14px;
  padding: 10px;
  border-collapse: collapse;
  border: 1px solid #ddd;
}

.table th,
.table td {
  padding: 2px;
  border: 1px solid #ddd;
}
	              </style>
</head>

<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;" >
	<div id="app" class="warpper">
	    @include('admin.partials.topbar')
	       <div id="layoutSidenav" class="flex-container">
                   @include('admin.partials.sidebar', ['sidebarClass' => 'small-sidebar'])
         <div class="content-warper" id="monDiv" >
	          <div class="content-header"></div>
                <section class="content">
    <!--table name , table controller and table model card-->
    <div class="card">
          <h3 class="card-header">Create table</h3>
      <div class="card-body">
<form action="/generate-crud" method="post">
                <div class="container-fluid p-0">
                  @csrf
                   <div class="form-row">
                         <div class="form-group col-md-6">
                            <label for="table-name">Table Name</label>
                            <input type="text" class="form-control" id="table-name" name="table-name" placeholder="Enter table name">
                         </div>
                         <div class="form-group col-md-6">
                            <label for="model-name">Model Name</label>
                            <input type="text" class="form-control" name="model-name" id="model-name" placeholder="Enter Model name for your table">
                         </div>
   
                         <div class="form-group">
                             <label for="controller-name">Controller Name</label>
                             <input type="text" class="form-control"name="controller-name" id="controller-name" placeholder="Enter Controller name">
                         </div>

      </div>
     </div>
    </div>
 </div>

   
     <!-- Table Fields card -->  
        <div class="card">
             <h3 class="card-header">Add Fields to Your Table</h3>
             <div class="card-body">

 
                     <table class="table">
                               <thead>
                                       <tr>    
                                        <th scope="col">Field Type</th>
                                        <th scope="col">DataBaseColumn</th>
                                        <th scope="col">Validation</th>
                                        <th scope="col">Visual Title</th>
                                        <th scope="col">in list</th>
                                        <th scope="col">in create</th>
                                        <th scope="col">in show</th>
                                        <th scope="col">in edit</th>
 
                                        <th scope="col">Max</th>
                                        <th scope="col">Min</th>
                                        <th scope="col">Default Value</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                      </tr>
                                      </thead>
                                      <tbody id="savedFields"></tbody>
                     </table>
                     <div>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Field</button></div>
                     <div class="p-2" style="border-bottom: 1px solid rgb(230, 230, 230);">
                      Total fields: <span id="numOfFields"></span>
                     </div>
            </div>
        </div>
   

        <!-- Table Fields -->  

        <h4>Add Fields to Your Table</h4>


 <!--add field Modal-->

          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
                      <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                      <div class="form-group">
                             <label for="field_type">Field Type</label>
              <select id="field_type" name="field_type">
                <optgroup label="Numeric Types">
                    <option value="bigIncrements">bigIncrements</option>
                    <option value="decimal">decimal</option>
                    <option value="double">double</option>
                    <option value="float">float</option>
                    <option value="increments">increments</option>
                    <option value="integer">integer</option>
                    <option value="mediumInteger">mediumInteger</option>
                    <option value="smallInteger">smallInteger</option>
                  
    <!-- Types:

      char
         string
         text
            mediumText
         longText
              Date and Time Types:

                 date
              dateTime
             time
              timestamp
             Other Types:

              boolean
                   json
         nullableTimestamps
                  uuid-->

                </optgroup>
                <optgroup label="choice-field">
                    <option value="Radio">Radio</option>
                    <option value="Select">Select</option>
                    <option value="Checkbox">Checkbox</option>
                </optgroup>
                <optgroup label="text-field">
                    <option value="Integer">Integer</option>
                    <option value="Float">Float</option>
                    <option value="Money">Money</option>
                </optgroup>
                <optgroup label="date-time-field">
                    <option value="DatePicker">DatePicker</option>
                    <option value="Date/TimePicker">Date/TimePicker</option>
                    <option value="Time Picker">Time Picker</option>
                </optgroup>
                <optgroup label="file-upload-field">
                    <option value="File">File</option>
                    <option value="Photo">Photo</option>
                </optgroup>
                <optgroup label="RelationshipFields">
                    <option value="Belongs to relationship">Belongs to relationship</option>
                    <option value="Belongs to many relationships">Belongs to many relationships</option>
                </optgroup>
            </select>
        </div>
                    
        <div class="form-group">
           <label for="DBCName">Data base column Name:</label>
           <input type="text" class="form-control" id="DBCName" name="DBCName" placeholder="Enter DBC Name">
           <div class="invalid-feedback"></div>
        </div>
               
        <div class="form-group" >
           <label for="Validation">Validation</label>
            <select id="Validation" name="Validation" >
             <option value="Required" >Required</option>
             <option value="Optionnal" >optionnal</option>
             <option value="Required/Unique">Required/unique</option>
             </select>
         </div>
                                    <div class="form-group">
                                             <label for="VisualTitle">Visual Title </label>
                                             <input type="text" class="form-control"name="VisualTitle" id="VisualTitle" placeholder="Enter Visual title">
                                    </div>

                                   <div class="form-group">
                                                        <label for="inlist">In List</label>
                                                            <select id="inlist"name="inlist">
                                                                    <option value="yes">yes</option>
                                                                    <option value="no">no</option>
                  
                                                            </select>
                                   </div>
                                   <div class="form-group" >
                                                <label for="increate">In create</label>
                                                      <select id="increate"name="increate">
                                                        <option value="yes">yes</option>
                                                        <option value="no">no</option>
  
                                                       </select>
                                   </div>
                                   <div class="form-group" >
                                     <label for="inedit">In edit</label>
                                             <select id="inedit" name="inedit">
                                                <option value="yes">yes</option>
                                                <option value="no">no</option>
  
                                            </select>
                                   </div>

                         <div class="form-group">
                             <label for="inshow">In show
                             </label>
                                    <select id="inshow" name="inshow">
                                         <option value="yes">yes</option>
                                         <option value="no">no</option>
  
                                    </select>
                         </div>
                
                      <h6 id="addFeildModalLabel">Additionnal Settings</h6>
                                   <div>
                         <label for="field-max-limit">Max Limit:</label>
                         <input type="number" id="field-max-limit"name="field-max-limit"></br>
                   </div>
                   <div>
                          <label for="field-min-limit">Min Limit:</label>
                          <input type="number" id="field-min-limit" name="field-min-limit"></br> 
                </div>

                   <div>
                          <label for="field-default-value">Default value</label>
                          <input type="number" id="field-default-value" name="field-default-value" placeholder="Enter a Default Value "></br> 
                   </div>
                


                   <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary btn" id="Savefield" name="Savefield">Save Field</button>  
                   </div>
 </div>         
  </div>
 </div>

              
           
                
    
   <div data-v-0f8342b7="" class="card card-default"><div data-v-0f8342b7="" class="card-header d-flex p-0"><h3 data-v-0f8342b7="" class="card-title p-3">
      Table
    </h3></div> <div data-v-0f8342b7="" class="card-body mb-0 pb-0"><div data-v-0f8342b7="" class="mr-2" style="display: flex; align-self: center;"><label data-v-0f8342b7="" class="form-check-label"><input data-v-0f8342b7="" type="checkbox">
        Column search feature
      </label></div></div> <div data-v-0f8342b7="" class="card-body d-flex"><div data-v-0f8342b7="" class="input-group orderby-group mr-2"><div data-v-0f8342b7="" class="input-group-prepend"><label data-v-0f8342b7="" for="" class="input-group-text">
          Entries per page
        </label></div> <select data-v-0f8342b7="" class="custom-select"><option data-v-0f8342b7="" value="100">
          100 entries
        </option><option data-v-0f8342b7="" value="50">
          50 entries
        </option><option data-v-0f8342b7="" value="25">
          25 entries
        </option><option data-v-0f8342b7="" value="10">
          10 entries
        </option></select></div> <div data-v-0f8342b7="" class="input-group orderby-group"><div data-v-0f8342b7="" class="input-group-prepend"><label data-v-0f8342b7="" for="" class="input-group-text">Order by</label></div> <select data-v-0f8342b7="" class="custom-select"><option data-v-0f8342b7="" value="id">
          ID
        </option></select> <select data-v-0f8342b7="" class="custom-select"><option data-v-0f8342b7="" value="desc">DESC</option> <option data-v-0f8342b7="" value="asc">ASC</option></select></div></div></div>
             
                <button type="submit" class="btn btn-primary " id="genbutt" name="genbutt">Generate Table files</button>
</form>

  <footer class="main-footer mt-2"><strong>Copyright © 2015-2023 <a href="https://quickadminpanel.com">CRUD GENERATOR LARAVEL</a>. For all questions and support: email <a href="mailto:info@laraveldaily.com">info@laraveldaily.com</a></strong></footer>
  
              
</body> 

   <!-- <script> 
 // document.getElementById("submit").addEventListener("click", function() {
  //  // Get all the input fields
   // const  FeildType= document.getElementById("FeildType").value;
   // const DBCName = document.getElementById("DBCName").value;
    //const Visualtitle = document.getElementById("VisualTitle").value;
    //const Validation = document.getElementById("Validation").value;
   // const Visibility = document.getElementById("Visibility").value;
    //const Max = document.getElementById("set-max-limit").value;
    //const Min = document.getElementById("set-min-limit").value;
    //const Defaultvalue = document.getElementById("set-default-value").value;
  

    // Validate the input fields
    //if (DBCName  === '' ||Visualtitle === '' ) {
     // alert('Please fill all the required fields.');
    //  return;
  
   // }
 // });
</script> -->
 <!-- jQuery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Sweetalert-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.js"></script>
  
<script>

  // Initialize an empty array to store saved fields
  var fields = [];

  // Initialize a variable to keep track of the index of the field being edited
  var editIndex = -1;

  // Listen for the click event on the Savefield button
  $('#Savefield').click(function(e) {
    e.preventDefault();

    // Retrieve the values of the form fields
    var field_type = $('#field_type').val();
    var DBCName = $('#DBCName').val().trim();
    var validation = $('#Validation').val();
    var visualTitle = $('#VisualTitle').val().trim();
    var inList = $('#inlist').val();
    var inCreate = $('#increate').val();
    var inEdit = $('#inedit').val();
    var inShow = $('#inshow').val();
    var maxLimit = $('#field-max-limit').val();
    var minLimit = $('#field-min-limit').val();
    var defaultValue = $('#field-default-value').val();

    // Check if the dbcName field is empty
    if ( DBCName  === '') {
      // Display an error message to the user under the empty field
      $('#DBCName').addClass('is-invalid');
      $('#DBCName').siblings('.invalid-feedback').text('DBC Name is required !');
      return;
    } else {
      // Remove the error message if the field is not empty
      $('#DBCName').removeClass('is-invalid');
      $('#DBCName').siblings('.invalid-feedback').text('');
    }

    // Update the visualTitle field with the same value as the dbcName field
    visualTitle =  DBCName.charAt(0).toUpperCase() +  DBCName.slice(1);
    $('#VisualTitle').val(visualTitle);

    // Create an object to store the field values
    var field = {
      field_type: field_type,
      DBCName : DBCName,
      validation: validation,
      visualTitle: visualTitle,
      inList: inList,
      inCreate: inCreate,
      inEdit: inEdit,
      inShow: inShow,
      maxLimit: maxLimit,
      minLimit: minLimit,
      defaultValue: defaultValue
    };

    // Add or update the field object in the array
    if (editIndex === -1) {
      // "Saving" mode: add a new field
      fields.push(field);
    } else {
      // "Editing" mode: update an existing field
      fields[editIndex] = field;
      // Reset the editIndex variable to indicate that we are no longer in "Editing" mode
      editIndex = -1;
    }

    // Display the fields variable in the console
   // console.log(fields);

    // Display all saved fields on the page
    var html = '';
    $.each(fields, function(index, field) {
      html += '<tr>'+
              '<th>' + field.field_type + '</th>' +
              '<td>' + field.DBCName + '</td>' +
              '<td>' + field.validation + '</td>' +
              '<td>' + field.visualTitle + '</td>' +
              '<td>' + field.inList + '</td>' +
              '<td>' + field.inCreate + '</td>' +
              '<td>' + field.inEdit + '</td>' +
              '<td>' + field.inShow + '</td>' +
              '<td>' + field.maxLimit + '</td>' +
              '<td>' + field.minLimit + '</td>' +
              '<td>' + field.defaultValue + '</td>' +
              '<td>' +
          '<button  type="button" class="btn btn-warning btn-sm edit"  data-index="' + index + '">Edit</button>' +   '</td>' +
              '<td>' +
          '<button type="button" class="btn btn-dark btn-sm delete"  data-index="' + index + '">Delete</button>' +  '</td>' +
              '</tr>';
    });
    
    $('#savedFields').html(html);
    var numOfFields = fields.length;
   $('#numOfFields').text(numOfFields);


    
  

    // Display a message indicating that the field has been saved
    Swal.fire("Field saved Successfully");
   
    // Clear the form fields
    $('#field_type').val('');
    $('#DBCName').val('');
    $('#Validation').val('');
    $('#VisualTitle').val('');
    $('#inlist').val('');
    $('#increate').val('');
    $('#inedit').val('');
    $('#inshow').val('');
    $('#field-max-limit').val('');
    $('#field-min-limit').val('');
    $('#field-default-value').val('');


   

  });
  
// Bind click event to edit button
$('#savedFields').on('click', '.edit', function() {
    // Retrieve the index of the clicked row
    var index = $(this).data('index');
    editIndex = index;
    console.log(editIndex);
    // Pre-populate the form fields with existing values
    $('#field-type').val(fields[index].field_type);
    $('#DBCName').val(fields[index].DBCName);
    $('#Validation').val(fields[index].validation);
    $('#VisualTitle').val(fields[index].visualTitle);
    $('#inlist').val(fields[index].inList);
    $('#increate').val(fields[index].inCreate);
    $('#inedit').val(fields[index].inEdit);
    $('#inshow').val(fields[index].inShow);
    $('#field-max-limit').val(fields[index].maxLimit);
    $('#field-min-limit').val(fields[index].minLimit);
    $('#field-default-value').val(fields[index].defaultValue);
    // Show the modal
    $('#myModal').modal('show');

    // Make sure to prevent default behavior of the edit button
    event.preventDefault();
});

  

$('#savedFields').on('click', '.delete', function() {
  // Retrieve the index of the clicked row
  var index = $(this).data('index');
  
  // Display a message asking for confirmation
  Swal.fire({
    title: 'Do you want to delete this row?',
    showDenyButton: true,
    confirmButtonText: 'Delete',
    denyButtonText: 'Cancel',
  }).then((result) => {
    if (result.isConfirmed) {
      // Remove the field object from the array
      fields.splice(index, 1);

      // Display the updated fields variable in the console
      console.log(fields);

      // Regenerate the HTML for the table
      generateTableHtml();

      // Display a message indicating that the row has been deleted
      Swal.fire('Row deleted', '', 'success');
    } else {
      // Display a message indicating that the deletion has been cancelled
      Swal.fire('Deletion cancelled', '', 'info');
    }
  });
});

function generateTableHtml() {
  var html = '';
  $.each(fields, function(index, field) {
    html += '<tr>'+
      '<th>' + field.field_type + '</th>' +
      '<td>' + field.DBCName + '</td>' +
      '<td>' + field.validation + '</td>' +
      '<td>' + field.visualTitle + '</td>' +
      '<td>' + field.inList + '</td>' +
      '<td>' + field.inCreate + '</td>' +
      '<td>' + field.inEdit + '</td>' +
      '<td>' + field.inShow + '</td>' +
      '<td>' + field.maxLimit + '</td>' +
      '<td>' + field.minLimit + '</td>' +
      '<td>' + field.defaultValue + '</td>' +
      '<td>' +
      '<button  type="button" class="btn btn-warning btn-sm edit"  data-index="' + index + '">Edit</button>' +   '</td>' +
      '<td>' +
      '<button type="button" class="btn btn-dark btn-sm delete"  data-index="' + index + '">Delete</button>' +  '</td>' +
      '</tr>';
  });
  $('#savedFields').html(html);
  var numOfFields = fields.length;
   $('#numOfFields').text(numOfFields);
}
// Get the CSRF token from the meta tag in the HTML document
var csrfToken = $('meta[name="csrf-token"]').attr('content');

// Listen for the click event on the Generate files button
$('#genbutt').click(function(e) {
  e.preventDefault();
  // Create an object to store the data to be sent in the AJAX request
var data = {
  fields: fields,
  tableName: $('#table-name').val(),
  tableController: $('#controller-name').val(),
  tableModel: $('#model-name').val(),
  _token: csrfToken // add the CSRF token to the data object
};

console.log(data);

  // Send the fields array to the tablefiles controller
  $.ajax({
  type: 'POST',
  url: '/generate-crud',
  data: data,
  success: function(response) {
    // Display a success message to the user
    console.log(response);
    Swal.fire({
      icon: 'success',
      title: 'Files generated successfully',
      text: 'The files have been generated successfully.'
    });
  },
  error: function(xhr, status, error) {
    // Log the error information to the console
    console.error("An error occurred while generating the files: ", error);
    
    // Display an error message to the user
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'An error occurred while generating the files. Please try again later.'
    });
  }
});

});




  </script>

 



@include('admin.partials.footer')

</html>              