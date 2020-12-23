<?php
    include('dbConnection.php');
    if(isset($_REQUEST['rSignup'])){
        if(($_REQUEST['rName']=="") || ($_REQUEST['rEmail']=="") || ($_REQUEST['rPassword']=="")){
            $regmsg='<div class="alert alert-secondary mt-2" role="alert">All Fields Are Required.</div>';
        }else{
            $sql="SELECT req_email FROM reqregistration_tb WHERE req_email='".$_REQUEST['rEmail']."'";
            $result=$conn->query($sql);
            if($result->num_rows == 1){
                $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
            }else{
                $rName=$_REQUEST['rName'];
                $rEmail=$_REQUEST['rEmail'];
                $rPassword=$_REQUEST['rPassword'];
                $sql="INSERT INTO reqregistration_tb(req_name,req_email,req_password) VALUES('$rName','$rEmail','$rPassword')";
                if($conn->query($sql)==TRUE){
                    $regmsg='<div class ="alert alert-success mt-2" role="alert">Account Successfully Created!!</div>';
                }else{
                    $regmsg='<div class="alert alert-dark mt-2" role="alert">Unable To Create Account.</div>';
                }
            }
        }
    }
?>

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
    <title>Registration</title>
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
                <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav><!--------End Navigation----------->
    <div class="back-image" style="background-image: url(images/regImg2.jpg);">
        <div class="container pt-5" id="Registration">
                <h2 class="text-center bg-primary">Create an Account</h2>
                <div class="text-left row mt-4 mb-4">
                    <div class="col-md-6 offset-md-3">
                        <form action="" class="shadow-lg p-4" method="POST">
                            <div class="form-group">
                                <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="rName">
                            </div>
                            <div class="form-group">
                                <i class="fas fa-user"></i><label for="email" class="pl-2 font-weight-bold">Email</label><input type="email"
                                class="form-control" placeholder="Email" name="rEmail">
                                <!--Add text-white below if want text color white-->
                                <small class="form-text text-center">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">Create
                                Password</label><input type="password" class="form-control" placeholder="Password" name="rPassword">
                            </div>
                            <button type="submit" class="btn btn-primary mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
                            <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data
                            Policy and Cookie Policy.</em><br>
                            <?php if(isset($regmsg)) {echo $regmsg; } ?>
                            <br><a href="index.php" class="btn btn-danger mr-4">Home</a>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    <!-- Boostrap JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>