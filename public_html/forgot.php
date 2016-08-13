<?php

include_once 'snippets/form-check-login.php';
include_once 'snippets/connect.php';
require_once 'lib/swift_required.php';

$msg = '';
if (isset($_POST['btn-forgot']) != "") { 
	$email = $_POST['email'];
	$results = $db->query("SELECT * FROM users WHERE email='$email'");
  $row = $results->fetchArray();

  // Creates a db entry for the user if it doesn't exist
  if ($row) {
  	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $pass = substr( str_shuffle( $chars ), 0, 8 );
    $password = hash('sha256', $pass);
  	$update_result = $db->query("UPDATE users SET password = '$password' WHERE email='$email'");	
		// verify if update was succsesful
		if (!$update_result) {
			$msg = 'Oops, something went wrong... Please try and reset your email again.';
		} else {
			$msg = 'Your new password has been sent to your email!';
			/*
			// For WAMP
			$transport = Swift_SmtpTransport::newInstance('aspen.nocdirect.com', 465, 'ssl')
        ->setUsername('hello@luckylifetools.com')
        ->setPassword('');
		  */
      // For prod
      $transport = Swift_SmtpTransport::newInstance("localhost", 25);

      // setup the mailing class
      $mailer = Swift_Mailer::newInstance($transport);
      $body = "Hello,\n
        We received your password reset request from LuckyLifeTools. \n
        Your new password is $pass, \n
        \n 
		http://www.LuckyLifeTools.com
        ";
      // Create the message
      $message = Swift_Message::newInstance()
        ->setSubject('LuckyLifeTools - Password Reset')
        ->setFrom(array('hello@luckylifetools.com' => 'Ilina'))
        ->setTo(array($email))
        ->setBody($body);

      // send the mail
      $mailer->send($message);
		}
	} else {
		$msg = 'This email doesn\'t exist. Please try again!';
  }
}

?>


<!-- TODO add the form -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>LUCKY life tools: Calendars printable</title>
  <meta name="description" content="Apps and printables that help you on your life journey.">
  <meta name="author" content="Ilina Simeonova">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro|Varela+Round|Titillium+Web:900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/styles.css">
  <link type="text/css" rel="stylesheet" href="css/modal.css" />
</head>

<body class="internal userpages">

  <header class="menu fixate">
    <nav class="session">
      <a href="login.php" class="login login-modal">Login</a>
      <a href="signup.php" class="signup signup-modal">Sign Up FREE</a>
    </nav>
    <div class="logo">
            <a href="index.php"></a>
    </div>
  </header> 
	<div class="breadcrumb">
    	<a href="index.php#printables">Back to all Life Tools</a> 
    </div>    

  <div class="container" id="LifePlanner">
    <h1>Forgot  password?
      <p class="subheading">No worries. Enter your email and we'll help you reset it.</p>
    </h1>
	<hr />
    <?php
      // displays the error message in the event of signup failure
      if ($msg != "") {
    ?>
      <!-- some customized red error css here -->
      <div class="alert">
        <?php
          echo $msg;
        ?>
      </div>
    <?php 
      }
    ?>

    <form method="post" autocomplete="off">
      <div class="col-md-12">
        <div class="input-group">
          <div class="row">
            <div class="one column">Email:</div> 
            <div class="four columns form-input">
              <input type="email" name="email" placeholder="Your Email" required />
            </div>
            <div class="seven columns">
               <button type="submit" class="btn btn-block button-primary" name="btn-forgot">Reset Password</button>            
            </div>
          </div>
        </div> 
        <hr />
      </div>
    </form>

    <a href="login.php">Login Here...</a>

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
    include_once 'snippets/login-modal.php';
    include_once 'snippets/signup-modal.php';
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script src="js/modal.js"></script>
        
</body>
</html>