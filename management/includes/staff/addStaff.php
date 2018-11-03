<div class="row">	
<?php $page = "index.php?management=staffs&action=addStaff"; ?>
	<div class="col-md-6 col-lg-5 offset-md-2">
		<form action="" method="POST" accept-charset="utf-8">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" name="name" id="name" maxlength="60">
			</div>
			<div class="form-group">
				<label for="staff_address">Address</label>
				<input type="text" class="form-control" name="address" id="staff_address" maxlength="160">
			</div>
			<div class="form-group">
				<label for="staff_contact_no">Contact No</label>
				<input type="text" class="form-control" name="contact_no" id="staff_contact_no" maxlength="60">
			</div>
			<div class="form-group">
				<label for="staff_email">Email</label>
				<input type="email" class="form-control" name="email" id="staff_email" maxlength="70">
			</div>
			<div class="form-group">
				<label for="staff_position">Position</label>
				<input type="text" class="form-control" name="position" id="staff_position" maxlength="80">
			</div>
			<div class="form-group">
				<input type="submit" name="add_staff" id="add_staff" value="Add Staff" class="btn btn-primary">
			</div>	
		</form>
	</div>
</div>	