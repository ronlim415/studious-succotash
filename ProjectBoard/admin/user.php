<?php
$conn = mysqli_connect("localhost","root","") or die (mysqli_error($conn));
$db = mysqli_select_db($conn,"db_fms");
$sql = "SELECT * FROM users";
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/button.css">
	<link rel="stylesheet" type="text/css" href="../css/tables.css">
</head>
<body>
	<div id="content">
		<div id="create_user">
		   	<a href="create_user.php"> <i class='bx bxs-add-to-queue'>Add user</i></a>
		</div>
		<br>
		<br>
		<div id=card-body>
			<table width="100%">
			  <tr>
			    <th width="20%">Name</th>
			    <th width="30%">Username</th>
			    <th width="20%">Email</th>
			    <th width="20%">Type</th>
			    <th width="30%">Action</th>
			  </tr>
			  		<?php
						while($r = mysqli_fetch_assoc($q))
						{
					?> 
			 	<tr>
			 		<td><?php echo $r['name'];?></td>
					<td><?php echo $r['username'];?></td>
					<td><?php echo $r['email'];?></td>
					<td><?php echo $r['user_type'];?></td>
					<?php $user_id = $r['id']?>
					<td> 
						<a href = "home.php?page=update&id=<?php echo $user_id;?>"> Update </a> |
						<a href = "home.php?page=delete&id=<?php echo $user_id;?>&name=<?php echo $r['name'];?>"> Delete </a>
					</td>
			 	</tr>
			 		<?php 
						}
					?>
			</table>
		</div>
	</div>
</body>
</html>