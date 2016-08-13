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
	  ->setFrom(array('john@doe.com' => 'John Doe')
)	  ->setTo(array('iamjoshchang@gmail.com' => 'Josh Chang'))
	  ->setBody($body);

	// send the mail
	$mailer->send($message);
*/
/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://us4.api.mailchimp.com/3.0/lists/bbc5c7a16a/members/20dbbf20d91106a9377bb671ba83f381");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_USERPWD, "a:<api>");  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array('a' => "a", 'b' => 'b')));

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
?>
*/

echo 'http://'. $_SERVER['SERVER_NAME'] . '\n';

$location = $_SERVER['REQUEST_URI'];
//header("Location: $location");