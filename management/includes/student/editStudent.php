<div class="editform col-md-6">
	<p class="lead">Edit Student</p>
	<form action="" method="POST" id="edit_student" name='editStudent' class="form "> 
		<div class="form-group">
			<div class="row">
				<label for="name">Name</label>
				<input type="text" class="form-control" name="student_name" value="<?php echo $studentData[0]->name ?>">
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<label for="grade">Grade</label>
				<input type="text" class="form-control" name="student_grade" value="<?php echo $studentData[0]->grade ?>">
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<label for="rollno">Roll no</label>
				<input type="number" class="form-control" name="student_rollno" value="<?php echo $studentData[0]->rollno ?>">
			</div>
		</div>
		
		<div class="form-group">
			<div class="row">
				<label for="address">Address</label>
				<input type="text" class="form-control" name="student_address" value="<?php echo $studentData[0]->address ?>">
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<label for="address">Email</label>
				<input type="text" class="form-control" name="student_email" value="<?php echo $studentData[0]->email ?>">
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<label for="student_contact">Student Contact no</label>
				<input type="text" class="form-control" name="student_contact" value="<?php echo $studentData[0]->contact_no ?>">
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<label for="guardian_contact">House Contact no</label>
				<input type="text" class="form-control" name="student_house_contact" value="<?php echo $studentData[0]->home_contact_no ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<input type="submit" class="btn btn-primary" id="addform" name="editStudent">
			</div>
		</div>
	</form>
</div>