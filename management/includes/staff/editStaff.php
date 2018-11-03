<div class="title">
	<p class="lead text-center">Staff Detail</p>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="outline text-center p-4">
			<img src="users/img/bills.jpg" class="img-fluid" alt="asd" width="200" height="200">
		</div>
		
	</div>

	<?php if (isset($_GET['id'])): ?>
	<?php $staffDetail = $staff->getStaffDetailById($_GET['id']); ?>
	<div class="col-md-8">
		<form action="" method="POST" accept-charset="utf-8">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control input-border-bottom" name="name" id="name" value="<?php echo $staffDetail[0]->name ?>">
			</div>
			<div class="form-group">
				<label for="staff_address">Address</label>
				<input type="text" class="form-control input-border-bottom" name="address" id="staff_address" value="<?php echo $staffDetail[0]->address ?>">
			</div>
			<div class="form-group">
				<label for="staff_contact_no">Contact No</label>
				<input type="text" class="form-control input-border-bottom" name="contact_no" id="staff_contact_no" value="<?php echo $staffDetail[0]->contact ?>">
			</div>
			<div class="form-group">
				<label for="staff_email">Email</label>
				<input type="email" class="form-control input-border-bottom" name="email" id="staff_email" value="<?php echo $staffDetail[0]->email ?>">
			</div>
			<div class="form-group">
				<label for="staff_position">Position</label>
				<input type="text" class="form-control input-border-bottom" name="position" id="staff_position" value="<?php echo $staffDetail[0]->position ?>">
			</div>
			<div class="form-group">
				<input type="submit" name="add_staff" id="update_staff" value="Update Staff Detail" class="btn btn-primary">
			</div>	
		</form>
	</div>
		
	<?php endif ?>
</div>