<?php
$url = "http://api.openweathermap.org/data/2.5/weather?q=\\$_POST['city']\\&appid=7976369e477bb2011e394e096024ce2d";

ini_set("display_errors",E_ALL);

$contents = file_get_contents($url);
$climate=json_decode($contents,true);

$temp_max=$climate['temp_max'];
$temp_min=$climate['temp_min'];
$today = date("F j, Y, g:i a");
$cityname = $climate['name'];


echo $cityname . " - " .$today . "<br>";
echo "Temp Max: " . $temp_max ."&deg;C<br>";
echo "Temp Min: " . $temp_min ."&deg;C<br>";
?>

<!DOCTYPE html>

<html>
<head>
<title> <?php echo $cityname + "Weather";?> </title>
<link rel="stylesheet" type="text/css" href="weather.css">
<script src="weather.js"> </script>
</head>
<body>
<header class="header">



</header>

<div class="content">

<div class="temperature">
<div class="unit">

<div class="f">F°</div>
<div class="c">C°</div>



</div>

<div class="weather">

<h1 class="current_temprature"><?php echo $temprature;?></h1>
<h3 class="high"> High: <?php echo $high; ?> </h3>
<h3 class="low"> Low: <?php echo $low; ?> </h3>
<h2 class="type"><?php echo $type ?></h2>
<div class="warning">
<?php 
if(!$warning){
echo "All Good";
}
else {
	echo $warning_type;
}
?>
</div>


<div class="forcast_today">
<div id="morning" class="time">
<h3>Morning</h3>

<p class="temprature"><? echo $day_temp["morning"]?></p>
<p class="rain"><? echo $day_rain["morning"] ?> </p>
</div>

<div id="afternoon" class="time">
<h3>Afternoon</h3>



<p class="temprature"><? echo $day_temp["afternoon"]?></p>
<p class="rain"><? echo $day_rain["afternoon"] ?> </p>
</div>

<div id ="evening" class="time">
<h3>Evening</h3>

<p class="temprature"><? echo $day_temp["evening"]?></p>
<p class="rain"><? echo $day_rain["evening"] ?> </p>
</div>


<div id="night" class="time">
<h3>Night</h3>

<p class="temprature"><? echo $day_temp["night"]?></p>
<p class="rain"><? echo $day_rain["night"] ?> </p>
</div>
</div>


<div class="forecast">
<div id="monday" class="day">


</div>

<div id="tuesday" class="day">

</div>

<div id="wednesday" class="day">

</div>

<div id="thursday" class="day">

</div>

<div id="friday" class="day">

</div>

<div id="saturday" class="day">


</div>

<div class="sunday" class="div">

</div>

</div>

<div class="details">
<div class="col1">

<div>



</div>



<div>




</div>



</div>





<div class="col2">

<div>



</div>



<div>




</div>
<div>


</div>



</div>
</div>

</div>

<div class="hourly">

</div>

<div class="weekly">

</div>

<div class="radar">



</div>


<div class="advertisement">




</div>




</body>
</html>
