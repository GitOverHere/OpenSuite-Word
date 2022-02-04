<?php

require 'init.php';

$conn = new DB("hivemind_groups");

$conn->Add("shares",array("sharer_id","question_id","answer_id","content"),array($_SESSION['uuid'],$_POST['question_id'],$_POST['answer_id'],$_POST['content']));









?>