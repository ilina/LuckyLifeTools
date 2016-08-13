<?php
  include_once 'snippets/checked-login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>LUCKY life tools: Annual Review printable</title>
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
          <form class="login logged_in logout-form" action="logout.php" method="post">
            <input type="hidden" name="location" value=<?php echo $_SERVER['REQUEST_URI']; ?> />
          </form>
          <a href="change-password.php" class="change-password">Change Password</a>
          <a href="logout.php" class="login logged_in logout-button"">Log Out</a>
        <?php
          } else {
        ?>
          <a href="login.php" class="login login-modal">Login</a>
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
  <object type="image/svg+xml" data="images/icon-annual_review.svg"></object>
  <h1>Review
    <p class="subheading">Reflect on your progress over the past year, and set goals for the next.</p></h1>
          <div class="row tool_pages"><img src="images/pages-annual_review.jpg" width="494" height="261" alt="Yoledo Annual Review"></div>
        <p>The Annual Review is a year-end check-in with your life, designed to help you gain clarity and focus on   how far you've come, where you are now in life, and where you're headed. </p> 
        <div class="tool_content">
            <h5>Life Areas</h5> 
            <p> It  guides you to examine each of the 12 areas of   your life. It helps you reflect on what you&rsquo;ve achieved &amp; learned in the past   year, as well as set your goals for the next.</p>
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
          <h5>Prioritizer</h5> 
          	<p>The PRIORITIZER tool guides you to rate your level of satisfaction in   each Life Area, to gain clarity on how much attention each needs,   compared to the others.</p>  
            <div class="right"></div>
            <h5>Master Plan</h5> 
            <p> In the end you&rsquo;ll own a prioritized MASTER PLAN for the next year's major goals.</p>  
            <p>Use the Annual Review tool year after year, to track your progress and set your new goals! </p>
          </div>

        <p>This printable is a worksheet that gives you the structure and the guidance to go through this process. It's totally FREE, and you can download after a quick sign up.</p>
  		<?php
        if (!$logged_in) {
      ?>
      <form class="login_or_signup" action="signup.php">
        <a href="login.php">Login</a> or
  			<button type="submit" class="button-primary signup signup-modal">Sign Up<b><br>
  			to download</b>
  			</button>
      </form>
      <?php
        } else {
      ?>
  		  <form method="get" action="pdf/LuckyLifeTool-printable-Review.pdf">
          <button type="submit" class="button-primary">Download Printable</button>
        </form>
      <?php
        }
      ?>
	<div class="format">
    	<p class="pdfPrintable"> PDF Printable</p>
        <p><b>SIZE:</b> U.S. Letter size 8.5"x11"</p>
        <p><b>STAPLE FORMAT:</b> No extra margin on the left - pages can be stapled together.</p>
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
    </footer><?php
      include_once 'snippets/login-modal.php';
      include_once 'snippets/signup-modal.php';
    ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="js/functions.js"></script>
    
</body>
</html>
