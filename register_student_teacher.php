
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
       <img style="clip-path: circle(); width: 11%; margin-bottom: 20px; " src="poclogo1.png">
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
            <div class="title">New to POC LMS?</div>
         
              <div class="button input-box">
                <a href="student/register.php" style="width: 100%; padding: 15px; background: #374c9d;" class="btn btn-primary">I'm a Student</a>
              </div>
              <div class="button input-box">
                 <a href="teacher/register.php" style="width: 100%; padding: 15px; background: #374c9d;" class="btn btn-primary">I'm a Teacher</a>
              </div>
              
            </div>
        </form>
      </div>
</body>
</html>
          
          
