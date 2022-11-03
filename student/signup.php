<?php
include('../admin/database.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LMS NEUST-POC</title>
    <link rel="stylesheet" href="style.css"/>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="signup-box">
      <!-- Add data session -->   
             <?php

          if (isset($_SESSION['message'])): ?> 
            <div class="alert-success text-center" id="hide">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
          <?php endif?>
      <h1 style="padding-top: 40px; text-align: center;">Sign Up</h1>
        <form action="student_signup.php" class="form-signin" method="post">
      <h3 class="form-signin-heading"><i class="icon-lock"></i> Sign up as Student</h3>
      <input type="text" class="input-block-level" id="username" name="username" placeholder="ID Number" required>
      <input type="text" class="input-block-level" id="firstname" name="firstname" placeholder="Firstname" required>
      <input type="text" class="input-block-level" id="lastname" name="lastname" placeholder="Lastname" required>
      <label>Class</label>
      <select name="class_id" class="input-block-level span5">
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
      <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
      <button id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-check icon-large"></i> Sign in</button>
      </form>
      
    
      
    

      
    
      <a onclick="window.location='login.php'" id="btn_login" name="login" class="btn" type="submit"><i class="icon-signin icon-large"></i> Click here to Login</a>
      
      
      
        
    
          
   
  </body>
</html>





