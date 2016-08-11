<?php

ob_start();
session_start();

var_dump($_SESSION);

// returns a variable to check if the user is valid
$logged_in = false;
if (isset($_SESSION['user'])) {
  // check to see if user is temp signup account.
  if ($_SESSION['user'] == 'temp' && isset($_SESSION['temp-time'])) {
    $date = new DateTime();
    $date->sub(new DateInterval('PT1H'));

    // verify if the temp account has expired
    if ($date < $_SESSION['temp-time']) {
      session_destroy();
    } else {
      $logged_in = true;
    }
  } else {
    $logged_in = true;
  }
}
echo $logged_in;