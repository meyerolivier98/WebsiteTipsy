<?php
include ('Loginback.php');
if(!isset($_SESSION['login_user'])){
    header("location: Account.php");
}
?>

<!DOCTYPE html>
<html lang="en" class="loginform">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css"></link>
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" >
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="assets/img/Tipsytextlogo.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link text-white" href="index.php"><i class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="Dashboard.php"><i class="fas fa-th"></i>Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="Login.php"><i class="fas fa-lock"></i>Login</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="Account.php"><i class="far fa-id-badge"></i>My Account</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="Contact.php"><i class="fas fa-phone-square"></i>Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--- Login -->
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-img">
                <img src="assets/img/face.png">
            </div>
            <form class="col-12" action="" method="post">
                <div class="form-group">
                    <input id="username" name="username" type="text" id class="form-control" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <input id="password" name="password" type="password" class="form-control" placeholder="Enter Password">
                    <span><?php echo $error; ?></span>
                </div>
                <button name="submit" type="submit" class="btn btn-primary btn-lg"><i class="fas fa-sign-in-alt"></i>Login</button>

            </form>
            <div class="col-12 forgot">
                <a href="index.php">Forgot Password?</a>
            </div>
            <div class="col-12 forgot">
                <a href="index.php">Register</a>
            </div>
        </div> <!--end of modal content-->
    </div>
</div>
<script>

</script>

<!--- Footer -->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <a class="navbar-brand" href="index.php"><img src="assets/img/Tipsytextlogo.jpg"></a>
                <hr class="light">
                <p>Phone Number: </p>
                <p>Email:</p>
                <p>Potchefstroom, North West, 2520  </p>
            </div>

            <div class="col-md-4">
                <hr class="light">
                <h5>Our Hours </h5>
                <hr class="light">
                <p>Mondays to Fridays: 8am - 4pm </p>
                <p>Saterday: 10am - 2pm</p>
                <p>Sundays: 11am - 1pm</p>
                <p>Public Holidays: Closed</p>
            </div>

            <div class="col-md-4">
                <hr class="light">
                <h5>Service Area </h5>
                <hr class="light">
                <p>Potchefstroom, North West, 2520  </p>
            </div>
            <div class="col-12">
                <hr class="light">
                <h5> tipsysa.co.za</h5>
            </div>
        </div>
    </div>
</footer>



</body>
</html>
