<?php  
// addUser format data $data = ['username'=>$username,'password'=>$password,'usertype'=>$usertype,'email'=>$email,'user_id'=>$user_id];
include_once 'db.php';

/**
* 
*/
class User extends Db
{
	private $_table = "users";
	private $_table_permission = 'permission';


	function addUser($data)
	{
		return $this->insertQuery("users",$data);
	}

	function getUserLogInData($username)
	{
		$sql ="SELECT * FROM users WHERE username=?";
		$query = $this->query($sql,[$username]);
		return $this->fetchObject($query);
	}

	function countAllUsers()
	{
		$sql = "SELECT COUNT(*) FROM $this->_table "; 
		$query = $this->query($sql);
		return $this->fetchArray($query);
	}

	function getUserPermission($id,$values='*')
	{
		$sql = "SELECT ? FROM $this->_table_permission WHERE user_id=?";
		$query = $this->query($sql,[$values,$id]);
		return $this->fetchArray($query);
	}

	function getAllUsersByUserType($user='staff')
	{
		$table = ($user == 'staff') ? 'faculty' : 'students';
		$sql = "SELECT $table.name,$table.department,$table.email FROM $this->_table JOIN $table ON $table.id = $this->_table.user_id WHERE $this->_table.usertype=?"; 
		$query = $this->query($sql,[$user]);
		return $this->fetchObject($query);	
	}

	function disableUser($id)
	{
		return $this->disableById($this->_table,$id);		
	}

}