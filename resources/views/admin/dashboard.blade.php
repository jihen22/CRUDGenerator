
<DOCTYPE>
<html>


@include('admin.partials.header')
<style>
    	
    

/* Style the primary button */
.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

/* Style the danger button */
.btn-danger {
  
}

/* Style the warning button */
.btn-warning {
 
}

/* Style the info button */
.btn-info {
}

/* Style the edit button */
.btn-warning {
 
}

/* Style the clone button */
.btn-primary {

}

/* Add some margin to the delete button */
.delete-crud {
  margin-left: 1rem;
}
.content {
  max-height: 500px;
  padding: 20px;
}

.content-header {
  margin-bottom: 20px;
}
.content-header h1 {
  padding: 42px 57px;
  display: inline-block;
}

	</style>


<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;">
<div id="app" class="wrapper">

@include('admin.partials.topbar')
<div id="layoutSidenav">
       @include('admin.partials.sidebar')
       <div id="layoutSidenav_content">

       



    <main>
    <div class="card-header">
   <i class="fas fa-table me-1"></i>
    Menu
    </div>
    <div class="content-warper" id="monDiv" style="">
	<div class="content-header">
		<div class="container-fluid p-0">
			<div class ="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-drak">Select desired menu </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
	     <div class="container-fluide p-0">
           <div class="card card-default">

            <div class="card-body">

    <a  class="btn btn-info text-bold rounded-0" id="createCrudTable">
Create CRUD menu item
</a>
   
    <a class="btn btn-info text-bold rounded-0"id="createNonCrudTable">
Create non-CRUD menu item
</a> <a  class="btn btn-info text-bold rounded-0"id="createParentCrudTable">
Create Parent menu item
</a>
<br>
<br>


                





                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
<script>
		document.getElementById("createCrudTable").addEventListener("click", function() {
			window.location.href = "/CRUD";
      
			console.log("Creating CRUD table...");
		});

		document.getElementById("createNonCrudTable").addEventListener("click", function() {
			window.location.href = "/NonCRUD";
			console.log("Creating non-CRUD table...");
		});

		document.getElementById("createParentCrudTable").addEventListener("click", function() {
			window.location.href = "/Parent";
			console.log("Creating parent CRUD table...");
		});
	</script>


            @include('admin.partials.footer')
    </body>
    </html>
