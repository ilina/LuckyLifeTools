<?php
  include_once 'snippets/checked-login.php';
?>

<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <title>LUCKY life tools</title>
  <meta name="description" content="Apps and printables that help you on your life journey.">
  <meta name="author" content="Ilina Simeonova">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro|Varela+Round|Titillium+Web:900' rel='stylesheet' type='text/css'> 
  <link rel="stylesheet" href="css/normalize.css"> 
  <link rel="stylesheet" href="css/skeleton.css">   
  <link rel="stylesheet" href="css/styles.css">  
  <link type="text/css" rel="stylesheet" href="css/lightgallery.css" />  
  <link type="text/css" rel="stylesheet" href="css/modal.css" />


</head>

<body>
  <div class="intro">
	  <header class="menu" id="headerfix"> 
      <div class="menu_background"></div>
      <div class="menu_background1">
        <nav class="session">
          <?php 
            if ($logged_in) {
          ?>
            <a href="logout.php" id="logout" class="login logged_in">Log Out</a>
          <?php
            } else {
          ?>
            <a href="/login.php" class="login login-modal">Login</a>
            <a href="#" class="signup signup-modal">Sign Up FREE</a>
          <?php
            }
          ?>
        </nav>
      <div class="logo">
      	 <a href="index.php"></a>
      </div>
    </header>
    <div class="intro_content"> 
    	<div class="star lt-16_80 twinkle88 duration1s">&#9679; </div>
        <div class="star lt-24_76 twinkle88 duration2s">&#9679; </div>
        <div class="star lt-26_73 twinkle88 duration1s">&#9679; </div>
        <div class="star lt-27_66 twinkle75 duration1s">&#9679; </div>
        <div class="star lt-28_80 twinkle27 duration2s">&#9679; </div>
        <div class="star lt-29_61 twinkle27 duration2s">&#9679; </div>
        <div class="star lt-30_66 twinkle48 duration3s">&#9679; </div>
        <div class="star lt-31_79 twinkle88 duration1s">&#9679; </div>
        <div class="star lt-32_70 twinkle48 duration2s smallstar">&#9679; </div>
        <div class="star lt-33_76 twinkle27 duration1s smallstar">&#9679; </div>
        <div class="star lt-34_71 twinkle48 duration1s">&#9679; </div>
        <div class="star lt-35_67 twinkle27 duration3s">&#9679; </div>
        <div class="star lt-36_73 twinkle48 duration1s">&#9679; </div>
        <div class="star lt-37_59 twinkle88 duration1s smallstar">&#9679; </div>
        <div class="star lt-38_65 twinkle27 duration2s">&#9679; </div>
        <div class="star lt-39_70 twinkle88 duration1s">&#9679; </div>
        <div class="star lt-40_65 twinkle75 duration2s">&#9679; </div>
        <div class="star lt-41_72 twinkle27 duration1s">&#9679; </div>
        <div class="star lt-42_67 twinkle48 duration3s">&#9679; </div>
        <div class="star lt-43_70 twinkle75 duration1s">&#9679; </div>
        <div class="star lt-44_75 twinkle27 duration3s">&#9679; </div>
        <div class="star lt-45_63 twinkle88 duration1s">&#9679; </div>
        <div class="star lt-46_68 twinkle27 duration2s">&#9679; </div>
        <div class="star lt-47_73 twinkle88 duration1s">&#9679; </div>
        <div class="star lt-48_67 twinkle48 duration3s">&#9679; </div>
        <div class="star lt-49_77 twinkle27 duration2s">&#9679; </div>
        <div class="star lt-50_68 twinkle88 duration3s">&#9679; </div>
        <div class="star lt-51_74 twinkle48 duration2s">&#9679; </div>
        <div class="star lt-52_54 twinkle75 duration2s smallstar">&#9679; </div>
        <div class="star lt-53_68 twinkle75 duration2s">&#9679; </div>
        <div class="star lt-54_71 twinkle27 duration1s">&#9679; </div>
        <div class="star lt-55_60 twinkle88 duration3s smallstar">&#9679; </div>
        <div class="star lt-55_75 twinkle88 duration2s">&#9679; </div>
        <div class="star lt-56_67 twinkle27 duration2s">&#9679; </div>
        <div class="star lt-57_71 twinkle48 duration1s">&#9679; </div>
        <div class="star lt-58_70 twinkle75 duration2s">&#9679; </div>
        <div class="star lt-59_59 twinkle27 duration1s smallstar">&#9679; </div>
        <div class="star lt-59_73 twinkle75 duration1s smallstar">&#9679; </div>
        <div class="star lt-60_62 twinkle48 duration2s smallstar">&#9679; </div> 
        <div class="star lt-62_69 twinkle27 duration3s smallstar">&#9679; </div> 
        <div class="star lt-64_64 twinkle88 duration2s">&#9679; </div>  
      <div class="star lt-66_66 twinkle48 duration1s smallstar">&#9679; </div>  
        <p class="intro_item">Make life magic</p> 
        <div class="intro_item browse">
        	<a href="#planner">Browse Tools</a>
        </div>
    </div>
  </div><!-- end intro -->
  <div id="planner">
  	<section id="xlipsum" class="container">
     		<div class="row">
              <div class="annual_review one-half column hide">
                  <object type="image/svg+xml" data="images/icon-annual_review_web.svg"></object>
                  <h3>Life  Planner</h3>
                  <p>A paper planner that guides you into creating a life of magic, power and freedom.</p> 
                <form>
                    <div class="row">
                        <!--<div class="seven columns"> 
                            <input class="u-full-width" placeholder="test@mailbox.com" id="exampleEmailInput" type="email">
                        </div>               
                        <div class="five columns"> 
                            <input class="button-primary" value="Sign up FREE" type="submit">
                        </div>-->
                        <div class="six columns">
                        	  <button class="button-primary sign_up_free">Sign up FREE</button>
                        </div>
                        <div class="six columns">
                     	  <a href="webapp-annual_review.php" class="learnmore">Learn More <span>»</span></a></div>
                    </div>
                </form>     
              </div>
              <div class="life_manager one-half column hide">
                  <object type="image/svg+xml" data="images/icon-life_manager.svg"></object>
                <h3>Lucky Diary</h3>
                  <p>A private web-based diary   that asks a new positive and inspiring question every day of the year.</p>
                  
                <form>
                    <div class="row">   
                            <a href="webapp-life_manager.php" class="learnmore">Visit website <span>»</span></a>
                    </div>
                </form>
              </div>
              <div class="row">
                  <div class="five columns">
                      <img src="images/life_planner1.jpg" alt="LUCKY Life Planner">
                  </div>
                  <div class="seven columns">                    
                    <header>
                      <h2>LUCKY Life Planner 2017 </h2>
                        <p>A new, intelligent planner that helps you use your time wisely,  achieve your big goals, and  live a full, bold, and inspired life. </p>
                    </header> 
                         <h5>Get Notified <span><b>★ ★ ★</b>of the launch<b>★ ★ ★</b></span></h5>
                         <!-- Begin MailChimp Signup Form -->
                      
                    <div id="mc_embed_signup" class="form_wrapper">
                          <form action="//gmail.us13.list-manage.com/subscribe/post?u=1dceffc356ef36f6802af4277&amp;id=292e52735d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="row">
                              
                              <div class="mc-field-group six columns">
                                  <label for="mce-EMAIL" class="align_form">Enter your email:</label>
                                  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                              </div>
