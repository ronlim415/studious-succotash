<?php 
  
 session_start(); 

  if (!isset($_SESSION['user'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ProjectBoard</title>
</head>
<body>
	<?php include 'topbar.php' ?>
	<br/>
	<br/>
	<?php include 'navbar.php' ?>
	</body>
</html>