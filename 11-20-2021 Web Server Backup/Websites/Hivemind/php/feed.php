<?php 
require 'info.php';

$count = $_POST['count'];

$conn = new DB('hivemind_questions');

$questions = $conn->query("SELECT title FROM questions",array("LIMIT 10","OFFSET ".$count));








for($i =0; $i<$questions->count; i++){
$response->question = $questions->results[$i]->title;
$question_id = $questions->results[$i]->question_id;
$answers= $conn->query("SELECT * FROM questions",array("WHERE question_id=$question_id"))
$response->top_answer = 
	
	
}




echo json_encode($json);

?>