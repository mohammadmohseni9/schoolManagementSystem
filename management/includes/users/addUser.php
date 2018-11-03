<div>
	<!-- 
		Select User ID and Then add his username And Password Or 
		better let him choose username and password 
		add his login to true
	-->
</div>

<div class="addform col-md-6 offset-md-2">
	<p class="lead">Add User</p>
	<form action="" method="POST" id="add_student" class="form"> 
		<div class="form-group">
			<label for="name">User Name</label>
			<input type="text" class="form-control" name="username" required>
		</div>

		<div class="form-group">
			<label for="address">Password</label>
			<input type="password" class="form-control" name="password" required>
		</div>

		<div class="form-group">
			<label for="grade">User Type</label>
			<select name="usertype" class="form-control">
				<option value="student">Student</option>
				<option value="guardian">Guardian</option>
				<option value="admin">Admin</option>
				<option value="staff">Staff</option>
			</select>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" id="addform" name="addUser">
		</div>
	</form>
</div><!-- ./Add User -->