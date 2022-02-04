
$(document).ready(function() {
	var platform= "none";
	$tools= $('.tool-menu').clone();
	$twitch_grid= null;
	$youtube_grid= null;
	$twitter_grid= null;
	$mixer_grid= null;
	$('#back-button').fadeOut(300);
            $('.content').each(function() {
                $(this).hide();
            });

			$('.analytics').fadeIn(300);	
});

 $('.link').click(function(e) {

                $('.content').each(function() {
                    $(this).hide();
                });
                $('.content-container').find('.' + e.target.id).fadeIn(300);

            });

            $('#account_settings').click(function(e) {
				 $('.setting').each(function() {
                        $(this).hide();

                    });

					$(".info").show();

                $('.s-link').click(function(e) {
                    $('.setting').each(function() {
                        $(this).hide();

                    });
						$('.settings-form-container').find('.' + e.target.id).fadeIn(300);
                });
            });

			$('#username').click(function(e) {
var username=document.getElementById("username-f").value;
				$.ajax({
					
					method: 'get',
					url: 'Fields/username.php',
					data: {
						'username' : username
					},
					success: function(data) {
						alert('Your username has been changed to '+ document.getElementById("username-f").value);
						document.querySelector(".username").innerHTML=username;
					}

				});


			});
			$('#name').click(function(e) {

				$.ajax({
					method: 'get',
					url: 'Fields/name.php',
					data: {
						'name' : document.getElementById("name-f").value
					},
					success: function(data) {
						alert('Your name has been changed to '+document.getElementById("name-f").value);
					}

				});


			});
			$('#email').click(function(e) {

				$.ajax({
					method: 'get',
					url: 'Fields/email.php',
					data: {
						'email' : document.getElementById("email-f").value
					},
					success: function(data) {
						alert('Your email has been changed to '+document.getElementById("email-f").value);
					}

				});


			});$('#paypal').click(function(e) {

				$.ajax({
					method: 'get',
					url: 'Fields/paypal.php',
					data: {
						'paypal' : document.getElementById("paypal-f").value
					},
					success: function(data) {
						alert('Your paypal has been saved ');
					}

				});


			});

			$('#btc').click(function(e) {

				$.ajax({
					method: 'get',
					url: 'Fields/btc.php',
					data: {
						'btc' : document.getElementById("btc-f").value
					},
					success: function(data) {
						alert('Your bitcoin address has been saved.');
					}

				});
			});
			
			$(".live").delegate("#back-button","click", function() {		
				$('.tool-menu').empty();
				$('.tool-menu').append($tools.children()).fadeIn(300);
				$('#back-button').fadeOut(300);
			});
			
			
			$(".tool-menu").delegate("#twitch-tools","click", function() {
				$.ajax({
					method: 'get',
					url: "validate_twitch.php",
					
					statusCode: {
						203: function() {
							window.open("https://id.twitch.tv/oauth2/authorize?client_id=j4yo5sixp9f5kldggrr7ryml91uv1c&redirect_uri=https://supportlabs.sahu.me/Dashboard/Fields/twitch.html&response_type=token&scope=channel_feed_read&force_verify=true","Twitch Login","width=500px,height=800px");
						},
						202: function() {
							platform = "Twitch";
						$tools= $('.tool-menu').clone();
						$('#back-button').fadeIn(300);
						$('.tool-menu').hide().load("twitch_tools.txt").fadeIn(300);
							
						}
						
					}
					
					
				});
				
			});
			
			
			$(".template").click(function(e){
				var template_name= e.target.id;
               $.ajax({
				   method: "post",
				   url: "create_page.php",
				   data: {
					   'template' : template_name
				   }
				   
				   
			   });
			   
			   
				
			}
			);
			
			
			
			
			$(".tool-menu").delegate("#youtube-tools","click", function() {
				platform= "Youtube";
				$tools= $('.tool-menu').clone();
				$('#back-button').fadeIn(300);
				$('.tool-menu').hide().load("youtube_tools.txt").fadeIn(300);
			});
			
			$(".tool-menu").delegate("#twitter-tools","click", function() {
				platform= "Twitter";
				$tools= $('.tool-menu').clone();
				$('#back-button').fadeIn(300);
				$('.tool-menu').hide().load("twitter_tools.txt").fadeIn(300);
			});
			
			$(".tool-menu").delegate("#mixer-tools","click", function() {
				platform= "Mixer";
				$tools= $('.tool-menu').clone();
				$('#back-button').fadeIn(300);
				$('.tool-menu').hide().load("mixer_tools.txt").fadeIn(300);
			});
			
			$(".tool-menu").delegate(".grid > .item","click", function(e) {
				$grid= $(".grid").clone();
				$(".grid").hide();
				$(".tool-menu").load("Components/"+platform+"/"+e.target.id+"/index.html");
				
				
				switch(e.target.id){
					
				case "alert-box":
				/*
					var elm= document.querySelectorAll(".tab");
					if(elm){
						alert(elm.length);
					}
					else {
						alert("bruh");
					}
					
						
						
							elm.forEach(() => {
								elm.AddEventListener('load',() => {
								 elm[i].style.display= 'none';	
								}
								);
							});
						$(".tool-menu").on("change",".tab",() => {
						$(this).hide();
					});
					
					
					*/	
					
					
					$(".tab").on("DOMNodeInserted",".tab",() => {
						alert('hide');
						$('.tab').each(function() {
                $(this).hide();
            });
					});
					
					
					
					
					
					break;
				default:
				alert('bruh');
				break;
			}
			});
			
			
			
			
			
				
				
