<?php  
require_once '../../classes/staff.php';

$staff = new Staff();

if (isset($_POST['action'])) 
{
	$action = $_POST['action'];
	switch ($action) {
		case 'search':
			$name = $_POST['name'];
			$position = $_POST['position'];
			
			$param = array_filter(['name LIKE' => "%"."$name"."%",'position ='=>$position]);
			$paramKey =	array_keys($param);
			$paramValue = array_values($param);
			$sql ="SELECT * FROM faculty WHERE ";

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
			$sql .= " AND status=1 ";
			$query = $staff->query($sql,$paramValue);
			$result = $staff->fetchObject($query);
			echo json_encode($result);
			break;

		case 'add':
			$staffData = [
				'name'=>$_POST['name'],
				'address'=>$_POST['address'],
				'contact'=>$_POST['contact'],
				'email'=>$_POST['email'],
				'position'=>$_POST['position'],
			];
			$staffinsertressult = $staff->add($staffData);
			$staffId = $staff->getLastId($staffinsertressult);
			if ($staffinsertressult) {
				echo $staffId;
			}		

			break;
		
		case 'delete':
	
			$id = $_POST['id'];
			if (count($id) > 1) {
				for ($i = 0; $i < count($id); $i++) {
					$delete = $staff->delete([$id[$i]]);
				}
			}
			$delete = $staff->remove([$id]);
			$message = ($delete)? 'Staff has been deleted Successfully':'error occured while removing staff';
			echo $message;
			break;
		
		case 'edit':
			
			break;
		
		default:
			$studentData = $staff->getStudentDetailById($id);
			echo json_encode($studentData);
			break;
	}
}
