<?php
session_start();
$error='';

require('../sql.php');

if(isset($_POST['customerlogin'])){

    $customer_email = $_POST['cust_email'];
    $customer_password = $_POST['cust_password'];

    $checkquery = "SELECT * FROM custlogin
                   WHERE email='$customer_email'
                   AND password='$customer_password'";

    $result = mysqli_query($conn,$checkquery);

    if(mysqli_num_rows($result) > 0){

        $_SESSION['customer_login_user'] = $customer_email;

        $deletequery = "DELETE FROM cart";
        mysqli_query($conn,$deletequery);

        header("Location: ctwostep.php");
        exit();
    }
    else{
        $error = "Username or Password is invalid";
    }
}

mysqli_close($conn);
?>