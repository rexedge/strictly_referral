<div class="signup-form">
    <form action="inc/auth/reg-process.php" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="username" placeholder="Username" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="role" placeholder="Role" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
        </div>
        <div class="form-group">
            <input type="file" name="file" required>
            <!-- <input type="submit" name="upload" value="Upload" class="btn"> -->
        </div>        
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
	
</div>