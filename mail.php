<?php

$_firstName = $_POST["fname"];
$_lastName = $_POST["lname"];
$_email = $_POST["email"];
$_phone = $_POST["phone"];
$_message = $_POST["message"];

$subject = "CUSTOMER FEEDBACK";
$sendingTo = "ojogbonoladele@gmail.com";
$header = "From: ".$_email;

if(!empty($_firstName)&&!empty($_lastName)&&!empty($_email)&&!empty($_phone)&&!empty($_message)){
    // ini_set("SMTP","localhost");
    // ini_set("smtp_port","25");
    // ini_set("sendmail_from",$_email);
    // ini_set("sendmail_path", "C:\wamp\bin\sendmail.exe -t");
    mail($sendingTo,$subject,$_message,$header);
    
   echo "Thank you for sending us feedback";
}else{
    echo "<div class='alert alert-danger'><b> Fields can't be </b> Please try again<a href='contact.html'>Go Back</a></div>";
}

