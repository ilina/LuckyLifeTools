<?php
  include_once 'snippets/checked-login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>LUCKY life tools: Goal Setter printable</title>
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
          <a href="change-password.php" class="change-password">Change Password</a>
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
	  <object type="image/svg+xml" data="images/icon-goal_planner.svg"></object>
  <h1>Goal Setter
          <p class="subheading">Brainstorm, set, and organize your goals, and create a plan of action.</p>
  </h1>
          <div class="row tool_pages"><img src="images/pages-goal_planner.jpg" width="405" height="224" alt="Yoledo Goal Planner"></div> 
        <p>The Goal Planner Kit is a collection of tools that allows you to   outline, prioritize, and detail your current goals. It's designed to   help you organize your goals and stay focused. </p> 
      <div class="tool_content">
          <h5>Worksheet</h5> 
            <p>Jot down all your goals, then select the ones to pursue first, and define deadlines</p> 
          <h5>3 Goal detail pages (3 variations - personal, social, professional)</h5>
			<p>For the goals that require most of your resources and attention, this tool provides an in-depth planning system. You can use it to outline the goal details, deadline, otivation, resources you have and should utilize; potentail obstacles and weaknesses, ideas on how to overcome them, an action plan, and a 1-year timeline.</p>
   		  <h5>Master Plan</h5> 
            <p>Gives you a bird-view of your top 10 goals, while allowing you to prioritize them, and detail the top 3 goals. </p> 
  </div>

        <p>The Yoledo printable is a worksheet that gives you the structure and the guidance to go through this process. It's totally FREE, so feel free to download and share.</p>
  		<form method="get" action="pdf/Yoled-Goal_setter.pdf">
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
    <?php
      include_once 'snippets/login-modal.php';
      include_once 'snippets/signup-modal.php';
    ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="js/functions.js"></script>
  <script src="js/modal.js"></script>
    
</body>
</html>
