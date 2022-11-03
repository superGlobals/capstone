 <?php
include('includes/header.php'); 
include("database.php");
session_start();

if (isset($_SESSION['status'])) {
  
 if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
   
    $_SESSION['status'] = 'invalid';
  }

  if ($_SESSION['status'] == 'valid') {
    header("location: accounts_request.php");
  }
}
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];


  $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
  $count = mysqli_num_rows($query);
  $run_validate =mysqli_fetch_array($query);

  if ($count > 0) {
    $_SESSION['status'] = "valid";  
    $_SESSION['username'] = $run_validate['username'];
    $_SESSION['id']=$run_validate['id'];

   
       mysqli_query($conn, "INSERT INTO user_log (username, login_date, user_id ) VALUES ('$username', NOW(),".$run_validate['id'].")")or die(mysqli_error());
    
    
    
  
    header("location: accounts_request.php");

  }else{
    $_SESSION['status'] = "invalid";
    $_SESSION['message'] = "Username and Password do not match";
  }



}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>NEUST POC - LMS</title>
   <link rel="icon" type="image/gif/jpg" href="./img/logo.jpg">
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
          <div class="login-form">
             <?php

          if (isset($_SESSION['message'])): ?> 
            <div style="padding: 10px;" class="alert-danger text-center"> 
              <i class="fas fa-exclamation-triangle"></i>
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
          <?php endif?>
            <div class="title">Admin Login</div>
           <form class="user" action="login.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Enter your username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" name="login" value="Login">
              </div>
              </div>
        </form>
      </div>
</body>
</html>
