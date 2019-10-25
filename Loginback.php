<?php
session_start();
$error ='';

if(isset($_POST['submit'])){
    if(empty($_POST['username'])||empty($_POST['password'])){
        $error = "Username or Password invalid";
    }
    else
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net" ,"b2340817a2b535","57b224d2","heroku_4bc5d272025735d");
        $query = "SELECT b_Name, b_Password from business where b_Name=? AND b_Password=? LIMIT 1";

        $stmt = $conn->prepare($query);
        $stmt ->bind_param("ss",$username,$password);
        $stmt ->execute();
        $stmt ->bind_result($username,$password);
        $stmt ->store_result();

        if ( $stmt ->fetch())
        {
            $_SESSION['login_user']=$username;
            header("location: Account.php");
        }
        else{
            $error="Username or Password is invalid";
        }
        mysqli_close($conn);
    }
}
