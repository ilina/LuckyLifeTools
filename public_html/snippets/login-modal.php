<!-- Modal content -->
<div id="loginModal" class="modal">
	<div class="modal-content">
	  <div class="modal-header">
	    <span class="close-login">X</span>
	    <h2>Login</h2>
	  </div>
	  <br />
	  <div class="modal-body">
    	<form method="post" action="login.php" autocomplete="off">
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
				
				<hr />
				<button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
				<hr />
			</div>
		</form>
		<a href="signup.php" class="signup-modal">Sign Up Here...</a>
		<hr />
		<a href="forgot.php">Forgot your password?</a>
		<hr />
	  </div>
	  <div class="modal-footer">
	    <h3>Modal Footer</h3>
	  </div>
	</div>
</div>