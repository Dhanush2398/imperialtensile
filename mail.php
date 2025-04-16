<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];

$to ="sales.imperialtensile@gmail.com";
$subject = "New contact from $name";
$txt = "Name = ". $name ."\r\nEmail = " . $email.  "\r\nsubject = " . $subject .  "\r\nMessage =" . $message ;
$headers = "From: $name <$email>" . "\r\n" .
"CC:sales.imperialtensile@gmail.com ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>


