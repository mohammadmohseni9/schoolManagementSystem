<?php  
	include_once 'includes/admin-header.php';
	include_once 'libs/login.php';
?>
<div class="row">
	<div class="col-md-6 col-lg-5 m-auto border border-light p-4 jumbo">
		<h4 class="lead text-center">Log In</h4> <hr>
		<form action="" method="POST" accept-charset="utf-8">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control border-primary" name="username" id="username" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control border-primary" name="password" id="password" required>
			</div>
			<div class="form-group">
              <label for="remember" class="m-2">Remember Me</label>
              <input type="checkbox" name="remember">
            </div>
			<div class="form-group text-right">
				<input type="submit" class="btn btn-primary" name="login" id="login-button">
			</div>
		</form>
		
	</div>
</div>

<script src="../includes/js/jquery.js"></script>
<script src="../includes/js/tether.min.js"></script>
<script src="../includes/js/bootstrap.js"></script>

</body>
</html>