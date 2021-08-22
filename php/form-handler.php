<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $mailTo = "talishush@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Message from your website: .$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location:../thankyou-page.html");
    
}

?>







