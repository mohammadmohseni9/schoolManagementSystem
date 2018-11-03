<?php  
include_once 'session.php';
include_once 'user.php';
$session = new Session();
/**
* 
*/
class Authentication extends User
{
	private $_pass=false;

	function logIn ($username,$password,$usertype)
	{
		global $session;
		$loginData = $this->getUserLogInData($username);
	
		if (!empty($loginData)) 
		{
			$isUser = false;			
			$isSuperUser = false;

			$user_id = $loginData[0]->user_id;
			$username = $loginData[0]->username;
			$loginusertype = $loginData[0]->usertype;
			// Checking if user is super user
			if ($usertype == $loginusertype || $loginusertype == 'superuser')
			{
				$hash_password = $loginData[0]->password;
				// Verifying password
				if (password_verify($password,$hash_password)) 
				{
					// setting session and setting login session true
					$settingSession = Session::setSession($user_id,$username,$loginusertype);
					$login = Session::setLoggedIn();
					
					if ($settingSession) 
					{
						if ($login) 
						{
							return true;
						}
					}
				}else
				{
					return false;
				}
			}
			
		}else{
			return false;
		}
	}


	function check($check,$tocheck)
	{
		return ($check == $tocheck) ? true : false;
	}


}