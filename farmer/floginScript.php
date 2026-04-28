<?php
session_start();
$error='';

require('../sql.php');

if(isset($_POST['farmerlogin'])){

    $farmer_email = $_POST['farmer_email'];
    $farmer_password = $_POST['farmer_password'];

    $query = "SELECT * FROM farmerlogin 
              WHERE email='$farmer_email' 
              AND password='$farmer_password'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['farmer_login_user']=$farmer_email;
        header("Location: ftwostep.php");
        exit();
    }
    else{
        $error="Username or Password is invalid";
    }
}
?>