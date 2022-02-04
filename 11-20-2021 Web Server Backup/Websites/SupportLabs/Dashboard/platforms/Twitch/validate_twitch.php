<?php
session_start();
require "core/init.php";
ini_set('display_errors', 1); 

try{
$field = new DB("supportlabs_auth"); 
$query=$field->getRow("twitch",array("id","=",$_SESSION['id']));
if($query->_count == 1){
	$q = print_r($query->_results[0]->token,true);
	$token= (string) $q;
	echo $token;
	$resp= shell_exec("curl -H".'"'."Authorization: Bearer $token".'"'."https://id.twitch.tv/oauth2/validate");
	echo $resp;
	$resp= json_decode($resp,true);

	if(key_exists("status",$resp)){
		if($resp["status"]=="401"){

		$field->action("DELETE","twitch",array("id","=",$_SESSION['id']));
		http_response_code(400);
		}
		else{
			echo 'some other error';
			http_response_code(400);
		}
	}
	else {
		echo 'yay';
		http_response_code(202);
	}
}

else{
	http_response_code(400);
}

}

catch(Exception $e) {
	echo $e;
	http_response_code(500);

}

?>