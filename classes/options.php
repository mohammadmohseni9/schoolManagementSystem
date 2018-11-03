<?php  
/**
 * summary
 */
class Options extends Db
{
	private $_table = 'options'; 
    
    /**
     * summary
     */
	
	function getEnabledOptions()
	{
		$sql = "SELECT * FROM $this->_table WHERE status = 1";
		$result = $this->query($sql);
		return $this->fetchObject($result);
	}

	function getDiabledOptions()
	{
		$sql = "SELECT * FROM $this->_table WHERE status = 0";
		$result = $this->query($sql);
		return $this->fetchObject($result);
	}

	function getOptions($value=null)
	{
		$sql = "SELECT * FROM $this->_table";
		if (!empty($value)) {
			$sql = "SELECT * FROM $this->_table WHERE title=?";
		}
		$result = $this->query($sql,[$value]);
		return $this->fetchObject($result);
	}

	function setOptions($data,$id)
	{
		return $this->updateDetail($this->_table,$data,$id);
	}

}

?>