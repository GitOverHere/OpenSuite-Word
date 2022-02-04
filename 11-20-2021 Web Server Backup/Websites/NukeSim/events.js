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

document.getElementById("launch").addEventListener("click",()=>{ 
  slide1.style.display = "none";
  fadeIn(document.getElementById("slide2"))
  var x = new Audio("nuke.mp3");
  x.play();
  setTimeout(function(){
	  nuke()
	  slide2.style.display = "none"
	  fadeIn(slide3)
	  
	  
  },10000)
  
  
  
  })
  
  
 document.getElementById("get-cords").addEventListener("oninput",()=> {
	 
	 get_cords()

 })
 
 document.getElementsByName("multiple")[0].addEventListener("click", ()=> {
	
if(!multiple){
	multiple = true
	
}	
else {
 multiple = false
}

    
	 
 })
 
 document.getElementById("kt").addEventListener("input",(e)=> {
	 kt = document.querySelector("#kt").value
	 
 })
 
 	google.maps.event.addListener(marker, 'dragend', function(e) {
    if(multiple){
		
	
	cordsArray.push(cords)
	
	location_list +=  "("+cords.Lat()+","+cords.Lng()+")<br>"
	cords = e.latLng;
	
  }	
  
})

document.getElementById("again").addEventListener("click",()=> {
	
  slide3.style.display="none"
  slide2.style.display="none"
  fadeIn(slide1)
	
})
 
  
  
  