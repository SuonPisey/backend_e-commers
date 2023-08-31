<!DOCTYPE html>
<html lang="en">

<head>
	<title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
	<!-- Font  -->
	<link id="theme-style" rel="stylesheet" href="./assets/fonts/OdorMeanChey/OdorMeanChey.css">
<?php
include "./page/header//menu.php";
// include_once '../config_db/config_db.php';
?>
<?php 

?>
<?php
include_once '../config_db/config_db.php';
if (isset($_GET['p'])) {

	include "./page/" . $_GET['p'] . ".php";
} 
elseif(isset($_GET['pro'])){
	include "./page/property_type/". $_GET['pro'].".php";
}
elseif(isset($_GET['property']))
{
	include "./page/property/". $_GET['property'].".php";
}
else {
	include "./page/home.php";
}

?>

<?php

if(!$conn){
    die("Connection Failed".mysqli_connect_error());
    exit();
}else{
	printf("your connection successful");
}

?>

