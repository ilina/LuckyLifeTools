<?php
ob_start();
session_start();

include_once 'connect.php';

/*
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername('')
  ->setPassword('')
  ;


$mailer = Swift_Mailer::newInstance($transport);

// Create the message
$message = Swift_Message::newInstance()

  // Give the message a subject
  ->setSubject('Your subject')

  // Set the From address with an associative array
  ->setFrom(array('john@doe.com' => 'John Doe'))

  // Set the To addresses with an associative array
  ->setTo(array('iamjoshchang@gmail.com' => 'Josh Chang'))

  // Give it a body
  ->setBody('Here is the message itself');

$result = $mailer->send($message);*/

?>