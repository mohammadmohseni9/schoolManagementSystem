<?php  
require_once 'db.php';
// Adding books format for library
// $data = ['title'=>'asd','description'=>"description",'quantity'=>'quantity'];
/**
* 
*/
class Books extends Db 
{
	private $_table ="books",
			$_burrowTable = 'burrowed_books';
	// if multiple value given adds multiple books in bulk
	function addBooks($data)
	{
		$result = $this->insertQuery($this->_table,$data);
		return $result;
	}

	// if multiple id given edits multiple books
	function editBooks($data,$param)
	{
		$sql = "UPDATE $_table SET ";
		$key = array_keys($data);
		for ($i=0; $i < count($key); $i++) { 
			if ($i == (count($key)-1)) {
				$sql .= "$key = ?,";
			}else{
				$sql .= "$key = ?,";
			}	
		}	
		$whereparam =array_keys($param);

		$sql .= " WHERE $whereparam[0]= $param[0]";
		$result = $this->query($sql,array_values($data));
		return $result;
	}

	function checkDuplicate($data){
		$sql = "SELECT COUNT(*) FROM books WHERE title=? AND author=?";
		$result = $this->query($sql,$data);
		$result = $this->fetchArray($result);
		return $result[0];
	}
	// if multiple id given deletes multiple books
	function deleteBooks($id)
	{
		$sql = "DELETE FROM $this->_table WHERE id=?";
		if (count($id) > 1) {
			for ($i=0; $i < count($id); $i++) { 
				$query = $this->query($sql,[$id[$i]]);
			}
		}else{
			$query = $this->query($sql,[$id]);
		}
	}


	// check for duplicate
	function hasDuplicate($data)
	{
		return $this->hasData($this->_table,$data);
	}

	// if genre given counts total no of that genre books available
	function countTotalBooks()
	{
		$sql = "SELECT COUNT(*) FROM $this->_table ";
		$count = $this->query($sql);
		return $this->fetchArray($count);
	}

	// if genre given counts total quantity of that genre books available
	function countTotalBooksQuantity()
	{
		$sql = "SELECT SUM(quantity) FROM $this->_table ";
		$count = $this->query($sql);
		return $this->fetchArray($count);
	}

	//Get a book detail 
	function getBookDetail($data)
	{
		$key = array_keys($data);
		$value = array_values($data);
		$sql = "SELECT * FROM $this->_table WHERE $key[0]=?";
		$result = $this->query($sql,[$value[0]]);
		return $this->fetchObject($result);
	}

	function getDetailById($id)
	{
		$sql = "SELECT * FROM $this->_table WHERE id=?";
		
		if (count($id) > 1) {
			for ($i = 0; $i < count($id); $i++) {
				$query = $this->query($sql,[$id[$i]]);
				$data[$i] = $this->fetchObject($query);
			}
			return $data;
		}
		$result = $this->query($sql,[$id]);
		return $this->fetchObject($result);
	}

	function getBooksGenre()
	{
		$sql = "SELECT DISTINCT(genre) FROM books WHERE 1;";
		$result = $this->query($sql);
		return $this->fetchArray($result);
	}

	
	
}

