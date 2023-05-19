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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
            html *{
    -webkit-font-smoothing: antialiased;
    
}
body{
    background: #fff !important;
}
a {
    color: #3e3947 !important;
    text-decoration: none;
}

a:hover{
    color: #89229b !important;
    text-decoration: none !important;
}
a:focus {
    color: #89229b !important;
    text-decoration: none !important;
}
.container h3{
    font-size:25px ;
    margin-top: 20px ;
    margin-bottom: 10px ;
    font-weight: 300 ;
    color: #3c4858 ;
}
.container h4{
    font-size: 18px;
    line-height: 1.5;
    margin: 10px 0;
    font-weight: 300;
    color: #3c4858;
}

small{
    font-size: 75% !important;
    color: #777;
}

.btn-group{
    position: relative;
    margin: 10px 1px;
    display: inline-flex;
    vertical-align: middle;
}
.btn-group .btn{
    padding: 6.5px 20px !important;
}
.btn.btn-round{
    border-radius: 30px !important;
}

.btn-group .btn.btn-round{
    border-radius: 30px !important;
}

 .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}

.btn-group>.btn:not(:first-child) {
    border-top-left-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
}
.btn{
    padding: 12px 30px !important;
    margin: 5px 1px;
    font-size: 12px !important;
    box-shadow: 0 2px 2px 0 hsla(0,0%,60%,.14), 0 3px 1px -2px hsla(0,0%,60%,.2), 0 1px 5px 0 hsla(0,0%,60%,.12);
}
.btn .material-icons{
    position: relative;
    display: inline-block;
    top: 0;
    margin-top: -1.2em;
    margin-bottom: -1em;
    font-size: 1.1rem;
    vertical-align: middle;
}
.btn.btn-sm{
    border-radius:3px !important;
}

.btn.btn-just-icon.btn-sm {
    height: 30px;
    min-width: 30px;
    width: 30px;
}

.btn.btn-just-icon {
    font-size: 24px;
    height: 41px;
    min-width: 41px;
    width: 41px;
    padding: 0 !important;
    overflow: hidden;
    position: relative;
    line-height: 41px;
}

.btn.btn-just-icon.btn-round {
    border-radius: 50% !important;
}

.btn.btn-link{
    background: transparent;
    box-shadow: none;
    color: #999;
}

.btn.btn-info {
    color: #fff !important;
    background-color: #00bcd4 !important;
    border-color: #00bcd4;
    box-shadow: 0 2px 2px 0 rgba(0,188,212,.14),
                0 3px 1px -2px rgba(0,188,212,.2),
                0 1px 5px 0 rgba(0,188,212,.12) !important;
}

.btn.btn-info:hover {
    box-shadow: 0 14px 26px -12px rgba(0,188,212,.42),
                0 4px 23px 0 rgba(0,0,0,.12),
                0 8px 10px -5px rgba(0,188,212,.2) !important;
    background: #00aec5 !important;
}

.btn.btn-info.btn-link{
    background-color: transparent !important;
    color: #00bcd4 !important;
    box-shadow:none !important;
}
.btn.btn-success {
    color: #fff !important;
    background-color: #4caf50 !important;
    border-color: #4caf50;
    box-shadow: 0 2px 2px 0 rgba(76,175,80,.14),
                0 3px 1px -2px rgba(76,175,80,.2), 
                0 1px 5px 0 rgba(76,175,80,.12) !important;
}

.btn.btn-success:hover {
    box-shadow: 0 14px 26px -12px rgba(76,175,80,.42), 
                0 4px 23px 0 rgba(0,0,0,.12),   
                0 8px 10px -5px rgba(76,175,80,.2) !important;
    background: #47a44b  !important;
}
.btn.btn-success.btn-link{
    background-color: transparent !important;
    color: #4caf50 !important;
    box-shadow: none !important;
}

.btn.btn-danger {
    color: #fff !important;
    background-color: #f44336 !important;
    border-color: #f44336;
    box-shadow: 0 2px 2px 0 rgba(244,67,54,.14), 
                0 3px 1px -2px rgba(244,67,54,.2), 
                0 1px 5px 0 rgba(244,67,54,.12) !important;
}

