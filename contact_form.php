<?php
    $name = $_Post['email'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    

    $email_subject = 'enquiry';
    

    $to = "shagunverma2001@gmail.com";

    $headers .= "Reply-To : $visitor_email\r\n";

    mail($to , $email_headers );

    header("Location : webpage.html");

?>