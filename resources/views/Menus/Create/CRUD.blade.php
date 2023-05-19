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
    .form-check-inline {
        margin-left: 10px;
    }

    .card {
        margin: 0 auto;
        max-width: 1000px;
        border: 1px solid #ccc;
        border-radius: 0.5rem;
        padding: 1rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        margin-bottom: 20px; /* Additional style */
    }

    .flex-container {
        display: flex;
    }

    .content-wrapper {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .small-sidebar {
        width: 70px;
    }

    .container-fluid {
        margin-bottom: 50px;
    }

    .content {
        max-height: 500px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        border-radius: 0.5rem;
        overflow: auto;
    }

    .content-header {
        margin-bottom: 20px;
    }

    .content-header h1 {
        padding: 42px 57px;
        display: inline-block;
        font-size: 28px;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"],
    select {
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 10px;
    }

    select option {
        font-size: 14px;
    }

    .form-group:last-child {
        margin-bottom: 0;
    }

    .form-group button {
        background-color: #007bff;
        border: none;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
    }

    .form-group button:hover {
        background-color: #0069d9;
    }

    @media (max-width: 767px) {
        #monDiv {
            margin-right: 0;
            margin-left: 0;
            width: 100%;
        }

        .small-sidebar {
            display: none;
        }
    }

    section.content {
        min-height: 1000px;
    }

    div.row.mb-2 {
        margin: 0.5rem 0;
    }

    /* Additional styles */
    .content-warper {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    #monDiv {
        min-height: calc(100vh - 60px);
        margin-right: 80px;
        margin-left: 80px;
        width: calc(100% - 80px);
    }

    .container-fluide {
        margin-bottom: 50px;
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

    /* Custom Modal */
  
    .custom-modal-content {
        border: 2px solid #ccc;
        border-radius: 10px;
    }

    .custom-modal-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .custom-modal-label {
        font-weight: bold;
    }

    .custom-modal-footer {
        justify-content: flex-end;
    }

    /* Add the following code to modify the input fields */

    .custom-modal-input {
        width: 200px; /* Adjust the width as per your requirement */
        margin: 0 auto; /* Center the input fields horizontally */
    }
</style>


		
</head>

<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;" >
	<div id="app" class="warpper">
	    @include('admin.partials.topbar')
	       <div id="layoutSidenav" class="flex-container">
         @include('admin.partials.sidebar')
                  
         <div class="content-warper" id="monDiv" >
	          <div class="content-header"></div>
                <section class="content">
    <!--table name , table controller and table model card-->
    <div class="card">
          <h5 class="card-header">Create table</h5>
      <div class="card-body">
   

<form action="/generate-crud" method="post">
                <div class="container-fluid p-0">
                  @csrf
                   <div class="form-row">
                         <div class="form-group col-md-6">
                        
    <label for="table-name">Table Name</label>
    <input type="text" class="form-control" id="table-name" name="table-name" placeholder="Enter table name" value="{{ old('table-name') }}">
   
    <div class="invalid-feedback">Table name field is required!.</div>

</div>
                         <div class="form-group col-md-6">
                            <label for="model-name">Model Name</label>
                            <input type="text" class="form-control" name="model-name" id="model-name" placeholder="Enter Model name for your table">
                        
    <div class="invalid-feedback">Model name field is required!.</div>
                         </div>
   
                         <div class="form-group col-md-6">
                             <label for="controller-name">Controller Name</label>
                             <input type="text" class="form-control"name="controller-name" id="controller-name" placeholder="Enter Controller name">
                            
    <div class="invalid-feedback">Controller  name field is required!.</div>
                         </div>
                         <div class="form-group col-md-6">
                            <label for="viewName">View Name</label>
                            <input type="text" class="form-control" id="viewName" name="viewName" placeholder="Enter View name">
                          
    <div class="invalid-feedback">View name field is required!.</div>
                         </div>
                         <div class="form-group">
    <label for="view_type">View Type:</label>
    <select id="view_type" name="view_type" class="form-control">
        <option value="card">Card View</option>
        <option value="list">List View</option>
        <option value="Grid">Grid View</option>
        <option value="gantt">Gantt Chart View</option>
        <option value="Calendar">Map View</option>
        <option value="Calendar">Tree View</option>
        <option value="Calendar"> Table View</option>
        <!-- Add more options for other view types if needed -->
    </select>
</div>
                         

                 </div> 
     </div>
    </div>
   
 </div>

   
     <!-- Table Fields card -->  
        <div class="card">
             <h5 class="card-header">Add Fields to Your Table</h5>
             <div class="card-body">

                    <div class="table-warning" id="list_of_fields">
             
                     <table class="table" id="list_of_fields">
                               <thead>
                                       <tr>    
                                        <th scope="col">Field Type</th>
                                        <th scope="col">DataBaseColumn</th>
                                        <th scope="col">Validation</th>
                                        <th scope="col">Visual Title</th>
                                        <th scope="col">In List </th>
                                        <th scope="col">In Create</th>
                                        <th scope="col">In Show </th>
                                        <th scope="col">In Edit</th>
 
                                        <th scope="col">Max</th>
                                        <th scope="col">Min</th>
                                        <th scope="col">Default Value</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                      </tr>
                                      </thead>
                                      <tbody id="savedFields"></tbody>
                     </table>
                   </div>
                   <div class="invalid-feedback">At least one field is required!</div>
                
                     <div>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Field</button></div>
                     <div class="p-2" style="border-bottom: 1px solid rgb(230, 230, 230);">Total fields: <span id="numOfFields"></span>
                    
                     </div>
            </div>
        </div>
   

     
     
        


 <!--add field Modal-->

 <div class="modal fade bd-example-modal-lg custom-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
    <div class="modal-dialog modal-lg">
                      <div class="modal-content custom-modal-content">
                      <div class="modal-header">
                    <h5 class="modal-title custom-modal-title" id="addFeildModalLabel">Add Field</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                      <div class="form-group">
                             <label class="custom-modal-label" for="field_type">Field Type</label>
              <select id="field_type" name="field_type">
              <option value="">Select a column type</option>
    <optgroup label="Numeric">
        <option value="integer">Integer</option>
        <option value="decimal">Decimal</option>
    </optgroup>
    <optgroup label="Text">
        <option value="string">String</option>
        <option value="text">Text</option>
        <option value="longtext">Long Text</option>
    </optgroup>
    <optgroup label="Date and Time">
        <option value="date">Date</option>
        <option value="datetime">DateTime</option>
        <option value="time">Time</option>
    </optgroup>
    <optgroup label="Boolean">
        <option value="boolean">Boolean</option>
    </optgroup>
    <optgroup label="Other">
        <option value="enum">Enum</option>
        <option value="json">JSON</option>
        <option value="jsonb">JSONB</option>
        <option value="file">File</option>
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
                                    
<div class="form-inline">
    <label> In List </label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_list" id="in_list_yes" value="yes">
        <label class="form-check-label" for="in_list_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_list" id="in_list_no" value="no">
        <label class="form-check-label" for="in_list_no">No</label>
    </div>
</div>
<div class="form-inline">
    <label> In Create </label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_create" id="in_create_yes" value="yes">
        <label class="form-check-label" for="in_create_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_create" id="in_create_no" value="no">
        <label class="form-check-label" for="in_create_no">No</label>
    </div>
</div>

<div class="form-inline">
    <label> In Show: </label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_show" id="in_show_yes" value="yes">
        <label class="form-check-label" for="in_show_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_show" id="in_show_no" value="no">
        <label class="form-check-label" for="in_show_no">No</label>
    </div>
</div>
<div class="form-inline">
    <label> In Edit: </label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_edit" id="in_edit_yes" value="yes">
        <label class="form-check-label" for="in_edit_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_edit" id="in_edit_no" value="no">
        <label class="form-check-label" for="in_edit_no">No</label>
    </div>
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
    
<div>

    <label for="nullable">Nullable:</label>
    <input type="checkbox" name="nullable" id="nullable">
</div><div>
    <label for="unique">Unique:</label>
    <input type="checkbox" name="unique" id="unique">
</div><div>
    <label for="indexing">Indexing:</label>
    <select name="indexing" id="indexing">
        <option value="">None</option>
        <option value="primary">Primary Key</option>
        <option value="unique">Unique Index</option>
        <option value="index">Index</option>
    </select>
</div><div>
    
    <label for="foreign_key">Foreign Key:</label>
    <input type="text" name="foreign_key" id="foreign_key">
</div><div>
    <label for="validation_rules">Additional Validation Rules:</label>
    <input type="text" name="validation_rules" id="validation_rules">
</div>


                    <div class="modal-footer custom-modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="Savefield" name="Savefield">Save Field</button>
                </div>
 </div>         
  </div>
 </div>

              
           
                
    
   <div data-v-0f8342b7="" class="card card-default"><div data-v-0f8342b7="" class="card-header d-flex p-0"><h5 data-v-0f8342b7="" class="card-title p-3">
      Other Options
    </h5></div> <div data-v-0f8342b7="" class="card-body mb-0 pb-0"><div data-v-0f8342b7="" class="mr-2" style="display: flex; align-self: center;"><label data-v-0f8342b7="" class="form-check-label"><input data-v-0f8342b7="" type="checkbox">
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
  var viewName = $('#viewName').val();
console.log(viewName);

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

  var maxLimit = $('#field-max-limit').val();
  var minLimit = $('#field-min-limit').val();
  var defaultValue = $('#field-default-value').val();

  // Check if the dbcName field is empty
  if (DBCName === '') {
    // Display an error message to the user under the empty field
    $('#DBCName').addClass('is-invalid');
    $('#DBCName').siblings('.invalid-feedback').text('DBC Name is required!');
    return;
  } else {
    // Remove the error message if the field is not empty
    $('#DBCName').removeClass('is-invalid');
    $('#DBCName').siblings('.invalid-feedback').text('');
  }

  // Update the visualTitle field with the same value as the dbcName field
  visualTitle = DBCName.charAt(0).toUpperCase() + DBCName.slice(1);
  $('#VisualTitle').val(visualTitle);

  // Retrieve the values of the radio buttons
  var inList = $('input[name="in_list"]:checked').val() === 'yes' ? 'Yes' : 'No';
  var inCreate = $('input[name="in_create"]:checked').val() === 'yes' ? 'Yes' : 'No';
  var inEdit = $('input[name="in_edit"]:checked').val() === 'yes' ? 'Yes' : 'No';
  var inShow = $('input[name="in_show"]:checked').val() === 'yes' ? 'Yes' : 'No';

  // Create an object to store the field values
  var field = {
    field_type: field_type,
    DBCName: DBCName,
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
    html += '<tr>' +
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
'<button  type="button" class="btn btn-warning btn-sm edit"  data-index="' + index + '">Edit</button>' + '</td>' +
'<td>' +
'<button type="button" class="btn btn-dark btn-sm delete"  data-index="' + index + '">Delete</button>' + '</td>' +
'</tr>';
});

$('#savedFields').html(html);
var numOfFields = fields.length;
$('#numOfFields').text(numOfFields);

// JavaScript code (start)
const form = document.getElementsByClassName('form-inline');

// Iterate over each form section
Array.from(form).forEach(section => {
// Retrieve the radio buttons within the current section
const radioButtons = section.querySelectorAll('input[type="radio"]');


// Add event listeners to the radio buttons
Array.from(radioButtons).forEach(radio => {
  radio.addEventListener('change', () => {
    const sectionName = section.querySelector('label').innerText;
    const selectedValue = radio.value;

    console.log(`${sectionName}: ${selectedValue}`);
    // You can perform any desired logic with the selected value here
  });
});
});


// Display a message indicating that the field has been saved
Swal.fire("Field saved Successfully");

// Clear the form fields
$('#field_type').val('');
$('#DBCName').val('');
$('#Validation').val('');
$('#VisualTitle').val('');
$('input[name="inList"]').prop('checked', false);
$('input[name="inCreate"]').prop('checked', false);
$('input[name="inEdit"]').prop('checked', false);
$('input[name="inShow"]').prop('checked', false);
$('#field-max-limit').val('');
$('#field-min-limit').val('');
$('#field-default-value').val('');
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

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$('#genbutt').click(function(e) {
  e.preventDefault();

  // Clear previous error messages and classes
  $('.is-invalid').removeClass('is-invalid');
  $('.invalid-feedback').text('');
  $('.error-label').text('');

  // Retrieve the field values
  var tableName = $('#table-name').val().trim();
  var controllerName = $('#controller-name').val().trim();
  var modelName = $('#model-name').val().trim();
  var viewName = $('#viewName').val().trim();
  var viewType = $('#view_type').val().trim();
  

 
  var hasErrors = false;
// Check if the table exists
$.ajax({
  url: '/check-table-exists',
  method: 'POST',
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  data: { tableName: tableName },
  success: function(response) {
    console.log('First AJAX call successful');
    if ( tableName.trim() === '') {
 handleEmptyTableNameError();
    } else if (response.exists) {
      handleTableExistsError();
    } else {
      $('#table-name').removeClass('is-invalid');
      hasErrors = false;

      var data = {
        fields: fields,
        tableName: tableName,
        tableController: controllerName,
        tableModel: modelName,
        tableView: viewName,
        viewType: viewType,
        _token: $('meta[name="csrf-token"]').attr('content') // get CSRF token from the meta tag
      };
   console.log(data);
      // Send the data to the server to generate CRUD files
      $.ajax({
        type: 'POST',
        url: '/generate-crud',
        data: data,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
          console.log('Second AJAX call successful');
          alert('Data sent to the controller file');
        },
        error: function(xhr, status, error) {
          console.log('Error in second AJAX call:', error);
          console.error("An error occurred while generating the files: ", error);
          var errorMessage = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'An error occurred while generating the files. Please try again later.';
          $('#error-message').text(errorMessage);
        }
      });
    }
  },
  error: function(xhr, status, error) {
    console.log('Error in first AJAX call:', error);
  }
});

function handleTableExistsError() {
  $('#table-name').addClass('is-invalid');
  $('#table-name').siblings('.invalid-feedback').text('Table already exists, enter another valid table name!');
  $('#table-name').siblings('.error-label').text('Error:');

  hasErrors = true;
}

function handleEmptyTableNameError() {
  $('#table-name').addClass('is-invalid');
  $('#table-name').siblings('.invalid-feedback').text('Table name is empty, enter a valid table name!');
  $('#table-name').siblings('.error-label').text('Error:');

  hasErrors = true;
}
  if (tableName === '') {
    $('#table-name').addClass('is-invalid');
    $('#table-name').siblings('.invalid-feedback').text('Table name field is required!');
    $('#table-name').siblings('.error-label').text('Error:');
    hasErrors = true;
  }
  if (controllerName === '') {
    $('#controller-name').addClass('is-invalid');
    $('#controller-name').siblings('.invalid-feedback').text('Controller name field is required!.');
    $('#controller-name').siblings('.error-label').text('Error:');
    hasErrors = true;
  }

  if (modelName === '') {
    $('#model-name').addClass('is-invalid');
    $('#model-name').siblings('.invalid-feedback').text('Model name field is required!.');
    $('#model-name').siblings('.error-label').text('Error:');
    hasErrors = true;
  }

  if (viewName === '') {
    $('#viewName').addClass('is-invalid');
    $('#viewName').siblings('.invalid-feedback').text('View name field is required!.');
    $('#viewName').siblings('.error-label').text('Error:');
    hasErrors = true;
  }
  
  if (fields.length === 0) {
    // Display error message for missing fields
    $('#list_of_fields').addClass('is-invalid');
    $('#list_of_fields').siblings('.invalid-feedback').text('At least one field is required!');
    $('#list_of_fields').siblings('.error-label').text('Error:');
    hasErrors = true;
  }
  

  if (hasErrors) {
    return; // Stop execution if any field is empty
  }

});
  </script>

 



@include('admin.partials.footer')

</html>              