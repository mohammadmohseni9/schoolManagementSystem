<?php  
	$student= new Student();
	if (isset($_POST['addStudent'])) {
		$success = "Success Form Has Been Submitted";
		
		$name = $_POST['name'];
		$grade = $_POST['grade'];
		$student_contact = $_POST['student_contact'];
		$email = $_POST['email'];
		$guardian = $_POST['guardian_name'];
		$guardian_contact = $_POST['guardian_contact'];
		$guardian_email = $_POST['guardian_email'];
		$course = $_POST['course'];
		$nationality = $_POST['nationality'];
		$rollno = $_POST['rollno'];
		$batch = $_POST['batch'];
		$address = $_POST['address'];

		$studentData = [
			'name'=>$name,
			'address'=>$address,
			'contact_no'=>$student_contact,
			'email'=>$email,
			'nationality'=>$nationality,
			'grade'=>$grade,
			'course_id'=>$course,
			'rollno'=>$rollno,
			'batch'=>$batch
		];	
		
		$student->add($studentData);
		$student_id = $student->getLastId();
		
		$guardianData = [
			'name'=>$guardian,			
			'address'=>$address,
			'nationality'=>$nationality, 
			'contact'=>$guardian_contact,
			'email'=>$guardian_email,			
			'student_id'=>$student_id 
		];

		$guardians = new Guardian();
		$data = $guardians->add($guardianData);
		if ($data) {
			echo $student_id;
			echo "Guardian was added";
		};


	}

	if (isset($_POST['editStudent'])) {
		$id = $_GET['id'];
		$name = $_POST['student_name'];
		$grade = $_POST['student_grade'];
		$student_contact = $_POST['student_contact'];
		$email = $_POST['student_email'];
		$home_contact = $_POST['student_house_contact'];
		$address = $_POST['student_address'];
		$rollno = $_POST['student_rollno'];

		$formData = [
			'name'=>$name,
			'address'=>$address,
			'contact_no'=>$student_contact,
			'home_contact_no'=>$home_contact,
			'email'=>$email,
			'grade'=>$grade,
			'rollno'=>$rollno
		];	
		if ($student->updateStudentDetail($formData,$id)) {
			$success = "Form Has Been Submitted";
		}
			
	}

?>
<div class="row-fluid">
<?php if (!isset($_GET['action'])): ?>
	<div class="row">
		<?php  $pageurl = "management=students"; ?>
		<div class="offset-md-1 col-md-3 col-lg-2">
			<a href="index.php?<?php echo $pageurl; ?>&action=addStudent">
				<div class="card text-center text-midnight-blue p-3">
					<div class="card-img-top">
						<i class="fa fa-user fa-2x p-2"></i>
					</div>
					<div class="card-title">
						Add Students
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-3 col-lg-2">
			<a href="index.php?<?php echo $pageurl; ?>&action=searchStudent">
				<div class="card text-center text-danger p-3">
					<div class="card-img-top">
						<i class="fa fa-user fa-2x p-2"></i>
					</div>
					<div class="card-title">
						Edit / Remove / Detail 
					</div>
				</div>
			</a>
		</div>
		
	</div>
<?php endif ?>

<?php echo isset($success)?$success : null;  ?>
<?php  
	if (isset($_GET['action'])) {
		$action = $_GET['action'];
		switch ($action) {
			case 'addStudent':	
				include_once 'includes/student/addStudent.php';
				break;

			case 'editStudent':
				$id = $_GET['id']; 
				$studentData = $student->getStudentDetailById($id);
				include_once 'includes/student/editStudent.php';
				break;

			case 'deleteStudent':
				$id = $_GET['id']; 
				$studentData = $student->getStudentDetailById($id);
				$guardianData = $guardian->getGuardianByStudenId($id);
				include_once 'includes/student/deleteStudent.php';
				break;

			case 'searchStudent':
				include_once 'includes/student/searchStudent.php';
				break;
			case 'studentDetail':
				include_once 'includes/student/detailStudent.php';
				break;
			
	}
} 
?>
</div>
