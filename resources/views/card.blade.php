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

</head>

<style>



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

    .card {
        margin-bottom: 20px;
    }

    .card-img-top {
        height: 180px;
        width: 100%;
        display: block;
    }

    .card-title {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .card-text {
        margin-bottom: 5px;
    }

    .btn {
        margin-top: 10px;
    }

    .custom-button {
  width: 200px;
  height: 40px;
  /* Ajoutez d'autres styles personnalisés ici */
}
.arrow-icon {
  display: inline-block;
  margin-top: 20px;
  text-decoration: none;
  color: #000;
  font-size: 24px;
}

.arrow-icon i {
  margin-right: 5px;
}


.custom-title {
    font-family: "NomDeLaPolice", sans-serif;
    font-family: Arial, sans-serif;
    font-size: 32px;


}


</style>
    
   
<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;" >
<div id="app" class="warpper">
	@include('admin.partials.topbar')
	<div id="layoutSidenav" class="flex-container">

 



   
<div class="content-warper" id="monDiv" style="">
<a href="{{ route('admin.dashboard') }}" class="arrow-icon">
  <i class="fas fa-arrow-left"></i>
</a>



<script>
$(document).ready(function() {
    var table = $('#card-container').DataTable({
        // Options DataTables ici
        searching: true, // Activer la fonction de recherche
        info: true,
        columnDefs: [{
            targets: "_all",
            searchable: true // Rendre toutes les colonnes du tableau recherchables
        }]
    });
});
</script>

	<div class="content-header">
		<div class="container-fluid p-0">
			<div class ="row mb-2">
				<div class="col-sm-6">
                <h1 class="m-0 text-drak text-right custom-title">Add Fields to Your Table</h1>
                </div>
            </div>
        </div>
    </div>

    

   


    
	     <div class="container-fluide p-0">
           <div class="card card-default">


            <div class="card-body">





            <div class="row" id="card-container">
    @foreach ($data as $row)
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    @foreach ($visibleColumns as $column)
                        <p class="card-text">{{ $column }}: {{ $row->$column }}</p>
                    @endforeach

                    <button type="button" class="btn btn-primary edit-btn" data-row-id="{{ $row->id }}">
                            <span class="fas fa-edit"></span>
                        </button>
                        <button type="button" class="btn btn-danger delete-btn" data-row-id="{{ $row->id }}">
                   <span class="fas fa-trash-alt"></span>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>




<button type="button" id="ajouter" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ajouter à {{ $table }}</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
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
                        @if (in_array($column, $visibleColumns) && !in_array($column, $hiddenColumns) && in_array($column, $createtableColumns))
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
    $('#myModal').on('hidden.bs.modal', function (e) {
  // code pour réinitialiser les valeurs de l'input
});

$('.modal-footer .btn-secondary').click(function(){
  $('#myModal').modal('hide');
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
    @if (in_array($column, $visibleColumns) && !in_array($column, $hiddenColumns) && in_array($column, $createtableColumns))
            data['{{ $column }}'] = $('#{{ $column }}').val();
        @endif
    @endforeach

    // Effectuer une requête AJAX vers le controller Laravel
    // Effectuer une requête AJAX vers le controller Laravel
    $.ajax({
        url:'/table/{table}/{view}',
        method: "POST",
        data: { data: data, _token: "{{ csrf_token() }}" },
        success: function(response) {
            // En cas de succès, afficher un message de confirmation
            console.log(response);
            
            // Créer une nouvelle carte avec les données du formulaire
            const newCard = `
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            @foreach ($visibleColumns as $column)
                                <p class="card-text">{{ $column }}: ${data['{{ $column }}']}</p>
                            @endforeach

                            <button type="button" class="btn btn-primary edit-btn" data-row-id="${response.id}">
                                <span class="fas fa-edit"></span>
                            </button>
                            <button type="button" class="btn btn-danger delete-btn" data-row-id="${response.id}">
                                <span class="fas fa-trash-alt"></span>
                            </button>
                        </div>
                    </div>
                </div>
            `;

            // Ajouter la nouvelle carte à la div "card-container"
            $('.card-container').append(newCard);
          // Rafraîchir automatiquement la page
          location.reload();
        },
        error: function(xhr) {
            // En cas d'erreur, afficher un message d'erreur
            console.log(xhr.responseText);
        }
    });

    // Réinitialiser les champs de saisie
    form.reset();

    // Fermer le modal
    $('#myModal').modal('hide');
});
</script>




<!-- Modal for editing row data -->

<div id="edit-modal" class="modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Edit Your Detail</h4>
      </div>
      <div class="modal-body">
        <form id="edit-form">
          @csrf
          @method('POST')
          <input type="hidden" name="row_id" id="edit-row-id">

          <!-- dynamically generate input fields for editable columns -->
          
          @foreach ($columns as $column)
            @if (in_array($column, $visibleColumns) && !in_array($column, $hiddenColumns) && in_array($column, $editableColumns))
              <div class="form-group">
                <label for="{{ $column }}">{{ $column }}</label>
                <input type="text" name="{{ $column }}" id="{{ $column }}" class="form-control">
              </div>
            @endif
          @endforeach
          
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>








<script>
  $(document).ready(function() {
    // Ouvrir le modal de modification lors du clic sur le bouton "Edit"
    $('.edit-btn').click(function() {
      var rowId = $(this).data('row-id');
      $('#edit-row-id').val(rowId); // Récupérer l'identifiant de la ligne et le stocker dans le champ masqué
      
      // Pré-remplir les champs de saisie du modal avec les données de la ligne correspondante
      // Vous pouvez utiliser AJAX ici pour récupérer les données du serveur si nécessaire
      
      // Afficher le modal de modification
      $('#edit-modal').modal('show');
    });


    // Soumettre le formulaire de modification lorsque le bouton "Save Changes" est cliqué
    $('#edit-form').submit(function(event) {
      event.preventDefault();
      var rowId = $('#edit-row-id').val(); // Récupérer l'identifiant de la ligne à mettre à jour
      var formData = $(this).serialize(); // Récupérer les données du formulaire


      $.ajax({
        type: 'POST',
        url: '/update-row/' + rowId,
        data: formData,
        success: function(response) {
          // Mettre à jour les données de la ligne dans le tableau
          // Vous pouvez effectuer cette mise à jour en utilisant AJAX ou simplement recharger la page
          location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error: ' + textStatus + ' - ' + errorThrown);
        }
      });

      // Fermer le modal de modification
      $('#edit-modal').modal('hide');
    });
  });
</script>



<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this row?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    // Gérer le clic sur le bouton de suppression
    $('.delete-btn').click(function() {
      var rowId = $(this).data('row-id');

      // Ouvrir la boîte de dialogue de confirmation
      $('#confirmDeleteModal').modal('show');

      // Gérer le clic sur le bouton de confirmation de suppression
      $('#confirmDeleteBtn').click(function() {
        // Fermer la boîte de dialogue de confirmation
        $('#confirmDeleteModal').modal('hide');

        // Supprimer la ligne en utilisant une requête AJAX
        $.ajax({
          type: 'DELETE',
          url: '/data/' + rowId,
          data: { _token: '{{ csrf_token() }}' },
          success: function(response) {
            // Supprimer la ligne du tableau
            $('tr[data-row-id="' + rowId + '"]').remove();

            location.reload();

          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert('Error: ' + textStatus + ' - ' + errorThrown);
          }
        });
      });
    });
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
