<?php  
session_start();
spl_autoload_register(function($class){
    require_once '../classes/'.strtolower($class).'.php';
});

$option = new Options();
$nameOfInstitution = $option->getOptions('institution_name');
$nameOfInstitution = $nameOfInstitution[0]->content;
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
    <link href="../includes/css/bootstrap.css" rel="stylesheet">
    <link href="../includes/css/bootstrap.css.map" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../includes/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/bootstrap-grid.css.map">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../includes/css/font-awesome.css">
  
    <!-- Custom styles for this template -->
    <link href="../includes/css/style.css" rel="stylesheet">
    <link href="../includes/css/defaultstyle.css" rel="stylesheet">
    
        
  </head>

  <body>

