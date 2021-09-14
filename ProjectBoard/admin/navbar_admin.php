<?php $load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';?>
<link rel="stylesheet" type="text/css" href="../css/sidebar.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <br/>
    <li <?php if($load == 'share') {echo 'class="active"';} ?>><a href="home.php?page=share"><i class='bx bx-share-alt'></i>Shared Files</a></li>
    <li <?php if($load == 'files') {echo 'class="active"';} ?>><a href="home.php?page=files"><i class='bx bx-file-blank'></i>User Files</a></li>
    <li <?php if($load == 'user') {echo 'class="active"';} ?>><a href="home.php?page=user"><i class='bx bx-user'></i>Users</a></li>
  </ul>
</div>

<?php
          switch ($load) {
            case 'share':
            require_once('share.php');
            break;
            case 'files':
              require_once('user_files.php');
              break;
            case 'user':
                require_once('user.php');
                break;
            case 'delete':
                require_once('delete_user.php');
                break;
            case 'update':
              require_once('update_user.php');
                break;
            default:
              require_once('share.php');
              break;   
          }
?>