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
    <div class="sb-sidenav-footer text-light" >
        Logged in as: <a>{{ Auth::user()->name }}</a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('Dashboardassets/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('Dashboardassets/assets/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('Dashboardassets/assets/demo/chart-bar-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('Dashboardassets/js/datatables-simple-demo.js')}}"></script>
</body>
</html>  