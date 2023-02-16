<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Generator</title>
  </head>
  <body>
  <div class="container-fluid">
  <header class="bg-dark py-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand text-white">Generator</a>
      <ul class="navbar-nav">
        <!-- Menu items go here -->
      </ul>
    </nav>
  </header>
  <main class="d-flex">
    <nav class="bg-dark h-100 col-2 p-0">
      <ul class="navbar-nav flex-column">
        <!-- Menu items go here -->
      </ul>
    </nav>
    <section class="col-10">
      <div class="container-fluid py-3">
        <form class="form-group d-flex align-items-center">
          <div class="mr-3">
            <label for="controller-name">Controller Name:</label>
            <input type="text" id="controller-name" class="form-control form-control-sm" placeholder="Enter controller name">
          </div>
          <div class="ml-3">
            <label for="table-name">Table Name:</label>
            <input type="text" id="table-name" class="form-control form-control-sm" placeholder="Enter table name">
          </div>
        </form>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Field Name</th>
              <th>Field Description</th>
              <th>Field Type</th>
              <th>IDX</th>
              <th>Mandatory</th>
              <th>Rel. Table</th>
              <th>Rel. Field ID</th>
              <th>Rel. Field Text</th>
            </tr>
          </thead>
          <tbody id="field-list">
            <!-- Field rows go here -->
            <tr>
              <td><input type="text" class="form-control form-control-sm field-name"></td>
              <td><input type="text" class="form-control form-control-sm field-desc"></td>
              <td><input type="text" class="form-control form-control-sm field-type"></td>
              <td>
                <select class="form-control form-control-sm idx-select">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
              </td>
              <td>
                <select class="form-control form-control-sm mandatory-select">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
              </td>
              <td><input type="text" class="form-control form-control-sm rel-table"></td>
              <td><input type="text" class="form-control form-control-sm rel-field-id"></td>
              <td><input type="text" class="form-control form-control-sm rel-field-text"></td>

    <td><button class="btn btn-sm btn-danger remove-field-btn" id="deleteButton1">x</button></td>
  </tr>
</tbody>
        </table>

        <div class="d-flex justify-content-end mt-3">
          <button id="add-field-btn" class="btn btn-sm btn-primary mr-3">Add Field</button>
          <button id="generate-code-btn" class="btn btn-sm btn-success">Generate Code</button>
        </div>
        <table id="myTable">
  <tr>
    <td>Field 1</td>
    <td>Field 2</td>
    <td><button class="deleteBtn">x</button></td>
  </tr>
</table>

<script>
  const table = document.querySelector("#myTable");
  table.addEventListener("click", function(event) {
    if (event.target.className === "deleteBtn") {
      let row = event.target.parentNode.parentNode;
      table.deleteRow(row.rowIndex);
    }
  });
</script>


  
   <script>
  const fieldList = document.getElementById("field-list");
  const addFieldBtn = document.getElementById("add-field-btn");

  addFieldBtn.addEventListener("click", function() {
    const newRow = document.createElement("tr");

    newRow.innerHTML = `
      <td><input type="text" class="form-control form-control-sm field-name"></td>
      <td><input type="text" class="form-control form-control-sm field-desc"></td>
      <td><input type="text" class="form-control form-control-sm field-type"></td>
      <td>
        <select class="form-control form-control-sm idx-select">
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </td>
      <td>
        <select class="form-control form-control-sm mandatory-select">
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </td>
      <td><input type="text" class="form-control form-control-sm rel-table"></td>
      <td><input type="text" class="form-control form-control-sm rel-field-id"></td>
      <td><input type="text" class="form-control form-control-sm rel-field-text"></td>
      <td><button class="btn btn-sm btn-danger remove-field-btn">x</button></td>
    `;

    fieldList.appendChild(newRow);
  });

</script>
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

</body>

</html>


