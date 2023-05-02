<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Welcome Page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">CRUD generator Laravel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link"id="submit">Login</a></li>

                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome to our CRUD generator !</div>
                <div class="">Create, read, update, and delete data in your database. Whether you're a developer, a data analyst, or a business owner, our app is designed to help you manage your data with ease. So go ahead, create a new record, update an existing one, or delete an old entry. We hope our app makes your work simpler and more efficient.</div>
                <a class="btn btn-primary btn-xl " href="{{ route('register') }}">Start Project</a>
<a class="btn btn-secondary btn-xl " href="#about">Know More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"> Our services</h2>
                    <h3 class="section-subheading text-muted">Developers can automate the processes of creating, reading, updating, and deleting data, saving them time and efficiency.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Database Migration Generation</h4>
                        <p class="text-muted">  Taking in the description of the database (tables, columns, relations) and generate the necessary migration files to create the database schema</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">CRUD Code Generation Service</h4>
                        <p class="text-muted"> This service would take in the database schema and user preferences for the display (tables, lists, cards, etc.) and generate the necessary Laravel models, controllers, and routes to perform CRUD operations on the database. The service could use Laravel's built-in scaffolding functionality to generate the boilerplate code and then modify it based on the user's preferences.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">View Template Generation Service</h4>
                        <p class="text-muted">This service would take in the user preferences for the display and generate the necessary view templates using Laravel's Blade templating engine. The service could generate templates for tables, lists, cards, and any other preferred display format, and could also include pagination, filtering, and sorting functionality based on user preferences.</p>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Welcome to our CRUD GENERATOR LARAVEL project! The purpose of this project is to provide developers with a tool that can generate code for CRUD (Create, Read, Update, Delete) operations in Laravel applications. With this generator, developers can save time and increase productivity by automating the tedious task of writing boilerplate code.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                
                                <h4 class="subheading">Technology Stack</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">This CRUD generator is built using Laravel, a popular PHP framework for web application development. It also uses several Laravel packages and libraries, including the Illuminate database library for database operations, the Blade templating engine for generating code templates, and the Faker package for generating fake data.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Features</h4>
</div>
                                <h6 class="subheading">Support for multiple database types</h6>
                                <h6 class="subheading">Customizable templates</h6>
                                <h6 class="subheading">Easy-to-use interface</h6>
                            </div>
                        
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Benefits</h4>
                               
                            </div>
                            <div class="timeline-body"><p class="text-muted">
                                <h6>Increased productivity<h6>
                                With this tool, developers can generate CRUD code in minutes, rather than hours or days, freeing up time to work on more complex tasks.
<h6>Reduced development time<h6>
     The generator eliminates the need to write repetitive code, allowing developers to focus on building more complex functionality.
<h6>Improved code quality<h6> 
    The generator produces clean, well-organized code that adheres to Laravel best practices, reducing the risk of errors and making code easier to maintain.</p></div>
                        </div>
                    </li>
                  
        </section>
      
 
   
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                   
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <script>
  document.getElementById("submit").addEventListener("click", function() {
    
      window.location.href = "/home";
    
  });
</script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
