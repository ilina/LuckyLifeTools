<!-- Modal content -->
<div id="signupModal" class="modal">
	<div class="modal-content">
	  <div class="modal-header">
	    <span class="close-signup">X</span>
	    <h2>Sign Up</h2>
	  </div>
	  <br />
	  <div class="modal-body">
    	<form method="post" autocomplete="off" action="signup.php">
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
	            <input type="password" name="password" placeholder="Your Password" required />
	          </div>
	        </div>

	        <div class="row">
	          <div class="one columns">Password (Confirm):</div>
	          <div class="four columns form-input">
	            <input type="password" name="password2" placeholder="Your Password" required />
	          </div>
	        </div>
	        
	        <hr />
	        <button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
	        <hr />
	      </div>
	    </form>
	    <a href="login.php" class="login-modal">Login Here...</a>
	  </div>
	  <div class="modal-footer">
	    <h3>Modal Footer</h3>
	  </div>
	</div>
</div>