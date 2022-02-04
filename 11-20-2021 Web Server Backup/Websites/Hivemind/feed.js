
setInterval(function(){
if((window.innerHeight + window.scrollY) >= document.body.scrollHeight){
const request = new XMLHttpRequest();
request.open("GET","php/feed.php",false)
request.send(document.cookie) 
request.onload = function () {
	var feed = document.querySelector("feed")
	var x = document.createElement("article")
	x.setAttribute("class","question");
	var h1 = document.createElement("h1");
	h1.setAttribute("class","question_title")
	h1.innerText=
	feed.appendChild(x);
	
	var response = JSON.parse(request.responseText);
	
	reactDom.render(
		<article className=question>
			<h1 className="question_title">
		
		
		
		
		</article>
	
	
	
	,document.querySelector(".feed"));
	
	
	
};
}
},1000);




