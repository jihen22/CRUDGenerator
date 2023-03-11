<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
<<<<<<< HEAD
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">name of project</div>
                            <a class="nav-link" href="http://localhost:8000/dashboard">
=======
                  
                    <div class="nav">
             <div class="sb-sidenav-menu-heading">{{ $nameproject }}</div>

                            <a class="nav-link" href="{{ url('/d') }}">
>>>>>>> 0b13b1b0f931f3b0bdaab29dc07688d8b9309888
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