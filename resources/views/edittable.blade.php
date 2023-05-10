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
            <a class="navbar-brand ps-3" href="#"> </a>
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

<div class="container">



        <form method="POST" action="{{ route('add-column.store') }}">
            @csrf

            <div class="form-group">
                <label for="table_name">Table name</label>
                <input type="text" name="table_name" id="table_name" class="form-control" required>
            </div>

           

            <div class="form-group">
                <label for="field_type">Field type</label>
                <select name="field_type" id="field_type" class="form-control" required>
                    <option value="string">string</option>
                    <option value="integer">integer</option>
                    <option value="float">float</option>
                    <option value="date">Date</option>
                </select>
            </div>

            <div class="form-group">
                <label for="database_column_name">Column name in the database</label>
                <input type="text" name="database_column_name" id="database_column_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="validation">Validation </label>
                <input type="text" name="validation" id="validation" class="form-control">
            </div>

            <div class="form-group">
                <label for="visual_title">Visual title</label>
                <input type="text" name="visual_title" id="visual_title" class="form-control">
            </div>

            <div class="form-group">
                <label for="in_list">in list </label>
                <select name="in_list" id="in_list" class="form-control">
                    <option value="1">yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="in_create">in create</label>
                <select name="in_create" id="in_create" class="form-control">
                    <option value="1">yes</option>
                    <option value="0">no</option>
                </select>
            </div>

            <div class="form-group">
                <label for="in_show">in show</label>
                <select name="in_show" id="in_show" class="form-control">
                    <option value="1">yes</option>
                    <option value="0">no</option>
                </select>
            </div>

            <div class="form-group">
                <label for="in_edit">in edit</label>
                <select name="in_edit" id="in_edit" class="form-control">
                    <option value="1">yes</option>
                    <option value="0">no</option>
                </select>
            </div>

            <div class="form-group">
                <label for="max">Max </label>
                <input type="text" name="max" id="max" class="form-control">
            </div>

            <div class="form-group">
                <label for="min">Min </label>
                <input type="text" name="min" id="min" class="form-control">
            </div>

            <div class="form-group">
                <label for="default_value">Default Value</label>
                <input type="text" name="default_value" id="default_value" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Add new column</button>
        </form>
    </div>







</div>