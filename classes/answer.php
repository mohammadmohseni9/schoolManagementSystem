<?php 
/**
 * summary
 */
class Answer extends Db
{
	private $_table = 'answers';
    /**
     * summary
     */
    public function getAnswersById($id)
    {
        return $this->getById($this->_table,$id,"question_id");
    }

    public function getReplyById($id)
    {
        return $this->getById($this->_table,$id,"reply");
    }

    public function setReplyById($data)
    {
    	// $data for reply ["question_id"=>$question_id,"answer"=>$answer,"reply"=>$reply]
        return $this->insertQuery($_table,$data);
    }

    public function setAnswer($data)
    {
    	// $data for answer ["question_id"=>$question_id,"answer"=>$answer]
        return $this->insertQuery($_table,$data);
    }
}