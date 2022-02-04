
	setInterval(function(){
		var internetOn = false;
			const request = new XMLHttpRequest()
			request.open('GET',"https://supportlabs.sahu.me/xd.txt",false)
			
			
			try{
		request.send()
		internetOn = true
			}
			catch(error){
				internetOn = false
			}
		if(internetOn){
			document.getElementById("message").innerHTML = "";
			document.getElementById("alert").style.display = "none";
		}
		else {
			document.getElementById("alert").style.display = "block";
			document.getElementById("message").innerHTML = "Unable to connect to the internet.";
		}
		
		
	},1000)
	