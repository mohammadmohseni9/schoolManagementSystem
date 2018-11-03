<?php  
// $guardian = [
// 			'id'=>$id, 
// 			'name'=>$name, 
// 			'address'=>$address, 
// 			'nationality'=>$nationality, 
// 			'contact'=>$contact, 
// 			'email'=>$email, 
// 			'student_id'=>$student_id
// 			];

require_once 'db.php';
/**
* 
*/
class Guardian extends Db
{

	private $_table = 'guardians';

	function add($data)
	{
		$table = $this->_table;
		return $this->insertQuery($table,$data);
	}

	function getDetail($id)
	{
		$table = $this->_table;
		$sql = "SELECT * FROM $table WHERE id=?";
		$result = $this->query($sql,[$id]);
		return $this->fetchObject($result);
	}

	function getGuardianByStudentId($id)
	{
		$table = $this->_table;
		$sql = "SELECT * FROM $table WHERE student_id = ?";
		$result = $this->query($sql,[$id]);
		return $this->fetchObject($result);
	}
}


?>