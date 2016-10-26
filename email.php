<?php

if(isset($_POST['submit'])){
    $toAddress = "info@poolsafe.com";
    $subject = "PoolSafe Fencing Lead";
    $name = stripslashes($_POST['name']);
    $product = stripslashes($_POST['product']);
    $phone = stripslashes($_POST['phone']);
    $city = stripslashes($_POST['city']);
    $email = stripslashes($_POST['email']);
    $mainInterest = stripslashes($_POST['mainInterest']);
    $construction = stripslashes($_POST['construction']);
    $projectTimeframe = stripslashes($_POST['projectTimeframe']);
    $comments = stripslashes($_POST['comments']);
    $message = "Customer Information:<br/><br/>"
        . "<b>Name:</b> " . $name . "<br/>"
        . "<b>Email:</b> " . $email . "<br/>"
        . "<b>Phone:</b> " . $phone . "<br/>"
        . "<b>City:</b> " . $city . "<br/>"
        . "<b>Product:</b> " . $product . "<br/>"
        . "<b>Main Interest:</b> " . $mainInterest . "<br/>"
        . "<b>Construction Status:</b> " . $construction . "<br/>"
        . "<b>Project Timeframe:</b> " . $projectTimeframe . "<br/>"
        . "<b>Comments:</b> " . $comments . "<br/>";
    $headers = "From: info@poolsafe.com" . "\r\n" .
        "Content-type: text/html; charset=utf-8" . "\r\n" .
        "BCC: tom@poolsafe.com,matt@complementstudio.com,joe@complementstudio.com";

    $customerHeaders = "From: info@poolsafe.com" . "\r\n" .
        "Content-type: text/html; charset=utf-8";

    $customerSubject = "PoolSafe - We have received your request";
    $customerMessage = "Thank you for contacting Poolsafe to help with your swimming pool safety needs!<br /><br />"
                        ."If you provided a phone number, a Safety Consultant from our company will contact you within 24 hours (or on Monday,"
                        ." if you submitted your request during the weekend). If you did not provide a contact number, you may respond to this"
                        ." email and we will attach it to your request so that we can expedite the process.<br /><br />"
                        ."For more information about our pool fences while you wait for a call from our Safety Consultant, you may visit our"
                        ." website at <a href='http://poolsafe.com/removable-pool-fences/'>Poolsafe.com/poolfences</a>. You may also view our gallery to see a limited representation of our work.<br /><br />"
                        ."We share your feeling that swimming pool safety is important so we look forward to working with you in the coming days!";

    //send form data email
    if (mail($toAddress, $subject, $message, $headers)) {
        echo "1";
    } else {
        echo "0";
    }
    mail($email, $customerSubject, $customerMessage, $customerHeaders);
}

?>
