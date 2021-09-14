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
	<title>Project Board</title>
</head>
<body>
	<body>
	<?php include 'topbar_admin.php' ?>
	<br/>
	<br/>
	<?php include 'navbar_admin.php' ?>
	</body>
</body>
</html>