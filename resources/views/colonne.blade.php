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
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="mon-script.js"></script>



</head>



<style> .flex-container {
	display: flex;
}

.content-warper {
	flex: 1;
	display: flex;
	flex-direction: column;
}
#monDiv {
	min-height: calc(100vh - 60px); /* Calculer la hauteur minimale pour éviter le recouvrement de la barre de navigation */
	margin-right: 70px; /* Ajouter une marge à droite pour s'ajuster à côté de la barre latérale */
	margin-left: 100px; /* Ajouter une marge à gauche pour rapprocher le div de la barre latérale */
	width: calc(100% - 80px); /* Ajuster la largeur pour qu'elle s'ajuste à la largeur restante de l'espace disponible à gauche de la barre latérale */
}

.small-sidebar {
	width: 70px; /* Spécifier une largeur fixe pour l'élément de la barre latérale */
}
.container-fluide {
    margin-bottom: 50px; /* Ajouter une marge en bas pour rapprocher la carte du contenu suivant */
}

.content {
  max-height: 500px;
  padding: 20px;
}

.content-header {
  margin-bottom: 20px;
}


        

        .column-name {
            margin-left: 10px;
        }

        .delete-button {
            margin-left: auto;
        }


        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f1f1f1;
        }

</style>     
   
<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;" >
	<div id="app" class="warpper">
	@include('admin.partials.topbar')
	<div id="layoutSidenav" class="flex-container">
       @include('admin.partials.sidebar', ['sidebarClass' => 'small-sidebar'])



<div class="content-warper" id="monDiv" style="">
	<div class="content-header">
		<div class="container-fluid p-0">
			<div class ="row mb-2">
				<div class="col-sm-6">
				
                </div>
            </div>
        </div>
    </div>
    
	     <div class="container-fluide p-0">
           <div class="card card-default">


            <div class="card-body"> 
    








            <table  class="table table-bordred table-striped">
        <thead>
            <tr>
                <th>Column name</th>
                <th>Delete Column</th>
                <th>Update Column</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($visibleColumns as $column)
    <tr>
        <td>{{ $column }}</td>
        <td>
        <form action="{{ route('column.delete', ['table' => $table, 'columnName' => $column]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger delete-btn" data-column="{{ $column }}">
        <span class="fas fa-trash-alt"></span>
    </button>
</form>
        </td>
        <td>
        <a href="{{ route('update-column', ['table' => $table, 'column' => $column]) }}" class="btn btn-primary update-btn">
    <span class="fas fa-edit"></span>
</a>


                </td>

    </tr>
@endforeach
        </tbody>
    </table>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<form id="addColumnForm" action="{{ route('add-column') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary">Add new column</button>
</form>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this column?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Column deleted successfully.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<script>

document.getElementById('addColumnForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    fetch('{{ route('add-column.store') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({}) // You can add data to send with the POST request here
    })
    .then(response => {
        // Process the response
        if (response.ok) {
            // The request was successful
            // You can perform additional actions here, such as redirecting to the "editTable" page
            window.location.href = '/add-column'; // Replace '/editTable' with the actual URL of the editTable page
        } else {
            // The request failed
            // You can handle the error here, such as displaying an error message to the user
            console.error('An error occurred while adding the column.');
        }
    })
    .catch(error => {
        // Error handling
        console.error('An error occurred during the request:', error);
    });
});
</script>
<script>
    $(document).ready(function() {
        var columnToDelete = null;
        var tableToDeleteFrom = null;

        $('.delete-btn').click(function() {
            console.log("Delete button clicked");
            columnToDelete = $(this).data('column');
            tableToDeleteFrom = '{{ $table }}'; // Add this line to retrieve the tableName value
            $('#deleteModal').modal('show');
        });

        // Bind the AJAX call to the confirm button
        $('#confirmDelete').click(function() {
            console.log("confirmDelete button clicked");
            if (columnToDelete && tableToDeleteFrom) {
                $('#deleteModal').modal('hide'); // Hide the modal before making the AJAX call
                $('#successModal').modal('show'); // Show the success modal
                $.ajax({
                    url: '/table/' + tableToDeleteFrom + '/column/' + columnToDelete + '/delete',
                    type: 'DELETE',
                    success: function(response) {
                        location.reload();
                    }
                });
            }
        });
    });
</script>













</script>


</body>

<html>
