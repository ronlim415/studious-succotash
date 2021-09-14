<?php

$user_id=$_GET['id'];


include ('../db_connect.php');

$sql="DELETE FROM users WHERE id = $user_id";
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));

header ("location: home.php?page=user");
?>