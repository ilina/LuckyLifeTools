<?php
  include_once 'snippets/checked-login.php';
  include_once 'snippets/login-modal.php';
  include_once 'snippets/signup-modal.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>LUCKY life tools: Life Planner printable</title>
  <meta name="description" content="Apps and printables that help you on your life journey.">
  <meta name="author" content="Ilina Simeonova">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro|Varela+Round|Titillium+Web:900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/styles.css">
  <link type="text/css" rel="stylesheet" href="css/modal.css" />
</head>

<body class="internal">

  	<header class="menu fixate">
      <nav class="session">
        <?php 
          if ($logged_in) {
        ?>
          <a href="logout.php" class="login logged_in">Log Out</a>
        <?php
          } else {
        ?>
          <a href="login.php" class="login-modal login">Login</a>
          <a href="signup.php" class="signup signup-modal">Sign Up FREE</a>
        <?php
          }
        ?>
      </nav>
      <div class="logo">
      	 <a href="index.php"></a>
      </div>
    </header>
    
    	<div class="breadcrumb">
        	<a href="index.php#webtools">Back to all Life Tools</a> 
       </div>  
	<div class="container printable" id="LifePlanner">
	  <object type="image/svg+xml" data="images/icon-life_planner.svg"></object>
  <h1>Life Planner
          <p class="subheading">Define your long-term vision for each area of your life & set your goals.</p>
  </h1>
          <div class="row tool_pages"><img src="images/pages-life_planner.jpg" width="512" height="269" alt="Yoledo Life Planner printable"></div>     
      <p>The Life Planner Kit is an in-depth check-in with your life. It's   designed to help you clarify where you   are  in life now, and focus on   where you're headed.</p> 
        <div class="tool_content">
			<h5>Life Areas</h5> 
            <p>You're then guided to examine each of the 12 areas of your life, and reflect on where you are now, and where you want to be.</p>
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
          <h5>Priorities Planner</h5> 
            <p> gives you  an opportunity to   outline your Life Areas in order of priority, and have an at-a-glance   view of your top goals and next steps.</p>
          <h5>1-Year Timeline</h5> 
            <p>keep yourself laser focused on your top priorities by spreading your goals throughout the year.</p>
             
          <h5>20-Year Plan</h5> 
            <p> page to define your major life   goals, and jot   down your ideas on how to spread them over the next 20   years (and   beyond).</p>
      </div>
      <p>The Yoledo printable is a worksheet that gives you the structure and the guidance to go through this process. It's totally FREE, so feel free to download and share.</p>
  		<form method="get" action="pdf/Yoled-Life_planner.pdf">
			<button type="submit" class="button-primary">Open  Printable</button>
        </form>
	<div class="format">
    	<p class="pdfPrintable"> PDF Printable</p>
        <p><b>SIZE:</b> U.S. Letter size 8.5"x11"</p>
        <p><b>BINDER FORMAT:</b> There's margin on the left to allow use with a binder folder.</p>
    </div> 
    </div>
	<footer>Copyright  © <span id="year"></span> yoledo.com - All rights reserved. <span class="terms"><a href="https://www.yoledo.com/pages/terms" target="_blank">Terms</a> | <a href="https://www.yoledo.com/pages/privacy" target="_blank">Privacy</a></span>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/modal.js"></script>
    
</body>
</html>
