<?php
$admin=	"binny@sahu.me";	
$name= $_POST['name'];
$email= $_POST['email'];		
$subject = $_POST['subject']." | ".$email;

$message = "You have recieved a message from ".$_POST['name'].":  ".$_POST['message'];


mail($admin,$subject,$message);


echo "Mail sent!";

header('Location: ../');



?>