
<DOCTYPE>
<html>


@include('admin.partials.header')


<body>

@include('admin.partials.topbar')
<div id="layoutSidenav">
       @include('admin.partials.sidebar')




<div id="layoutSidenav_content">

    <main>
    <div class="card-header">
   <i class="fas fa-table me-1"></i>
    Tables
                            </div>
    <h1>Select desired menu </h1>
    <a  class="btn btn-info text-bold rounded-0" id="createCrudTable">
Create CRUD menu item
</a>
   
    <a class="btn btn-info text-bold rounded-0"id="createNonCrudTable">
Create non-CRUD menu item
</a> <a  class="btn btn-info text-bold rounded-0"id="createParentCrudTable">
Create Parent menu item
</a>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        
                                    </thead>
                                    <tfoot>
                                       
                                    </tfoot>
                                    <tbody>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
