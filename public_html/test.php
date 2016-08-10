<?php
/*
	require_once 'lib/swift_required.php';
	$refid = uniqid("", true);
	$transport = Swift_SmtpTransport::newInstance('box314.bluehost.com', 465, 'ssl')
	  ->setUsername('test@acnenomoretoday.com')
	  ->setPassword('');

	$mailer = Swift_Mailer::newInstance($transport);
	$body = "http://localhost/LuckyLifeTools/public_html/verify.php?a=$refid";

	echo $body;
	// Create the message
	$message = Swift_Message::newInstance()
	  ->setSubject('Your subject')
	  ->setFrom(array('john@doe.com' => 'John Doe'))
	  ->setTo(array('iamjoshchang@gmail.com' => 'Josh Chang'))
	  ->setBody($body);

	// send the mail
	$mailer->send($message);
*/
?>


<button id="a">button</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$("#a").click(function() {
			$.ajax({
					url: "https://<dc>.api.mailchimp.com/3.0/lists/bbc5c7a16a/members",
					type: "POST",
					dataType: "json",
					data: {user: 'a:<api key>'},
					success: function(result,status,xhr) {
						console.log("success");
						console.log(result);
					},
					error: function(xhr,status,error) {
						console.log("error");
						console.log(status);
						console.log(xhr);
						console.log(error);
					},
					
				})
		});
	});
</script>