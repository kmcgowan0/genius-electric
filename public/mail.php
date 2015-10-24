<?php 
//declare variables
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$postcode = $_POST['postcode'];
$income = $_POST['income'];
$home = $_POST['home'];
$formcontent="From: $name \n Message: $message";
$to = 'katiemcgoo@hotmail.co.uk';
$subject = 'test';
$message = "From: $email \r\n";

//call mail function
$mail = mail($to, $subject, $formcontent, $message) or die("Error!");
if($mail){
echo "Thank You!";
}else{
    echo "sending failed";
}
//cry bc nothing works

ini_set('display_errors',1);
?>