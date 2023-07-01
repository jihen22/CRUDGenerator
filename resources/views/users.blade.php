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
    font-size: 30px;

}

#mytable {
  margin-top: 12px;
  margin-bottom: 12px;
}
#ajouter {
  margin-top: 4px;
  margin-bottom: 12px;
}


</style>    
   
<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;" >
  <div id="app" class="warpper">
  @include('admin.partials.topbar')
  <div id="layoutSidenav" class="flex-container">

     

<div class="content-warper" id="monDiv" >
<a href="{{ route('admin.dashboard') }}" class="arrow-icon">
  <i class="fas fa-arrow-left"></i>
</a>

<script>
$(document).ready(function() {
    var table = $('#mytable').DataTable({
        // Vos autres options DataTables ici

        info: true
    });
});
</script>

      
       

<div class="content-header">
</div>


   
   
       <div class="container-fluide p-0">
           <div class="card card-default">


            <div class="card-body">

            <table id="mytable" class="table table-bordred table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>










                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('Dashboardassets/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('Dashboardassets/assets/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('Dashboardassets/assets/demo/chart-bar-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('Dashboardassets/js/datatables-simple-demo.js')}}"></script>


</body>
</html>

