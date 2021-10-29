<?php

require  './vendor/autoload.php';

use Twilio\Rest\Client;

$sid = "ACCOUNT_SID";
$token = "AUTH_TOKEN";
$serviceId = "SERVICE_SID";

if (isset($_POST['submit'])) {
    $phone = $_POST['phone'];
    $twilio = new Client($sid, $token);
    $verification = $twilio->verify->v2->services($serviceId)
        ->verifications
        ->create($phone, "sms");
    if ($verification->status) {
        header("Location: verify.php?phone=$verification->to");
        exit();
    } else {
        echo 'Unable to send verification code';
    }
}
