<?php

class Subs {

$token = null;
$db = null;
$q= null;



public function __construct($id=null) {
	$this->db = new DB("supportlabs_data");
	if($id == null){
	$this->token = new Token();
}
else {
	$this->token = new Token($id);
}
	$this->q = shell_exec("curl -H ".'"'."Authorization: Bearer $this->token->Get()".'"'. "-H". '"'."Client-ID: j4yo5sixp9f5kldggrr7ryml91uv1c".'"'. "https://api.twitch.tv/helix/subscriptions/events?broadcaster_id=$this->token->$user_id");
$this->q = json_decode($q,true);

}

public function Now(){
return $this->q;
}

public function Update(){
	$this->db->Update("twitch","subscribers",$this->q);
}

public function Last7Days(){
	$today = date("Y-m-dTH:i:sZ");
	$start = date("Y-m-dTH:i:sZ",strtotime("today",strtotime("-1 year", time())));
	Get($start,$today);
}

public function Last30Days() {
	$today = date("Y-m-dTH:i:sZ");
	$start = date("Y-m-dTH:i:sZ",strtotime("today",strtotime("-30 days", time())));
	Get($start,$today);
}

public function Last90Days() {
	$today = date("Y-m-dTH:i:sZ");
	$start = date("Y-m-dTH:i:sZ",strtotime("today",strtotime("-90 days", time())));
	Get($start,$today);
}

public function LastYear() {
	$today = date("Y-m-dTH:i:sZ");
	$start = date("Y-m-dTH:i:sZ",strtotime("today",strtotime("-1 year", time())));
	Get($start,$today);
}

public function ThisYear() {
	$today = date("Y-m-dTH:i:sZ");
	$start = new DateTime("Y-m-dTH:i:sZ");
	while($start->format("z")>0){
		$start->sub(new Interval('P1D'));
	}
	$start->format("Y-m-dTH:i:sZ");
	Get($start,$today);
}

public function Total(){
	return $this->q['total'];
}


public static function Get($start,$end){
	$start = strtotime($start);
	$end = strtotime($end);
	$query= $this->q['data'];
	for($i=0; i<sizeof(query); i++){
		$e=new DateTime($query[i]['followed_at']);
		if($e < $start && $e > $end){
			unset($query[i]['followed_at']);
		}
	}
	return $query
}

?>
