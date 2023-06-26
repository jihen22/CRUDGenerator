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
  

    .banners {
        background-color: #f5f5f5;
        padding: 10px;
        text-align: center;
    }
    
    .banner-content {
        color: #333;
        font-size: 15px;
        margin-bottom: 2px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 10px;
    }
    
    .table th,
    .table td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
    }
    
    .table th {
        background-color: #ffdf7e;
        color: #fff;
        font-weight: bold;
    }


  
.icon-text {
  margin-left: 5px; /* Ajoutez la valeur souhaitée pour l'espace entre l'icône et le texte */
}

.banner-content .fas {
  font-size: 20px; /* Ajustez la taille de l'icône selon vos besoins */
  color: #ffdf7e; /* Changez la couleur de l'icône selon vos préférences */
}


</style>


 
</head>
<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;" >
    <div id="app" class="warpper">
    @include('admin.partials.topbar')
    <div id="layoutSidenav" class="flex-container">

  

<div class="content-warper" id="monDiv"  style="margin-top: 20px; margin-left: auto; margin-right: auto;">

</a>


<div class="content-header">
<div class="banners">
        <!-- Contenu de la bannière -->
        <div class="banner-content">
            <!-- Votre paragraphe ici -->
            <p class="banner-content"><i class="fas fa-info-circle"></i> <span class="icon-text">These fields provide basic information about each record, including its identifier, creation and update timestamps, and important flags related to field visibility and data constraints.</span></p>
        </div>
    </div>
    
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered table-striped table-yellow">
                        <thead>
                            <tr>
                                <th>Column Name</th>
                                <th>Field Type</th>
                                <th>Validation</th>
                                <th>Visual Title</th>
                                <th>Max</th>
                                <th>Default Value</th>
                                <th>Date of creation</th>
                                <th>Date of updating</th>
                                <th>Indexing</th>
                                <th>Validation Rules</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fieldListRows as $field)
                            <tr>
                                <td>{{ $field->database_column_name }}</td>
                                <td>{{ $field->field_type }}</td>
                                <td>{{ $field->validation }}</td>
                                <td>{{ $field->visual_title }}</td>
                                <td>{{ $field->max }}</td>
                                <td>{{ $field->default_value }}</td>
                                <td>{{ $field->created_at }}</td>
                                <td>{{ $field->updated_at }}</td>
                                <td>{{ $field->indexing }}</td>
                                <td>{{ $field->validationRules }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('Dashboardassets/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('Dashboardassets/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('Dashboardassets/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('Dashboardassets/js/datatables-simple-demo.js')}}"></script>
       
       
    </body>
</html>
