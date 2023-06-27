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
       <style>
        .fade {
    opacity: 0;
    transition: opacity 0.5s;
}

.fade.fade-in {
    opacity: 1;
}</style>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"> <a class="navbar-brand ps-3" href="{{'/dashboard'}}">CRUD GENERATOR LARAVEL</a> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link"id="submit" href="http://localhost:8000/login">Login</a></li>

                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container"><div class="first-img__text"><h1 class="first-img__heading">Welcome to our CRUD generator !</h1><div class="first-img__description"><div><span class="first-img__words">Create, read, update, and delete data in your database. Whether you're a developer, a data analyst, or a business owner, our app is designed to help you manage your data with ease. </span></div><div><span>So go ahead, create a new record, update an existing one, or delete an old entry. We hope our app makes your work simpler and more efficient.</span></div>
               
                <div class=""></div>
                <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
    <a style="margin-right: 10px; text-decoration: none; color: #ffffff; background-color: #FFA500; padding: 10px 20px; font-size: 18px; border-radius: 5px;" href="{{ route('register') }}">Register</a>
    <a style="text-decoration: none; color: #ffffff; background-color: #6c757d; padding: 10px 20px; font-size: 18px; border-radius: 5px;" href="#about">Know More</a>
</div>



        </header>
   <!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center" style="margin-top: -50px;">
            <h2 class="section-heading text-uppercase">Our Services</h2>
            <h5 class="text-muted">Empowering developers with efficient automation for data management.</h5>
        </div>
        <div class="row text-center">
            <div class="col-md-16">
                <div class="card fade" style="margin-bottom: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 5px;">
                    <div class="card-body">
                        <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-database fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <h5 class="card-title">Database Migration Generation</h5>
                        <p class="card-text">Effortlessly generate migration files for your database schema based on table descriptions, models, views, and columns.</p>
                        <div style="margin-top: 20px;">
                            <!-- Place for displaying an image -->
                            <img src="{{ asset('LoginpageRessources/migration.png') }}" alt="Image" style="max-width: 70%; height: auto; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); border-radius: 5px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-16">
                <div class="card fade" style="margin-bottom: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 5px;">
                    <div class="card-body">
                        <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-file-code fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <h5 class="card-title">View Template Generation Service</h5>
                        <p class="card-text">Create visually stunning view templates using Laravel's Blade templating engine. Customize displays for tables, lists, cards, and more, including pagination, filtering, and sorting functionalities.</p>
                        <div style="margin-top: 20px;">
                            <!-- Place for displaying an image -->
                            <img src="{{ asset('LoginpageRessources/tableview.png') }}" alt="Image" style="max-width: 80%; height: auto; ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-16">
                <div class="card fade" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 5px;">
                    <div class="card-body">
                        <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-code fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <h5 class="card-title">CRUD Code Generation Service</h5>
                        <p class="card-text">Generate Laravel models, controllers, and routes effortlessly based on your database schema and desired display preferences. Simplify CRUD operations on your database.</p>
                        <div style="margin-top: 20px;">
                            <!-- Place for displaying an image -->
                            <img src="{{ asset('LoginpageRessources/crud.png') }}" alt="Image" style="max-width: 70%; height: auto; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); border-radius: 5px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section" id="about">
  <div class="container">
    <div class="text-center" style="margin-top: -180px;">
      <h2 class="section-heading text-uppercase" style="font-family: Arial, sans-serif; font-weight: bold; margint">About</h2>
      <h5 class="section-subheading text-muted" style="font-family: Arial, sans-serif;">Our CRUD operations generator app aims to empower developers with an exceptional tool for generating CRUD (Create, Read, Update, Delete) code in Laravel applications, significantly saving valuable time and exponentially increasing productivity.</h5>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="feature">
          <div class="feature-icon">
           
          </div>
          <div class="feature-content">
            <h4 class="subheading" style="font-family: Arial, sans-serif; font-weight: bold;">  <i class="fas fa-cogs" style="color: #ff8a65;"></i>Technology Stack</h4>
            <p class="card-text">The CRUD Generator Laravel app is designed to transform the way developers create and manage CRUD operations in Laravel applications. With its advanced code generation techniques, this app streamlines the process of building robust and highly efficient systems. Experience an unparalleled level of productivity and efficiency while seamlessly focusing on the core functionality of your applications.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature">
          <div class="feature-icon">
           
          </div>
          <div class="feature-content">
            <h4 style="font-family: Arial, sans-serif; font-weight: bold;">  <i class="fas fa-magic" style="color: #64b5f6;"></i> Features</h4>
            <ul style="font-family: Arial, sans-serif;">
              <li>
                <h6 style="font-weight: bold;">CRUD code generation</h6>
              </li>
              <li>
                <h6 style="font-weight: bold;">Customizable templates</h6>
              </li>
              <li>
                <h6 style="font-weight: bold;">Intuitively designed interface</h6>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature">
          <div class="feature-icon">
            
          </div>
          <div class="feature-content">
            <h4 style="font-family: Arial, sans-serif; font-weight: bold;"> <i class="fas fa-rocket" style="color: #81c784;"></i>Benefits</h4>
            <ul>
              <li>
                <h6 style="font-weight: bold;">Skyrocketed productivity</h6>
                <p class="card-text">Effortlessly generate CRUD code in a matter of minutes, liberating precious time for tackling more intricate tasks.</p>
              </li>
              <li>
                <h6 style="font-weight: bold;">Drastically reduced development time</h6>
                <p class="card-text">Eliminate the tedium of repetitive code writing and wholeheartedly concentrate on crafting advanced functionality.</p>
              </li>
              <li>
                <h6 style="font-weight: bold;">Elevated code quality</h6>
                <p class="card-text">Create impeccable, meticulously organized code that adheres to Laravel best practices, substantially reducing errors and greatly enhancing maintainability.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="footer py-4 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6">
                        <h5 style ="width: 500px; text-align: justify; text-align-last: left;">CRUD Generator LARAVEL</h5>
                        <p style="color: white; width: 500px; text-align: justify; text-align-last: left;">
                            The CRUD Generator Laravel app automates the creation and management of CRUD operations in Laravel applications. It saves time by generating customizable code for handling data entities. With a few clicks, developers can generate code for CRUD operations, enhancing productivity and reducing errors. The app allows developers to focus on core functionality while efficiently handling routine coding tasks.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#!">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#!">Contact</a></li>
                            <!-- Add more quick links as needed -->
                        </ul>
                        <h5>Follow Us</h5>
                        <div class="social-icons">
                            <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook fa-lg"></i></a>
                            <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter fa-lg"></i></a>
                            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram fa-lg"></i></a>
                            <!-- Add more social media icons and links as needed -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5>Legal</h5>
                        <ul class="list-unstyled">
                            <li><a href="#!">Privacy Policy</a></li>
                            <li><a href="#!">Terms of Use</a></li>
                            <!-- Add more legal links as needed -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<style>
/* Custom CSS for the footer */
.footer {
    background-color: #000000;
}
.social-icons {
margin-top: 10px;
}

.social-icons a {
margin-right: 10px;
color: #ffff00;
}

.social-icons a:hover {
color: #007bff;
}

.footer h5 {
color: #FFD700;
margin-bottom: 15px;
}

.footer ul li a {
color: #ffffff;
text-decoration: none;
}

.footer ul li a:hover {
color: #007bff;
}

.footer .sb-sidenav-footer {
color: #ffffff;
}
</style>
        
        <script>
  document.getElementById("submit").addEventListener("click", function() {
    
      window.location.href = "/login";
    
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
    <script> window.addEventListener('scroll', fadeInElements);

function fadeInElements() {
    var fadeElements = document.querySelectorAll('.fade');
  
    for (var i = 0; i < fadeElements.length; i++) {
        var element = fadeElements[i];
        var position = element.getBoundingClientRect().top;
        var windowHeight = window.innerHeight;
      
        if (position < windowHeight - 100) {
            element.classList.add('fade-in');
        }
    }
}
</script>
</html>
