<?php
include_once 'snippets/connect.php';
include_once 'snippets/checked-login.php';

if (!$logged_in) {
	// not suppose to be here
	header("Location: index.php");
	exit;
}

$msg = "";
// check to see if the user submited a form
if (isset($_POST['btn-change']) != "") {
	$old_pass = $_POST['old-password'];
	$pass = $_POST['password'];
	$pass2 = $_POST['password2'];
	$email = $_SESSION['user'];
	$email = strip_tags(trim($email));
	$pass = strip_tags(trim($pass));
	$pass2 = strip_tags(trim($pass2));
	$old_pass = strip_tags(trim($old_pass));

	// check if new passwords are the same
	if (strcmp($pass, $pass2) === 0) {

		$results = $db->query("SELECT * FROM users WHERE email='$email'");
	  $row = $results->fetchArray();

	  // check to make sure the user is a valid user
	  if ($row) {
	  	$old_password = hash('sha256', $old_pass);
	  	// check to make sure the user submitted the same old password
	  	if ($row['password'] == $old_password) {
	  		$new_password = hash('sha256', $pass);
	  		$update_result = $db->query("UPDATE users SET password = '$new_password' WHERE email='$email'");
	  		// check if update successful
			  if (!$update_result) {
					$msg = 'Oops something went wrong! Try and change your password again!';
				} else {
					$msg = 'Your password has been changed!';
				}
	  	} else {
	  		$msg = "Incorrect old password";
	  	}
	  } else {
	  	// should never be here
	  	$msg = "Invalid email";
	  }
  } else {
  	$msg = "Your new password doesn\'t match";
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
      <a href="logout.php" id="logout" class="login logged_in">Log Out</a>
		</nav>
    <div class="logo">
      <a href="index.php"></a>
    </div>
	</header> 

	<div class="container printable" id="LifePlanner">
	  <h1>Settings
    	<p class="subheading">Feel free to change your password below.</p>
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
						<div class="two columns">Old password:</div> 
						<div class="six columns form-input">
							<input type="password" name="old-password" placeholder="Your Current Password" required />
						</div>
					</div>
				</div>

				<div class="row">
					<div class="two columns">New Password:</div>
					<div class="six columns form-input">
						<input type="password" name="password" placeholder="Your New Password" required />
					</div>
				</div>
				<div class="row">
					<div class="two columns">New Password (confirm):</div>
					<div class="six columns form-input">
						<input type="password" name="password2" placeholder="Your New Password (Confirmed)" required />
					</div>
				</div>
				<hr />
				<button type="submit" class="btn btn-block btn-primary" name="btn-change">Change Password</button>
				<hr />
			</div>
		</form>
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