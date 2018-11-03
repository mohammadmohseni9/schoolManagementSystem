<div class="title">
	<p class="lead text-center">Staff Detail</p>
</div>
<?php if (isset($_GET['id'])): ?>
<?php 
$staffData= $staff->getStaffDetailById($_GET['id']);
?>
<div class="row">
	<div class="col-md-4">
		<div class="outline text-center p-4">
			<img src="users/img/bills.jpg" class="img-fluid" alt="asd" width="200" height="200">
		</div>
		
	</div>
	<div class="col-md-8">
		<div class="jumbotron">
			<p class="border-bottom">Name : <?php echo $staffData[0]->name ?></p>
			<p class="border-bottom">Address : <?php echo $staffData[0]->address ?></p>
			<p class="border-bottom">email : <?php echo $staffData[0]->email ?></p>
			<p class="border-bottom">Position : <?php echo $staffData[0]->position ?></p>
			<p class="border-bottom">Contact : <?php echo $staffData[0]->contact ?></p>
		</div>
	</div>
</div>
<?php endif ?>