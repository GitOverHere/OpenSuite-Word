<?php
   session_start();
   require_once("core/init.php");
 $user= new User();
   if(!Session::exists('logged_in')){
   	header('location: Login');
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Dashboard</title>
      <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	  <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
	  <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link type="text/css" rel="stylesheet" href="style.css">
      <meta charset="utf-8">
   </head>
   <body>
      <div class="topcolor"></div>
         <div class="sidepanel">
            <div class="logo">
               <a href="/Dashboard">
               <img src="img/supportlabs.png" width="300" height="100" alt="Home">
               </a>
            </div>
            <nav class="v-nav" id="v-nav">
               <a class="link" id="analytics">Analytics</a>
               <a class="link" id="shared_access">Shared Access</a>
               <a class="link" id="dev_api">Developer API</a>
               <a class="link" id="live">Livestream tools</a>
               <a class="link" id="your_page">Your Page</a>
               <a class="link" id="forums">Forums</a>
               <a class="link" id="account_settings">Account Settings</a>
            </nav>
            <div class="profile">
               <h3 class="username">
                  <?php
						 echo $user->get('users','username');

                   ?>
               </h3>
               <a href="Login/logout.php">
               <img src="img/logoff.png" width="25" height= "25" alt="Log Off">
               </a>
               <a href="#account_settings">
               <img src="img/settings.png" width="25" height="25" alt="Settings">
               </a>
            </div>
         </div>
         <div class="website-container">
         <div class="content-container" id="content-container">
            <div class="analytics content">
               <h1 class="title">Analytics </h1>
               <nav class="s-nav">
                  <a class="graphs" id="page">Page</a>
                  <a class="graphs" id="youtube">Youtube</a>
                  <a class="graphs" id="twitter">Twitter</a>
                  <a class="graphs" id="twitch">Twitch</a>
                  <a class="graphs" id="new">New Platform</a>
               </nav>
               <div class="daterange-select">
                  <h3 class="info"> Show data from</h3>

                  <div class="dropdown" id="time-range">
                    <span>Time Range </span>
                    <div class="dropdown-content">
                      <p value ="24-hours">Last 24 Hours</p>
                       <p value ="7-days">Last 7 Days</p>
                       <p value ="30-days"> Last 30 Days</p>
                       <p value="90-days"> Last 90 Days </p>
                       <p value="last-year">Last Year </p>
                       <p value="this-year">This Year </p>
                       <p value="all-time">All Time </p>
                       <p value="custom">Custom Time Range </p>
                  </div>
               </div>
             </div>

                  <div class="graph-container">
					<div class="page ana">
                     <h3>Total Page Revenue</h3>
                     <canvas id="revenue-graph" class="graph" width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <h3>Views</h3>
                     <canvas id="views-graph" class="graph" width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <h3>Page Watch Time</h3>
                     <canvas id="average-time-graph" class="graph"  width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <h3>Custom Graph </h3>
                     <canvas id="custom-graph" class="graph" width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <p> Not enough data? You can create a custom graph.</p>
                     <br>
                     <a class="standard-button">Create Custom Graph </a>
									 </div>
									 <div class="youtube ana">
									  <h3>Total Youtube Revenue</h3>
                     <canvas id="revenue-graph" class="graph" width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <h3>Views</h3>
                     <canvas id="views-graph" class="graph" width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <h3>Page Watch Time</h3>
                     <canvas id="average-time-graph" class="graph"  width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <h3>Custom Graph </h3>
                     <canvas id="custom-graph" class="graph" width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <p> Not enough data? You can create a custom graph.</p>
                     <br>
									 </div>
									 <div class="twitch ana">
									 <h3>Total Twitch Revenue</h3>
                     <canvas id="revenue-graph" class="graph" width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <h3>Views</h3>
                     <canvas id="views-graph" class="graph" width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <h3>Page Watch Time</h3>
                     <canvas id="average-time-graph" class="graph"  width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <h3>Custom Graph </h3>
                     <canvas id="custom-graph" class="graph" width="400" height="200" style="border:1px solid #000000;"></canvas>
                     <p> Not enough data? You can create a custom graph.</p>
                     <br>
									 
									 
								
									 </div>
									 <div class="new ana">
									 
<div id="jsAddChannelModalStep1" class="">
                    
<div class="app-channels-wrap">
    <div class="app-channels">

        <!-- Facebook Live API (Free personal profile)-->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="37">
            <img src="https://static.restream.io/img/platforms/facebook-live.svg" alt="Facebook Live" class="app-channels__img">
            <span class="app-channels__text">Personal profile</span>
        </button>

        <!-- Twitch -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="1">
            <img src="https://static.restream.io/img/platforms/twitch.svg" alt="Twitch" class="app-channels__img">
            <span class="app-channels__text">Twitch</span>
        </button>

        <!-- Youtube Events -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="5">
            <img src="https://static.restream.io/img/platforms/youtube.svg" alt="YouTube" class="app-channels__img">
            <span class="app-channels__text">YouTube</span>
        </button>

        <!-- Periscope -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="38">
            <img src="https://static.restream.io/img/platforms/periscope-twitter.svg" alt="Periscope" class="app-channels__img">
            <span class="app-channels__text">Periscope <span class="app-channels__subtext">by Twitter</span></span>
        </button>

        <!-- LinkedIn -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="59">
            <img src="https://static.restream.io/img/platforms/linkedin.svg" alt="LinkedIn" class="app-channels__img">
            <span class="app-channels__text">LinkedIn</span>
            <span class="badge-free">BETA</span>
        </button>

        <!-- Vk -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="36">
            <img src="https://static.restream.io/img/platforms/vk.svg?1" alt="VK.com" class="app-channels__img">
            <span class="app-channels__text">VK Live</span>
        </button>

        <!-- DLive -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="57">
            <img src="https://static.restream.io/img/platforms/dlive.svg" alt="DLive" class="app-channels__img">
            <span class="app-channels__text">DLive</span>
        </button>

        <!-- Dailymotion -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="66">
            <img src="https://static.restream.io/img/platforms/dailymotion.svg" alt="Dailymotion" class="app-channels__img">
            <span class="app-channels__text">Dailymotion</span>
        </button>


                
        <!-- Trovo -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="69">
            <img src="https://static.restream.io/img/platforms/trovo.svg" alt="Trovo" class="app-channels__img">
            <span class="app-channels__text">Trovo</span>
<!--            <span class="badge-free">NEW</span>-->
        </button>

        <!-- Mixcloud -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="68">
            <img src="/img/platforms/mixcloud.svg" alt="Mixcloud" class="app-channels__img">
            <span class="app-channels__text">Mixcloud</span>
<!--            <span class="badge-free">NEW</span>-->
        </button>

        <!-- Kakao -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="62">
            <img src="https://static.restream.io/img/platforms/kakao.svg" alt="Kakao" class="app-channels__img">
            <span class="app-channels__text">kakaoTV</span>
        </button>

        <!-- Naver -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="61">
            <img src="https://static.restream.io/img/platforms/naver.svg" alt="Naver" class="app-channels__img">
            <span class="app-channels__text">Naver TV</span>
        </button>

        <!-- Nimo -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="60">
            <img src="https://static.restream.io/img/platforms/nimo.svg" alt="Nimo" class="app-channels__img">
            <span class="app-channels__text">Nimo TV</span>
        </button>

        <!-- Nonolive -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="70">
            <img src="https://static.restream.io/img/platforms/nonolive.svg" alt="Nonolive" class="app-channels__img">
            <span class="app-channels__text">Nonolive</span>
            <span class="badge-free">NEW</span>
        </button>

        <!-- Vlive -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="63">
            <img src="https://static.restream.io/img/platforms/vlive.svg" alt="Vlive" class="app-channels__img">
            <span class="app-channels__text">V LIVE</span>
        </button>

        <!-- Goodgame -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="3">
            <img src="https://static.restream.io/img/platforms/gg.svg" alt="Good Game" class="app-channels__img">
            <span class="app-channels__text">GoodGame</span>
        </button>

        <!-- Smashcast -->
<!--        --><!--        <button class="app-channels__item jsSelectStreamingPlatformLink" type="button"-->
<!--                data-streaming-platform-id="--><!--">-->
<!--            <img src="--><!--?//=STATIC_URL_PREFIX?--><!--/img/platforms/smashcast.svg" alt="Smashcast" class="app-channels__img"/>-->
<!--            <span class="app-channels__text">--><!--</span>-->
<!--        </button>-->

        <!-- Huya -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="51">
            <img src="https://static.restream.io/img/platforms/huya.svg" alt="Huya" class="app-channels__img">
            <span class="app-channels__text">Huya</span>
        </button>

        <!-- Zhanqi.tv -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="58">
            <img src="https://static.restream.io/img/platforms/zhanqi.svg" alt="Zhanqi.tv" class="app-channels__img">
            <span class="app-channels__text">Zhanqi.tv</span>
        </button>

        <!-- BiliBili -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="43">
            <img src="https://static.restream.io/img/platforms/bilibili.svg" alt="Bilibili" class="app-channels__img">
            <span class="app-channels__text">Bilibili</span>
        </button>

        <!-- AfreecaTV -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="40">
            <img src="https://static.restream.io/img/platforms/afreecatv.svg" alt="AfreecaTV" class="app-channels__img">
            <span class="app-channels__text">AfreecaTV</span>
        </button>

        <!-- Mobcrush -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="35">
            <img src="https://static.restream.io/img/platforms/mobcrush.svg" alt="Mobcrush.com" class="app-channels__img">
            <span class="app-channels__text">Mobcrush</span>
        </button>

        <!-- MLG -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="15">
            <img src="https://static.restream.io/img/platforms/mlg.svg" alt="MLG" class="app-channels__img">
            <span class="app-channels__text">Major League Gaming</span>
        </button>

        <!-- Douyu -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="16">
            <img src="https://static.restream.io/img/platforms/douyu.svg" alt="Douyu" class="app-channels__img">
            <span class="app-channels__text">Douyu</span>
        </button>

        <!-- LiveEdu -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="20">
            <img src="https://static.restream.io/img/platforms/liveedu.svg" alt="LiveEdu" class="app-channels__img">
            <span class="app-channels__text">LiveEdu(Education Ecosystem) </span>
        </button>


        <!-- Vaughn -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="10">
            <img src="https://static.restream.io/img/platforms/vaughnlivelogotype.svg" alt="Vaughn" class="app-channels__img">
            <span class="app-channels__text">Vaughn Live</span>
        </button>

        <!-- Instagib -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="28">
            <img src="https://static.restream.io/img/platforms/instagib.svg" alt="iNSTAGIB" class="app-channels__img">
            <span class="app-channels__text">iNSTAGIB</span>
        </button>

        <!-- Breakers -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="26">
            <img src="https://static.restream.io/img/platforms/breakerstv.svg" alt="BreakersTV" class="app-channels__img">
            <span class="app-channels__text">Breakers.TV</span>
        </button>

        <!-- Vapers -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="27">
            <img src="https://static.restream.io/img/platforms/vaperstv.svg" alt="Vapers TV" class="app-channels__img">
            <span class="app-channels__text">Vapers.TV</span>
        </button>

        <!-- Picarto -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="24">
            <img src="https://static.restream.io/img/platforms/picartotv.svg" alt="Picarto TV" class="app-channels__img">
            <span class="app-channels__text">Picarto</span>
        </button>

        <!-- OK.ru -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="42">
            <img src="https://static.restream.io/img/platforms/ok.svg" alt="ok.ru" class="app-channels__img">
            <span class="app-channels__text">OK.ru</span>
        </button>

        <!-- FC2Live -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="48">
            <img src="https://static.restream.io/img/platforms/fc2.svg" alt="Fc2" class="app-channels__img">
            <span class="app-channels__text">FC2 Live</span>
        </button>

        <!-- Steam -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="49">
            <img src="https://static.restream.io/img/platforms/steam.svg" alt="Steam" class="app-channels__img">
            <span class="app-channels__text">Steam</span>
        </button>

        <!-- Tele2 -->
                <button class="app-channels__item jsSelectStreamingPlatformLink" type="button" data-streaming-platform-id="55">
            <img src="https://static.restream.io/img/platforms/tele2.svg" alt="Tele2" class="app-channels__img">
            <span class="app-channels__text">TELE2</span>
        </button>

    </div>

    <div class="clearfix"></div>

    
</div>

                </div> 
									 </div>
                  </div>
								</div>

                  <div class="shared_access content">
                     <h1 class="title">Add People</h1>
                  </div>
                  <div class="dev_api content">
                    <h1 class="title">Coming Soon... </h1>
                     <p class="info"> The developer API is currently not available.<br>
                        It will be available soon, but in the meantime, please feel free to explore the other tabs.
                     </p>
                  </div>
                  <div class="live content">
                     <h1 class="title"> Livestream Tools</h1>
					 <p id="back-button">Go Back</p>
					 <div class="tool-menu" id="tool-menu">
					 <div class="livestream-tools" id="twitch-tools">
					 <div class="img-div">
						<img class="b-logo" id="twitch_logo"  src="img/Social_Media/twitch.svg">
					</div>
						<div class="Description">
						<h1>Twitch Tools</h1>
						<p>Show your twitch chat who the BEASTS are by using out Twitch Livestreaming Tools.</p>
						 </div>
					 </div>

					 <div class="livestream-tools" id="youtube-tools">
						<div class="img-div">
						 <img class="b-logo" id="youtube_logo" src="img/Social_Media/youtube.svg">
						</div>
						 <div class="Description">
						<h1>Youtube Tools</h1>
						<p>Shows who subscribed to your channel and who baught membership.</p>
					 </div>
					 </div>

					 <div class="livestream-tools" id="twitter-tools">
						<div class="img-div">
						  <img class="b-logo" id="twitter_logo" src="img/Social_Media/twitter.svg">
						 </div>

						  <div class="Description">
						<h1>Twitter Tools</h1>
						<p>Check out your squad and see who has followed you.</p>
						 </div>
					 </div>

					 <div class="livestream-tools" id="smashcast-tools">
					 <div class="img-div">
					<img class="b-logo" id="smashcast" src="img/Social_Media/smashcast.svg">
					</div>
						<div class="Description">
						<h1>Smashcast Tools</h1>
						<p>Show your smashcast chat who the BEASTS are by using out Smashcast Livestreaming Tools.</p>
						</div>
					 </div>


					 <div class="livestream-tools" id="discord-tools">
					 <div class="img-div">
					 <img class="b-logo" id="mixer_logo" src="img/Social_Media/discord.png">
					 </div>
						<div class="description">
						<h1>Discord Tools</h1>
						<p>Show your discord chat who the BEASTS are by using out Twitch Livestreaming Tools.</p>
					     </div>
				  </div>
				  <div class="livestream-tools" id="our-tools">
						<div class="img-div">
						<img class="b-logo" id="our-logo" src="img/Social_Media/twitch.png">
						</div>
						<div class="description">
						<h1>SupportLabs Tools</h1>
						<p> Show off your patrons and donators with these awesone plugins.</p>
						</div>

				  </div>



				  </div>

				  </div>


                  <div class="your_page content">
                     <h1 class="title">Your Page</h1>
                     <br>
                     <a class="standard-button code">Open Visual Editor</a>

                    <div class="code" id="code">
                    <div class="html code">
                    <h3>HTML</h3>
                    <textarea rows="4" cols="50">

                    </textarea>

                    </div>

                    <div class="css code">
                    <h3>CSS3</h3>
                    <textarea rows="4" cols="50">

                    </textarea>

                    </div>

                    <div class="javascript code">
                    <h3>JS</h3>
                    <textarea rows="4" cols="50">

                    </textarea>

                    </div>
                  </div>

                     <?php


                     if($user->get('users','custom_url')=="Not Set"){
                       echo '<div class="no-page">';
                         echo '<h5 class="info">You do not seem to have a page yet.</h5>';
                      echo '<h5 class="info">Select a template</h5>';
                      echo '<br>';
                      echo '</div>';

                      echo '<script>';

                        echo 'var elem = document.getElementsByClassName("code");';
                        echo 'while(elem.length > 0){';
                        echo 'elem[0].parentNode.removeChild(elem[0]);';
                        echo '}';

                      echo "</script>";
                     }


                     ?>




                     <div class="templates">

						 <div id="blank" class="template">

						 <div class="inner">
						 <a class="standard-button">View</a>
						  <a class="standard-button">Edit</a>
						 </div>
						 <a class="t-title">Blank</a>
						 </div>

						 <div id="beach" class="template">

						  <div class="inner">
						 <a class="standard-button">View</a>
						 <a class="standard-button">Edit</a>
						 </div>
						 <a class="t-title">Beach</a>
						 </div>

						 <div id="business" class="template">


						  <div class="inner">
						 <a class="standard-button">View</a>
						<a class="standard-button">Edit</a>
						 </div>
						  <a class="t-title">Business</a>
						 </div>



					   <div id="circuts" class="template">


					    <div class="inner">
						 <a class="standard-button">View</a>
						  <a class="standard-button">Edit</a>
						 </div>
					   <a class="t-title">Circuits </a>
					   </div>

					   <div id="dank" class="template">


					    <div class="inner">
						 <a class="standard-button">View</a>
						 <a class="standard-button">Edit</a>
						 </div>
					   <a class="t-title">Dank</a>
					   </div>

					   <div id="ocean" class="template">


					    <div class="inner">
						 <a class="standard-button">View</a>
						 <a class="standard-button">Edit</a>
						 </div>
					   <a class="t-title"> Ocean </a>
					   </div>



					   <div id="gaming" class="template">


					    <div class="inner">
						  <a class="standard-button">View</a>
						 <a class="standard-button">Edit</a>
						 </div>
					   <a class="t-title">Gaming</a>

					   </div>



					   <div id="anime" class="template">


					    <div class="inner">
						  <a class="standard-button">View</a>
						 <a class="standard-button">Edit</a>
						 </div>
					   <a class="t-title">Organization</a>

					   </div>

					   <div class="vaporwave" class="template">


					    <div class="inner">
						 <a class="standard-button">View</a>
						 <a class="standard-button">Edit</a>
						 </div>
					   <a class="t-title"> Vaporwave</a>
					   </div>




                     </div>



				</div>
                  <div class="account_settings content" id="account_settings">
                     <h1 class="title">Account Settings</h1>
                     <div class="settings">
                        <nav class="s-nav">
                           <a class="s-link" id="info">Info</a>
                           <a class="s-link" id="payment-info">Payment</a>
                           <a class="s-link" id="notifications">Notifications</a>
                           <a class="s-link" id="password">Change Password</a>
                           <a class="s-link" id="delete_account">The Danger Zone</a>
                        </nav>
                        <div class="settings-form-container">
                           <div class="info setting">
                              <form name="basic-info" class="basic-info setting" method="POST">
                                 <h1> General Info</h1>
                                 <h3>Username</h3>
                                 <input type="text" name="username" value="<?php echo $user->get('users','username') ?>" id="username-f">
                                 <a class="update" id="username">✔</a>
								 <h3>Name</h3>
								 <input type="text" name="full_name" value="<?php echo $user->get('users','full_name') ?>" id="name-f">
                                 <a class="update" id="name">✔</a>
                                 <h3> Email Address </h3>
                                 <input type="text" name="email" value="<?php echo $user->get('users','email') ?>" id="email-f">
                                 <a class="update" id="email">✔</a>
                                 <h3>Change The Background</h3>
                                 <p>Click here to change the backgrounds you see in your Dashboard</p>
                              </form>
                              <a class="standard-button">Change Background</a>
                           </div>
                           <div class="payment-info setting">
                              <form name="payment-info" class="payment-info setting" method="POST">
                                 <h1>Payment Info </h1>
                                 <h3>Paypal address</h3>
                                 <input type="text" name="paypal" value="<?php echo $user->get('paypal','address') ?>" id="paypal-f">
                                 <a class="update" id="paypal">✔</a>
                                 <h3> Bitcoin Address </h3>
                                 <input type="text" name="btc" value="<?php echo $user->get('bitcoin','address') ?>" id="btc-f">
                                 <a class="update" id="btc">✔</a>
                              </form>
                           </div>
                           <div class="notifications setting">
                              <form name="notifications" class="notifications setting" method="POST">
                                 <h1>Notifications </h1>

                                 <input type="checkbox" name="news">Notify me about the latest news. </input>
																 	<br>


                                 <input type="checkbox" name="donate"> Tell me when someone donates. </input>
																 <br>

                                 <input type="checkbox" name="message">Tell me when someone sends me a message.</input>
																 <br>
                                 <br>
                              </form>
                              <br>
                              <br>
                              <a class="standard-button">Update Notification Settings </a>
                           </div>
                           <div class="password setting">
                              <h1>Change Password</h1>
                               <input type="password" name="old-password" placeholder="Existing Password">
                              <a class="update">✔</a>
                              <br>
                               <br>
                              <input type="password" name="new-password" placeholder="New Password">
                              <a class="update">✔</a>
                              <br>
                               <br>
                              <input type="password" name="confirm-password" placeholder="Confirm Password">
                              <a class="update">✔</a>
                              <br>
                               <br>
                           </div>
                           <div class="delete_account setting">
                              <h1>Delete Account </h1>
                              <p> You sure you wanna delete your account? If so, you may want to <a href="#">Create a Backup</a>. After that, you may delete your account. </p>
                              <br>
                              <a class="confirm_deletion">Delete My Account</a>
                              <script src="js/index.js"></script>
                              <script src="js/graph.js"></script>

                           </div>
                        </div>
                     </div>
                  </div>
         </div>
       </div>
   </body>
</html>
