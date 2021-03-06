<?php
  include_once 'snippets/checked-login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>LUCKY life tools: Schedule &amp; To-do's printable</title>
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
          <a href="change-password.php" class="change-password">Settings</a>
          <a href="logout.php" class="login logged_in logout-button">Log Out</a>
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
        	<a href="index.php#printables">Back to all Life Tools</a> 
       </div>  
<div class="container printable" id="LifePlanner">
  <object type="image/svg+xml" data="images/icon-time_capsule.svg"></object>
  <h1>Schedule &amp; To-Dos
  <p class="subheading">Plan your goals, tasks and events in Daily, Weekly, Monthly, and Yearly formats.</p></h1>
          <div class="row tool_pages"><img src="images/schedule.jpg" width="556" height="290" alt="Yoledo Schedule tools"></div>
        <p>This is a set of printables that you can use to schedule your time. Choose between various formats and layouts.</p> 
        <div class="tool_content">
            <div class="row categories"></div> 
          <h5>Daily Planner</h5> 
            <p> This page includes a section for the schedule, task list, a wellness tracker, gratitude list, and priority section.</p>
          <h5>Weekly Planner</h5> 
            <p> The weekly planner  helps you schedule your tasks and events.</p>
          <h5>Monthly Planner</h5>
            <p>Organize your schedule,   to-do's, and priorities, in one page. Two versions   included - one has the weeks start on Monday, and the other has the   weeks start on Sunday.</p>  
            <div class="right"></div>
          <h5>1-Year Timeline</h5> 
            <p>Keep yourself laser focused on your top priorities by spreading your goals throughout the year.</p> 
  </div>

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
  		<form method="get" action="pdf/LuckyLifeTool-printable-ScheduleMonthly.pdf">
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
    <?php
    include_once 'snippets/logout-form.php';
    include_once 'snippets/login-modal.php';
    include_once 'snippets/signup-modal.php';
    ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/modal.js"></script>
    
</body>
</html>
