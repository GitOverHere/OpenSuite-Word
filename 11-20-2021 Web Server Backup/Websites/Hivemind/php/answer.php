<?php
require 'init.php';

$db = new DB("hivemind_questions");


try{
$db->Add("answers",array("question_id,author_id,author_cred,content,upvotes,shares"),array($_POST['question_id'],$_POST['author_id'],$_POST('author_cred'),$_POST('content'),$_POST('upvotes'),$_POST('shares'));
}
catch(PDOException e) {
	echo e;	
	http_response_code(500);
}

?>