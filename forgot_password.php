<?php session_start();
include('teacher/scripts.php');
 include('admin/database.php');?>
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   <title>NEUST POC - LMS</title>
   <link rel="icon" type="image/gif/jpg" href="poclogo1.png">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body style=" background: #374c9d;">
  <div class="container">
    <div style="margin-left: 10px;  " class="forms">
      <!--  <img style="clip-path: circle(); width: 11%; margin-bottom: 20px; " src="poclogo1.png"> -->
        <div class="form-content">
          <div class="login-form">
             <?php

          if (isset($_SESSION['error'])): ?> 
            <div style="padding: 10px;" class="alert-danger text-center"> 
              <i class="fas fa-exclamation-triangle"></i>
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
          <?php endif?>
            <div class="title">Forgot Password</div>
          <form action="login_function.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Enter your username" required>
              </div>
      
              <div class="button input-box">
                <input type="submit" name="save" value="Login">
              </div>
             
            </div>
        </form>
      </div>
</body>
</html>
          
          