.btn.btn-danger:hover {
    box-shadow: 0 14px 26px -12px rgba(244,67,54,.42), 
                0 4px 23px 0 rgba(0,0,0,.12), 
                0 8px 10px -5px rgba(244,67,54,.2) !important;
    background-color: #f33527 !important;            
    
}

.btn.btn-danger.btn-link{
    background-color: transparent !important;
    color: #f44336 !important;
    box-shadow: none !important;
}
.btn.btn-just-icon .material-icons {
    margin-top: 0;
    position: absolute;
    width: 100%;
    transform: none;
    left: 0;
    top: 0;
    height: 100%;
    line-height: 41px;
    font-size: 20px;
}

.btn.btn-just-icon.btn-sm .material-icons {
     font-size: 17px; 
     line-height: 29px; 
}


.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 16px;
    background-color: transparent;
}







.table .td-actions .btn {
    margin: 0;
    padding: 5px;
}

.table .form-check {
    margin: 0;
    padding-left: 0;
}

.table .td-total {
    font-weight: 500;
    font-size: 17px;
    padding-top: 20px;
    text-align: right;
}

.table .td-price {
    font-size: 26px;
    font-weight: 300;
    margin-top: 5px;
    text-align: right;
}
.table-shopping>thead>tr>th {
    font-size: 12px;
    text-transform: uppercase;
    color: #555;
}
.table-shopping .td-name {
    min-width: 200px;
    font-weight: 400;
    font-size: 24px; 
    line-height: 1.42857143;
}

.table-shopping .td-name small {
    color: #999;
    font-size: 18px; 
    font-weight: 300;
}

.table-shopping .img-container {
    width: 120px;
    max-height: 160px;
    overflow: hidden;
    display: block;
}

.table-shopping .img-container img {
    width: 100%;
}

.table-shopping>tbody>tr>td {
    font-size: 14px;
}

.table-shopping .td-number {
    text-align: right;
    min-width: 150px;
    font-size: 18px;
}

.table-shopping .td-number small {
    margin-right: 3px;
}
.form-check{
    padding-left:0;
}
.form-check .form-check-label {
    cursor: pointer;
    padding-left: 0px;
    position: relative;
    margin-bottom: 0;
}

.form-check .form-check-label span {
    display: block;
    left: -1px;
    top: -1px;
    transition-duration: .2s;
}

.form-check .form-check-input {
    opacity: 0;
    height: 0;
    width: 0;
    overflow: hidden;
    position: absolute;
    margin: 0;
    z-index: -1;
    left: 0;
    pointer-events: none;
}

.form-check .form-check-sign:before {
    display: block;
    position: absolute;
    left: 0;
    content: "";
    background-color: rgba(0,0,0,.84);
    height: 20px;
    width: 20px;
    border-radius: 100%;
    z-index: 1;
    opacity: 0;
    margin: 0;
    top: 0;
    transform: scale3d(2.3,2.3,1);
}

.form-check .form-check-sign .check {
    position: relative;
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 1px solid rgba(0,0,0,.54);
    overflow: hidden;
    z-index: 1;
    border-radius: 3px;
    top: 3px;
}

.form-check .form-check-sign .check:before {
    position: absolute;
    content: "";
    transform: rotate(45deg);
    display: block;
    margin-top: -3px;
    margin-left: 7px;
    width: 0;
    color: #fff;
    height: 0;
    box-shadow: 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, inset 0 0 0 0;
    animation: checkbox-off .3s forwards;
}

.form-check .form-check-input:checked+.form-check-sign .check:before {
    color: #fff;
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
    animation: checkbox-on .3s forwards;
}

.form-check .form-check-input:checked+.form-check-sign .check {
    background: #9c27b0;
}

.table .form-check .form-check-sign {
    top: -13px;
    left: 0;
    padding-right: 0;
}

.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #f9f9f9 !important;
}
footer{
    width: 100%;
    margin-top:200px;
    color: #555;
    background: #fff;
    padding: 25px;
    font-weight: 300;
    display: block;
    position: absolute;
    float: left;
    vertical-align: middle;
}
    

.footer p{
    margin-bottom: 0;
}
footer p a{
    color: #555;
    font-weight: 400;
}

footer p a:hover{
    color: #9f26aa;
    text-decoration: none;
}

/*animation*/

