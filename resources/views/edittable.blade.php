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
<<<<<<< HEAD


=======
 
>>>>>>> 0bcbf691b16bc3474af3f1895cf29a28b29b3d2d
        <style>
    .card {
        margin: 0 auto;
        max-width: 1000px;
        border: 1px solid #ccc;
        border-radius: 0.5rem;
        padding: 1rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .flex-container {
        display: flex;
    }

    .content-wrapper {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    #monDiv {
        min-height: calc(100vh - 60px);
        margin-right: 70px;
        margin-left: 50px;
        width: calc(100% - 80px);
    }

    .small-sidebar {
        width: 70px;
    }

    .container-fluid {
        margin-bottom: 50px;
    }

    .content {
        max-height: 500px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        border-radius: 0.5rem;
        overflow: auto;
    }

    .content-header {
        margin-bottom: 20px;
    }

    .content-header h1 {
        padding: 42px 57px;
        display: inline-block;
        font-size: 28px;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"],
    select {
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 10px;
    }

    select option {
        font-size: 14px;
    }

    .form-group:last-child {
        margin-bottom: 0;
    }

    .form-group button {
        background-color: #007bff;
        border: none;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
    }

    .form-group button:hover {
        background-color: #0069d9;
    }

    @media (max-width: 767px) {
        #monDiv {
            margin-right: 0;
            margin-left: 0;
            width: 100%;
        }

        .small-sidebar {
            display: none;
        }
    }

    section.content {
  min-height: 1000px;
} 

div.row.mb-2 {
  margin: 0.5rem 0;
}

</style>


 
    </head>
<<<<<<< HEAD
        
   



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
                <div class="card-header">{{ $table }} </div>
                </div>
            </div>
        </div>
    </div>
    
	     <div class="container-fluide p-0">
           <div class="card card-default">


            <div class="card-body">

=======
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



>>>>>>> 0bcbf691b16bc3474af3f1895cf29a28b29b3d2d

        <form method="POST" action="{{ route('add-column.store') }}">
            @csrf

            <div class="form-group">
<<<<<<< HEAD
                <label for="table_name"> table Name :</label>
=======
                <label for="table_name">Table name</label>
>>>>>>> 0bcbf691b16bc3474af3f1895cf29a28b29b3d2d
                <input type="text" name="table_name" id="table_name" class="form-control" required>
            </div>

           

            <div class="form-group">
<<<<<<< HEAD
                             <label for="field_type">Field Type</label>
              <select id="field_type" name="field_type">
              <option value="">Select a column type</option>
    <optgroup label="Numeric">
        <option value="bigIncrements">Big Increments</option>
        <option value="bigInteger">Big Integer</option>
        <option value="binary">Binary</option>
        <option value="decimal">Decimal</option>
        <option value="double">Double</option>
        <option value="float">Float</option>
        <option value="integer">Integer</option>
        <option value="mediumInteger">Medium Integer</option>
        <option value="smallInteger">Small Integer</option>
        <option value="tinyInteger">Tiny Integer</option>
        <option value="unsignedBigInteger">Unsigned Big Integer</option>
        <option value="unsignedDecimal">Unsigned Decimal</option>
        <option value="unsignedInteger">Unsigned Integer</option>
        <option value="unsignedMediumInteger">Unsigned Medium Integer</option>
        <option value="unsignedSmallInteger">Unsigned Small Integer</option>
        <option value="unsignedTinyInteger">Unsigned Tiny Integer</option>
    </optgroup>
    <optgroup label="String">
        <option value="char">Char</option>
        <option value="string">String</option>
        <option value="text">Text</option>
        <option value="mediumText">Medium Text</option>
        <option value="longText">Long Text</option>
    </optgroup>
    <optgroup label="Date and Time">
        <option value="date">Date</option>
        <option value="dateTime">Date Time</option>
        <option value="dateTimeTz">Date Time with Timezone</option>
        <option value="time">Time</option>
        <option value="timeTz">Time with Timezone</option>
        <option value="timestamp">Timestamp</option>
        <option value="timestampTz">Timestamp with Timezone</option>
        <option value="year">Year</option>
    </optgroup>
    <optgroup label="Other">
        <option value="boolean">Boolean</option>
        <option value="enum">Enum</option>
        <option value="json">JSON</option>
        <option value="jsonb">JSONB</option>
        <option value="uuid">UUID</option>
        <option value="ipAddress">IP Address</option>
        <option value="macAddress">MAC Address</option>
    </optgroup>
            </select>
        </div>

            <div class="form-group">
                <label for="database_column_name">Data base column Name: :</label>
=======
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
>>>>>>> 0bcbf691b16bc3474af3f1895cf29a28b29b3d2d
                <input type="text" name="database_column_name" id="database_column_name" class="form-control" required>
            </div>

            <div class="form-group" >
           <label for="Validation">Validation</label>
            <select id="Validation" name="Validation" >
             <option value="Required" >Required</option>
             <option value="Optionnal" >optionnal</option>
             <option value="Required/Unique">Required/unique</option>
             </select>
         </div>
                 
            <div class="form-group">
<<<<<<< HEAD
                <label for="visual_title">Visual Title </label>
                <input type="text" name="visual_title" id="visual_title" class="form-control">
            </div>

      

            <div class="form-inline">
    <label> In List: </label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_list" id="in_list_yes" value="yes">
        <label class="form-check-label" for="in_list_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_list" id="in_list_no" value="no">
        <label class="form-check-label" for="in_list_no">No</label>
    </div>

    <label> In Create: </label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_create" id="in_create_yes" value="yes">
        <label class="form-check-label" for="in_create_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_create" id="in_create_no" value="no">
        <label class="form-check-label" for="in_create_no">No</label>
    </div>
</div>

<div class="form-inline">
    <label> In Show: </label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_show" id="in_show_yes" value="yes">
        <label class="form-check-label" for="in_show_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_show" id="in_show_no" value="no">
        <label class="form-check-label" for="in_show_no">No</label>
    </div>

    <label> In Edit: </label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_edit" id="in_edit_yes" value="yes">
        <label class="form-check-label" for="in_edit_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_edit" id="in_edit_no" value="no">
        <label class="form-check-label" for="in_edit_no">No</label>
    </div>
</div>

                         <div style="display: flex;">
    <div style="margin-right: 10px;">
        <label for="max">Max Limit:</label>
        <input type="number" id="max" name="max">
    </div>
    <div style="margin-right: 10px;">
        <label for="min">Min Limit:</label>
        <input type="number" id="min" name="min">
    </div>
    <div>
        <label for="default_value">Default value:</label>
        <input type="number" id="default_value" name="default_value" placeholder="Enter a Default Value">
    </div>
</div>
                
=======
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
>>>>>>> 0bcbf691b16bc3474af3f1895cf29a28b29b3d2d

            <button type="submit" class="btn btn-primary">Add new column</button>
        </form>
    </div>











</div>
		        </div>
	      </div>
 </div>
								</div>
								</div>
						

		@include('admin.partials.footer')
   
                                </body>
                                </html>

