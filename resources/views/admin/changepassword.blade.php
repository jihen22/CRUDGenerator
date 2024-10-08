
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">


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

		<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('Dashboardassets/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
		<link href="{{asset('css/styles.css')}}" rel="stylesheet" />
		

	
	
<style>
.card {
  margin: 0 auto;
  max-width: 1000px; /* ou la valeur de votre choix */
  border: 1px solid #ccc;
  border-radius: 0.5rem;
  padding: 1rem;
}

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
	margin-left: 100px; /* Ajouter une marge à gauche pour rapprocher le div de la barre latérale */
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
.content-header h1 {
  padding: 42px 57px;
  display: inline-block;
}
.content-header h1 {
  padding: 12px 27px;
  
  font-size: 40px;

}
.content-warper {
        display: flex;
       
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
	
			<div class ="row mb-2">
				<div class="col-sm-6">
			
<h1 class="m-0 text-drak" style="">Change Password </h1>
             
                </div>
            </div>
       
    </div>
      <section class="content">
	     <div class="container-fluide p-0">
           <div class="card card-default">

            <div class="card-body">
                <div class="row"> 
                    <div class="col-md-offset-3 mx-auto">
                        <form method="POST" action="{{ route('admin.changepassword') }}">
                        @csrf 
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                            <div class="form-group">
                                <label for="current_password" class="form-label required-1">Current password</label>
                                <input type="password" id="current_paswword" name="current_password"  autocomplete="current_password" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label required-1">New password</label>
                        <input type="password" id="password" name="password" autocomplete="new-password" required="required" class="form-control">
                        <div class="mt-3">
                            <ul>
                                <li>
                                    At least 8 characters
                                </li>
                            </ul>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="password_confirmation" class="form-label required-1" > Repeat new password </label>
                        <input type="password" id="password_confirmation" name="password_confirmation" autocomplete="new-password" required="required" class="form-control">
                        </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary rounded-0 text-blod"> Save password </button> 
                    </div>
                     </form>
                     @if(session('successMsg'))
                <div class="alert alert-success">
                    {{ session('successMsg') }}
                </div>
            @endif

            @if(session('errorMsg'))
                <div class="alert alert-danger">
                    {{ session('errorMsg') }}
                </div>
            @endif
                     
                    </div>
           </div>
        </div>
        </div>
        </div>  
</section>       
</div>
</div>
</div>  


@include('admin.partials.footer')
   
   </body>
   </html>
