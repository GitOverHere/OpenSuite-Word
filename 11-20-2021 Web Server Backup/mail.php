<?php
ini_set('display_errors',1);
$admin=	"itsbinny@gmail.com";	
$name= $_POST['name'];
$email= $_POST['email'];		
$subject = $_POST['subject']." | ".$email;

$message = "You have recieved a message from ".$_POST['name'].":  ".$_POST['message'];


mail($admin,$subject,$message);


echo "Mail sent!";

header('Location: ../');



?>