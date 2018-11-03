<?php  

/**
* 
*/
class Token
{
	private var $token=null;
	
	
	function setToken()
	{
	    $ip = $_SERVER['REMOTE_ADDR'];
	    //We use mt_rand() instead of rand() because it is better for generating random numbers.
	    //We use 'true' to get a longer string.
	    $uniqid = uniqid(mt_rand(), true);
	    $this->token= md5($ip . $uniqid);
	    return true;
	}
	
	public function getToken ()
	{
		return $this->_token;
	}

	function validate ($userToken)
	{
		if (isset($userToken) == $this->token) {
			return true;
		}
		return false;
	}


}