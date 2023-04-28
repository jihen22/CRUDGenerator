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
            <a class="navbar-brand ps-3" href="#">Table</a>
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
                                    name
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
            <tr>
             
                @foreach ($columns as $column)
                    @if (!in_array($column, $hiddenColumns))
                        <td>{{ $row->{$column} }}</td>
                    @endif
                @endforeach
                <td>
                    <div class="action-btns">
                          
<button type="button" id="Edit" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Edit Column
                </button>
                <form action="#" method="POST">
    @csrf
    @method('DELETE')
    <button id="delete-btn-{{ $row->id }}" type="submit">Delete</button>
</form>

                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


       
<button type="button" id="Add" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Add Column
                </button>
               
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addDateForm">
      <div class="modal-body">
                @foreach ($columns as $column)
               @if ($column != 'id' && $column != 'remember_token' && $column != 'created_at' && $column != 'updated_at')
                <div class="form-group">
                <label for="{{ $column }}">{{ $column }}:</label>
                <input type="text" class="form-control" id="data" name="data" required>
            </div>
        @endif
    @endforeach
</div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" id="submit" class="btn btn-primary">Save Column</button>
        </div>
   
    </div>
  </div>
</div>

<script>

$(document).ready(function() {
  $("#Add").click(function() {
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
    // get the table element
const table = document.getElementById("myTable");

// add a click event listener to the table
table.addEventListener("click", (event) => {
  // check if the clicked element is a delete button
  if (event.target.classList.contains("deleteBtn")) {
    // get the row that contains the clicked button
    const row = event.target.parentElement.parentElement;
    // remove the row from the table
    row.remove();
  }
});

    function deleteRow(button) {
        let rowId = button.getAttribute('data-id');
        if (confirm('Are you sure you want to delete this row?')) {
            fetch(`/rows/${rowId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    // Remove the deleted row from the table
                    let row = button.closest('tr');
                    row.remove();
                } else {
                    alert('Failed to delete row');
                }
            })
            .catch(error => alert(error));
        }
    }



    </script>


<script>
    // Récupérer la référence du formulaire d'ajout de données
    const form = document.querySelector('#addDataForm');

    // Écouter l'événement de soumission du formulaire
    form.addEventListener('submit', (event) => {
        event.preventDefault(); // Empêcher la soumission du formulaire

        // Récupérer les valeurs des champs de saisie
        const dataInput = document.querySelector('#data');
        const data = dataInput.value;
     
       
       

        // Effectuer une requête AJAX vers le controller Laravel
        $.ajax({
            url:'/table/{table}/{view}',
            method: "POST",
            data: { data: data, _token: "{{ csrf_token() }}" },
            success: function(response) {
                // En cas de succès, afficher un message de confirmation
                console.log(response);
            },
            error: function(xhr) {
                // En cas d'erreur, afficher un message d'erreur
                console.log(xhr.responseText);
            }
        });

        // Créer une nouvelle ligne dans le corps du tableau
        const tableBody = document.querySelector('tbody');
        const newRow = tableBody.insertRow();

        // Ajouter les cellules à la nouvelle ligne
        const actionCell = newRow.insertCell();
        const dataCell = newRow.insertCell();
        actionCell.innerHTML = `
        <div class="action-btns">
                          
                          <button type="button" id="Edit" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Edit Column
                                          </button>
                               
                                                  <form action="#" method="POST">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button type="submit">Delete</button>
                                                  </form>
                                              </div>
        `;
        dataCell.textContent = data;

        // Réinitialiser les champs de saisie
        dataInput.value = '';

        // Fermer le modal
        $('#myModal').modal('hide');
    });
</script>




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
