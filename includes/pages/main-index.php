
<?php  
	$totalStudent = $student->countTotalStudents();
	$totalStaff = $staff->totalStaffs();
	$totalUsers = $user->countAllUsers();
	$totalUnpaidFee = $fee->countUnpaidFee();
?>
<section class="row text-center placeholders">
	<div class="col-sm-6  col-md-3 p-2 silver border col-sm-3 placeholder">
	  <div class="option-img-wrapper text-center">
			<a href="index.php?management=students" class="text-primary">
				<i class="fa fa-4x fa-user-circle"></i>
				<div class="option-content">
					<p class="option-title"><?php echo $totalStudent[0][0];?> Students</p>
				</div>
			</a>
		</div>
	</div>
	<div class="col-sm-6  col-md-3 p-2 silver border col-sm-3 placeholder">
		<div class="option-img-wrapper text-center">
			<a href="index.php?management=staffs" class="text-success">
				<i class="fa fa-4x fa-user-o"></i>
				<div class="option-content">
					<p class="option-title"><?php echo $totalStaff[0][0]; ?> Staffs</p>
				</div>
			</a>
		</div>
	</div>
	
	<div class="col-sm-6  col-md-3 p-2 silver border col-sm-3 placeholder">
	  	<div class="option-img-wrapper text-center">
			<a href="index.php?management=users" class="text-midnight-blue">
				<i class="fa fa-4x fa-users"></i>
				<div class="option-content">
					<p class="option-title"><?php echo $totalUsers[0][0];  ?> Users</p>
				</div>
			</a>
		</div>
	</div>

	<div class="col-sm-6  col-md-3 p-2 silver border col-sm-3 placeholder">
	  	<div class="option-img-wrapper text-center">
			<i class="fa fa-4x fa-user"></i>
			<div class="option-content">
				<p class="option-title">200 Notification</p>
			</div>
		</div>
	</div>
	<div class="col-sm-6  col-md-3 p-2 silver border col-sm-3 placeholder">
	  	<div class="option-img-wrapper text-center">
			<a href="index.php?management=payment" class="text-midnight-blue">
				<i class="fa fa-4x fa-money"></i>
				<div class="option-content">
					<p class="option-title"><?php print_r($totalUnpaidFee); ?> Payment</p>
				</div>
			</a>
		</div>
	</div>
</section>