<?php  
include_once 'db.php';
/**
 * summary
 */
class Staff extends Db
{
	private $_table = 'faculty';
    
    /**
     * summary
     */
    function add($data)
	{
		$table = $this->_table;
		return $this->insertQuery($table,$data);
	}

	function remove($data)
	{
		$table = $this->_table;
		return $this->disableById($table,$data);
	}

    function updateStaffDetail($data,$id)
	{
		return $this->updateDetail($this->_table,$data,$id);
	}


    public function getStaffDetailById($id)
	{
		return $this->getById($this->_table,$id);
	}

	public function totalStaffs()
	{
		$sql = 'SELECT COUNT(*) FROM '.$this->_table.' WHERE status=1';
		$totalStaff = $this->query($sql);
		return $this->fetchArray($totalStaff);
	}
	
}