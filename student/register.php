<?php session_start();
include('scripts.php');
include('../admin/database.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>NEUST POC - LMS</title>
   <link rel="icon" type="image/gif/jpg" href="img/poclogo1.png">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body style=" background: #374c9d;">
  <div class="container">
    <div style="margin-left: 10px;  " class="forms">
       <img style="clip-path: circle(); width: 11%; margin-bottom: 20px; " src="img/logo.jpg">
        <div class="form-content">
           <div style="margin-right: 5px;" class="signup-form">
            <?php

          if (isset($_SESSION['validate'])): ?> 
            <div style="padding: 10px;" class="alert-danger text-center"> 
              <i class="fas fa-exclamation-triangle"></i>
                <?php
                echo $_SESSION['validate'];
                unset($_SESSION['validate']);
                ?>
            </div>
          <?php endif?>
             <?php

          if (isset($_SESSION['password'])): ?> 
            <div style="padding: 10px;" class="alert-danger text-center"> 
              <i class="fas fa-exclamation-triangle"></i>
                <?php
                echo $_SESSION['password'];
                unset($_SESSION['password']);
                ?>
            </div>
          <?php endif?>

           <?php

          if (isset($_SESSION['validate_username'])): ?> 
            <div style="padding: 10px;" class="alert-danger text-center"> 
              <i class="fas fa-exclamation-triangle"></i>
                <?php
                echo $_SESSION['validate_username'];
                unset($_SESSION['validate_username']);
                ?>
            </div>
          <?php endif?>
             <?php

          if (isset($_SESSION['pending'])): ?> 
            <div style="padding: 10px;" class="alert-success text-center"> 
              <i class="fas fa-exclamation-triangle"></i>
                <?php
                echo $_SESSION['pending'];
                unset($_SESSION['pending']);
                ?>
            </div>
          <?php endif?>
          <div class="title">Student Registration</div>
        <form action="student_signup.php" method="post" enctype="multipart/form-data">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="firstname" placeholder="Enter first name" required>
              </div>
               <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="lastname" placeholder="Enter last name" required>
              </div>
               <div class="input-box">
               <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Enter email" required>
              </div>
               <div class="input-box">
                <label>Class</label>
                <select style="cursor: pointer;" name="class_id" class="input-block-level span5">
                <option></option>
                <?php
                $query = mysqli_query($conn,"select * from class order by class_name ")or die(mysqli_error());
                while($row = mysqli_fetch_array($query)){
                ?>
                <option value="<?php  echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
                <?php
                }
                ?>
              </select>
              </div>
              <label style="color: red; font-size: 10px;">Please upload your COR for admin verification</label>
               <input name="image" class="input-file uniform_on" id="fileInput" type="file">
              
               <div class="input-boxes">
               <label style="color: red; font-size: 10px;" >*Note: your Student Number will be your username.</label>
             <div class="input-box">
               <i class="fas fa-id-card"></i>
                 <input type="text" class="input-block-level" id="username" name="username" placeholder="Student Number" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
               <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="cpassword" placeholder="Confirm your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Already have an account? <a href="../login_page.php">Login here</a></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>



      






