<?php

if(isset($_POST['submit'])){
    $toAddress = "greejose@gmail.com";
    $subject = "PoolSafe Landing Page Contact Form";
    $name = $_POST['name'];
    $product = $_POST['product'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $message = "Customer Information:\n\n" . "Name: " . $name . "\n"
        . "Product: " . $product . "\n"
        . "Phone: " . $phone . "\n"
        . "City: " . $city . "\n"
        . "Email: " . $email . "\n";

    //send email
    if (mail($toAddress, $subject, $message)) {
        echo "1";
    } else {
        echo "0";
    }
}

?>