<?php
  include_once 'checked-login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>LUCKY life tools: Life Plan printable</title>
  <meta name="description" content="Apps and printables that help you on your life journey.">
  <meta name="author" content="Ilina Simeonova">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro|Varela+Round|Titillium+Web:900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body class="internal">

  	<header class="menu fixate">
    	<nav class="session">
        <a href="/logout.php" class="login logged_in">Log Out</a>
      </nav>
      <a href="index.php" class="logo">
          <img src="images/lucky_logo.png">
          <b>life tools</b></div>
      </a>
    </header>
    
    	<div class="breadcrumb">
        	<a href="index.php#printables">Back to all Life Tools</a> 
       </div>  
	<div class="container printable" id="LifePlanner">
	  <object type="image/svg+xml" data="images/icon-swot.svg"></object>
  <h1>Life Plan
          <p class="subheading">Define your long-term vision for each area of your life & set your goals.</p>
  </h1>
          <div class="row tool_pages"><img src="images/pages-life_planner.jpg" width="512" height="269" alt="Yoledo Life Planner printable"></div>     
      <h5>Heading</h5>
          <p>text</p>
      <p>&nbsp;</p>
      <div class="tool_content">
        <h5>Heading</h5>
        <p>text</p>
        <div class="row categories">
          <div class="four columns personal">
            <h6>PERSONAL:</h6>
            <p>Body</p>
            <p>Spirit</p>
            <p>Leisure</p>
            <p>Lifestyle</p>
          </div>
          <div class="four columns social">
            <h6>SOCIAL:</h6>
            <p>Family</p>
            <p>Friends</p>
            <p>Community</p>
            <p>Romance </p>
          </div>
          <div class="four columns professional">
            <h6>PROFESSIONAL:</h6>
            <p>Work</p>
            <p>Money</p>
            <p>Growth</p>
            <p>Contribution</p>
          </div>
        </div>
        <h5>Heading</h5>
        <p>text</p>
        <h5>Heading</h5>
        <p>text</p>
      </div>
      <p>uidance to go through this process. It's totally FREE, and you can download after a quick sign up.</p>
  		<form class="login_or_signup">
        	<a href="#">Login</a> or
			<button type="submit" class="button-primary signup">Sign Up<b><br>
			to download</b>
			</button>
        </form>
  		<form method="get" action="pdf/lucky_printable-life_plan.pdf">
			<button type="submit" class="button-primary">Download Printable</button>
        </form>
	<div class="format">
    	<p class="pdfPrintable"> PDF Printable</p>
        <p><b>SIZE:</b> U.S. Letter size 8.5"x11"</p>
        <p><b>BINDER FORMAT:</b> There's margin on the left to allow use with a binder folder.</p>
    </div> 
    </div>

    <footer>    
        <div class="sm">
        	<a href="http://www.facebook.com/luckylifetools/"><img src="images/social/social_facebook.svg"></a> 
            <a href="http://www.instagram.com/luckylifetools/"><img src="images/social/social_instagram.svg"></a> 
            <a href="http://www.twitter.com/luckylifetools/"><img src="images/social/social_twitter.svg"></a>
        </div>
    Copyright  © <strong>LuckyLifeTools.com</strong> - All rights reserved. 
    <span class="terms"><a href="https://www.yoledo.com/pages/terms" target="_blank">Terms</a> | <a href="https://www.yoledo.com/pages/privacy" target="_blank">Privacy</a></span>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="js/functions.js"></script>
    
</body>
</html>
