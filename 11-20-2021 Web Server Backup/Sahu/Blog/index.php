<?php 

/*if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST["contact-form"])) {
$admin=	"binny@sahu.me";	
$name= $_POST['name'];		
$subject = $_POST['subject'];
$email= $_POST['email'];
$message = "You have recieved a message from ".$_POST['name']."<br> ".$_POST['message'];
$headers = "From: " . $email;

mail($admin,$subject,$message,$headers);
header("Location: index.php?mailsend");

}

}*/

mail("binny@sahu.me","test","This is a test");
header("Location: index.php?mailsend");



?>



<html>
<head>
<title>Sahu.me</title>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WND3PCG');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="gTNWSXhp6QdoDxUy2KjWCRuYRpPNYAZK0aAPvPGiu94" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137974110-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137974110-2');
</script>
<link rel="stylesheet" type="text/css" href="main.css">
<meta charset="UTF-8">

  <meta name="description" content="The website of Binayak Sahu">
  <meta name="keywords" content="HTML,CSS,JavaScript,Game Dev,Gamesational,Sahu,Binayak Sahu">
  <meta name="author" content="Binayak Sahu">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WND3PCG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<section class="header" id="header">
<div class="color-bar"id="color-bar">

</div>
<div class="logo" id="logo">


<a class="home" id="home"><img src="images/sahu.png" width="60" height="60" alt="Sahu Logo" \></a>
</img>
</div>

<nav class="menu" id="menu">
<a id="a">About</a>
<a id="w">Websites</a>
<a id="g">Games</a>
<a id="c">Cool Stuff </a>
<a id="s">Blog</a>
<a id="cc">Contact</a>
</nav>
</section>
<div class="intro" id="intro">
<div class="intro-content" id="intro-content">
<h1> Welcome to my website!</h1>
<p> feel free to check out some of my stuff.</p>
</div>
</div>
<div class="about" id="about">
<h1>ABOUT ME</h1>

<div class="sahu">
<img src="images/sahu.png" width="500px" height="500px" alt="Sahu Logo">
</div>
<div class="about-text" id="about-text">
<p> My name is Binayak Sahu, but most people call me Binny.
I am an tech enthusiast who is trying to become a professional 
software engineer. My parents immigrated to the United States from India.
As of right now, I am working on various projects to see what I am good at. 
I am still contemplating whether I should get into game design or web development.
Someday, I might start a tech company, but for now I just have to focus on school
and continue learning programming.</p> 

<p>The FitnessGram™ Pacer Test is a multistage aerobic capacity test that progressively gets more difficult as it continues. 
The 20 meter pacer test will begin in 30 seconds. Line up at the start. The running speed starts slowly, but gets faster each minute after you hear this signal. 
[beep] A single lap should be completed each time you hear this sound. 
[ding] Remember to run in a straight line, and run as long as possible. 
The second time you fail to complete a lap before the sound, your test is over. 
The test will begin on the word start. On your mark, get ready, start. </p>
<br>

</div>

</div>

<div class="websites" id="websites">
<h1> MY WEBSITES </h1>
<p> Here are some of the websites I have made </p>
</div>

<div class="games" id="games">
<h1> MY GAMES </h1>
<p> Here is a list of the games I have made. </p>
</div>

<div class="cool-stuff" id ="cool-stuff">
<h1> Cool Stuff</h1>
<p> Other projects I am working on.</p>

</div>


<section class="footer" id="footer">
<div class="social-media" id="social-media">
<h1> Connect With Me! </h1>

<a href="https://twitter.com/Gamesational1"><img src="images/social_media/twitter.png" alt="twitter" \></a>


<a href="https://www.youtube.com/c/Gamesational1"><img src="images/social_media/youtube.png" alt="Youtube" \></a>


<a href="https://steamcommunity.com/id/Gamesational"><img src="images/social_media/steam.png" alt="steam" \></a>

<a href="https://discord.gg/vpcNZKQ"><img src="images/social_media/discord.png" alt="discord" \></a>

<a href="https://stackoverflow.com/users/10305874/binayak-sahu?tab=profile" > <img src="images/social_media/stackoverflow.png" alt="stack overflow" \></a>

<p> &copy Binayak Sahu 2019</p>
<p>Website made with ❤️</p>
</div>

<div class="contact" id="contact">
<h1> Contact </h1>
<p> Send me a message. </p>
<form class="contact-form" id="contact-form" method="POST" onsubmit="alert('Message Sent! Expect a response shortly.')">

<input name="name" placeholder="Name">
<br>
<br>
<input name="email" placeholder="Email Address">
<br>
<br>
<input name="subject" placeholder="subject">
<br>
<br>
<textarea name="message" rows="10" cols="100%">Type your message here.</textarea>
<br>
<br>
<button type="submit">SEND MESSAGE </button>
</form>
</div>

</section>



<script src="index.js">


</body>

</html>