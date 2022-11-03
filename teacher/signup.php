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
      <form action="teacher_signup.php" method="post">
  <div class="mb-3">
    <input type="text" class="form-control" name="firstname" placeholder="Firstname" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

   <div class="mb-3">
    <input type="text" class="form-control" name="lastname" placeholder="Lastname" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

   <div class="mb-3">
    <input type="email" class="form-control" name="email" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    <div class="mb-3">
   <label>Department </label>
    <select class="form-select" name="department_id" aria-label="Default select example">
    <option></option>
            <?php
            $query = mysqli_query($conn,"SELECT * FROM department ORDER BY department_name ")or die(mysqli_error());
            while($result = mysqli_fetch_array($query)){
            ?>
            <option value="<?php echo $result['department_id'] ?>"><?php echo $result['department_name']; ?></option>
            <?php
            }
            ?>
  </select>
  </div>

    <div class="mb-3">
    <input type="text" class="form-control" name="username" placeholder="Username" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
   
  <div class="mb-3">
      <input type="password" placeholder="Password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
 
    <button type="submit" name="submit" class="btn btn-primary" style="width: 100px;">Submit</button>
  </form>
       <p class="para-2">
       <a href="login.php">Click here to login</a>
    </p>
    </div>
   
  </body>
</html>





