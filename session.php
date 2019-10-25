<?php
$conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net" ,"b2340817a2b535","57b224d2","heroku_4bc5d272025735d");

session_start();

$user_check = $_SESSION['login_user'];

$query = "SELECT b_Name from business where b_Name = '$user_check'";
$ses_sql = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['b_Name'];

