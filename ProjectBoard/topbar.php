<?php
include('functions.php');
?>
<link rel="stylesheet" type="text/css" href="css/topbar.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<nav class="topbar" style="padding:0;">
  <div class="container-fluid">
        <div class="logo">
          <h2>Project Board</h2>
        </div>
      <div class="user-logout">
        <div class="message">
         <!-- notification message -->
              <small>
                  <i style="color: #888;"><?php if (isset($_SESSION['success'])) : ?>
                            <?php 
                              echo $_SESSION['success']; 
                              unset($_SESSION['success']);
                            ?>
                          <?php endif ?></i>
              </small>
              <img src="images/user.png" >
                   <?php  if (isset($_SESSION['user'])) : ?>
                      <strong><?php echo $_SESSION['user']['name']; ?></strong>
                      <small>
                        <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
                        | <a href="index.php?logout='1'" style="color: white;"> <i class='bx bx-power-off' ></i>Logout</a>
                      </small>
                    <?php endif ?>
        </div>
      </div>
  </div>
</nav>