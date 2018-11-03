<?php  
include_once '../../classes/user.php';
$user= new User();

if (isset($_GET['action'])) {
	$action = $_GET['action'];
	switch ($action) {
			case "search":
				print_r($user->getAllUsersByUserType());
				break;
			

		}	





}