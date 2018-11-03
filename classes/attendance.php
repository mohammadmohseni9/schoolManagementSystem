<?php  
/**
* 
*/
class Attendance extends Db
{
	private $_table = 'attendance';
	
	function setAbsent($id,$date=null)
	{
		$date = (empty($date)) ? date("Y-m-d") : $date; 
		$sql = "INSERT INTO $this->_table (student_id,date,status) VALUES (?,?,?)";
		
		if (count($id) > 1) {
			for ($i=0; $i < count($id); $i++) { 
				$this->query($sql,[$id[$i],$date,'0']);
			}
			return true;
		}else{
			$result = $this->query($sql,[$id,$date,'0']);
			return $result;
		}
	}

	function setAbsentInADate($id,$date=null)
	{
		$date = (empty($date)) ? date("Y-m-d") : $date; 
		$sql = "INSERT INTO $this->_table WHERE student_id=? AND date=?";
		
		if (count($id) > 1) {
			for ($i=0; $i < count($id); $i++) { 
				$this->query($sql,[$id[$i],$date]);
			}
			return true;
		}else{
			$result = $this->query($sql,[$id,$date]);
			return $result;
		}
	}

	function getAbsentByDate($date)
	{
		$sql ="SELECT * FROM $this->_table WHERE date=?";
		$result = $this->query($sql,[$date]);
		$data = $this->fetchObject($result);
		return $data;
	}

	function countTotalStudentAbsent($date)
	{
		$sql ="SELECT COUNT(*) FROM $this->_table WHERE date=?";
		$result = $this->query($sql,[$date]);
		$data = $this->fetchArray($result);
		return $data[0];
	}

	function getAbsent($id,$date)
	{
		$sql ="SELECT * FROM $this->_table WHERE student_id=? AND date=?";
		$result = $this->query($sql,[$id,$date]);
		$data = $this->fetchObject($result);
		return $data;
	}

	function countOneStudentAbsent($id)
	{
		$sql ="SELECT COUNT(*) FROM $this->_table WHERE student_id=?";
		$result = $this->query($sql,[$id]);
		$data = $this->fetchArray($result);
		return $data[0];
	}
	
}