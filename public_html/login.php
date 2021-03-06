<?php

include_once 'snippets/form-check-login.php'; 
include_once 'snippets/connect.php';

// redirect if logged in

$msg = "";

$location = 'index.php';
if (isset($_POST['location'])) {
	$arr = explode("?", $_POST['location']);
	$location = $arr[0];
}
$topScroll = "";
if (isset($_POST['topScroll'])) {
	$topScroll = $_POST['topScroll'];
}

// checks to see if the user clicked the logged in button
// and redirected back to the same page
if (isset($_POST['btn-login']) != "") {
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$email = strip_tags(trim($email));
 	$pass = strip_tags(trim($pass));

 	$password = hash('sha256', $pass);
 	$results = $db->query("SELECT * FROM users WHERE email='$email'");
 	$row = $results->fetchArray();

 	// user logged in
 	if ($row && $password == $row['password']) {
 		// check if verified email
 		if (!$row['verified']) {
 			$msg = "Looks like we still haven't received your email verification. Please click the link in the email we sent you to verify your account.";
 		} else {
	 		$_SESSION['user'] = $row['email'];
	 		if ($topScroll === "") {
				header("Location: $location"); 
			} else {
				header("Location: $location?scroll=$topScroll"); 
			}
	 	}
 	} else {
 		$msg = "Oops, we don't recognize this info. Please check your email or password and try again.";
 	}
}

?>

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
	  <h1>Login
    	<p class="subheading">Sign in to  access to your Life Tools.</p>
    </h1>

    <?php
			// displays the error message in the event of login failure
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
				
				<hr />
				<input type="hidden" name="location" value=<?php echo $location ?> />
				<input type="hidden" name="topScroll" value=<?php echo $topScroll ?> />
				<button type="submit" class="btn btn-block button-primary" name="btn-login">Sign In</button>
				<p>Are you a first-time visitor? <a href="signup.php">Sign Up Here...</a>
                </p>
	  </div>
	  </form>

		
		<hr />
  <a href="forgot.php">Forgot your password?</a></div>

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