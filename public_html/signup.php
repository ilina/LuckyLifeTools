<?php

include_once 'snippets/form-check-login.php';
include_once 'snippets/connect.php';
require_once 'lib/swift_required.php';

// checks to see if the user clicked the logged in button
// and redirected back to the same page
$location = 'index.php';
if (isset($_POST['location'])) {
  $arr = explode("?", $_POST['location']);
  $location = $arr[0];
}

$topScroll = "";
if (isset($_POST['topScroll'])) {
  $topScroll = $_POST['topScroll'];
}

$msg = '';
if (isset($_POST['btn-signup']) != "") { 
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $pass2 = $_POST['password2'];

  if (strcmp($pass, $pass2) === 0) {
    $email = strip_tags(trim($email));
    $pass = strip_tags(trim($pass));
    $pass2 = strip_tags(trim($pass2));
    $email = strtolower($email);

    $md5 = md5($email);

    $password = hash('sha256', $pass);

    $results = $db->query("SELECT email FROM users WHERE email='$email'");
    $row = $results->fetchArray();

    // Creates a db entry for the user if it doesn't exist
    if (!$row) {
      // get over server sending problem
      $refid = uniqid("", true);
      $results = $db->query("INSERT INTO users(email,password,refid,verified) VALUES('$email', '$password', '$refid', 0)");
      // if succeed in signing up
      if ($results) {
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
        $body = "Hello, and welcome to LuckyLifeTools!\n  
          Please click the link below to verify your account and 
          gain access to the printables. \n
          http://luckylifetools.com/verify.php?a=$refid
          \n    
		  We love feedback! Feel free respond to this email, and let us know what you think about the tools. \n
		  Best, \n
          Ilina, LuckyLifeTools founder
          ";
        // Create the message
        $message = Swift_Message::newInstance()
          ->setSubject('LuckyLifeTools - Verification')
          ->setFrom(array('hello@luckylifetools.com' => 'Ilina'))
          ->setTo(array($email))
          //->setTo('iamjoshchang@gmail.com')
          ->setBody($body);

        // send the mail
        $mailer->send($message);
        
        // TODO add email to mailchimp list
        
        $ch = curl_init();
        //curl_setopt($ch, CURLOPT_URL,"https://us13.api.mailchimp.com/3.0/lists/<list-id>/members/$md5");
        curl_setopt($ch, CURLOPT_URL,"https://us13.api.mailchimp.com/3.0/lists/f36012a7a1/members/$md5");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_USERPWD, "a:07bd4839c4d2436fc35afc4e28946864-us13");  
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array('email_address' => $email, 'status_if_new' => 'subscribed')));

        $resp = curl_exec($ch);
        if(curl_error($ch))
        {
          echo 'error:' . curl_error($ch);
        }
        $info = curl_getinfo($ch);
        //print_r($info['request_header']);
        // Close request to clear up some resources
        //var_dump($resp);
        curl_close($ch);

        // set temp session  
        $_SESSION['user'] = 'temp';
        $date = new DateTime();
        $_SESSION['temp-time'] = date('Y-m-d H:i:s', strtotime($date->format('Y-m-d H:i:s')));


        $location = 'index.php';
        if (isset($_POST['location'])) {
          $location = $_POST['location'];
        }
        if ($topScroll === "") {
          header("Location: $location"); 
        } else {
          header("Location: $location?scroll=$topScroll"); 
        }
      } else {
        $msg = 'Error in creating account';
      }
    } else {
      $msg = 'Email is already in use.';
    }
  } else {
    $msg = "Passwords don't match";
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
    <h1>Sign Up
      <p class="subheading">Sign up to  access to the Life Tools.</p>
    </h1>

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
            <div class="two columns">Email:</div> 
            <div class="six columns form-input">
              <input type="email" name="email" placeholder="Your Email" required />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="two columns">Password:</div>
          <div class="six columns form-input">
            <input type="password" name="password" placeholder="Your Password" required />
          </div>
        </div>

        <div class="row">
          <div class="two columns">Password (Confirm):</div>
          <div class="six columns form-input">
            <input type="password" name="password2" placeholder="Your Password" required />
          </div>
        </div>
        
        <hr />
        <input type="hidden" name="location" value=<?php echo $location ?> />
        <input type="hidden" name="topScroll" value=<?php echo $topScroll ?> />
        <button type="submit" class="btn btn-block signup button-primary" name="btn-signup">Sign Up</button>
      </div>
    </form> 
	<p>Have you created an account before? <a href="login.php">Login Here...</a>
    </p>
	<hr />
    <a href="forgot.php">Forgot your password?</a> 
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