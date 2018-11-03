<?php 
ob_start();
session_start();
$urlCheck = $_SERVER['REQUEST_URI'];


spl_autoload_register(function($class){
    require_once 'classes/'.strtolower($class).'.php';
});

$student = new Student();
$guardian = new Guardian();
$staff = new Staff();
$attendance = new Attendance();
$books = new Books();
$burrowBook = new BurrowBook();
$fee = new Fee();
$authentication = new Authentication();
$option = new Options();
$user = new User();

// Checking if user is logged in
$login = Session::getLoggedIn();
if (!$login) {
    header('Location: login.php');
}
if (Session::getUserType() == 'student') {
    header('Location: users/user/');
}

$nameOfInstitution = $option->getOptions('institution_name');
$addressOfInstitution = $option->getOptions('institution_address');
$sloganOfInstitution = $option->getOptions('institution_slogan');
$establishedDateOfInstitution = $option->getOptions('institution_establish_date');
$aboutInstitution = $option->getOptions('institution_description');
$facilitiesOfInstitution = $option->getOptions('institution_facilities');
$achievementOfInstitution = $option->getOptions('institution_achievements');
$contactOfInstitution = $option->getOptions('institution_contact');
$emailOfInstitution = $option->getOptions('institution_email');

$idOfInstitution = $nameOfInstitution[0]->id;
$nameOfInstitution = $nameOfInstitution[0]->content;
$addressOfInstitution = $addressOfInstitution[0]->content;
$sloganOfInstitution = $sloganOfInstitution[0]->content;
$establishedDateOfInstitution = $establishedDateOfInstitution[0]->content;
$aboutInstitution = $aboutInstitution[0]->content;
$facilitiesOfInstitution = $facilitiesOfInstitution[0]->content;
$achievementOfInstitution = $achievementOfInstitution[0]->content;
$contactOfInstitution = $contactOfInstitution[0]->content;
$emailOfInstitution = $emailOfInstitution[0]->content;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title><?php echo $nameOfInstitution; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="includes/css/bootstrap.css" rel="stylesheet">
    <link href="includes/css/bootstrap.css.map" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="includes/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="includes/css/bootstrap-grid.css.map">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="includes/css/font-awesome.css">
  
    <!-- Custom styles for this template -->
    <link href="includes/css/style.css" rel="stylesheet">
    <link href="includes/css/defaultstyle.css" rel="stylesheet">
    
        
  </head>

  <body>
