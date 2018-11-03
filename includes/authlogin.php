<?php  
if (isset($_COOKIE['site'])) {
	// header('location: index.php');
}
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$user_type = $_POST['user_type'];
	$remember = isset($_POST['remember']) ? $_POST['remember'] : false;

	$login = $authentication->logIn($username,$password,$user_type);
	
	if ($login) {
		$session_type = Session::getUserType();
		if ($remember !== false) {
			setcookie('site',$username,time()+60*60*24);
		}
		
		if ($session_type == 'staff') {
			header('location: index.php');
		}else{
			header("location: users/user/index.php");
		}

	}else{
		echo "<p class='text-danger h5 text-center'>Please enter correct username or password</p>";
		echo "<p class='text-danger h6 text-center'>Make sure to enter correct user type</p>";
	}

}
?>