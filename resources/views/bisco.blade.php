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
	margin-left: 50px; /* Ajouter une marge à gauche pour rapprocher le div de la barre latérale */
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
					<h1 class="m-0 text-drak" style="">Add Fields to Your Table </h1>
                </div>
            </div>
        </div>
    </div>
    
	     <div class="container-fluide p-0">
           <div class="card card-default">


            <div class="card-body">

        @php
    $hiddenColumns = ['id', 'created_at', 'updated_at', 'remember_token'];
       @endphp
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                 
                   
                    

                    

        <tr>

        <th>Actions</th>
        
        <th>Edit</th>
                      
                      <th>Delete</th>
            <!-- display column headers -->
            @foreach ($columns as $column)
                @if (!in_array($column, $hiddenColumns))
                    <th>{{ $column }}</th>
                @endif
            @endforeach

          
        </tr>
     
    </thead>
    <tbody>
        <!-- display table rows -->
        @foreach ($data as $row)
            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
           
                <!-- display data for each column -->
                @foreach ($columns as $column)
                    @if (!in_array($column, $hiddenColumns))
                        <td>{{ $row->$column }}</td>
                    @endif
                @endforeach
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
            </tr>
        @endforeach
    </tbody>

   
</table>

  
<button type="button" id="ajouter" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add to {{ $table }}</button>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Ajouter des données</h4>
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script>

$(document).ready(function() {
  $("#ajouter").click(function() {
    $("#myModal").modal("show");
  });
});

</script>

                            

<script>
 
// Récupérer la référence du formulaire d'ajout de données
const form = document.querySelector('#addDataForm');


// Écouter l'événement de soumission du formulaire
form.addEventListener('submit', (event) => {
    event.preventDefault(); // Empêcher la soumission du formulaire

    // Récupérer les données saisies dans le formulaire
    const data = {};
    @foreach ($columns as $column)
        @if (!in_array($column, $hiddenColumns))
            data['{{ $column }}'] = $('#{{ $column }}').val();
        @endif
    @endforeach

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
const dataCells = [];

// Ajouter la cellule pour les boutons "Edit" et "Delete"
const editCell = newRow.insertCell();
const deleteCell = newRow.insertCell();

// Insérer les boutons dans la cellule correspondante
actionCell.innerHTML = `
    <input type="checkbox" class="checkthis" />
`;


// Assigner les valeurs des données aux cellules correspondantes
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

editCell.innerHTML = `
    <p data-placement="top" data-toggle="tooltip" title="Edit">
        <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit">
            <span class="glyphicon glyphicon-pencil"></span>
        </button>
    </p>
`;

deleteCell.innerHTML = `
    <p data-placement="top" data-toggle="tooltip" title="Delete">
        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete">
            <span class="glyphicon glyphicon-trash"></span>
        </button>
    </p>
`;
    



    // Réinitialiser les champs de saisie
    form.reset();                                                                                                                    

    // Fermer le modal
    $('#myModal').modal('hide');
});

</script>


</div>
		        </div>
	      </div>
 </div>
								</div>
								</div>
						           
   
    
 




						

		@include('admin.partials.footer')
   
                                </body>
                                </html>