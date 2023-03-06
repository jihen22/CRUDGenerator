<!DOCTYPE html>
<html>
<head>
	<title>Exemple de style CSS pour une liste</title>

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
       
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


		<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('Dashboardassets/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
		<link href="{{asset('css/styles.css')}}" rel="stylesheet" />
		
	<style>
        .menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

.parent {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  background-color: #f0f0f0;
  border-bottom: 1px solid #ccc;
}

.children {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  background-color: #f8f8f8;
}

.child {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  border-bottom: 1px solid #ccc;
}

.btn-group {
  display: flex;
  flex-wrap: wrap;
  margin-left: auto;
}

.btn-group .btn {
  flex: 1;
  margin: 0 5px;
}

.btn-group .btn-primary {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
}

.btn-group .btn-primary:hover {
  background-color: #0069d9;
  border-color: #0062cc;
  color: #fff;
}

.btn-group .btn-danger {
  background-color: #dc3545;
  border-color: #dc3545;
  color: #fff;
}

.btn-group .btn-danger:hover {
  background-color: #c82333;
  border-color: #bd2130;
  color: #fff;
}

.btn-group .btn-warning {
  background-color: #ffc107;
  border-color: #ffc107;
  color: #fff;
}

.btn-group .btn-warning:hover {
  background-color: #e0a800;
  border-color: #d39e00;
  color: #fff;
}


	</style>
</head>
<body>
<ul class="menu">
    <li class="parent">
        <span>Parent 1</span>
        <small>parent</small>
        <a href="" class="btn btn-warning d-block"><i class="fas fa-edit"></i> Edit</a>
<button type="button" data-url="" class="btn btn-danger delete-crud"><i class="fas fa-trash"></i> Delete</button>
<a href="" class="btn btn-primary d-block"><i class="fas fa-clone"></i> Clone</a>
        <ul class="children">
            <li class="child">
                <span>Child 1</span>
                <small>child</small>
                <a href="" class="btn btn-warning d-block"><i class="fas fa-edit"></i> Edit</a>
<button type="button" data-url="" class="btn btn-danger delete-crud"><i class="fas fa-trash"></i> Delete</button>
<a href="" class="btn btn-primary d-block"><i class="fas fa-clone"></i> Clone</a>
            </li>
            <li class="child">
                <span>Child 2</span>
                <small>child</small>
                <a href="" class="btn btn-warning d-block"><i class="fas fa-edit"></i> Edit</a>
<button type="button" data-url="" class="btn btn-danger delete-crud"><i class="fas fa-trash"></i> Delete</button>
<a href="" class="btn btn-primary d-block"><i class="fas fa-clone"></i> Clone</a>
            </li>
        </ul>
    </li>
  
</ul>

    </body>
