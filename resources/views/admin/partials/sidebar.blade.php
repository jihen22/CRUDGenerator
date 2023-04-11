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
                        
                        <div class="sb-sidenav-menu-heading">{{ $nameproject }}</div>
                        
                      
                        
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



                            <a class="nav-link" href="http://localhost:8000/dashboard">
                                <div class="sb-nav-link-icon" ><i class="fas fa-bars"></i></div>
                                Menus
                            </a>
                            <a class="nav-link" href="{{ url('/settings') }}">
                                <div class="sb-nav-link-icon"><i class="fa fa-cog"></i></div>
                                Settings
                            </a>
                            <div class="sb-sidenav-menu-heading">Generted Code</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-code"></i></div>
                                Download Code
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="download.html"> <i class=" fas fa-download"></i>Download Full Code</a>
                                    <a class="nav-link" href="download.html"> <i class=" fas fa-cloud-download-alt"></i>Download only New Files</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class=" fas fa-eye"></i></div>
                                View code
                            </a>
                          
                         
                            <div class="sb-sidenav-menu-heading">My profile</div>
                            
                            <a class="nav-link" href="{{ url('/myproject') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                My project
                            </a>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                 My profile
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    
                            <a class="nav-link" href="{{ url('/myprofil') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                                Edit my profil
                            </a>

                                  
                            <a class="nav-link" href="{{ url('/password') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-lock"></i></div>
                                Change password
                            </a>
                                    
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        merrry jane
                    </div>
                </nav>
            </div>
           
        </div>


    
</body>

</html>