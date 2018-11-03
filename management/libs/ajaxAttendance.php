<?php
	include_once '../../classes/db.php';
	include_once '../../classes/attendance.php';
	$conn = new Db();
	$attendance = new Attendance();	
	$action = $_POST['action'];
	switch ($action) {
		// Setting student Absent Case
		case 'absent':
			$id = $_POST['id'];
			$name = $_POST['name'];
			$date = date("Y-m-d");
			$getStudentData= $attendance->getAbsent($id,$date);
			if (count($getStudentData) == 1) {
					echo "Already set absent today";
			}else{
				$absent = $attendance->setAbsent($id);
				if ($absent) {
					echo "Mr. $name is absent $date(today)";
				}
			}
			break;
	}
?>
