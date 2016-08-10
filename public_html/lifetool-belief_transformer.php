<?php
  include_once 'snippets/checked-login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>LUCKY life tools: Belief Transformerprintable</title>
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
        <?php 
          if ($logged_in) {
        ?>
          <a href="logout.php" class="login logged_in">Log Out</a>
        <?php
          } else {
        ?>
          <a href="login.php" class="login">Login</a>
          <a href="signup.php" class="signup">Sign Up FREE</a>
        <?php
          }
        ?>
      </nav>
      <a href="index.php" class="logo">
          <img src="images/lucky_logo.png">
          <b>life tools</b></div>
      </a>
    </header> 
    
<div class="breadcrumb">
        	<a href="index.php#webtools">Back to all Life Tools</a> 
       </div>  
<div class="container" id="BeliefChanger">
  <object type="image/svg+xml" data="images/icon-beliefs.svg"></object>
        <h1>Belief Transformer
  <p class="subheading">Replacing harmful beliefs with healthy ones can be tricky, but this tool helps you make changes.</p></h1>
        <p>Have you ever wished  you could just brainwash yourelf? With life experience, we gain new understanding of the world, and we adopt new  values than the ones we'd passively accepted before. We re-evaluate our behaviors and figure how useful each is to us - and decide to change some. It might go well at first...  But then we flip-flop. In response to certain triggers and conditions we can slip back into harmful old patterns of thinking and acting. We may realize that choosing a new belief would improve our lives,  but on a gut level, the old belief  still feels much more real. </p>
      <h4>How come?</h4>
        <p>Here's the problem. The old beliefs took many years to integrate in our world view - often we've been indoctrinated since birth, as we were building our own models of how the world works. These beliefs had years and years to build neuroconnections in our brains, integrate with other beliefs, and with triggers from everyday life. Out environment (family, culture) may have further solidified the impression that they're true. Our biased worldview caused us to contsantly interpret proof of their veracity - and ignore any proof that the opposite might be true.</p>
      <p>On the other hand, our new beliefs haven't had the benefit of time, integration with other beliefs, and environmental support. Compared to the old ones, there hasn't been enough repetition of experience, or enough evidence to their veracity. The solution? Deliberately build up the new ones from all angles, and tear down the old ones. And control your environment. With consistent attention to this process over time, you'll transform your intuitive responses to reflect your new perception.</p>
      <h4>What's the process?</h4>
<p>      Here are the steps to changing a belief:.</p>
        <ol>
          <li>Start by identifying the subconscious belief that sabotages your behavior.</li>
          <li>Then, identify the alternative (opposite) belief that is healthier / more beneficial to you.</li>
          <li>Identify the roots of each of these beliefs - in other words, the proof and references.</li>
          <li>Discredit the sources of proof  for the unhealthy belief.</li>
          <li>Create response plan to unhealthy belief triggers.</li>
          <li>Come up with new sources of proof for new beliefs.</li>
          <li>Find new references.</li>
        </ol>
        <p>The Yoledo printable is a worksheet that gives you the structure and the guidance to go through this process. It's totally FREE, so feel free to download and share.</p>
	<button class="button-primary">Download Printable</button>
	<div class="format">
    	<p class="pdfPrintable"> PDF Printable</p>
        <p><b>SIZE:</b> U.S. Letter size 8.5"x11"</p>
        <p><b>BINDER FORMAT:</b> There's margin on the left to allow use with a binder folder.</p>
    </div> 
    </div>
	<footer>Copyright  © <span id="year"></span> yoledo.com - All rights reserved. <span class="terms"><a href="https://www.yoledo.com/pages/terms" target="_blank">Terms</a> | <a href="https://www.yoledo.com/pages/privacy" target="_blank">Privacy</a></span>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="js/functions.js"></script>
    
</body>
</html>
