<?php
session_start();
require('../sql.php');

if(!isset($_SESSION['farmer_login_user'])){
    die("Session expired. Please login again.");
}

$email = $_SESSION['farmer_login_user'];

$res = mysqli_query($conn,"SELECT * FROM farmerlogin WHERE email='$email'");

if(mysqli_num_rows($res) > 0){

    $otp = rand(11111,99999);

    mysqli_query($conn,"UPDATE farmerlogin SET otp='$otp' WHERE email='$email'");

    $html = "
        <h3>Krishi Connect OTP Verification</h3>
        <p>Your OTP code is:</p>
        <h2>$otp</h2>
        <p>This OTP expires soon.</p>
    ";

    if(smtp_mailer($email,'OTP Verification',$html)){
        echo "yes";
    }else{
        echo "mail failed";
    }

}else{
    echo "not exist";
}


function smtp_mailer($to,$subject,$msg){

    require_once("../smtp/class.phpmailer.php");

    $mail = new PHPMailer(true);

    try{
        $mail->isSMTP();
        $mail->Host       = "smtp.gmail.com";
        $mail->SMTPAuth   = true;

        // YOUR GMAIL
        $mail->Username   = "enter your email";

        // USE GOOGLE APP PASSWORD HERE (NOT NORMAL PASSWORD)
        $mail->Password   = "enter your password";

        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;

        // Debug (set 0 in production)
        $mail->SMTPDebug = 0;

        $mail->setFrom(
            "enter your email",
            "Krishi Connect"
        );

        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->CharSet = "UTF-8";

        $mail->Subject = $subject;
        $mail->Body    = $msg;

        if($mail->send()){
            return true;
        }

        return false;

    }catch(Exception $e){
        echo $mail->ErrorInfo;
        return false;
    }
}
?>