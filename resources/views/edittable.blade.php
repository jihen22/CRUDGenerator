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
        <meta name="csrf-token" content="{{ csrf_token() }}">
       
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('Dashboardassets/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
          <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="mon-script.js"></script>
 
        <style>
    .card {
        margin: 0 auto;
        max-width: 1000px;
        border: 1px solid #ccc;
        border-radius: 0.5rem;
        padding: 1rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .flex-container {
        display: flex;
    }

    .content-wrapper {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    #monDiv {
        min-height: calc(100vh - 60px);
        margin-right: 70px;
        margin-left: 50px;
        width: calc(100% - 80px);
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




</style>


 
</head>
<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;" >
<div id="app" class="warpper">
    @include('admin.partials.topbar')
    <div id="layoutSidenav" class="flex-container">
        @include('admin.partials.sidebar', ['sidebarClass' => 'small-sidebar'])
         
        <div class="content-warper" id="monDiv" style="">
	<div class="content-header">
		
			<div class ="row mb-2">
				<div class="col-sm-6">
			
<h1 class="m-0 text-drak" style="">Add column </h1>
             
                </div>
          
        </div>
    </div>
      <section class="content">
	     <div class="container-fluide p-0">
           <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('add-column.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="table_name">Table name</label>
                                <input type="text" name="table_name" id="table_name" class="form-control"  placeholder="Enter table name" value="{{ old('table_name') }}">
                                <div class="invalid-feedback">Table name field is required!</div>
                            </div>

                            <div class="form-group">
                                <label for="model_name">Model name</label>
                                <input type="text" name="model_name" id="model_name" class="form-control"  placeholder="Enter model name" value="{{ old('model_name') }}">
                                <div class="invalid-feedback">Model name field is required!</div>
                            </div>

                            <div class="form-group">
                                <label for="field_type">Field type</label>
                                <select name="field_type" id="field_type" class="form-control" >
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
                                <div class="invalid-feedback">Field type field is required!</div>
                            </div>

                            <div class="form-group">
                                <label for="database_column_name">Database column Name</label>
                                <input type="text" name="database_column_name" id="database_column_name" class="form-control"  placeholder="Enter column name in the database" value="{{ old('database_column_name') }}">
                                <div class="invalid-feedback">Column name field is required!</div>
                            </div>

                            <div class="form-group">
                                <label for="validation">Validation</label>
                                <select id="validation" name="validation">
                                    <option value="Required">Required</option>
                                    <option value="Optional">Optional</option>
                                    <option value="Required/Unique">Required/Unique</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="visual_title">Visual Title</label>
                                <input type="text" name="visual_title" id="visual_title" class="form-control" placeholder="Enter visual title">
                            </div>

         
                            <div class="form-group">

<label for="in_list" style="margin-right: 10px;">In List:</label>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="in_list" id="in_list_yes" value="1">
    <label class="form-check-label" for="in_list_yes">Yes</label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="in_list" id="in_list_no" value="0">
    <label class="form-check-label" for="in_list_no">No</label>
</div>
</div>
<div class="description" style="font-size: 12px; color: #FFC107; margin-left: 10px;">
Specify whether the field should be shown in the list view of the table (e.g., table listing all records).
</div>

<div class="form-group">
<div>
<label for="in_create" style="margin-right: 10px;">In Create:</label>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="in_create" id="in_create_yes" value="1">
    <label class="form-check-label" for="in_create_yes">Yes</label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="in_create" id="in_create_no" value="0">
    <label class="form-check-label" for="in_create_no">No</label>
</div>

<div class="description" style="font-size: 12px; color: #FFC107; margin-left: 10px;">
Specify whether the field should be shown in the create form for adding new records.
</div>
</div>

<div class="form-group">
<label for="in_show" style="margin-right: 10px;">In Show:</label>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="in_show" id="in_show_yes" value="1">
    <label class="form-check-label" for="in_show_yes">Yes</label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="in_show" id="in_show_no" value="0">
    <label class="form-check-label" for="in_show_no">No</label>
</div>
</div>
<div class="description" style="font-size: 12px; color: #FFC107; margin-left: 10px;">
Specify whether the field should be shown in the detail view of a specific record.
</div>
</div>
<div class="form-group">
<label for="in_edit" style="margin-right: 10px;">In Edit:</label>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="in_edit" id="in_edit_yes" value="1">
    <label class="form-check-label" for="in_edit_yes">Yes</label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="in_edit" id="in_edit_no" value="0">
    <label class="form-check-label" for="in_edit_no">No</label>
</div>
</div>
<div class="description" style="font-size: 12px; color: #FFC107; margin-left: 10px;">
Specify whether the field should be shown in the edit form for modifying existing records.
</div>



     
       




                            <h4 id="addFeildModalLabel">Additional Settings</h4>

                            <div class="form-group">
<div style="display: flex; align-items: center;">
    <label for="field-max-limit" style="margin-right: 10px;">Max Limit:</label>
    <input type="number" class="form-control"  id="max" name="max" style="width: 150px;">
</div>
<div>
    <span class="description" style="font-size: 12px; color: #999; margin-left: 10px;">Specify the maximum limit or length of the field if applicable (e.g., maximum number of characters).</span>
</div>
</div>

                               
<div class="form-group">
<div>
        <label for="field-default-value" style="margin-right: 10px;">Default value:</label>
        <select class="form-control" id="field-default-value" name="field-default-value" style="width: 150px;">
            <option value="None">None</option>
            <option value="NULL">NULL</option>
            <option value="CURRENT_TIMESTAMP">CURRENT_TIMESTAMP</option>
            <option value="As defined:">As defined:</option>
            
        </select>
    </div>
    <div id="custom-value-container"></div>
</div>
    <div>
        <span class="description" style="font-size: 12px; color: #999; margin-left: 10px;">Set a default value for the field.</span>
    </div>
</div>

                            <div>
                                <label for="nullable">Nullable:</label>
                                <input type="checkbox" name="nullable" id="nullable">
                            </div>

                            <div>
                                <label for="unique">Unique:</label>
                                <input type="checkbox" name="unique" id="unique">
                            </div>

                            <div>
                                <label for="indexing">Indexing:</label>
                                <select name="indexing" id="indexing">
                                    <option value="">None</option>
                                    <option value="primary">Primary Key</option>
                                    <option value="unique">Unique Index</option>
                                    <option value="index">Index</option>
                                </select>
                            </div>

                            <div>
                                <label for="validation_rules">Additional Validation Rules:</label>
                                <input type="text" name="validation_rules" id="validation_rules" placeholder="Enter additional validation rules">
                            </div>

                            <button type="submit" class="btn btn-primary">Add new column</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="successModalLabel">Success</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Column has been added successfully.
      </div>
    </div>
  </div>
</div>


@include('admin.partials.footer')
                                </body>
                                <script>
  @if (session('success'))
    $(document).ready(function() {
      $('#successModal').modal('show');
    });
  @endif
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Get the select element
var selectElement = document.getElementById("field-default-value");

// Function to handle the select change event
function handleSelectChange() {
    var selectedValue = selectElement.value;
    var customValueContainer = document.getElementById("custom-value-container");

    // Remove any existing input field
    while (customValueContainer.firstChild) {
        customValueContainer.firstChild.remove();
    }

    // Check if "As defined" option is selected
    if (selectedValue === "As defined:") {
        // Create the input field element
        var inputField = document.createElement("input");
        inputField.type = "text";
        inputField.name = "custom-value";
        inputField.placeholder = "Enter a custom value";

        // Append the input field to the container
        customValueContainer.appendChild(inputField);
    }
}

// Add event listener to the select element
selectElement.addEventListener("change", handleSelectChange);

    </script>
<script>
$(document).ready(function() {
  $('form').submit(function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Clear previous error messages
    $('.is-invalid').removeClass('is-invalid');
    $('.invalid-feedback').text('');
    $('.error-label').text('');

    // Get form values
    var tableName = $('#table_name').val();
    var columnName = $('#database_column_name').val();
    var modelField = $('#model_name').val(); // Get the model field value

    // Function to handle empty name error
    function handleEmptyNameError(element, errorMessage) {
      element.addClass('is-invalid');
      element.siblings('.invalid-feedback').text(errorMessage);
      element.siblings('.error-label').text('Error:');
    }

    // Function to handle exist error
    function handleExistError(element, errorMessage) {
      element.addClass('is-invalid');
      element.siblings('.invalid-feedback').text(errorMessage);
      element.siblings('.error-label').text('Error:');
    }

    // Store the errors
    var errors = [];

    // Check if table name is empty
    if (tableName.trim() === '') {
      errors.push({ element: $('#table_name'), message: 'Table name field is required!' });
    }

    // Check if column name is empty
    if (columnName.trim() === '') {
      errors.push({ element: $('#database_column_name'), message: 'Column name field is required!' });
    }

    // Check if model field is empty
    if (modelField.trim() === '') {
      errors.push({ element: $('#model_name'), message: 'Model field is required!' });
    }

    // Get the CSRF token from a meta tag or any other suitable method
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // Perform AJAX request to check if table, column, and model field exist
    $.ajax({
      url: '/check-entitiescol-exist',
      type: 'POST',
      data: {
        _token: csrfToken, // Include the CSRF token in the request data
        table_name: tableName,
        column_name: columnName,
        model_field: modelField
      },
      success: function(response) {
        if (errors.length === 0) {
          if (!response.table_exists) {
            // Display the error message for table not existing
            handleExistError($('#table_name'), 'Table does not exist!');
          } 
          if (response.column_exists) {
            handleExistError($('#database_column_name'), 'Column name already exists in the table!');
          } 
          if (!response.model_exists) {
            handleExistError($('#model_name'), 'Incorrect Model name!');
          }
          if (response.table_exists && !response.column_exists && response.model_exists) {
            // Table exists, submit the form if all checks pass
            $('form').unbind('submit').submit();
          }
        } else {
          // Display all errors simultaneously
          for (var i = 0; i < errors.length; i++) {
            handleEmptyNameError(errors[i].element, errors[i].message);
          }
        }
      },
      error: function() {
        // Handle error case
        console.log('Error occurred during AJAX request');
      }
    });
  });
});

</script>

                                </html>