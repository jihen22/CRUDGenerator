<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Welcome Page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />

        <style>

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #dddddd;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

td button {
  background-color: #f44336;
  color: white;
  border: none;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

td button:hover {
  background-color: #da190b;
}

            </style>
        
    </head>
    <body>
    <table id="table">
  <thead>
    <tr>
      <th>En-tête de colonne 1</th>
      <th>En-tête de colonne 2</th>
      <th>En-tête de colonne 3</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>

<form id="form">
  <label for="colonne1">Colonne 1:</label>
  <input type="text" id="colonne1" name="colonne1" required pattern="[a-zA-Z0-9\s]{1,50}"><br>

  <label for="colonne2">Colonne 2:</label>
  <input type="number" id="colonne2" name="colonne2" required min="0"><br>

  <label for="colonne3">Colonne 3:</label>
  <input type="text" id="colonne3" name="colonne3" required><br>

  <input type="submit" value="Ajouter">
</form>





<script>
  function ajouterLigne() {
  // Récupérer les données saisies dans les champs de formulaire
  const colonne1 = document.getElementById("colonne1").value;
  const colonne2 = document.getElementById("colonne2").value;
  const colonne3 = document.getElementById("colonne3").value;

  // Créer une nouvelle ligne pour le tableau avec les données saisies
  const table = document.getElementById("table");
  const tbody = table.querySelector("tbody");

  const ligne = document.createElement("tr");

  const cellule1 = document.createElement("td");
  cellule1.textContent = colonne1;
  ligne.appendChild(cellule1);

  const cellule2 = document.createElement("td");
  cellule2.textContent = colonne2;
  ligne.appendChild(cellule2);

  const cellule3 = document.createElement("td");
  cellule3.textContent = colonne3;
  ligne.appendChild(cellule3);

  const celluleAction = document.createElement("td");
  const boutonSupprimer = document.createElement("button");
  boutonSupprimer.textContent = "Supprimer";
  boutonSupprimer.addEventListener("click", function () {
    ligne.parentNode.removeChild(ligne);
  });
  celluleAction.appendChild(boutonSupprimer);
  ligne.appendChild(celluleAction);

  // Ajouter la nouvelle ligne au tableau
  tbody.appendChild(ligne);

  // Vider les champs de formulaire pour permettre l'ajout d'une nouvelle ligne
  document.getElementById("form").reset();
}

</script>
</body>
</html>