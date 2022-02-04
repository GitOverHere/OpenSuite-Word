<?php 

class Token {
	private $client_id = null;
	private $login = null;
	private $scopes = null;
	private $user_id = null;
	private $expires_in = null;
	
	public function __construct($id = NULL){
		$db = new DB("supportlabs_auth");
		if($id==NULL){
		 $this->token = $db->get("twitch","token");
		}
		else {
			$this->token = $db->getRow("twitch",array('id','=',$id));
		}
		 
		$q= shell_exec("curl -H".'"'."Authorization: Bearer $this->token".'"'."https://id.twitch.tv/oauth2/validate");
		$q= json_decode($q,true);
		if(key_exists("status",$q)){
			if($q["status"]="401");
			http_response_code(400);
			die();
		}
		$this->client_id=$q['client-id'];
		$this->login=$q['login'];
		$this->scopes=$q['scopes'];
		$this->user_id=$$q['user_id'];
		$this->expires_in=$q['expires_in'];
		
	}
	
	
	
	 public function Get() {
		return $this->token;
	 }
	 
	 public static function getLogin() {
		return $this->login;
	 } 
	 
	 public static function getScopes() {
		 return $this->user_id;
	 }
	 
	 public static function getUserID(){
		 return $this->expires_in;
	 }
	 
	 
	 
}






?>