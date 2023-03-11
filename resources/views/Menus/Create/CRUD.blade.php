<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Create Table</title>
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


        <!-- CSS pour Bootstrap -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

            <!-- jQuery -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <!-- Fichier JavaScript pour Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
	                 margin-right: 80px; /* Ajouter une marge à droite pour s'ajuster à côté de la barre latérale */
	             margin-left: 80px; /* Ajouter une marge à gauche pour rapprocher le div de la barre latérale */
	            width: calc(100% - 80px); /* Ajuster la largeur pour qu'elle s'ajuste à la largeur restante de l'espace disponible à gauche de la barre latérale */
                            }

                       .small-sidebar {
	                     width: 70px; /* Spécifier une largeur fixe pour l'élément de la barre latérale */
                 }
                   .container-fluide {
                     margin-bottom: 50px; /* Ajouter une marge en bas pour rapprocher la carte du contenu suivant */
              }
                .intro {
                    height: 100%;
                             }

                            table td,
                            table th {
                  text-overflow: ellipsis;
                           white-space: nowrap;
                    overflow: hidden;
                                 }

              .card {
           border: 1px solid #ccc;
                   border-radius: 0.5rem;
               box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                        }


           .mask-custom {
                   background: rgba(24, 24, 16, .2);
               border-radius: 2em;
                backdrop-filter: blur(25px);
                  border: 2px solid rgba(255, 255, 255, 0.05);
                     background-clip: padding-box;
                  box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
                  }
	              </style>
</head>

<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;" >
	<div id="app" class="warpper">
	    @include('admin.partials.topbar')
	       <div id="layoutSidenav" class="flex-container">
                   @include('admin.partials.sidebar', ['sidebarClass' => 'small-sidebar'])
             <div class="content-warper" id="monDiv" >
	                <div class="content-header"></div>
                         <section class="content">
    <!--table name , table controller and table model -->
    <div class="card">
  <h3 class="card-header">Create table</h3>
  <div class="card-body">
  <form action="/generate-crud" method="post">
    <div class="container-fluid p-0">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="table-name">Table Name</label>
                <input type="text" class="form-control" id="table-name" name="table-name" placeholder="Enter table name">
            </div>
            <div class="form-group col-md-6">
                <label for="model-name">Model Name</label>
                <input type="text" class="form-control" name="model-name" id="model-name" placeholder="Enter Model name for your table">
            </div>
        </div>
        <div class="form-group">
            <label for="controller-name">Controller Name</label>
            <input type="text" class="form-control"name="controller-name" id="controller-name" placeholder="Enter Controller name">
        </div>

        <!-- Table Fields -->  

<<<<<<< HEAD
        <h4>Add Fields to Your Table</h4>
=======
      <!-- Add Feild modal -->
      <form method="POST" action="{{ route('tablefiles.generate') }}">
    @csrf
      <div class="modal fade" id="addFeildModal" tabindex="-1" role="dialog" aria-labelledby="addFeildModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">

              <h4 class="modal-title" id="addProjectModalLabel">Feild Settings</h4>
            </div>
            <div class="modal-body">
              <form id ="add-Feild-form">
                <div class="form-group">




                
                  <label for="FeildType">Feild Type</label>
                 
<select id="FeildType" name="field-type">
  <optgroup label="number-field">Number Field</optgroup>
  <option value ="Text">Text</option>
  <option value ="Email">Email</option>
  <option value ="Textarea">Textarea</option>
  <option value ="Password">Password</option>
  </optgrpoup>
  <optgroup label="choice-field">Choice Field</optgroup>
  <option value ="Radio">Radio</option>
  <option value ="Select">Select</option>
  <option value ="Checkbox">Checkbox</option>
</optgrpoup>
<optgroup label="text-field">
  <option value ="Integer">Integer</option>
  <option value ="Float">Float</option>
  <option value ="money">money</option>
