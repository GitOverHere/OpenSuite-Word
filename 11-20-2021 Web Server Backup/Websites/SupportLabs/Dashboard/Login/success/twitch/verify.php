<?php
require 'init.php';

$token = $_POST['token'];
$user = new User();
$auth = new DB("supportlabs_auth");
$response = shell_exec("curl -H".'"'."Authorization: Bearer $token".'"'."https://id.twitch.tv/oauth2/validate");

	$response= json_decode($response,true);
	if($response['status']=="401"){
		echo 'Could not autenticate successfully.';	
		http_response_code(304);
	}
	else {
	echo 'yay';
	$user_data = 
	
	
	$user->makeUser(array("username","password",""))
	http_response_code(200);
    {}



//curl -X GET 'https://api.twitch.tv/helix/users?id=141981764' \ -H 'Authorization: Bearer 7fvkrtmsf887ojhnx7c8xtl9dwdpxw' \ -H 'Client-Id: zs5rml5vi7vtgvfm4l58u6uzw49zus'

?>

