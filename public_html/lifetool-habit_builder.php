<?php
  include_once 'snippets/checked-login.php';
  include_once 'snippets/login-modal.php';
  include_once 'snippets/signup-modal.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>LUCKY life tools: Habit Builder &amp; Tracker printable</title>
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
      <a href="index.php" class="logo">
          <img src="images/lucky_logo.png">
          <b>life tools</b></div>
      </a>
    </header> 
    
    	<div class="breadcrumb">
        	<a href="index.php#printables">Back to all Life Tools</a> 
       </div>  
        <div class="container printable" id="LifePlanner">
          <object type="image/svg+xml" data="images/icon-self.svg"></object>
          <h1>Habit Builder
            <p class="subheading">Challenge yourself to build a new positive habit, or replace a bad one.</p>
          </h1>
          <div class="row tool_pages"><img src="images/yoledo-timecapsule.jpg" width="449" height="310" alt="Yoledo Time Capsule printable"></div>
        <p>This printable is a worksheet that gives you the structure and the guidance to go through this process. It's totally FREE, and you can download after a quick sign up.</p>
      <?php
        if (!$logged_in) {
      ?>
      <form class="login_or_signup" action="signup.php">
        <a href="login.php" class="login-modal">Login</a> or
        <button type="submit" class="button-primary signup signup-modal">Sign Up<b><br>
        to download</b>
        </button>
      </form>
      <?php
        } else {
      ?>
  		<form method="get" action="pdf/lucky_printable-habit_builder.pdf">
			<button type="submit" class="button-primary">Download Printable</button>
        </form>
      <?php
        }
      ?>
	<div class="format">
    	<p class="pdfPrintable"> PDF Printable</p>
        <p><b>SIZE:</b> U.S. Letter size 8.5"x11"</p>
        <p><b>SINGLE FORMAT:</b> No extra margin.</p>
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
    <script src="js/modal.js"></script>
    
</body>
</html>
