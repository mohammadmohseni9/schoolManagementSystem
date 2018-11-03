<?php  
/**
* 
*/
class Session
{
	static private $_id,
			$_username,
			$_usertype,
			$_logged_in;

	static function setSession($id,$username,$usertype)
	{
		self::$_id = $_SESSION['id'] = $id;
		self::$_usertype = $_SESSION['usertype']= $usertype;
		self::$_username = $_SESSION['username']= $username;
		return true;
	}

	static function setLoggedIn()
	{
		self::$_logged_in = true;
		$_SESSION['logged_in'] = true;
		return true;
	}

	static function setLoggedOut()
	{
		self::$_logged_in = false;
		return true;
	}

	static function getLoggedIn()
	{
		return isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : false;
	}

	static function getSession()
	{
		return ["id"=>$_SESSION['id'],"username"=>$_SESSION['username'],"usertype"=>$_SESSION['usertype']];
	}

	static function getUserType()
	{
		return $_SESSION['usertype'];
	}

	static function destroy()
	{
		session_destroy();

		return true;
	}	


}


?>