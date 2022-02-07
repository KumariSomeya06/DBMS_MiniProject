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
    <title>ContactUs</title>
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
                <li class="nav-item"><a href="index.php#Services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="UserRegistration.php" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav><!--------End Navigation----------->
    <div class="back-image" style="padding-top: 5%;background-image: url(images/regImg2.jpg);">
        <div class="container" id="Contact">
        <!--Start Contact Us Container-->
            <h2 class="text-center bg-primary mb-4">Contact US</h2> <!-- Contact Us Heading -->
            <div class="row">

                <!--Start Contact Us 1st Column-->
                <!--?php include('contactform.php') ?-->   
                <!--Start Contact Us 1st Column-->
                <div class="col-md-8">
                    <form action="" method="post">
                        <input type="text" class="form-control" name="name" placeholder="Name"><br>
                        <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
                        <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
                        <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
                        <input class="btn btn-primary btn-block" type="submit" value="Send" name="submit"><br><br>
                        <?php if(isset($msg)) {echo $msg; } ?>
                    </form>
                </div> 
                <!-- End Contact Us 1st Column -->
                <!-- End Contact Us 1st Column -->

                <div class="col-md-4 text-center">
                    <!-- Start Contact Us 2nd Column-->
                    <strong>Headquarter:</strong> <br>
                    eW-SMS Pvt Ltd, <br>
                    Mangalore<br>
                    Karnataka- 123456 <br>
                    Phone: +00000000 <br>
                    <a href="#" target="_blank">www.ewsms.com</a> <br>
                    <br><br>
                    <strong>Bangalore Branch:</strong> <br>
                    eW-SMS Pvt Ltd, <br>
                    Banagalore, Karnataka <br>
                    Karnataka -123456 <br>
                    Phone: +00000000 <br>
                    <a href="#" target="_blank">www.ewsms.com</a> <br>
                </div> <!-- End Contact Us 2nd Column-->
            </div> <!-- End Contact Us Row-->
        </div> <!-- End Contact Us Container-->
        <!-- End Contact Us -->
    </div>
    <!-- Boostrap JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>