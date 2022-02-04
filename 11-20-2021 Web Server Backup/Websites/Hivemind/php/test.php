<?php
require 'info.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$DB = new DB("hivemind_accounts");


$_SESSION['uuid']="2";
echo $DB->get("sessions","token","uuid");
$q = $DB->query("SELECT * FROM sessions",array());

echo $q->results()[1]->token;


$limit = 2;
$offset = 1;

$conn = new DB('hivemind_questions');

$questions = $conn->query("SELECT title FROM questions LIMIT $limit","OFFSET $offset",array());
print_r($questions->results());



/*
for($i =0; $i<$questions->count; i++){
$response->question = $questions->results()[$i]->title;
$question_id = $questions->results()[$i]->question_id;
$upvote_count= $conn->query("SELECT MAX(upvotes) AS upvote_count FROM (SELECT * FROM questions WHERE question_id=$question_id) AS ",array());
$info =  $conn->query("SELECT * FROM answers WHERE upvotes=?",array($upvote_count));
$response->answer = $info->results()[0]->content;
$response->upvotes = $upvote_count;
$response->shares = $info->results()[0]->shares;
}
echo json_encode($response);
*/




?>