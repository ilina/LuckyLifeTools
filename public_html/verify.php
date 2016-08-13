<?php
include_once 'snippets/connect.php';

if (!isset($_GET["a"])) {
	header("Location: index.php");
}

$msg = 'Thanks for verifing your account! <a href="login.php">Login here</a> to access the life tools.';

$refid = $_GET["a"];
$select_result = $db->query("SELECT * FROM users WHERE refid='$refid'");
$row = $select_result->fetchArray();
// check if the user really signed up
if ($row) {
	$update_result = $db->query("UPDATE users SET verified = 1 WHERE refid='$refid'");	
	// verify if upodate was succsesful
	if (!$update_result) {
		$msg = 'Oops, something went wrong... Please try and visit the link from your email again.';
	}
} else {
	$msg = 'Oops, something went wrong... Please try and visit the link from your email again.';
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
    <div class="logo">
            <a href="index.php"></a>
    </div>
  </header> 

  <div class="container printable" id="LifePlanner">
    <h1>
    	Verification
    </h1>

    <div class="alert">
      <?php
        echo $msg;
      ?>
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
        
</body>
</html>