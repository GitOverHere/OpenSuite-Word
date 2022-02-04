<?php 

ini_set("display_errors",1);


$host = "localhost";
$username= "root";
$password ="vex1999";
$db="fiverr";
$charset ="utf8mb4";


$tier1 = $_POST["tier1"];

$tier2 = $_POST['tier2'];

$tier3 = $_POST['tier3'];

$conn = new mysqli($host,$username,$password,$db);

if($conn->connect_error){
	die("Alas, thy cannot connect to server." . $conn->connect_error);
}

/*
$checktable = "SHOW TABLES LIKE fiverr";


$z = $conn->query($checktable);
$count = $z->num_rows;
echo $count;
if($count == 0){
	$create = "create table fiverr(id int(16) unsigned auto_increment primary key,tier1 int(6),tier2 varchar(6),tier3 varchar(6));";
	$conn->query($create)->execute();
}
*/

$insert = "insert into fiverr values $tier1,$tier2,$tier3;";

$x = $conn->query($insert)->execute();


if($x === TRUE){
http_response_code(200);
}
else {
	header("Status: 500");
	echo "Connection error:".$conn->error; 
}



?>