<?php
session_start();
require '../vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACc4e5ee51d851394daba79802b80da9e9';
$auth_token = '50ee110603a5a776f99c86272fe09fdc';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+19387777741";
//$phone = "+91" . $_GET['phone'];
$otp = mt_rand(1000,9999);
$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+917508444231',
    array(
        'from' => $twilio_number,
        'body' => 'Your OTP To Register is ' . $otp
    )
);

$_SESSION['OrigOTP'] = $otp;
error_log(print_r($_SESSION['OrigOTP'], TRUE));
//echo $otp;
header('location: ./');
?>