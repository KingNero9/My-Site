<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "talishush@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an e-mail from: ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location:https://tali-shushan.website/thankyou-page.html");
    exit;
}


?>





