<?php  
	session_start();
	include_once 'classes/session.php';
	include_once 'classes/authentication.php';
	
	$authentication = new Authentication();
	$login = Session::getLoggedIn();
	if (isset($_COOKIE['site'])) {
		setcookie('site','',time()-60*60*24);
	}
	if ($login) {
		$logout = Session::destroy();
		
		if ($logout) {
			header('Location: login.php');
		}
	}else{

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <link href="includes/css/bootstrap.css" rel="stylesheet">
</head>
<body>

</body>
</html>
<div class="jumbotron">
	<h4 class="text-danger text-center">You must be logged in to logout</h4>
	<p class="text-center"> <a href="login.php" class="h5 link text-primary">Log In</a></p>
</div>


<?php 
	}	
?>