<?php 

include "../core/twitch.php";


$db = new DB("supportlabs_tools");

$db->Update($_POST['tool'],$_POST['platform'],$_POST['data']);
