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
                <div class="text-center">
                    <h4 class="section-heading text-uppercase"> Our services</h4>
                    <h5 class=" text-muted">Developers can automate the processes of creating, reading, updating, and deleting data, saving them time and efficiency.</h5>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h5 class="my-3">Database Migration Generation</h5>
                        <p class="text-muted">  Taking in the description of the database (table name , models , vues and columns ) and generating the necessary migration files to create the database schema</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h5 class="my-3">CRUD Code Generation Service</h5>
                        <p class="text-muted"> This service would take in the database schema and user preferences for the display (tables, lists,etc.) and generate the necessary Laravel models, controllers, and routes to perform CRUD operations on the database. </p>
                    </div>
                    <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h5 class="my-3">View Template Generation Service</h5>
                        <p class="text-muted">This service would take in the user preferences for the display and generate the necessary view templates using Laravel's Blade templating engine. The service could generate templates for tables, lists, cards, and any other preferred display format, and could also include pagination, filtering, and sorting functionality based on user preferences.</p>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="page-section" id="about">
  <div class="container">
    <div class="text-center">
      <h4 class="section-heading text-uppercase">About </h4>
      <h5 class="section-subheading text-muted">Welcome to our CRUD GENERATOR LARAVE project! The purpose of this project is to provide developers with a tool that can generate code for CRUD (Create, Read, Update, Delete) operations in Laravel applications. With this generator, developers can save time and increase productivity by automating the tedious task of writing boilerplate code.</h5>
    </div>
    <div>
    <ul class="timeline">
      <li>
        <div class="timeline-image">
          <img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." />
        </div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4 class="subheading">Technology Stack</h4>
          </div>
          <div class="timeline-body">
            <p class="text-muted">The CRUD Generator Laravel app is a powerful tool designed to revolutionize the way developers create and manage CRUD operations in their Laravel applications. By leveraging advanced code generation techniques, this app streamlines the process of building robust and efficient systems. With just a few clicks, developers can effortlessly generate complete and customizable code for creating, reading, updating, and deleting data entities. This app not only saves valuable time but also ensures consistency and reduces the chances of errors by automating the creation of boilerplate code. Experience a new level of productivity and efficiency with the CRUD Generator Laravel app, empowering developers to focus on the core functionality of their applications while effortlessly handling the repetitive aspects of coding.</p>
          </div>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-image">
          <img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." />
        </div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4>Features</h4>
          </div>
          <div class="timeline-body">
            <h6 class="subheading">Support for multiple database types</h6>
            <h6 class="subheading">Customizable templates</h6>
            <h6 class="subheading">Easy-to-use interface</h6>
          </div>
        </div>
      </li>
      <li>
        <div class="timeline-image">
          <img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." />
        </div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4>Benefits</h4>
          </div>
          <div class="timeline-body">
            <p class="text-muted">
              <h6>Increased productivity</h6>
              With this tool, developers can generate CRUD code in minutes, rather than hours or days, freeing up time to work on more complex tasks.
              <h6>Reduced development time</h6>
              The generator eliminates the need to write repetitive code, allowing developers to focus on building more complex functionality.
              <h6>Improved code quality</h6>
              The generator produces clean, well-organized code that adheres to Laravel best practices, reducing the risk of errors and making code easier to maintain.
            </p>
          </div>
        </div>
      </li>
    </ul>
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
</html>
