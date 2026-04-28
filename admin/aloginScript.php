<?php
session_start();
$error='';

require('../sql.php');

if(isset($_POST['adminlogin'])){

    $aname = $_POST['admin_name'];
    $apassword = $_POST['admin_password'];

    $adminquery = "SELECT * FROM admin
                   WHERE admin_id='$aname'
                   AND admin_password='$apassword'";

    $result = mysqli_query($conn,$adminquery);

    if(mysqli_num_rows($result) > 0){

        $_SESSION['admin_login_user']=$aname;

        header("Location: aprofile.php");
        exit();
    }
    else{
        $error="Username or Password is invalid";
    }
}

mysqli_close($conn);
?>