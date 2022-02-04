<?php
$mysqli = new mysqli("localhost","root","vex1999","test");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if ($result = $mysqli -> query("INSERT INTO temp_storage VALUES $_POST['text']")) {
 
 echo bruh;
}

$mysqli -> close();

?>