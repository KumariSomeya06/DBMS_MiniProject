<?php
  define('TITLE', 'Requester Profile');
  define('PAGE', 'RequesterProfile'); 
  include('../dbConnection.php');
  session_start();
  if($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];
  } else {
    echo "<script> location.href='RequesterLogin.php'; </script>";
  }

  $sql = "SELECT * FROM reqregistration_tb WHERE req_email='$rEmail'";
  $result = $conn->query($sql);
  if($result->num_rows == 1){
    $row = $result->fetch_assoc();
  $rName = $row["req_name"]; }

  if(isset($_REQUEST['nameupdate'])){
    if(($_REQUEST['rName'] == "")){
    // msg displayed if required field missing
    $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
    } else {
      $rName = $_REQUEST["rName"];
      $sql = "UPDATE reqregistration_tb SET req_name = '$rName' WHERE req_email = '$rEmail'";
      if($conn->query($sql) == TRUE){
      // below msg display on form submit success
      $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
      } else {
      // below msg display on form submit failed
        $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE ?>
 </title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">

 <!-- Custome CSS -->
 <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
  <div class="back-image" style="background-image: url(../images/regImg2.jpg);">
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">eW-SMS</a>
    </nav>

    <!-- Side Bar -->
    <div class="container-fluid " style="padding-top: 10%; padding-left: 20%;">
      <div class="row">
        <nav class="col-sm-4 bg-secondary sidebar py-5 d-print-none">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?php if(PAGE == 'RequesterProfile') { echo 'active'; } ?>" href="RequesterProfile.php">
                  <i class="fas fa-user"></i>
                  Profile <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if(PAGE == 'SubmitRequest') { echo 'active'; } ?>" href="SubmitRequest.php">
                  <i class="fab fa-accessible-icon"></i>
                  Submit Request
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if(PAGE == 'CheckStatus') { echo 'active'; } ?>" href="CheckStatus.php">
                  <i class="fas fa-align-center"></i>
                  Service Status
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if(PAGE == 'Requesterchangepass') { echo 'active'; } ?>" href="Requesterchangepass.php">
                  <i class="fas fa-key"></i>
                  Change Password
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../logout.php">
                  <i class="fas fa-sign-out-alt"></i>
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="col-sm-6 mt-5">
          <form class="mx-5" method="POST">
            <div class="form-group">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" id="inputEmail" value=" <?php echo $rEmail ?>" readonly>
            </div>
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" class="form-control" id="inputName" name="rName" value=" <?php echo $rName ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="nameupdate">Update</button>
            <?php if(isset($passmsg)) {echo $passmsg; } ?>
          </form>
        </div>
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