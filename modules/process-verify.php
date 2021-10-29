<?php

require  './vendor/autoload.php';
require   __DIR__ . './connection.php';

use Twilio\Rest\Client;

$sid = "ACCOUNT_SID";
$token = "AUTH_TOKEN";
$serviceId = "SERVICE_SID";
$twilio = new Client($sid, $token);

if (isset($_POST['submit'])) {
    $vCode = $_POST['code'];
    $phone = $_POST['phone'];

    $verification_check = $twilio->verify->v2->services($serviceId)
        ->verificationChecks
        ->create(
            $vCode,
            ["to" => "+" . $phone]
        );
    if ($verification_check->status == 'approved') {
        // checks if user already exist in db
        $query = "SELECT mobile FROM users WHERE mobile = $phone";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            $alert = "Welcome back to your account!";
        } else {
            // add new user to db
            $insertQuery = "INSERT INTO users (mobile) VALUES ('$phone')";
            $insertResult = $connection->query($insertQuery);
            if ($insertResult) {
                $alert = "Welcome, new user!";
            }
        }
    } else {
        echo 'Invalid code entered!';
    }
}
