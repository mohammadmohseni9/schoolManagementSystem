<?php include_once 'staffDetail.php' ?>
<form action="" method="POST" accept-charset="utf-8">
	<div class="form-group text-right">
		<input type="hidden" value="<?php echo $staffData[0]->id; ?>" id="staff_id">
		<input type="submit" name="confirm_remove" id="removeStaff" value="Remove" class="btn btn-danger">	
	</div>
</form>