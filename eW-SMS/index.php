<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/custom.css">
    <title>eW-SMS</title>
</head>
<body>
    <!-----Start Navigation----->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-5 fixed-top" >
        <a href="index.php" class="navbar-brand">eW-SMS</a>
        <span class="navbar-text">The Best Service For You Is Here</span>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav ml-auto text-right custom-nav" >
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="UserRegistration.php" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="contactform.php" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav><!--------End Navigation----------->

    <!-- Start Header Jumbotron-->
    <header class="jumbotron back-image" style="background-image: url(images/final1.jpg);">
        <div class="myclass mainHeading">
            <h1 class=" text-primary font-weight-bold">WELCOME TO eW-SMS</h1>
            <p class="font-italic">You Happy means we Happy!!</p>
            <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
            <a href="UserRegistration.php" class="btn btn-danger mr-4">Sign Up</a>
        </div>
    </header> <!-- End Header Jumbotron -->

    <div class="container">
        <!--Introduction Section-->
        <div class="jumbotron">
            <h3 class="text-center">eW-SMS Services</h3>
            <p>
                eW-SMS Services is Electronics and Electrical service workshops offering
                wide array of services. We focus on enhancing your uses experience by offering world-class
                Electronic Appliances maintenance services. Our sole mission is “To provide Electronic Appliances care
                services to keep the devices fit and healthy and customers happy and smiling”.

                With well-equipped Electronic Appliances service centres and fully trained mechanics, we
                provide quality
                services with excellent packages that are designed to offer you great savings.

                Our state-of-art workshops are conveniently located in many cities across the country. Now you
                can book your service online by doing Registration.
            </p>
        </div>
    
    <!--Introduction Section End-->
    <!-- Start Services -->
    <div class="container text-center border-bottom" id="Services">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-lightbulb fa-8x text-primary"></i></a>
                <h4 class="mt-4">Electronic Appliances</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-bell fa-8x text-primary"></i></a>
                <h4 class="mt-4">Preventive Maintenance</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fa fa-cog fa-spin fa-8x text-primary fa-fw"></i></a>
                <h4 class="mt-4">Fault Repair</h4>
            </div>
        </div>
    </div> <!-- End Services -->
    <!-- Start Registration  -->
    <!--?php include('UserRegistration.php') ?-->
    
    <!-- End Registration  -->

    <!-- Start Happy Customer  -->
    <div class="jumbotron bg-primary" id="Customer">
    <!-- Start Happy Customer Jumbotron -->
        <div class="container">
        <!-- Start Customer Container -->
            <h2 class="text-center text-white">Happy Customers</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <!-- Start Customer 1st Column-->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/actor.jpg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Nawazuddin Siddiqui</h4>
                            <p class="card-text">Best way to deal with the urgent requirment of best service for your appliances.</p>
                        </div>
                    </div>
                </div> <!-- End Customer 1st Column-->
                <div class="col-lg-3 col-sm-6">
                    <!-- Start Customer 2nd Column-->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/Zayn-Malik.jpg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Zayn Malik</h4>
                            <p class="card-text">Best way to deal with the urgent requirment of best service for your appliances.</p>
                        </div>
                    </div>
                </div> <!-- End Customer 2nd Column-->
                <div class="col-lg-3 col-sm-6">
                    <!-- Start Customer 3rd Column-->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/mrBean.jpg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Mr.Bean</h4>
                            <p class="card-text">Best way to deal with the urgent requirment of best service for your appliances.</p>
                        </div>
                    </div>
                </div> <!-- End Customer 3rd Column-->
                <div class="col-lg-3 col-sm-6">
                    <!-- Start Customer 4th Column-->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/momina.jpg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Momina Mustehsan</h4>
                            <p class="card-text">Best way to deal with the urgent requirment of best service for your appliances.</p>
                        </div>
                    </div>
                </div> <!-- End Customer 4th Column-->
            </div> <!-- End Customer Row-->
        </div> <!-- End Customer Container -->
    </div> <!-- End Customer Jumbotron -->
    </div>
    

    <!-- Start Footer-->
    <footer class="container-fluid bg-dark text-white" style="border-top: 5px solid blue;">
        <div class="container">
        <!-- Start Footer Container -->
            <div class="row py-3">
                <!-- Start Footer Row -->
                <div class="col-md-5">
                    <!-- Start Footer 1st Column -->
                    <span class="pr-2">Follow Us: </span>
                    <a href="#" target="_blank" class="pr-2 fr-color"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank" class="pr-2 fr-color"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="pr-2 fr-color"><i class="fab fa-youtube"></i></a>
                </div> <!-- End Footer 1st Column -->
                <div class="col-md-6 text-right">
                    <!-- Start Footer 2nd Column -->
                    <small> Designed by Someya Kumari &copy; 2020.</small>
                    <small class="ml-2"><a href="#">Admin Login</a></small>
                </div> <!-- End Footer 2nd Column -->
            </div> <!-- End Footer Row -->
        </div> <!-- End Footer Container -->
    </footer> <!-- End Footer -->


    <!-- Boostrap JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>