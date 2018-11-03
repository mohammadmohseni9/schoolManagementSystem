<?php if (!isset($_GET['action'])): ?>
	<?php  $pageurl = "management=staffs"; ?>

<div class="row">
	<div class="col-md-3 col-lg-2 offset-md-1">
		<a href="index.php?<?php echo $pageurl; ?>&action=addStaff">
			<div class="card text-center text-midnight-blue">
				<div class="card-img-top">
					<i class="fa fa-user fa-2x p-3"></i>
				</div>
				<div class="card-title">
					Add Staff
				</div>
			</div>
		</a>
	</div>

	<div class="col-md-3 col-lg-2">
		<a href="index.php?<?php echo $pageurl; ?>&action=searchStaff">
			<div class="card text-center text-danger">
				<div class="card-img-top">
					<i class="fa fa-users fa-2x p-3"></i>
				</div>
				<div class="card-title">
					Manage Staffs 
				</div>
			</div>
		</a>
	</div>
</div>
<?php endif ?>
<?php  
	if (isset($_GET['action'])) {
		$action = $_GET['action'];
		switch ($action) {
			case 'addStaff':	
				include_once 'includes/staff/addStaff.php';
				break;

			case 'editStaff':
				// $id = $_GET['id']; 
				// $staffData = $staff->getStaffDetailById($id);
				include_once 'includes/staff/editStaff.php';
				break;

			case 'searchStaff':
				include_once 'includes/staff/searchStaff.php';
				break;
			
			case 'searchStaffDetail':
				include_once 'includes/staff/detailStaff.php';
				break;

			case 'getStaffDetail':
				include_once 'includes/staff/staffDetail.php';
				break;

			case 'removeStaff':
				include_once 'includes/staff/removeStaff.php';
				break;
	}
} 
?>
</div>
