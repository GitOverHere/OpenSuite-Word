<?php
include "../core/init.php";

$db = new DB("supportlabs_tools");

echo $db->Get($_POST['tool'],$_POST['platform']);


?>