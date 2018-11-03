<?php  
include_once 'db.php';
/**
* 
*/
class Course extends Db
{
	private $_table ='courses';

	function getAllCourses()
	{
		$sql = "SELECT * FROM $this->_table";
		$result = $this->query($sql);
		return $this->fetchObject($result);
	}

	function addCourse()
	{
		$table = $this->_table;
		return $this->insertQuery($table,$data);
	}
}