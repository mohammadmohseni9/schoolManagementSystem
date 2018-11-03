<?php  
/**
 * summary
 */
class BurrowBook extends Books
{
	private	$_table = 'burrowed_books';

    /**
     * summary
     */
	function getBurrowedBooks()
	{
        $mytimestamp = time();
        $today = gmdate("m-d-Y", $mytimestamp);

		$sql = "SELECT students.name,books.title,students.grade,books.genre,$this->_table.deadline,$this->_table.student_id,$this->_table.book_id FROM $this->_table INNER JOIN students ON $this->_table.student_id = students.id INNER JOIN books ON $this->_table.book_id = books.id  WHERE $this->_table.returned_date IS null AND $this->_table.burrowed > $today AND $this->_table.deadline > $today";
		$result = $this->query($sql);
		return $this->fetchObject($result);
	}

	function getBurrowedBooksByStudent($id)
	{
        $mytimestamp = time();
        $today = gmdate("m-d-Y", $mytimestamp);

		$sql = "SELECT books.title,books.genre FROM $this->_table INNER JOIN books ON $this->_table.book_id = books.id  WHERE $this->_table.student_id = ?";
		$result = $this->query($sql,[$id]);
		return $this->fetchObject($result);
	}

	function returnBook($id,$condition)
	{
		$today = date("Y-m-d,h:m:s");
		$sql = "UPDATE $this->_table SET returned_date = ? , book_condition=? WHERE id=?";
		return $this->query($sql,[$today,$condition,$id]);
	}

	function setBurrowedBooks($studentid,$bookid)
	{
		$mytimestamp = time();
        $today = gmdate("Y-m-d,h:m:s", $mytimestamp);
		return $this->insertQuery($this->_table,["book_id"=>$bookid,"student_id"=>$studentid,"burrowed"=>$today]);
	}

	function countBurrowedBooks()
	{
		$mytimestamp = time();
        $today = gmdate("m-d-Y", $mytimestamp);

		$sql = "SELECT COUNT(*) FROM $this->_table  WHERE returned_date IS null AND burrowed>$today AND deadline>$today";
		$result = $this->query($sql);
		return $this->fetchArray($result);	
	}


	function searchBurrowedBook($bookname,$studentname)
	{
		if (!empty($bookname) && !empty($studentname)) 
		{
			$sql = "SELECT students.name,students.grade,books.title,$this->_table.book_id,$this->_table.burrowed,$this->_table.student_id,$this->_table.id,students.id AS student_id,books.id AS book_id FROM $this->_table INNER JOIN students ON students.id=$this->_table.student_id INNER JOIN books ON books.id = $this->_table.book_id WHERE students.name LIKE ? AND books.title LIKE ? AND burrowed_books.returned_date IS null";
				
			$data = $this->query($sql,["%$studentname%","$bookname%"]);
		}else if (!empty($bookname))
		{
			$sql = "SELECT students.name,students.grade,books.title,$this->_table.book_id,$this->_table.student_id,$this->_table.burrowed,$this->_table.id,students.id AS student_id,books.id AS book_id FROM $this->_table INNER JOIN students ON students.id=$this->_table.student_id INNER JOIN books ON books.id = $this->_table.book_id WHERE books.title LIKE ? AND burrowed_books.returned_date IS null";
				
			$data = $this->query($sql,["%$bookname%"]);
		}else
		{
			$sql = "SELECT students.name,students.grade,books.title,$this->_table.book_id,$this->_table.student_id,$this->_table.burrowed,$this->_table.id,students.id AS student_id,books.id AS book_id FROM $this->_table INNER JOIN students ON students.id=$this->_table.student_id INNER JOIN books ON books.id = $this->_table.book_id WHERE students.name LIKE ? AND burrowed_books.returned_date IS null";
				
			$data = $this->query($sql,["%$studentname%"]);
		}
			return $this->fetchObject($data);
	}
}


?>