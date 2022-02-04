<?php
include "../core/init.php";
$not_linked = array();
$db=new DB("supportlabs_auth");

if($db->Get("twitch","token")=="Not Set"){
	array_push($not_linked,"twitch");
}

if($db->Get("youtube","token")=="Not Set"){
	array_push($not_linked,"youtube");
}

if($db->Get("twitter","token")=="Not Set") {
	array_push($not_linked,"twitter");
}

if($db->Get("smashcast","token")=="Not Set"){
	array_push($not_linked,"smashcast");
}

echo print_r($not_linked);

?>