<!--                                    <div id="mce-responses" class="clear">
                                      <div class="response" id="mce-error-response" style="display:none"></div>
                                      <div class="response" id="mce-success-response" style="display:none"></div>
                                  </div>  --> 
                              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1dceffc356ef36f6802af4277_292e52735d" tabindex="-1" value=""></div> 
                              <div class="five columns">
                              <div class="align_form"></div>
                                  <input type="submit" value="Keep me Posted" name="subscribe" id="mc-embedded-subscribe" class="button-primary"> 
                              </div> 
                              </div>
                              <div>Your email  is safe with us - we'll keep it private and only use it to notify you of the launch of the life planner. </div>
                          </form>
                      </div>
                      <!--End mc_embed_signup-->  
                  </div>
              </div>
          </div>  
      </section>
  </div>
  <div id="printables">
  	<section class="container">
      	<header>
          	<h2>Printable Life Tools </h2>
            <?php
              if (!$logged_in) {
            ?>
          	  <p>These  free PDF printable  tools will help you plan and examine your life. <a href="#" class="signup-modal">Sign up</a> (quick and free) to download.</p>
            <?php
              }
            ?>
            <?php
              if ($logged_in) {
            ?>
              <form method="get" action="pdf/LuckyLifeTools-printables.pdf" class="download_all">
                    <button type="submit" class="button-primary">Download all Tools</button>
              </form>
            <?php
              }
            ?>
          </header>
        <div class="row">
              <ul class="four columns">
                  <h4>Vision:</h4> 
                  <li> 
                    <a href="lifetool-life_plan.php">
                       <object type="image/svg+xml" data="images/icon-swot.svg"></object>
                       <h3>Life  Plan</h3>
                    </a>
                  </li>
                  <li>
                    <a href="lifetool-goal_setter.php">
                      <object type="image/svg+xml" data="images/icon-goal_planner.svg"></object>  
                      <h3>Goal Setter</h3>
                    </a>
                  </li>
                  <li>
                    <a href="lifetool-annual_review.php">
                      <object type="image/svg+xml" data="images/icon-annual_review.svg"></object> 
                      <h3>Annual Review</h3>
                    </a>
                  </li>
              </ul>
          <ul class="four columns">
                  <h4>Action Plan:</h4> 
                  <li>
                    <a href="lifetool-schedule.php">
                       <object type="image/svg+xml" data="images/icon-time_capsule.svg"></object>  
                       <h3>Schedule &amp; To-do</h3>
                    </a>
                  </li>
                  <li>
                    <a href="lifetool-calendars.php">
                      <object type="image/svg+xml" data="images/icon-schedule.svg"></object>  
                      <h3>Calendars</h3>
                    </a>
                  </li>
                  <li>
                 		<a href="lifetool-habit_builder.php">
                         <object type="image/svg+xml" data="images/icon-self.svg"></object> 
                         <h3>Habit Builder</h3>
                  	</a>
                  </li>
              </ul> 
              <ul class="four columns">
              <h4>Mind tools:</h4> 
                  <li>
                    <a href="lifetool-life_balancer.php">
                       <object type="image/svg+xml" data="images/icon-life_balance.svg">
                       </object>
                       <h3>Life Balance</h3>
                    </a>
                  </li>
                  <li>
                    <a href="lifetool-decision_maker.php">
                       <object type="image/svg+xml" data="images/icon-decision_maker.svg"></object>  
                       <h3>Decision Maker</h3>
                    </a>
                  </li>
                  <li>
               	    <a href="lifetool-happiness_booster.php">
                      <object type="image/svg+xml" data="images/icon-happiness.svg"></object>  
                      <h3>Happiness Booster</h3>
                    </a>
                  </li> 
          </ul>
          </div>
      </section>
  </div>
  <div id="mobile">
  	<section class="container">
          <h2>Mobile Apps</h2>
          <div class="row">
              <div class="four columns">
                <h3>Time Capsule</h3> 
            </div>
            <div class="four columns">
              <h3>Life Balance</h3> 
            </div>
            <div class="four columns">
              <h3>Habit Tracker</h3> 
            </div>
          </div>
      </section>
  </div>
  <div id="art">
  	<section class="container">
      	<header>
          	<h2>Printable Quotes</h2>
            <?php
              if (!$logged_in) {
            ?>
            	<p>Print out these inspiring quotes and put them in a visible place to be inspired every day. <a href="#" class="signup-modal">Sign up</a> (quick and free) to download.</p> 
            <?php
              }
            ?>
          </header>
            <?php
              if ($logged_in) {
            ?>
              <form method="get" action="quotes/LuckyLifeTools-quotes.pdf" class="download_all">
                    <button type="submit" class="button-primary">Download all Quotes</button>
              </form>
            <?php
              }
            ?>
          <div class="above950">
          	<div class="row">
              <ul> 
                  <li class="columns two">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-attempt_the_aburd.jpg" download>
                    <?php
                      }
                    ?>
             	    		<img src="images/quote-attempt_the_aburd.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns two">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-be_kind.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-be_kind.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns two">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                      <a href="quotes/quote-change_is_opportunity.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-change_is_opportunity.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns two">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-find_yourself.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-find_yourself.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns two">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-this_moment.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-this_moment.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns two">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-umph.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-umph.png" alt="quote">
                  	</a>
                  </li>
              </ul> 
          </div>
          	<div class="row">
              <ul> 
                  <li class="columns two">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	<a href="quotes/quote-give_up_to_have.jpg" download>
                    <?php
                      }
                    ?>
             	    		<img src="images/quote-give_up_to_have.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns two">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-happiness.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-happiness.png" alt="quote">
                      </a>
                  </li>
                  <li class="columns two">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	<a href="quotes/quote-life_comfort_zone.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-life_comfort_zone.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns two">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	<a href="quotes/quote-be_a_friend.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-be_a_friend.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns two">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-love_light.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-love_light.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns two">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	<a href="quotes/quote-start_necessary.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-start_necessary.png" alt="quote">
                  	</a>
                  </li>
            </ul> 
          </div>
          </div>
          <div class="under950">
          	<div class="row">
              <ul> 
                  <li class="columns three">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-attempt_the_aburd.jpg" download>
                    <?php
                      }
                    ?>
                      	<img src="images/quote-attempt_the_aburd.png" alt="quote"> </a>
   
                  </li>
                  <li class="columns three">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-be_kind.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-be_kind.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns three">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-change_is_opportunity.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-change_is_opportunity.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns three">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-find_yourself.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-find_yourself.png" alt="quote">
                  	</a>
                  </li>
              </ul> 
          </div>
          <div class="row">
              <ul> 
                  <li class="columns three">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-this_moment.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-this_moment.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns three">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-umph.jpg">
                    <?php
                      }
                    ?>
                  		<img src="images/quote-umph.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns three">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-give_up_to_have.jpg" download>
                    <?php
                      }
                    ?>
             	    		<img src="images/quote-give_up_to_have.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns three">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-happiness.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-happiness.png" alt="quote">
                  	</a>
                  </li>
              </ul> 
          </div>
          <div class="row">
              <ul> 
                  <li class="columns three">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-life_comfort_zone.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-life_comfort_zone.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns three">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                      <a href="quotes/quote-love_light.jpg" download>
                    <?php
                      }
                    ?>
                      <img src="images/quote-love_light.png" alt="quote">
                    </a>
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-be_a_friend.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-be_a_friend.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns three">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-love_light.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-love_light.png" alt="quote">
                  	</a>
                  </li>
                  <li class="columns three">
                    <?php
                      if (!$logged_in) {
                    ?>
                      <a href="#" class="login-modal">
                    <?php
                      } else {
                    ?>
                  	  <a href="quotes/quote-start_necessary.jpg" download>
                    <?php
                      }
                    ?>
                  		<img src="images/quote-start_necessary.png" alt="quote">
                  	</a>
                  </li>
            </ul> 
          </div>
          </div>
      </section>
  </div> 
  <?php
    include_once 'snippets/login-modal.php';
    include_once 'snippets/signup-modal.php';
  ?>
    
  <footer> 
      <div class="sm">
      	<a href="http://www.facebook.com/luckylifetools/"><img src="images/social/social_facebook.svg"></a> 
          <a href="http://www.instagram.com/luckylifetools/"><img src="images/social/social_instagram.svg"></a> 
          <a href="http://www.twitter.com/luckylifetools/"><img src="images/social/social_twitter.svg"></a>
      </div>
  	Copyright  © <strong>LuckyLifeTools.com</strong> - All rights reserved. 
  </footer>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script src="js/functions.js"></script>      
  <script src="js/modal.js"></script>
  
  <a href="#0" class="cd-top">Top</a>
  
</body>
</html>
