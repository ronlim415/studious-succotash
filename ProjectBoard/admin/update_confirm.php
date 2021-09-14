<?php

$user_id = $_GET ['id'];
$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$user_type = $_POST['user_type'];
$password = $_POST['password'];
$password = md5($password);

$conn = mysqli_connect("localhost","root","") or die (mysqli_error($conn));
$db = mysqli_select_db($conn,"db_fms");

$sql = "UPDATE users SET username = '$username', name = '$name',  email = '$email', user_type = '$user_type', password = '$password' WHERE id = $user_id " ; 
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));

header ("location: home.php?page=user");
?>		
