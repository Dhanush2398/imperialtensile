<?php
$name = $_POST['name'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];

$to ="dhanush.dhoni007@gmail.com";
$subject = "New contact from $name";
$txt = "Name = ". $name ."\r\nEmail = " . $email.  "\r\nsubject = " . $subject .  "\r\nMessage =" . $message ;
$headers = "From: $name <$email>" . "\r\n" .
"CC:dhanush.dhoni007@gmail.com ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>


