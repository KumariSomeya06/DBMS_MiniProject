<?php
include('../dbConnection.php');
session_start();
if(!isset($_SESSION['is_login'])){
    if(isset($_REQUEST['rEmail'])){
        $rEmail = mysqli_real_escape_string($conn,trim($_REQUEST['rEmail']));
        $rPassword = mysqli_real_escape_string($conn,trim($_REQUEST['rPassword']));
        $sql = "SELECT req_email, req_password FROM reqregistration_tb WHERE req_email='".$rEmail."' AND req_password='".$rPassword."' limit 1";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $_SESSION['is_login'] = true;
            $_SESSION['rEmail'] = $rEmail;
            // Redirecting to RequesterProfile page on Correct Email and Pass
            echo "<script> location.href='RequesterProfile.php'; </script>";
            exit;
        }else {
            $msg = '<div class="alert alert-warning mt-2" role="alert"> Enter Valid Email and Password </div>';
        }
    }
} else {
  echo "<script> location.href='RequesterProfile.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="../css/all.min.css">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="../css/custom.css">
    <title>Login</title>
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
                <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="../UserRegistration.php" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="../Requester/RequesterLogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav><!--------End Navigation----------->
    <div class="back-image" style="background-image: url(../images/regImg2.jpg);">
        <div class="mb-3 text-center mt-5 " style="padding-top: 5%; font-size: 30px;">
            <i class="fas fa-sign-in-alt"></i>
            <span>e-Way Service Management System</span>
        </div>
        <div class="container pt-5" id="Login">
            <h2 class="text-center bg-primary">Requester Login Area.</h2>
            <div class="text-left row mt-4 mb-4">
                <div class="col-md-6 offset-md-3">
                    <form action="" class="shadow-lg p-4" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="email" class="pl-2 font-weight-bold">Email</label><input type="email"
                    class="form-control" placeholder="Email" name="rEmail">
                    <!--Add text-white below if want text color white-->
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">Password</label><input type="password"
                    class="form-control" placeholder="Password" name="rPassword">
                </div>
                <button type="submit" class="btn btn-outline-danger mt-3 btn-block shadow-sm font-weight-bold">Login</button>
                <?php if(isset($msg)) {echo $msg; } ?>
                </form>
                <div class="text-center"><a class="btn btn-info mt-3 shadow-sm font-weight-bold" href="../index.php">Back to Home</a></div>
            </div>
        </div>
    </div>
    <!-- Boostrap JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>