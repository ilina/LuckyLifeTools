<?php

include_once 'snippets/form-check-login.php';
include_once 'snippets/connect.php';
require_once 'lib/swift_required.php';
include_once 'snippets/login-modal.php';
include_once 'snippets/signup-modal.php';

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
        echo "mail being sent";
        // setup up the email account
/*        $transport = Swift_SmtpTransport::newInstance('aspen.nocdirect.com', 465, 'ssl')
          ->setUsername('hello@luckylifetools.com')
          ->setPassword('BoldSky');
*/
        $smtp_host_ip = gethostbyname('smtp.gmail.com');
        $transport = Swift_SmtpTransport::newInstance("box314.bluehost.com", 26, 'ssl')
          ->setUsername('test@acnenomoretoday.com')
          ->setPassword('!');

        // setup the mailing class
        $mailer = Swift_Mailer::newInstance($transport);
        $body = "Hi,\n
          You're almost there to access your free tools from LuckyLifeTools! \n
          All you have to do is click the link below to verify your account and 
          gain access to all of your FREE tools! \n
          http://localhost/LuckyLifeTools/public_html/verify.php?a=$refid
          \n 
          Have a LUCKY day!\n
          Ilina
          ";
        // Create the message
        $message = Swift_Message::newInstance()
          ->setSubject('LuckyLifeTools - Verification')
          ->setFrom(array('hello@luckylifetools.com' => 'Ilina'))
          //->setTo(array($email))
          ->setTo('iamjoshchang@gmail.com')
          ->setBody($body);

        // send the mail
        $mailer->send($message);
        
        // TODO add email to mailchimp list
        
        // set temp session  
        $_SESSION['user'] = 'temp';
        $date = new DateTime();
        $_SESSION['temp-time'] = date('Y-m-d H:i:s', strtotime($date->format('Y-m-d H:i:s')));

        $ch = curl_init();
        //curl_setopt($ch, CURLOPT_URL,"https://us13.api.mailchimp.com/3.0/lists/<list-id>/members/$md5");
        curl_setopt($ch, CURLOPT_URL,"https://us4.api.mailchimp.com/3.0/lists/bbc5c7a16a/members/$md5");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_USERPWD, "a:-us4");  
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
        print_r($info['request_header']);
        // Close request to clear up some resources
        var_dump($resp);
        curl_close($ch);

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
  <link type="text/css" rel="stylesheet" href="css/modal.css" />
</head>

<body class="internal">

  <header class="menu fixate">
    <nav class="session">
      <a href="login.php" class="login login-modal">Login</a>
      <a href="signup.php" class="signup signup-modal">Sign Up FREE</a>
    </nav>
    <div class="logo">
            <a href="index.php"></a>
    </div>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script src="js/modal.js"></script>
        
</body>
</html>