<div class="addform col-md-6 offset-md-2">
	<p class="lead">Add Student</p>
	<form action="" method="POST" id="add_student" class="form"> 
		<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" name="name" required>
		</div>

		<div class="form-group">
				<label for="address">Address</label>
				<input type="text" class="form-control" name="address" required>
		</div>

		<div class="form-group">
				<label for="grade">Grade</label>
				<input type="text" class="form-control" name="grade">
		</div>

		<div class="form-group">
				<label for="rollno">Roll no</label>
				<input type="number" class="form-control" name="rollno">
		</div>	
		<div class="form-group">
				<label for="student_contact">Student Contact no</label>
				<input type="text" class="form-control" name="student_contact">
		</div>
		<div class="form-group">
				<label for="batch">Batch</label>
				<input type="text" class="form-control" name="batch">
		</div>
		<div class="form-group">
				<label for="nationality">Nationality</label>
				<input type="text" class="form-control" name="nationality" required>
		</div>
		<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email">
		</div>
		<div class="form-group">
				<label for="guardian_name">Guardian Name</label>
				<input type="text" class="form-control" name="guardian_name" required>
		</div>
		
		<div class="form-group">
			<label for="course">Course</label>
			<?php  
				$course = new Course();
				$courses = $course->getAllCourses();
			?>
			<select name="course" class="form-control">
				<?php  
					for ($i=0; $i < count($courses) ; $i++) { 
				?>
				<option value="<?php echo $courses[$i]->id ?>"><?php echo $courses[$i]->title; ?></option>
				option
				<?php  
					}
				?>
				option
			</select>
		</div>

		<div class="form-group">
				<label for="guardian_contact">Guardian Contact no</label>
				<input type="text" class="form-control" name="guardian_contact" required>
		</div>
		
		<div class="form-group">
				<label for="guardian_email">Guardian email</label>
				<input type="text" class="form-control" name="guardian_email" required>
		</div>
		<div class="form-group">
				<input type="submit" class="btn btn-primary" id="addform" name="addStudent">
		</div>
	</form>
</div><!-- ./Add Student -->