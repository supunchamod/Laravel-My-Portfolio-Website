<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Supun Chamod Portfolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

 
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#qualification" class="nav-item nav-link">Education</a>
                <a href="#skill" class="nav-item nav-link">Skill</a>
                <a href="#service" class="nav-item nav-link">Service</a>
             
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-menu d-none d-lg-block" style="background-color:#457efa; color: #ffffff;">Hire Me</a>
        </div>
    </nav>
    
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">Hello, my name</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 4px #ffffff;">Supun Chamod</h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">Full Stack Developer  ,Web Developer, Front End Developer,Back End Developer,WorlPress Developer</div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="" class="btn btn-white mr-4">Download CV</a>
                        
                       
                    </div>
                </div>
                <div class="col-lg-6 px-8 pl-lg-0 pb-5 pb-lg-4 about-img">
                    <img class="img-fluid rounded-circle shadow-sm" src="img/profile.jpeg" alt="" style="width: 550px; height: 550px;">
                </div>
            </div>
        </div>
    </div>
  

    

    @include('about')
    
    @include('skill')

    @include('education')
    
    @include('portfolio')

    @include('service')


    <div class="container-fluid bg-primary text-white mt-5 py-1 px-sm-1 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <a class="text-white" href="#">Privacy</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Terms</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">FAQs</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Help</a>
            </div>
            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">Supun Chamod</a>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="#">Supun Chamod</a>
            </p>
        </div>s
    </div>

 
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <script src="js/main.js"></script>
</body>

</html>