@keyframes checkbox-on {
  0% {
    box-shadow:
      0 0 0 10px,
      10px -10px 0 10px,
      32px 0 0 20px,
      0px 32px 0 20px,
      -5px 5px 0 10px,
      15px 2px 0 11px;
  }
  50% {
    box-shadow:
      0 0 0 10px,
      10px -10px 0 10px,
      32px 0 0 20px,
      0px 32px 0 20px,
      -5px 5px 0 10px,
      20px 2px 0 11px;
  }
  100% {
    box-shadow:
      0 0 0 10px,
      10px -10px 0 10px,
      32px 0 0 20px,
      0px 32px 0 20px,
      -5px 5px 0 10px,
      20px -12px 0 11px;
  }
}

.tooltip-arrow {
  display: none;
}

.tooltip.show {
 display: block;
  opacity: 1;
  -webkit-transform: translate3d(0, 0px, 0);
  -moz-transform: translate3d(0, 0px, 0);
  -o-transform: translate3d(0, 0px, 0);
  -ms-transform: translate3d(0, 0px, 0);
  transform: translate3d(0, 0px, 0);
}

.tooltip {
  opacity: 0;
  transition: opacity, transform .2s ease;
  -webkit-transform: translate3d(0, 5px, 0);
  -moz-transform: translate3d(0, 5px, 0);
  -o-transform: translate3d(0, 5px, 0);
  -ms-transform: translate3d(0, 5px, 0);
  transform: translate3d(0, 5px, 0);
  font-size: 0.75rem;
}

.tooltip.bs-tooltip-top .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="top"] .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #fff;
}

.tooltip.bs-tooltip-right .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="right"] .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #fff;
}

.tooltip.bs-tooltip-left .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="left"] .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #fff;
}

.tooltip.bs-tooltip-bottom .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="bottom"] .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #fff;
}

.tooltip-inner {
  padding: 10px 15px !important;
  min-width: 130px;
}

 .tooltip-inner {
  line-height: 1.5em;
  background: #fff !important;
  border: none;
  border-radius: 3px;
  box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
  color: #555 !important;
}
           
       
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
body{
  background-color: #bdc3c7;
}
.table-fixed{
  width: 100%;
  background-color: #f3f3f3;
  tbody{
    height:200px;
    overflow-y:auto;
    width: 100%;
    }
  thead,tbody,tr,td,th{
    display:block;
  }
  tbody{
    td{
      float:left;
    }
  }
  thead {
    tr{
      th{
        float:left;
       background-color: #f39c12;
       border-color:#e67e22;
      }
    }
  }
}

   

 </style>      
    </head>
    <body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;">
<div id="app" class="wrapper">
   
<nav class="main-header navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">{{$nameproject}}</a>
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
  

<div class="card-body">


<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]]
        });
    });
</script>




       
@php
    $hiddenColumns = ['id', 'created_at', 'updated_at', 'remember_token'];
@endphp
<table id="myTable">

    <thead>
        <tr>
        <th>Actions</th>
            <!-- display column headers -->
            @foreach ($columns as $column)
                @if (!in_array($column, $hiddenColumns))
                    <th>{{ $column }}</th>
                @endif
            @endforeach
          
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr data-row-id="{{ $row->id }}">
            <td>
                    <div class="action-btns">
                        <button  class="edit-btn" data-toggle="modal" data-target="#edit-modal">Edit</button>
                        
<!-- Modal for editing row data -->
<div id="edit-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form id="edit-form">
            @csrf
            @method('PUT')
            <input type="hidden" name="row_id" id="row_id">
            <!-- dynamically generate input fields for editable columns -->
            @foreach ($columns as $column)
                @if (!in_array($column, $hiddenColumns))
                    <label for="{{ $column }}">{{ $column }}</label>
                    <input type="text" name="{{ $column }}" id="{{ $column }}" class="form-control">
                @endif
            @endforeach
            <button type="submit">Save Changes</button>
        </form>
    </div>
</div>
                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </div>
                </td>
                <!-- display row data -->
                @foreach ($columns as $column)
                    @if (!in_array($column, $hiddenColumns))
                        <td class="editable">{{ $row->{$column} }}</td>
                    @endif
                @endforeach
               
            </tr>
        @endforeach
    </tbody>
