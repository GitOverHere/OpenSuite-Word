<!DOCTYPE html>
<html>
<head>
<title>Hivemind</title>
<link rel="stylesheet" type="text/css" href="main.css">
<script crossorigin src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
</head>
<body>
<header class="header">
    <div class="header_container">
      <nav class="buttons">
		<div class='header_button feed'>
		<a> 
		<img src='img/home.svg'></img>
		</a>
		<p>Home</p>
		</div>
		<div class='header_button notifications'>  
		<a href="Notifications"> 
		<img src='img/bell.svg'></img>
		</a>
		<p>Notifications</p>
		</div>
		<div class='header_button groups'>   
		<a href="Groups">
		<img src='img/groups.svg'></img>
		</a>
		<p>Groups</p>
		</div>
		<div class='header_button answer'>          
		<a href="Answer">
		<img src='img/answer.svg'></img>
		</a>
		<p>Answer</p>
		</div>
      </nav>
        <div class="search">
          <input type="text" class="searchTerm" placeholder="Search For Any Question." />
			<a href="Results" id="search_button">
			<img src="img/search.svg" alt="Search"/>
			</a>
        </div>
	  <div class="icons">
    <div class="pfp">
      <a class="profile">
	  <img class="pfp-image" href="" alt="pfp"/>
	  
      </a>
    </div>
	<a class="button" id="ask-question">Ask a Question</a>
    <div class="language">
	<img src="img/flags/us.svg" alt="lang">
    </div> 
    </div>
	
  </header>
	<section class="container">
	<div class="website-content">
	<div class="col1">
	<aside class="topics">
        <p>Topics you follow. </p>
        <div class="topic_container">
          <div class="topic_pfp">
            <img alt="none" />
          </div>
          <div class="topic_name">
            <p>Login to see groups.</p>
          </div>
        </div>
      </aside>
	</div>  
      <div class="feed">
        <article class="question">
          <h1 class="question-title">Question Title </h1>
          <div class="content">
          </div>
        </article>
        <p class="end">You have reached the end of your feed</p>
      </div>
	<div class="col-2">
	 <aside class="groups">
        <p> This is where you will find your spaces </p>
        <div class="group_container">
          <div class="group_pfp">
            <img alt="none" />
          </div>
          <div class="group_name">
            <p>Login to see groups.</p>
          </div>
        </div>
      </aside>
	  <div class="footer"> 
	  <a href="About">About</a>
	  <a href="Ads">Ads</a>
	  <a href="Ask">ask</a>
	  <a href="Careers">Careers</a>
	  <a href="FAQ">FAQ</a>
	  <br>
	  <a href="Groups">Groups</a>
	  <a href="Jobs">Jobs</a>
	  <a href="Privacy">Priacy Policy</a>
	  <a href="Terms">TOS</a>
	</div>
	</div>
	</div>
	</section>
<script src="index.js"></script>
<script src="feed.js"></script>


</body>
</html>



