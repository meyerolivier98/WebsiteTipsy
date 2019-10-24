<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
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
                <li class="nav-item active">
                    <a class="nav-link text-white" href="index.php"><i class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="Dashboard.php"><i class="fas fa-th"></i>Dashboard</a>
                </li>
                <li class="nav-item ">
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

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-responsive" src="assets/img/partybackground.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Tipsy</h1>
                <h3>Welcome to Tipsy!</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="img-responsive" src="assets/img/coolpineapple.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Login</h1>
                <h3>Are you logged in</h3>
                <a href="Login.php"><button type="button" class="btn btn-primary btn-lg"><i class="fas fa-sign-in-alt"></i>Login</button></a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="img-responsive" src="assets/img/lightsbackground.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Dashboard</h1>
                <h3>View your dashboard</h3>
                <a href="Dashboard.php"><button type="button" class="btn btn-primary btn-lg"><i class="fas fa-sign-in-alt"></i>Dasboard</button></a>
            </div>
        </div>
    </div>
</div>

<!--- Jumbotron -->
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <p class="lead">This is your ultimate business marketing site where you can track your business and update your business details.</p>
        </div>
    </div>
</div>

<!--- Welcome Section -->
<div class="container-fluid">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Tipsy Business</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">Welcome to Tipsy Business website. It is used to control your company easier and to promote your business</p>
        </div>
    </div>
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6">
            <a href="https://play.google.com/" target="_blank"><i class="fab fa-android "></i></a>
            <h3>Andriod</h3>
            <p>Get the app on Google Play</p>
        </div>
        <div class="col-xs-12 col-sm-6">
            <a href="http://itunes.apple.com" target="_blank"><i class="fab fa-apple"></i></a>
            <h3>iOS</h3>
            <p>Get the app on Apple App Store</p>
        </div>
    </div>
    <hr class="my-4">
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect</h2>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram "></i></a>
             <h3>Instagram</h3>
            <p>Go to your Instagram page</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <a href="https://facebook.com" target="_blank"> <i class="fab fa-facebook"></i></a>
           <h3>Facebook</h3>
            <p>Go to your Facebook page</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
             <h3>Twitter</h3>
            <p>Go to your Twitter page</p>
        </div>
    </div>
    <hr class="my-4">
</div>
<hr class="my-4">
<!--- Fixed background -->
<!--<figure>
    <div class="fixed-wrap">
        <div id="fixed">

        </div>
    </div>
</figure>-->

<!--- Hidden Emoji Section -->
<button class="fun btn-primary" data-toggle="collapse" data-target="#emoji">GIF</button>
<div id="emoji" class="collapse">
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="assets/img/gif/beer.gif">
            </div>
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="assets/img/gif/dino.gif">
            </div>
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="assets/img/gif/drunk.gif">
            </div>
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="assets/img/gif/tequila.gif">
            </div>
        </div>
    </div>
    <p class="card-text"><small class="text-muted">source: <a href="https://giphy.com/" target="_blank">Giphy.com</a></small></p>
</div>
<!--- Meet the team -->


<!--- Cards -->


<!--- Two Column Section -->


<!--- Connect -->


<!--- Footer -->
<hr>
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
