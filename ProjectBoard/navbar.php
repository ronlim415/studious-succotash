<?php $load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';?>
<link rel="stylesheet" type="text/css" href="css/sidebar.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <br/>
    <li <?php if($load == 'share') {echo 'class="active"';} ?>><a href="index.php?page=share"><i class='bx bx-share-alt'></i>Shared Files</a></li>
    <li <?php if($load == 'files') {echo 'class="active"';} ?>><a href="index.php?page=files"><i class='bx bx-file-blank'></i>Files</a></li>
    <li <?php if($load == 'upload') {echo 'class="active"';} ?>><a href="index.php?page=upload"><i class='bx bx-file-blank'></i>Upload</a></li>
  </ul>
</div>

<?php
          switch ($load) {
            case 'share':
            require_once('share.php');
            break;
            case 'files':
              require_once('files.php');
              break;
            default:
              require_once('share.php');
              break;
            case 'upload':
              require_once('upload.php');
              break;  
          }
?>