<?php

include_once 'snippets/form-check-login.php';
include_once 'snippets/connect.php';
require_once 'lib/swift_required.php';
// checks to see if the user clicked the logged in button
// and redirected back to the same page
$msg = '';
if (isset($_POST['btn-signup']) != "") { 
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $pass2 = $_POST['password2'];
  echo $pass;
  echo $pass2;

  if (strcmp($pass, $pass2) === 0) {
    $email = strip_tags(trim($email));
    $pass = strip_tags(trim($pass));
    $pass2 = strip_tags(trim($pass2));

    $password = hash('sha256', $pass);

    $results = $db->query("SELECT email FROM users WHERE email='$email'");
    $row = $results->fetchArray();

    // Creates a db entry for the user if it doesn't exist
    if (!$row) {
      $refid = uniqid("", true);
      $results = $db->query("INSERT INTO users(email,password,refid,verified) VALUES('$email', '$password', '$refid', 0)");
      // if succeed in signing up
      if ($results) {
        echo "mail being sent";
        // setup up the email account
        $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
          ->setUsername('iamjoshchang@gmail.com')
          ->setPassword('');

        // setup the mailing class
        $mailer = Swift_Mailer::newInstance($transport);
        $body = "
          http://localhost/LuckyLifeTools/public_html/verify.php?a=$refid
          ";
        // Create the message
        $message = Swift_Message::newInstance()
          ->setSubject('Your subject')
          ->setFrom(array('john@doe.com' => 'John Doe'))
          ->setTo(array('iamjoshchang@gmail.com' => 'Josh Chang'))
          ->setBody($body);

        // send the mail
        $mailer->send($message);
        
        // TODO add email to mailchimp list
        
        // set temp session  
        $_SESSION['user'] = 'temp';
        $date = new DateTime();
        $_SESSION['temp-time'] = date('Y-m-d H:i:s', strtotime($date->format('Y-m-d H:i:s')));
        header("Location: index.php");
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
</head>

<body class="internal">

  <header class="menu fixate">
    <nav class="session">
      <a href="login.php" class="login">Login</a>
      <a href="signup.php" class="signup">Sign Up FREE</a>
    </nav>
    <a href="index.php" class="logo">
      <img src="images/lucky_logo.png">
      <b>life tools</b></div>
    </a>
  </header> 

  <div class="container printable" id="LifePlanner">
    <object type="image/svg+xml" data="images/icon-schedule.svg"></object>
    <h1>Sign Up
      <p class="subheading">Sign Up to get access to your Life Tools.</p>
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
            <div class="one columns">Email:</div> 
            <div class="four columns form-input">
              <input type="email" name="email" placeholder="Your Email" required />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="one columns">Password:</div>
          <div class="four columns form-input">
            <input type="password" name="password" placeholder="Your Password" required />
          </div>
        </div>

        <div class="row">
          <div class="one columns">Password (Confirm):</div>
          <div class="four columns form-input">
            <input type="password" name="password2" placeholder="Your Password" required />
          </div>
        </div>
        
        <hr />
        <button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
        <hr />
      </div>
    </form>

    <a href="/login.php">Login Here...</a>

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
        
</body>
</html>