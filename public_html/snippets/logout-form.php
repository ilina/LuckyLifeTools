<?php 
  include_once 'snippets/checked-login.php';
  if ($logged_in) {
?>
  <form class="login logged_in logout-form" action="logout.php" method="post">
    <input type="hidden" name="location" value=<?php echo $_SERVER['REQUEST_URI']; ?> />
    <input id="logout-top-scroll" type="hidden" name="topScroll" value="" />
  </form>
<?php
  }
?>