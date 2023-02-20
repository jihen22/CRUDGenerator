<table>
  <tr>
    <td style="vertical-align: top;">
      <form action="submit-project.php" method="POST" id="my-form">
        <fieldset>
          <legend>Ajouter un projet</legend>
          <table>
            <tr>
              <td><label for="project-id">ID :</label></td>
              <td><input type="text" id="project-id" name="project-id" required></td>
            </tr>
            <tr>
              <td><label for="project-name">Nom du projet :</label></td>
              <td><input type="text" id="project-name" name="project-name" required></td>
            </tr>
            <tr>
              <td><label for="type-de-projet">Type de projet :</label></td>
              <td><input type="text" id="type-de-projet" name="type-de-projet" required></td>
            </tr>
            <tr>
              <td><label for="laravel">Laravel :</label></td>
              <td><input type="text" id="laravel" name="laravel"></td>
            </tr>
            <tr>
              <td><label for="cruds">CRUDs :</label></td>
              <td><input type="text" id="cruds" name="cruds" required></td>
            </tr>
            <tr>
              <td><label for="project-create">Créé le :</label></td>
              <td><input type="text" id="project-create" name="project-create" required></td>
            </tr>
            <tr>
              <td></td>
              <td><button type="submit">Ajouter projet</button></td>
            </tr>
          </table>
        </fieldset>
      </form>
    </td>
    <td style="padding-left: 20px; vertical-align: top;">
      <table id="my-table" style="border-collapse: collapse;">
        <thead>
          <tr>
            <th style="border: 1px solid black; padding: 5px;">ID</th>
            <th style="border: 1px solid black; padding: 5px;">Nom du projet</th>
            <th style="border: 1px solid black; padding: 5px;">Type de projet</th>
            <th style="border: 1px solid black; padding: 5px;">Laravel</th>
            <th style="border: 1px solid black; padding: 5px;">CRUDs</th>
            <th style="border: 1px solid black; padding: 5px;">Créé le</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </td>
  </tr>
</table>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(function() {
    $("#my-form").on("submit", function(event) {
      event.preventDefault();
      var projectId = $("#project-id").val();
      var projectName = $("#project-name").val();
      var projectType = $("#type-de-projet").val();
      var laravel = $("#laravel").val();
      var cruds = $("#cruds").val();
      var projectCreate = $("#project-create").val();
      var row = "<tr><td style='border: 1px solid black; padding: 5px
