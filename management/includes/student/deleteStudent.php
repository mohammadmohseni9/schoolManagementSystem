<?php  
	if (isset($_POST['confirm_delete'])) {
		$id = $_POST['id'];
		// if (count($id) > 1) {
		// 	for ($i = 0; $i < count($id); $i++) {
		// 		$delete = $student->delete([$id[$i]]);
		// 	}
		// }
		$delete = $student->removeStudentById([$id]);
		$message = ($delete)? 'Student has been deleted Successfully':'error occured while deleeting student';
		
		header('location: index.php?management=students');
	}
?>
<?php if (isset($_GET['action']) && $_GET['action'] =="deleteStudent"): ?>
	<div class="jumbotron">
		<p class="lead text-danger">Delete Student</p>
		<div class="detail row">
			<div class="jumbotron p-4 col-sm-6 border-lr">
				<p class="lead text-center">Student Detail</p>
				<p>
					Name : <?php echo $studentData[0]->name; ?>
				</p>
				<p>
					Address : <?php echo $studentData[0]->address; ?>		
				</p>
				<p>
					Grade : <?php echo $studentData[0]->grade; ?>				
				</p>
				<p>
					Email : <?php echo $studentData[0]->email; ?>
				</p>
			</div>
			<div class="jumbotron p-4 col-sm-6 border-lr">
				<p class="lead text-center">Guardian Detail</p>
				<?php echo print_r($guardianData); ?>
			</div>
		</div>
		<hr>
		<div class="text-right">
			<form action="" method="POST" accept-charset="utf-8">
				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
				<input type="submit" id="confirm_delete" name="confirm_delete" value="Delete Student" class="btn btn-danger">
			</form>
		</div>
	</div>
<?php endif ?>
