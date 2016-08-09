<?php
 
include_once 'checked-login.php';
include_once 'connect.php';

$success = true;

// checks to see if the user clicked the logged in button
// and redirected back to the same page
if (isset($_POST['btn-login']) != "") {
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$email = strip_tags(trim($email));
 	$pass = strip_tags(trim($pass));

 	$password = hash('sha256', $pass);
 	$results = $db->query("SELECT * FROM users WHERE email=" . $email);
 	$row = $results->fetchArray();

 	// user logged in
 	if ($row && $password == $row['password']) {
 		$_SESSION['user'] = $row['user_id'];
 		header("Location: index.php");
 	} else {
 		$success = false;
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
		<h1>Login
    	<p class="subheading">Sign in to get access to your Life Tools.</p>
    </h1>

    <?php
			// displays the error message in the event of login failure
			if (!$success) {
		?>
			<!-- some customized red error css here -->
			<div class="alert">
				Invalid email and/or password!
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
						<input type="password" name="pass" placeholder="Your Password" required />
					</div>
				</div>
				
				<hr />
				<button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
				<hr />
			</div>
		</form>

		<a href="signup.php">Sign Up Here...</a>

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