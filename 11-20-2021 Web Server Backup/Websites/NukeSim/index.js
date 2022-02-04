m = document.getElementById("map");
    map = new google.maps.Map(m, {
     center: cords,
	 zoom:5,
    });	
 marker = new google.maps.Marker({
    position: cords,
    map: map,
    icon: 'img/pin.png',
	draggable: true,
  });	
  
  google.maps.event.addListener(marker, 'dragend', function(e) {
    if(multiple){
		
	
	cordsArray.push(cords)
	
	location_list +=  "("+cords.Lat()+","+cords.Lng()+")<br>"
	cords = e.latLng;
	
  }	
  
})




function myMap(){
	m = document.getElementById("map");
    map = new google.maps.Map(m, {
     center: cords,
	 zoom:5,
    });	
    marker = new google.maps.Marker({
    position: cords,
    map: map,
    icon: 'img/pin.png',
	draggable: true,
  });	
  
  google.maps.event.addListener(marker, 'dragend', function(e) {
    if(multiple){
		
	
	cordsArray.push(cords)
	
	location_list +=  "("+cords.Lat()+","+cords.Lng()+")<br>"
	cords = e.latLng;
	
  }	
  
})
}

function get_cords(){
	
	var request = new XMLHttpRequest()
	request.responsetype = "json"
request.open("GET","https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input="+request.innerText+"&inputtype=textquery&fields=formatted_address,name,geometry&key=AIzaSyCbfbN3mBxy0SO7lJ1CGPhIh1nIKtYa3zo")

if((request.statusCode = 200) && (request.readyState == 4)){
	var viewport = reques.response["candidates"]["viewport"]
	var longitude = request.response["candidates"]["geometry"]["location"]["lng"];
	var lattitude= request.response["candidates"]["geometry"]["location"]["lat"];
	
    var cords = new google.maps.LatLng(lattitude,longitude)
	
	marker.setPosition = cords

	
}
else {
	alert("The places API is not responding. Please drag the pin manually.")
	
}


}


function kt_to_kg(kt){
	return (kt*907.1847)*1000
	
}

function nukeEffects(){
	this.airPressure = 14.7
	this.error = undefined
    var debug = false;
	
	
}




async function nuke(){
	alert("bruh")
	alert(0.84*kt_to_kg(kt))
	
	const cityCircle = new google.maps.Circle({
      strokeColor: "#FF0000",
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: "#000000",
      fillOpacity: 0.35,
      map,
      center: cords.latLng,
      radius:  1000,
    });
		
    dcount = 0
	icount = 0
	
	while(dcount < (39000/20)*kt){
		setTimeout(() => {
		death_counter.innerText =  dcount.toString() 
		},1)
		dcount++
	}
	
	
	
	
	while(icount < (25000/20)*kt){
		setTimeout(()=>{
		injury_counter.innerText =  icount.toString() 
		},1)
	}
	
}


function error(){
	console.error("Bruh there is an error!")	
}


function show_casualties(){
 
	
	
}


	
	


var cords = new google.maps.LatLng(20,20);
var cordsArray = []
var deaths = 0
var injuries = 0
var kt = document.querySelector("[name=kt]").value
multiple = false
slide1 = document.getElementById("slide1");
slide2 = document.getElementById("slide2");
slide3 = document.getElementById("slide3");
input = document.getElementById("autocomplete");
location_list = document.getElementById("location_list")
death_counter = document.getElementById("death-count")
injury_counter = document.getElementById("injury-count")

	
document.querySelectorAll(".dropdown-content > p").forEach(item => {
	item.addEventListener("click",function(){
	    document.querySelector(".dropdown-title").value = item.innerText
		document.querySelector("[name=kt]").value = item.getAttribute("value");
		kt = document.querySelector("[name=kt]").value
	})
})

slide2.style.opacity = 0
slide3.style.opacity = 0








	


