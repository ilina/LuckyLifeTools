<?php
  include_once 'snippets/checked-login.php';
  include_once 'snippets/login-modal.php';
  include_once 'snippets/signup-modal.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>LUCKY life tools: Time Capsule printable</title>
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
          <object type="image/svg+xml" data="images/icon-time_capsule.svg"></object>
          <h1>Time Capsule
            <p class="subheading">Once a year, record the highlights from your current life.</p></h1>
          <div class="row tool_pages"><img src="images/yoledo-timecapsule.jpg" width="449" height="310" alt="Yoledo Time Capsule printable"></div>
        <p>This printable is a single-sheet, undated Time Capsule tool. It features 43 questions to help you reflect on the passing year, the current moment, and the coming year. 
        Use it again  yearly to record and <span class="subheading"> track how you change over the years</span>.</p>
<p> It's totally FREE, so feel free to download and share.</p>
  		<form method="get" action="pdf/Yoled-Time_capsule.pdf">
			<button type="submit" class="button-primary">Open  Printable</button>
        </form>
	<div class="format">
    	<p class="pdfPrintable"> PDF Printable</p>
        <p><b>SIZE:</b> U.S. Letter size 8.5"x11"</p>
        <p><b>SINGLE FORMAT:</b> No extra margin.</p>
    </div> 
    </div>
	<footer>Copyright  © <span id="year"></span> yoledo.com - All rights reserved. <span class="terms"><a href="https://www.yoledo.com/pages/terms" target="_blank">Terms</a> | <a href="https://www.yoledo.com/pages/privacy" target="_blank">Privacy</a></span>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="js/functions.js"></script>
    
</body>
</html>
