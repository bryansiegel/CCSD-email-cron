<?php

//cron is set to run every TODO: add time
$to = "";
$subject = "Daily Email Test";
$message = "Email Test Successfull";
$headers = "From: " . "\r\n" .
    "Reply-To: " . "\r\n" .
    "Return-Path: " . "\r\n" . // For bounce handling
    "CC: " . "\r\n" .
    "MIME-Version: 1.0" . "\r\n" .
    "Content-Type: text/plain; charset=UTF-8";


//make sure only cron can access this page
if (empty($_SERVER["REMOTE_ADDR"])) {

    mail($to, $subject, $message, $headers);
} else {

    //redirect to homepage
    header("Location: https://ccsd.net");
    exit();
}
?>