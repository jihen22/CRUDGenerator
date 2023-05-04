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
           
       
#layoutSidenav {
  display: flex;
  display: grid;
  grid-template-columns: 200px 1fr;
  width: 1100px;
  height: 700px;
}

#layoutSidenav_content {
  flex: 1;
  margin-left: 200px; /* Width of the sidebar */
  grid-column: 2 / 3;
}

table {
  border-collapse: collapse;
  width: 100%;
  max-width: 800px; /* Changer selon vos besoins */
  margin: 0 auto; /* Pour centrer le tableau horizontalement */
}

th {
  background-color: #4CAF50;
  color: white;
  font-weight: bold;
  padding: 12px;
  text-align: left;
  border: 1px solid #ddd;
}

td {
  border: 1px solid #ddd;
  padding: 12px;
  text-align: left;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

.action-btns {
  display: flex;
  gap: 10px;
  justify-content: flex-start;
}

.action-btns a, .action-btns button {
  padding: 10px 20px;
  background-color: #008CBA;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  font-size: 14px;
}

.action-btns a:hover, .action-btns button:hover {
  background-color: #006080;
}

   

 </style>      
    </head>
    <body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;">
<div id="app" class="wrapper">
   
<nav class="main-header navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Project name</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
               
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                </li>
            </ul>
        </nav>
<div class="card">
    <div class="card-header">{{ $table }} </div>

<div class="card-body">


<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]]
        });
    });
</script>




       
@php
    $hiddenColumns = ['id', 'created_at', 'updated_at', 'remember_token'];
@endphp
<table id="myTable">

    <thead>
        <tr>
            <!-- display column headers -->
            @foreach ($columns as $column)
                @if (!in_array($column, $hiddenColumns))
                    <th>{{ $column }}</th>
                @endif
            @endforeach
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr data-row-id="{{ $row->id }}">
            <td>
                    <div class="action-btns">
                        <a href="#" class="edit-btn">Edit</a>
                        <form action="{{ route('delete', $row->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </div>
                </td>
                <!-- display row data -->
                @foreach ($columns as $column)
                    @if (!in_array($column, $hiddenColumns))
                        <td class="editable">{{ $row->{$column} }}</td>
                    @endif
                @endforeach
               
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal for editing row data -->
<div id="edit-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form id="edit-form">
            @csrf
            @method('PUT')
            <input type="hidden" name="row_id" id="row_id">
            <!-- dynamically generate input fields for editable columns -->
            @foreach ($columns as $column)
                @if (!in_array($column, $hiddenColumns))
                    <label for="{{ $column }}">{{ $column }}</label>
                    <input type="text" name="{{ $column }}" id="{{ $column }}" class="form-control">
                @endif
            @endforeach
            <button type="submit">Save Changes</button>
        </form>
    </div>
</div>

   
<button type="button" id="add" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Column</button>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add Column</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addDataForm">
                <div class="modal-body">
                    @foreach ($columns as $column)
                        @if (!in_array($column, $hiddenColumns))
                            <div class="form-group">
                                <label for="{{ $column }}">{{ $column }}:</label>
                                <input type="text" class="form-control" id="{{ $column }}" name="{{ $column }}" required>
                            </div>
                        @endif
                    @endforeach
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script>

$(document).ready(function() {
  $("#add").click(function() {
    $("#myModal").modal("show");
  });
});


</script>  
<script>
    $('#myModal').on('hidden.bs.modal', function (e) {
  // code pour réinitialiser les valeurs de l'input
});

$('.modal-footer .btn-secondary').click(function(){
  $('#myModal').modal('hide');
});


</script>


<script>
 
 const form = document.querySelector('#addDataForm');

form.addEventListener('submit', (event) => {
    event.preventDefault(); 

    const data = {};
    const inputs = document.querySelectorAll('input[type="text"]');
    inputs.forEach(input => data[input.id] = input.value);

    fetch('/table/{table}/{view}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        body: JSON.stringify({ data })
    })
    .then(response => {
        if(response.ok) {
            console.log('Data added successfully!');
        } else {
            console.log('An error occurred.');
        }
    })
    .catch(error => console.log(error));

    const tableBody = document.querySelector('tbody');
    const newRow = tableBody.insertRow();
   // Ajouter les cellules à la nouvelle ligne
   const actionCell = newRow.insertCell();
    const dataCells = [];
    @foreach ($columns as $column)
        @if (!in_array($column, $hiddenColumns))
            dataCells.push(newRow.insertCell());
        @endif
    @endforeach
   
    @foreach ($columns as $column)
        @if (!in_array($column, $hiddenColumns))
            dataCells.shift().textContent = data['{{ $column }}'];
        @endif
    @endforeach
    actionCell.innerHTML = `
        <div class="action-btns">
            <a href="#">Edit</a>
            <form action="#" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    `;

 
    form.reset();
    $('#myModal').modal('hide');
});

</script>
<script>
$(document).ready(function() {
    // initialize variables
    var $table = $('table');
    var $editModal = $('#edit-modal');
    var $editForm = $('#edit-form');
    var $rowIdInput = $('#row_id');
    var $editableCells = $('.editable');

    // set up event listeners
    $table.on('click', '.edit-btn', openEditModal);
    $table.on('submit', '#edit-form', submitEditForm);
    $table.on('click', '.delete-btn', confirmDeleteRow);

    function openEditModal() {
        // get the row ID and set it as the value of the hidden input field in the edit form
        var rowId = $(this).closest('tr').data('row-id');
        $rowIdInput.val(rowId);

        // get the current values of the editable cells and pre-fill the input fields in the edit form
        $editableCells.each(function() {
            var $editableCell = $(this);
            var columnName = $editableCell.prevAll('th').eq(0).text();
            var cellValue = $editableCell.text();
            $editForm.find('#' + columnName).val(cellValue);
        });

        // show the edit modal
        $editModal.show();
    }

    function submitEditForm(event) {
        event.preventDefault();

        // get the form data and serialize it
        var formData = $editForm.serialize();

        // make an AJAX request to update the database
        $.ajax({
            type: 'POST',
            url: '/update-row',
            data: formData,
            success: function(response) {
                // update the table row with the new data
                var newRowHtml = response.row_html;
                var rowId = response.row_id;
                $table.find('tr[data-row-id="' + rowId + '"]').replaceWith(newRowHtml);

                // hide the edit modal
                $editModal.hide();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error: ' + textStatus + ' - ' + errorThrown);
            }
        });
    }

    function confirmDeleteRow() {
        // get the row ID of the row to be deleted
        var rowId = $(this).closest('tr').data('row-id');

        // ask the user to confirm the delete action
        if (confirm('Are you sure you want to delete this row?')) {
            // make an AJAX request to delete the row from the database
            $.ajax({
                type: 'POST',
                url: '/delete-row',
                data: {row_id: rowId},
                success: function(response) {
                    // remove the row from the table
                    $table.find('tr[data-row-id="' + rowId + '"]').remove();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error: ' + textStatus + ' - ' + errorThrown);
                }
            });
        }
    }
});


</script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('Dashboardassets/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('Dashboardassets/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('Dashboardassets/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('Dashboardassets/js/datatables-simple-demo.js')}}"></script>
       
       
    </body>
</html>