<?php  
$authentication = new Authentication();

if (isset($_POST['login'])) 
{	
	$remember = (isset($_POST['username'])) ? trim($_POST['username']) : null;
	$username = (isset($_POST['username'])) ? trim($_POST['username']) : null;
	$password = (isset($_POST['password'])) ? trim($_POST['password']) : null;
	$user_type = 'superuser';
	
	if (!empty($username) && !empty($password)) 
	{
		$login = $authentication->logIn($username,$password,$user_type);

		$session_type = Session::getUserType();
		if ($remember) {
			setcookie('site',$username,time()+60*60*24);
		}
		
		header('location: index.php');
	}else{
		echo 'Empty';
	}
}

