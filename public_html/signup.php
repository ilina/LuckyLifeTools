<?php

include_once 'checked-login.php';
include_once 'connect.php';
require_once 'lib/swift_required.php';
// checks to see if the user clicked the logged in button
// and redirected back to the same page
$msg = '';
if (isset($_POST['btn-signup']) != "") { 
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $email = strip_tags(trim($email));
  $pass = strip_tags(trim($pass));

  $password = hash('sha256', $pass);

  $results = $db->query("SELECT email FROM users WHERE email='$email'");
  $row = $results->fetchArray();

  // Creates a db entry for the user if it doesn't exist
  if (!$row) {
    $refid = uniqid("", true);
    $results = $db->query("INSERT INTO users(email,password,refid,verified) VALUES('$email', '$password', '$refid', 0)");
    // if succeed in signing up
    if ($results) {
      // setup up the email account
      $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
        ->setUsername('')
        ->setPassword('');

      // setup the mailing class
      $mailer = Swift_Mailer::newInstance($transport);
      $body = "
        http://localhost/LuckyLifeTools/public_html/verify.php?a=$refid
      ";
      echo $body;
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
}

?>