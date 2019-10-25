<?php
include ('session.php');
if(!isset($_SESSION['login_user'])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account</title>
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
                <li class="nav-item ">
                    <a class="nav-link text-white" href="index.php"><i class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="Dashboard.php"><i class="fas fa-th"></i>Dashboard</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="Login.php"><i class="fas fa-lock"></i>Login</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="Account.php"><i class="far fa-id-badge"></i>My Account</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="Contact.php"><i class="fas fa-phone-square"></i>Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--- Page navigation -->
<!--<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>-->




<!--- Profile -->
<h1 class="text-center display-4 jumbotron">Welcome <u><?php echo $login_session?></u></h1>
<h1 class="text-center display-4"><i class="fas fa-id-badge"></i>Profile</h1>
<hr class="light">
<div class="container-fluid  padding">
    <div class="text-center  padding ">
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="profile-card">
            <div class="card-profile">
                <img class="card-img" id="uploadimg"  src="assets/iconbeer.svg" alt="Your profile image">

                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" style="margin-bottom: 1rem">
                <div class="card-profile">
                    <p class="card-text">Add a discription</p>
                    <input type="text" id="profile-description" class="form-control">
                    <p class="card-text">Add Entrance price (R)</p>
                    <input type="number" id="entrance-price" min=0 class="form-control">
                    <input type="submit" value="Submit" class="btn-primary" name="submit" style="margin-top: 1rem">
                    <hr>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>

            </div>

        </div>
        </form>

    </div>
</div>
<hr class="bg-dark">
<!--- Specials -->
<h1 class="text-center display-4"><i class="fas fa-certificate"></i>Specials</h1>
<hr class="light">
    <div class="col-md-3">
        <div class="card">
            <img class="card-img" id="uploadimg2" src="assets/img/beerspecial.jpg">
            <div class="card">
                <p class="card-text"><b>Description:</b> Buy 2 Heinekens</p>
                <p class="card-text"><b>Price:</b> R35</p>
                <button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button>
                <hr>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
<button name="add" id="add"class="btn btn-success" style="align-content: center">Add more</button>
<div class="container-fluid padding">
    <div class="row col-12 padding text-center" id="dynamic_field">

    </div>
</div>
<hr class="bg-dark">
<!--- Events -->
<h1 class="text-center display-4"><i class="fas fa-calendar-alt"></i>Events</h1>
<hr class="light">
<div class="container-fluid padding">
    <button name="add" id="add1" class="btn btn-success" style="align-content: center">Add more</button>
    <div class="container-fluid padding">
        <div class="row col-12 padding text-center" id="dynamic_field1">

        </div>
    </div>
</div>
<!--- Three Column Section -->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#uploadimg1').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#fileToUpload1").change(function() {
        readURL(this);
    });
</script>

   <!-- <form action="upload.php"  method="post" enctype="multipart/form-data">
        <div class="col-md-3">
            <div class="card">
                <img class="card-img" id="uploadimg2" src="assets/img/beerspecial.jpg">
                <div class="card">
                    <p class="card-text">Add a discription</p>
                    <p class="card-text">Add a price (R)</p>
                    <button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button>
                    <hr>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </form>-->
<!--- Dynamically add -->
<!--<div id="dynamic_field">

</div>-->
<script>
    $(document).ready(function(){
        var i=1;
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<form action="upload.php"  method="post" enctype="multipart/form-data"><div class="col-md-3"><div class="card"><img class="card-img" id="uploadimg2" src="assets/img/beerspecial.jpg"> <div class="card"><input type="file" name="fileToUpload1" id="fileToUpload2" class="form-control" style="margin-bottom: 1rem"><p class="card-text">Add a discription</p><input type="text" class="form-control"><p class="card-text">Add a price (R)</p><input type="number" min=0 class="form-control"><input type="submit" value="Submit" class="btn-primary" id="sSubmit"'+i+' name="submit" style="margin-top: 1rem"><hr><p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></div></div> </div></form>');
        });
        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
        $('#sSubmit'+i).click(function(){
            $.ajax({
                url:"name.php",
                method:"POST",
                data:$('#add_name').serialize(),
                success:function(data)
                {
                    alert(data);
                    $('#add_name')[0].reset();
                }
            });
        });
    });
</script>
    <script>
        $(document).ready(function(){
            var i=1;
            $('#add1').click(function(){
                i++;
                $('#dynamic_field1').append('<form action="upload.php"  method="post" enctype="multipart/form-data"><div class="col-md-3"><div class="card"><img class="card-img" id="uploadimg2" src="assets/img/beerspecial.jpg"> <div class="card"><input type="file" name="fileToUpload1" id="fileToUpload2" class="form-control" style="margin-bottom: 1rem"><p class="card-text">Add a discription</p><input type="text" class="form-control"><p class="card-text">Add a price (R)</p><input type="number" min=0 class="form-control"><input type="submit" value="Submit" class="btn-primary" id="eSubmit"'+i+' name="Submit" style="margin-top: 1rem"><hr><p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></div></div> </div></form>');
            });
            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });
            $('#eSubmit'+i).click(function(){
                $.ajax({
                    url:"name.php",
                    method:"POST",
                    data:$('#add_name').serialize(),
                    success:function(data)
                    {
                        alert(data);
                        $('#add_name')[0].reset();
                    }
                });
            });
        });
    </script>
<!--- Fixed background

<script>
    $(document).ready(function(){
        var i=1;
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
        $('#submit').click(function(){
            $.ajax({
                url:"name.php",
                method:"POST",
                data:$('#add_name').serialize(),
                success:function(data)
                {
                    alert(data);
                    $('#add_name')[0].reset();
                }
            });
        });
    });
</script>-->


<!--- Emoji Section -->


<!--- Meet the team -->


<!--- Cards -->


<!--- Two Column Section -->


<!--- Connect -->


<!--- Footer -->
<hr class="bg-dark">
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
