<?php

header('Access-Control-Allow-Origin: *');

?>

<html>
<head>
<title>Webcam Test</title>
<link rel="stylesheet" type="text/css" href="main.css">
<script>
request.mode = no-cors;
</script>
</head>
<body data-new-gr-c-s-check-loaded="14.991.0" data-gr-ext-installed="" class="vsc-initialized">
<br>
<br>
<br>
<div class="frame">
<canvas id="canvas1"></canvas>
</div>
<br>
<div class="frame">
<canvas id="canvas2"></canvas>
</div>
<br>
<div class="frame"><div class="vsc-controller vsc-nosource" data-vscid="d684hwjyi"></div>
<video autoplay="" id="videoElement" data-vscid="d684hwjyi"></video>
</div>
<script src="https://cdn.sahu.me/tf.min.js"></script>
   
<script defer src="face-api.min.js"></script>
<script defer src="main.js"></script>
</body>
</html>
