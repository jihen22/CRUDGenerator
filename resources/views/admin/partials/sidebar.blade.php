<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .btn-success {
  margin-bottom: 10px;
}

.btn-primary {
  margin-top: 10px;
}
</style>
    <title>Sidebar</title>
 
</head>
<body>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <h1>
                        <div class="sb-sidenav-menu-heading">{{$nameproject}}</div>
                        
                      
</h1>
                        <a href="#" class="btn btn-block btn-success rounded-0 py-2 text-white text-uppercase text-bold" id="preview-btn">
                        <i class="fas fa-eye fa-fw"></i> Preview panel
                        </a>
                        <script>
  document.addEventListener('DOMContentLoaded', function() {
  // get the preview button and modal elements
  const previewBtn = document.getElementById('preview-btn');
  const previewModal = document.getElementById('preview-modal');

  // listen for click event on preview button
  previewBtn.addEventListener('click', (event) => {
    // prevent default behavior of link click
    event.preventDefault();

    // show the modal
    previewModal.style.display = 'block';
    previewModal.classList.add('show');
  });

  // listen for click event on close button
  const closeBtn = previewModal.querySelector('.close');
  closeBtn.addEventListener('click', () => {
    // hide the modal
    previewModal.classList.remove('show');
  });

  // listen for click event on modal backdrop
  previewModal.addEventListener('click', (event) => {
    // if user clicked outside the modal content, hide the modal
    if (event.target === previewModal) {
      previewModal.classList.remove('show');
    }
  });

  // listen for escape key press to hide the modal
  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && previewModal.classList.contains('show')) {
      previewModal.classList.remove('show');
    }
  });
});


</script>

                            <a class="nav-link" href="{{ url('/myproject') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Projects List
                            </a>

                            <a class="nav-link" href="http://localhost:8000/dashboard">
                                <div class="sb-nav-link-icon" ><i class="fas fa-bars"></i></div>
                              CRUD Tables
                            </a>
                            <a class="nav-link" href="{{ url('/settings') }}">
                                <div class="sb-nav-link-icon"><i class="fa fa-cog"></i></div>
                                Settings
                            </a>
                           
                            
                          
                         
                            <div class="sb-sidenav-menu-heading">My profile</div>
                            
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                 Profile
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    
                            <a class="nav-link" href="{{ url('/myprofil') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                                Edit  Profile
                            </a>

                                  
                            <a class="nav-link" href="{{ url('/password') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-lock"></i></div>
                             Password
                            </a>
                                    
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <a >
                                    {{ Auth::user()->name }}
                                </a>
                        
                    </div>
                </nav>
            </div>
           
        </div>


    
</body>

</html>