<?php
/*
Version: 1.0
Date Modified: 4/10/2020
Programmer: Binayak Sahu

--COMMENT--
The following code checks if there is exactly one token. If their is, it validates it. If the validation fails, the token is discarded. If it suceeds,
the user gets to use the twitch tools and analyics.
*/


session_start();
require "core/init.php";
ini_set('display_errors', 1); 

$token= $_POST['token'];

try{
$db= new DB("supportlabs_auth");
$query=$db->get("twitch",array("id","=",$_SESSION['id']));

if($query->_count == 1) {
	$token = print_r($query->_results[0]->token,true);
	$resp= shell_exec("curl -H".'"'."Authorization: Bearer $token".'"'."https://id.twitch.tv/oauth2/validate");
	echo $resp;
	$resp= json_decode($resp,true);
	if($resp['status']=="401"){
		echo 'Invalid Token!';
		$db->action("DELETE","twitch",array('id','=',$_SESSION['id']));	
		http_response_code(304);
	}
	else {
	echo 'yay';
	$db->Update("twitch","token",$token,$_SESSION['id']);	
	http_response_code(100);
	}
}


else {
	if(isset($_SESSION['id'])){
	$resp= shell_exec("curl -H".'"'."Authorization: Bearer $token".'"'."https://id.twitch.tv/oauth2/validate");
	echo $resp;
	$resp= json_decode($resp,true);
	if($resp['status']=="401"){
		echo 'Invalid Token!';
		http_response_code(304);
	}
	else {
	
	$db->Add("twitch",array('id','token'),array($_SESSION['id'],$token));
	http_response_code(100);
	}
	}
	else{
		$response= shell_exec("curl -H".'"'."Authorization: Bearer $token".'"'."https://id.twitch.tv/oauth2/validate");
		echo $response;
	    $response = json_decode($response,true);
		if($response['status']=="401"){
		echo 'Invalid Token!';
		http_response_code(304);
	}
	else {
	try {
		
		
		
		
	}
 
     catch(PDOException \e){
		 
		 
		 
		 
	 }	
		
		
		
	$db->Add("twitch",array('id','token'),array($_SESSION['id'],$token));
	http_response_code(100);
	}
	
	}
}

}
}
catch(Exception $e) {
	echo $e;
	http_response_code(304);

}

?>