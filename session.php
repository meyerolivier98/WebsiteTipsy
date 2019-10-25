<?php
$conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net" ,"b2340817a2b535","57b224d2","heroku_4bc5d272025735d");

session_start();

$user_check = $_SESSION['login_user'];

$query = "SELECT b_Name from business where b_Name = '$user_check'";
$ses_sql = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['b_Name'];

$queryf = "SELECT b_Facebook from business where b_Name = '$user_check'";
$ses_sql = mysqli_query($conn,$queryf);
$row = mysqli_fetch_assoc($ses_sql);
$facebook = $row['b_Facebook'];

$queryi = "SELECT b_Insta from business where b_Name = '$user_check'";
$ses_sql = mysqli_query($conn,$queryi);
$row = mysqli_fetch_assoc($ses_sql);
$instagram = $row['b_Insta'];

$queryt = "SELECT b_Twitter from business where b_Name = '$user_check'";
$ses_sql = mysqli_query($conn,$queryt);
$row = mysqli_fetch_assoc($ses_sql);
$twitter = $row['b_Twitter'];

$querydesc = "SELECT b_Desc from business where b_Name = '$user_check'";
$ses_sql = mysqli_query($conn,$querydesc);
$row = mysqli_fetch_assoc($ses_sql);
$desc = $row['b_Desc'];

$queryhour = "SELECT b_Hours from business where b_Name = '$user_check'";
$ses_sql = mysqli_query($conn,$queryhour);
$row = mysqli_fetch_assoc($ses_sql);
$hours = $row['b_Hours'];

$queryent = "SELECT b_Entrance from business where b_Name = '$user_check'";
$ses_sql = mysqli_query($conn,$queryent);
$row = mysqli_fetch_assoc($ses_sql);
$entrance = $row['b_Entrance'];





