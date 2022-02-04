<?php
require 'init.php';

$conn = new DB("supportlabs_questions");

$title = $_POST['title'];

$asker_id = $SESSION['uuid'];

$desc = $_POST['desc'];
try {
$conn->Add("questions",array("asker_id","title","description"),array($asker_id,$title,$desc);
}
catch{PDOException e){
echo e;	
}
?>