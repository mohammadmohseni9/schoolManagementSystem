<?php  
require_once '../../classes/student.php';
require_once '../../classes/guardian.php';

$student = new Student();
$parent = new guardian();

if (isset($_POST['action'])) 
{
	$action = $_POST['action'];
	switch ($action) {
		case 'search':
			$name = (!empty($_POST['name'])) ? $_POST['name'] : null;
			$grade = (isset($_POST['grade'])) ? $_POST['grade'] : null;
			$rollno = (isset($_POST['rollno'])) ? $_POST['rollno'] : null;

			$param = array_filter(['name LIKE' => "%"."$name"."%",'grade ='=>$grade,'rollno ='=>$rollno]);
			$paramKey =	array_keys($param);
			$paramValue = array_values($param);
			$sql ="SELECT * FROM students WHERE ";

			if (count($param) > 1) {
				for ($i=0; $i < count($param) ; $i++) {
					if ($i !== 0) {
						$sql .= " AND $paramKey[$i]?";
					}else{
						$sql .= " $paramKey[$i]?";
					}
				}
			}else {
				$sql .=" $paramKey[0]? ";
			}
			$sql .= "AND status=1";
			$query = $student->query($sql,$paramValue);
			$result = $student->fetchObject($query);
			echo json_encode($result);

			break;

		case 'add':
			$studentData = [
				'name'=>$name,
				'address'=>$address,
				'contact_no'=>$contact,
				'email'=>$email,
				'nationality'=>$nationality,
				'grade'=>$grade,
				'course_id'=>$course_id,
				'rollno'=>$rollno,
				'batch'=>$batch
			];
			$studentinsertressult = $student->add($studentData);

			$guardian = [
				'name'=>$name, 
				'address'=>$address, 
				'nationality'=>$nationality, 
				'contact'=>$contact, 
				'email'=>$email, 
				'student_id'=>$student->getLastId()
			];

			if ($studentinsertressult) {
				$guardianinsertresult = $guardian->add($guardianData);
				if ($guardianinsertresult) {
					$error = ($delete)? 'Student has been deleted Successfully':'error occured while deleeting student';
					echo $error;
				}					
			}		

			break;
		
		case 'delete':
	
			$id = $_POST['id'];
			if (count($id) > 1) {
				for ($i = 0; $i < count($id); $i++) {
					$delete = $student->delete([$id[$i]]);
				}
			}
			$delete = $student->removeStudentById([$id]);
			$message = ($delete)? 'Student has been deleted Successfully':'error occured while deleeting student';
			echo $message;
			break;
		
		case 'edit':
			
			break;
		
		default:
			$studentData = $student->getStudentDetailById($id);
			echo json_encode($studentData);
			break;
	}
}