</table>


   
<button type="button" id="add" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Column</button>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add Column</h4>
               
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
    $('body').bootstrapMaterialDesign();
    $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();
 
});</script>
<script>

$(document).ready(function() {
  $("#add").click(function() {
    $("#myModal").modal("show");
  });
});


</script> 



<script>

$(document).ready(function() {
  $('.edit-link').click(function() {
    // Récupère l'ID de la ligne correspondante
    var rowId = $(this).closest('tr').data('row-id');

    // Défini l'ID de la ligne dans le champ d'entrée caché
    $('#edit-form #row_id').val(rowId);

    // Affiche le modal
    $('#edit-modal').show();
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

$(document).ready(function() {
  $("#edit-btn").click(function() {
    $("#edit-modal").modal("show");
  });
});


</script>  
<script>
    $('#edit-modal').on('hidden.bs.modal', function (e) {
  // code pour réinitialiser les valeurs de l'input
});

$('.modal-footer .btn-secondary').click(function(){
  $('#edit-modal').modal('hide');
});


</script>


<script>
 
 const form = document.querySelector('#addDataForm');

form.addEventListener('submit', (event) => {
    event.preventDefault(); 

    const data = {};
    const inputs = document.querySelectorAll('input[type="text"]');
    inputs.forEach(input => data[input.id] = input.value);

    fetch('/table/{table}/{view}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        body: JSON.stringify({ data })
    })
    .then(response => {
        if(response.ok) {
            console.log('Data added successfully!');
        } else {
            console.log('An error occurred.');
        }
    })
    .catch(error => console.log(error));

    const tableBody = document.querySelector('tbody');
    const newRow = tableBody.insertRow();
   // Ajouter les cellules à la nouvelle ligne
   const actionCell = newRow.insertCell();
    const dataCells = [];
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
    actionCell.innerHTML = `
        <div class="action-btns">
            <a href="#">Edit</a>
            <form action="#" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    `;

 
    form.reset();
    $('#myModal').modal('hide');
});

</script>
<script>
$(document).ready(function() {
    // initialize variables
    var $table = $('table');
    var $editModal = $('#edit-modal');
    var $editForm = $('#edit-form');
    var $rowIdInput = $('#row_id');
    var $editableCells = $('.editable');

    // set up event listeners
    $table.on('click', '.edit-btn', openEditModal);
    $table.on('submit', '#edit-form', submitEditForm);
    $table.on('click', '.delete-btn', confirmDeleteRow);

   

    function confirmDeleteRow() {
    // get the row ID of the row to be deleted
    var rowId = $(this).closest('tr').data('row-id');

    // ask the user to confirm the delete action
    if (confirm('Are you sure you want to delete this row?')) {
        // make an AJAX request to delete the row from the database
        $.ajax({
            type: 'DELETE',
            url: '/delete-row',
            data: {row_id: rowId},
            success: function(response) {
                // remove the row from the table
                $table.find('tr[data-row-id="' + rowId + '"]').remove();

                // reload the current page
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error: ' + textStatus + ' - ' + errorThrown);
            }
        });
    } else {
        return false;
    }
}
function openEditModal() {
        // get the row ID and set it as the value of the hidden input field in the edit form
        var rowId = $(this).closest('tr').data('row-id');
        $rowIdInput.val(rowId);

        // get the current values of the editable cells and pre-fill the input fields in the edit form
        $editableCells.each(function() {
            var $editableCell = $(this);
            var columnName = $editableCell.prevAll('th').eq(0).text();
            var cellValue = $editableCell.text();
            $editForm.find('#' + columnName).val(cellValue);
        });

        // show the edit modal
        $editModal.show();
    }
function submitEditForm(event) {
        event.preventDefault();

        // get the form data and serialize it
        var formData = $editForm.serialize();

        // make an AJAX request to update the database
        $.ajax({
            type: 'POST',
            url: '/update-row',
            data: formData,
            success: function(response) {
                // update the table row with the new data
                var newRowHtml = response.row_html;
                var rowId = response.row_id;
                $table.find('tr[data-row-id="' + rowId + '"]').replaceWith(newRowHtml);

                // hide the edit modal
                $editModal.hide();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error: ' + textStatus + ' - ' + errorThrown);
            }
        });
    }

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