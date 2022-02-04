
<!DOCTYPE html>

<html charset="utf-8" lang="en-US">
<head>
<meta name='title' content='Make an event'>
<meta name='description' content='Use this form to create an event'>
<meta charset='utf-8'>
<title>Schedule an event.</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<main class="page" id="form">

<section class="image">
<p>All times are in UTC</p>
<img src="https://upload.wikimedia.org/wikipedia/commons/6/69/Calendar_font_awesome.svg">
</section>
<section class="form-container">

<h1 class="title">Start an event.</h1>
<p>Use the Calander and clock to select an date and time. <br> 
Then fill out the rest of the details before clicking submit.</p>

<p class="error">
<?php 
ini_set('display_errors',1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$host = "127.0.0.1";
$username = "root";
$password = "vex1999";
$database = "tblcalendar";


if($_SERVER["REQUEST_METHOD"] == "POST"){
$conn = new mysqli($host,$username,$password,$database);

$sql = $conn->prepare("INSERT INTO calendar VALUES(0,?,?,?,?,?,?,?)");
$title = $_POST['title'];
$description = $_POST['desc'];
$start = strtotime($_POST['datetime-start']);
$all_day = $_POST['all-day'];
if($all_day!='1'){
	$end = $_POST['datetime-end'];
}
else {
	$end = 0;
}

$adminid = 0;
$recurid = 0;
//echo(var_dump($conn->error_list));
$sql->bind_param("ssiiiii",$title,$description,$start,$end,$all_day,$adminid,$recurid);


$check = $conn->prepare("SELECT * FROM calendar WHERE id > 0");
$check->execute();

$result = $check->get_result();


 while($row = $result->fetch_array(MYSQLI_ASSOC)){
	 
	  foreach ($row as $r)
            {
				$start_day = date("d-m-Y",strtotime(date('d-m-Y', $start)));
				$datetime = new DateTime($start_day);
                $datetime->modify('+1 day');
                $end_day = $datetime->format('d-m-Y');
				
				if($end !=0){
                if(($start >= $r["start"] && $start <= $r["end"]) || ($end <= $r["end"] && $end >= $r["start"])){
					
					echo "There is a time conflict, please enter a differnt time.";
					$conn->close();
					die();
				}
				
				}
				/*
				else {
					if(($start >= strtotime($start_day)) && ($end <= strtotime($end_day))){
						echo "Sorry! There are already events reserved for that today.";
						$conn->close();
					    die();
					}

				}
				*/
            }
 }

echo("<br>Event Confirmed!");
//echo(var_dump($sql));
$sql->execute();
$conn->close();	
}


?>
</p>


<form action="index.php" autocomplete="on" method="post" id="add-event">
<label for="event">Event Name</label>
<br>
<br>
<input type="text" name="title" class="field">
<br>
<br>
<label for="desc">Description</label>
<br>
<br>
<textarea name="desc" rows="5" cols="90%" class="textarea-field" form="add-event">Tell us about your event.</textarea>
<br>
<br>
<label for="datetime-start">Start time</label>
<input type="datetime-local" class="datetime-selector" name="datetime-start">
<br>
<br>
<div id="end">
<label for="datetime-end">End time</label>
<input type="datetime-local" class="datetime-selector" name="datetime-end">
</div>
<br>
<br>
<input type="checkbox" id="all-day" class="all-day" name="all-day" value="1">
<label for="all-day">Check this box if the event is all day.</label>

</form>
<br>
<button type="submit" class="button" form="add-event">Create Event</button>

</section>


</main>

<script>
//http://youmightnotneedjquery.com/
function fadeIn(el) {
  var opacity = 0;

  el.style.opacity = 0;
  el.style.filter = '';

  var last = +new Date();
  var tick = function() {
    opacity += (new Date() - last) / 400;
    el.style.opacity = opacity;
    el.style.filter = 'alpha(opacity=' + (100 * opacity)|0 + ')';

    last = +new Date();

    if (opacity < 1) {
      (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 300);
    }
  };

  tick();
}

	function fadeOut(el) {
  var opacity = 1;

  el.style.opacity = 1;
  el.style.filter = '';

  var last = +new Date();
  var tick = function() {
    opacity -= (new Date() - last) / 400;
    el.style.opacity = opacity;
    el.style.filter = 'alpha(opacity=' + (100 * opacity)|1 + ')';

    last = +new Date();

    if (opacity > 0) {
      (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16);
    }
  };

  tick();
}
	
	



end = document.getElementById("end");



if(document.getElementById('all-day').checked == true){
	fadeOut(end);
}
else {
	fadeIn(end);
}



document.getElementById('all-day').addEventListener("click",function(){
	
 if(document.getElementById('all-day').checked == true){
	fadeOut(end);
 }
 else {
	fadeIn(end);
 }
	
})


</script>

</body>
</html>