</optgroup>
<optgroup label="date-time-field">
<option value ="DatePicker">DatePicker</option>
<option value ="Date/TimePicker">Date/TimePicker</option>
<option value ="Time Picker">Time Picker</option>
</optgroup>
>>>>>>> 0b13b1b0f931f3b0bdaab29dc07688d8b9309888

        <div class="form-group">
            <label for="field_type">Field Type</label>
            <select id="field_type" name="field_type">
                <optgroup label="number-field">
                    <option value="Text">Text</option>
                    <option value="Email">Email</option>
                    <option value="Textarea">Textarea</option>
                    <option value="Password">Password</option>
                </optgroup>
                <optgroup label="choice-field">
                    <option value="Radio">Radio</option>
                    <option value="Select">Select</option>
                    <option value="Checkbox">Checkbox</option>
                </optgroup>
                <optgroup label="text-field">
                    <option value="Integer">Integer</option>
                    <option value="Float">Float</option>
                    <option value="Money">Money</option>
                </optgroup>
                <optgroup label="date-time-field">
                    <option value="DatePicker">DatePicker</option>
                    <option value="Date/TimePicker">Date/TimePicker</option>
                    <option value="Time Picker">Time Picker</option>
                </optgroup>
                <optgroup label="file-upload-field">
                    <option value="File">File</option>
                    <option value="Photo">Photo</option>
                </optgroup>
                <optgroup label="RelationshipFields">
                    <option value="Belongs to relationship">Belongs to relationship</option>
                    <option value="Belongs to many relationships">Belongs to many relationships</option>
                </optgroup>
            </select>
        </div>
                    
        <div class="form-group">
           <label for="DBCName">Data base column Name:</label>
           <input type="text" class="form-control" id="DBCName" name="DBCName" placeholder="Enter DBC Name">
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
                                             <label for="VisualTitle">Visual Title </label>
                                             <input type="text" class="form-control"name="VisualTitle" id="VisualTitle" placeholder="Enter Visual title">
                                    </div>

                                   <div class="form-group">
                                                        <label for="inlist">In List</label>
                                                            <select id="inlist"name="inlist">
                                                                    <option value="yes">yes</option>
                                                                    <option value="no">no</option>
                  
                                                            </select>
                                   </div>
                                   <div class="form-group" >
                                                <label for="increate">In create</label>
                                                      <select id="increate"name="increate">
                                                        <option value="yes">yes</option>
                                                        <option value="no">no</option>
  
                                                       </select>
                                   </div>
                                   <div class="form-group" >
                                     <label for="inedit">In edit</label>
                                             <select id="inedit" name="inedit">
                                                <option value="yes">yes</option>
                                                <option value="no">no</option>
  
                                            </select>
                                   </div>

                         <div class="form-group">
                             <label for="inshow">In show
                             </label>
                                    <select id="inshow" name="inshow">
                                         <option value="yes">yes</option>
                                         <option value="no">no</option>
  
                                    </select>
                         </div>
                
                      <h6 id="addFeildModalLabel">Additionnal Settings</h6>
                                   <div>
                         <label for="field-max-limit">Max Limit:</label>
                         <input type="number" id="field-max-limit"name="field-max-limit"></br>
                   </div>
                   <div>
                          <label for="field-min-limit">Min Limit:</label>
                          <input type="number" id="field-min-limit" name="field-min-limit"></br> 
                </div>

                   <div>
                          <label for="field-default-value">Default value</label>
                          <input type="number" id="field-default-value" name="field-default-value" placeholder="Enter a Default Value "></br> 
                   </div>



                
                    </div>
             
                <button type="submit" class="btn btn-primary" id="genbutt" name="genbutt">Generate Table files</button>
  </form>
              
</body> 

   <!-- <script> 
 // document.getElementById("submit").addEventListener("click", function() {
  //  // Get all the input fields
   // const  FeildType= document.getElementById("FeildType").value;
   // const DBCName = document.getElementById("DBCName").value;
    //const Visualtitle = document.getElementById("VisualTitle").value;
    //const Validation = document.getElementById("Validation").value;
   // const Visibility = document.getElementById("Visibility").value;
    //const Max = document.getElementById("set-max-limit").value;
    //const Min = document.getElementById("set-min-limit").value;
    //const Defaultvalue = document.getElementById("set-default-value").value;
  

    // Validate the input fields
    //if (DBCName  === '' ||Visualtitle === '' ) {
     // alert('Please fill all the required fields.');
    //  return;
  
   // }
 // });
</script> -->
@include('admin.partials.footer')

</html>              