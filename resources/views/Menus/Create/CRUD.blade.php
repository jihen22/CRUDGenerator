
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Table Creator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  
    
    <!-- Main content -->
    <div class="card">
    <div class="card-header">Settings</div>
    <div class="card-body">
        <form method="POST" action="/create-table">
            <div class="form-group">
                <label for="tableName">Table Name:</label>
                <input type="text" id="tableName" name="tableName" required>
            </div>
            <div class="form-group">
                <label for="parentTable">Parent Table:</label>
                <input type="text" id="parentTable" name="parentTable">
            </div>
            <div class="form-group">
                <label>Which CRUD operations do you want to perform?</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="createCheckbox" name="createCheckbox" value="create">
                    <label for="createCheckbox">Create</label>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="readCheckbox" name="readCheckbox" value="read">
                    <label for="readCheckbox">Read</label>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="UpdateCheckBox" name="UpdateCheckBox" value="read">
                    <label for="UpdateCheckBox">Update</label>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="DeleteCheckbox" name="DeleteCheckbox" value="read">
                    <label for="DeleteCheckbox">Delete</label>
                </div>
            </div>
         
        
    </div>
</div>
</div>


      <table class="table" id="table">
        <thead>
          <tr>
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
          <!-- Empty table rows, will be populated with new data -->
        </tbody>
      </table>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFeildModal">Add a Feild</button>
      <!-- Add Feild modal -->
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
  <option value="number-field">Number Field</option>
  <option value="choice-field">Choice Field</option>
  <option value="text-field">Text Field</option>
  <option value="date-time-field">Date/Time Field</option>
  <option value="file-upload-field">File/Upload Field</option>
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

<button > Save Crud</button>
</form>
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
</body>
</html>