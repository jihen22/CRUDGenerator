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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <script src="mon-script.js"></script>
 
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
<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;" >
<div id="app" class="warpper">
    @include('admin.partials.topbar')
    <div id="layoutSidenav" class="flex-container">
        @include('admin.partials.sidebar', ['sidebarClass' => 'small-sidebar'])
        <div class="content-warper" id="monDiv" style="">
            <div class="content-header">
                <div class="container-fluid p-0">
                    <div class="row mb-2">

                    </div>
                </div>
            </div>

            <div class="container-fluide p-0">
                <div class="card card-default">
                    <div class="card-body">
                    <form action="{{ route('column.edit', ['table' => $table, 'column' => $column]) }}" method="POST">
    @csrf
                          
                        
                    


                            <div class="form-group">
                <label for="DBCName"style=" margin-left: 10px;">Database Column Name:</label>
                <input type="text" style="margin-left: 10px;"class="form-control" name="database_column_name" id="database_column_name" placeholder="Enter DBC Name">
               <div> <span class="description" style="font-size: 12px; color: #999; margin-left: 10px;"> Enter a suitable name for the database column. </span></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-group">
                <label for="VisualTitle"style=" margin-left: 10px;">Visual Title</label>
                <input style=" margin-left: 10px;" type="text" class="form-control" name="visual_title" id="visual_title" placeholder="Enter Visual title">
               <div> <span class="description" style="font-size: 12px; color: #999; margin-left: 10px;">Enter a visual title for the field, which will be displayed on the form or in the user interface.</span></div>
            </div>



         
            <div class="form-group">

    <label for="in_list" style="margin-right: 10px;">In List:</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_list" id="in_list_yes" value="yes">
        <label class="form-check-label" for="in_list_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_list" id="in_list_no" value="no">
        <label class="form-check-label" for="in_list_no">No</label>
    </div>
</div>
<div class="description" style="font-size: 12px; color: #FFC107; margin-left: 10px;">
    Specify whether the field should be shown in the list view of the table (e.g., table listing all records).
</div>

<div class="form-group">
  <div>
    <label for="in_create" style="margin-right: 10px;">In Create:</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_create" id="in_create_yes" value="yes">
        <label class="form-check-label" for="in_create_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_create" id="in_create_no" value="no">
        <label class="form-check-label" for="in_create_no">No</label>
    </div>

<div class="description" style="font-size: 12px; color: #FFC107; margin-left: 10px;">
    Specify whether the field should be shown in the create form for adding new records.
</div>
</div>

<div class="form-group">
    <label for="in_show" style="margin-right: 10px;">In Show:</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_show" id="in_show_yes" value="yes">
        <label class="form-check-label" for="in_show_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_show" id="in_show_no" value="no">
        <label class="form-check-label" for="in_show_no">No</label>
    </div>
</div>
<div class="description" style="font-size: 12px; color: #FFC107; margin-left: 10px;">
    Specify whether the field should be shown in the detail view of a specific record.
</div>
  </div>
<div class="form-group">
    <label for="in_edit" style="margin-right: 10px;">In Edit:</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_edit" id="in_edit_yes" value="yes">
        <label class="form-check-label" for="in_edit_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="in_edit" id="in_edit_no" value="no">
        <label class="form-check-label" for="in_edit_no">No</label>
    </div>
</div>
<div class="description" style="font-size: 12px; color: #FFC107; margin-left: 10px;">
    Specify whether the field should be shown in the edit form for modifying existing records.
</div>
  
  

         
           
<div class="form-group">
    <div style="display: flex; align-items: center;">
        <label for="field-max-limit" style="margin-right: 10px;">Max Limit:</label>
        <input type="number" class="form-control"  id="max" name="max" style="width: 150px;">
    </div>
    <div>
        <span class="description" style="font-size: 12px; color: #999; margin-left: 10px;">Specify the maximum limit or length of the field if applicable (e.g., maximum number of characters).</span>
    </div>
</div>



<div class="form-group">
    <div style="display: flex; align-items: center;">
        <label for="field-default-value" style="margin-right: 10px;">Default value:</label>
        <select class="form-control" id="default_value" name="default_value" style="width: 150px;">
            <option value="None">None</option>
            <option value="NULL">NULL</option>
            <option value="As defined:">As defined:</option>
            <option value="CURRENT_TIMESTAMP">CURRENT_TIMESTAMP</option>
        </select>
    </div>
    <div id="custom-value-container"></div>

    <div>
        <span class="description" style="font-size: 12px; color: #999; margin-left: 10px;">Set a default value for the field.</span>
    </div>
</div>


                            <button type="submit" class="btn btn-primary">Update column</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.partials.footer')
                               

</script>

                                </html>