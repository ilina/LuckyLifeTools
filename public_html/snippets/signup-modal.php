<!-- Modal content -->
<div id="signupModal" class="modal">
	<div class="modal-content">
	  <div class="modal-header">
	    <span class="close close-signup">X</span>
	    <h2>Sign Up</h2>      
        <p class="subheading">Create a quick and FREE account to access the printables.</p>
	  </div>
	  <br />
	  <div class="modal-body">
    	<form method="post" autocomplete="off" action="signup.php">
	      <div class="col-md-12">
	        <div class="input-group">
	          <div class="row">
	            <div class="two columns">Email:</div> 
	            <div class="four columns form-input">
	              <input type="email" name="email" placeholder="Your Email" required />
	            </div>
	          </div>
	        </div>

	        <div class="row">
	          <div class="two columns">Password:</div>
	          <div class="four columns form-input">
	            <input type="password" name="password" placeholder="Your Password" required />
	          </div>
	        </div>

	        <div class="row">
	          <div class="two columns">Password (Confirm):</div>
	          <div class="four columns form-input">
	            <input type="password" name="password2" placeholder="Your Password" required />
	          </div>
	        </div>
	        <button type="submit" class="btn btn-block signup button-primary" name="btn-signup">Sign Up</button>
	        <p>Have you created an account before? <a href="login.php" class="login-modal">Login Here</a></p>
	      </div>
	    </form>
    	<hr />
		<a href="forgot.php">Forgot your password?</a>
	  </div> 
	</div>
</div>