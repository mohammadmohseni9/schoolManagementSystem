<?php  
// Student adding format

// $param = ['name'=>$name,
// 		'address'=>$address,
// 		'contact_no'=>$contact,
// 		'email'=>$emil,
// 		'nationality'=>$nationality,
// 		'grade'=>$grade,
// 		'course_id'=>$course,
// 		'rollno'=>$rollno,
// 		'batch'=>$batch
// 	];

// Updating student format

// $param = ['name'=>$name,
// 		'address'=>$address,
// 		'contact_no'=>$contact,
// 		'email'=>$emil,
// 		'nationality'=>$nationality,
// 		'grade'=>$grade,
// 		'course_id'=>$course,
// 		'rollno'=>$rollno,
// 		'batch'=>$batch
// 	];


include_once 'db.php';
/**
* 
*/
class Student extends Db 
{
	private $_table = "students";	
	

	function countTotalStudents()
	{
		$sql = "SELECT COUNT(*) FROM $this->_table WHERE status=1";
		$query = $this->query($sql);
		return $this->fetchArray($query);
	}

	function add($data)
	{
		$table = $this->_table;
		return $this->insertQuery($table,$data);
	}

	function removeStudentById($data)
	{
		$table = $this->_table;	
		print_r($data);
		return $this->disableById($table,$data);
	}

	function hasDuplicate($data)
	{
		$sql = "SELECT * FROM $this->_table WHERE name=? AND address=? AND email=? AND status=1";
		$query = $this->query($sql,[$data['name'],$data['address'],$data['email']]);
		$result = $this->fetchObject($query);
		if (count($result) == null) {
			return false;
		}else{
			return true;
		}
	}

	public function getStudentDetailById($id)
	{
		return $this->getById($this->_table,$id);
	}

    function updateStudentDetail($data,$id)
	{
		return $this->updateDetail($this->_table,$data,$id);
	}

	
}
