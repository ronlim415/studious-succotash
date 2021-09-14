<?php
$user_id = $_GET ['id'];
$name = $_GET ['name'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Project Board</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <style>
        .header {
            background: #003366;
        }
        button[name=register_btn] {
            background: #003366;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Admin - Delete user</h2>
    </div>
    
    <form method="post" action="delete_confirm.php?id=<?php echo $user_id?>">
        <div class="delete-user">
            <h1>Are you sure to Delete <i><?php echo "$name"?>?</i></h1>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="register_btn">Yes</button>
        </div>
    </form>
</body>
</html>