	var x= innerWidth;
	var hamburger = document.createElement("img");
    var d = new Date();
	var date = "&copy; Binayak Sahu " + d.getFullYear();
	
addEventListener("onload",function(){
	document.querySelector("#copyright").innerText = date;
});

	
addEventListener("scroll",function(){
var ChangeHere= document.getElementById("about");
	var links = document.getElementById("header").getElementsByTagName("a");
	
	if(window.scrollY > ChangeHere.offsetHeight){
		document.getElementById("header").style.background= "white";
		document.getElementById("color-bar").style.visibility = "visible";
		for(var i=0;i<links.length;i++)
    {
        if(links[i].href)
        {
            links[i].style.color = "grey";  
        }
    }  
	}
	else{
		document.getElementById("header").style.background= "transparent";
		document.getElementById("color-bar").style.visibility = "hidden";
		for(var i=0;i<links.length;i++)
    {
        if(links[i].href)
        {
            links[i].style.color = "white";  
        }
    }  
	}
	
});

addEventListener("resize", function() {
	
	
	if(window.innerWidth< 725){
		menu.remove();
		
	}
	else{
		document.querySelector('.header').appendChild(m);
	}
	
	
	
});













