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