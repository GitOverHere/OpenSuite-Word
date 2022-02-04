<?php

//$username  = $_SERVER['url'];
// What i toghth 9/23/2021 3:03PM

$username = $_SERVER['REQUEST_URI'];


?>


<!DOCTYPE html>
<html>

<head>
<title>Donate to <?php $username?></title>
<link rel="stylesheet" type="text/css" href="main.css">

</head>

<body>

<section class="container">

<div class="user-container">


</div>

<div class="form">

<nav class="payment-method">
<a>Paypal</a>
<a>Crypto</a>
<a>SupportLabs Balance</a>
<a>
</nav>

<div class="paypal">

<form action="index.php">
<input type="text" id="username" name="username">
<textbox name="message">




</textbox>

<input type="submit" class="button" value="Donate" id="donate">

</form>





</div>








</div>

</section>



</body>


</html>

