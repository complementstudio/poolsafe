<?php

if(isset($_POST['submit'])){
    $toAddress = "greejose@gmail.com";
    $subject = "PoolSafe Landing Page Contact Form";
    $name = stripslashes($_POST['name']);
    $product = stripslashes($_POST['product']);
    $phone = stripslashes($_POST['phone']);
    $city = stripslashes($_POST['city']);
    $email = stripslashes($_POST['email']);
    $message = "Customer Information:<br/><br/>" . "Name: " . $name . "<br/>"
        . "Product: " . $product . "<br/>"
        . "Phone: " . $phone . "<br/>"
        . "City: " . $city . "<br/>"
        . "Email: " . $email . "<br/>";
    $headers = "From: info@poolsafe.com" . "\r\n" .
        "Content-type: text/html; charset=utf-8" . "\r\n" .
        "BCC: joe.green@foxsoftware.net";

    $customerSubject = "PoolSafe - We have received your request";
    $customerMessage = "We have received your request. Thank you for the opportunity to help you and your"
    . " family with swimming pool safety. We will be in contact within 24-48 hours so that we can schedule"
    . " an on-site Safety Consultation. In the mean time, you may find more interesting details about our pool"
    . " fence by visiting <a href='http://poolsafe.com/removable-pool-fences/'>Poolsafe.com/poolfences</a>";

    //send form data email
    if (mail($toAddress, $subject, $message, $headers)) {
        echo "1";
    } else {
        echo "0";
    }
    mail($email, $customerSubject, $customerMessage, $headers);
}

?>