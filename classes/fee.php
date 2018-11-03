<?php
include_once 'db.php';  
/**
 * summary
 */
class Fee extends Db
{
	private $_table = 'fee_structure';
    /**
     * summary
     */
    public function getFeeByGrade($grade)
    {
        $sql = "SELECT * FROM $this->_table WHERE grade=?";
        $fee = $this->query($sql,[$grade]);
        return $this->fetchObject($fee);
    }

    public function getFeeByCourseId($id)
    {
        $sql = "SELECT * FROM $this->_table WHERE course_id=? ";
        $fee = $this->query($sql,[$id]);
        return $this->fetchObject($fee);
    }

    public function payStudentFee()
    {
    	// Pay fee of student
    }

    public function countUnpaidFee()
    {
        $sql = "SELECT COUNT(*) FROM $this->_table WHERE paid_date IS NULL";
        $fee = $this->query($sql);
        return $this->fetchArray($fee);
    }   
}