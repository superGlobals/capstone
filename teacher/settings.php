<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('settings_sidebar.php');?>
<?php include('../admin/database.php');?>



    <h1 id="welcome-title"> <?php
                 include('../admin/database.php');

                    $sy_query = mysqli_query($conn, "select * from schoolyear order by school_year DESC");
                    $sy_row = mysqli_fetch_array($sy_query);
                    $sy = $sy_row['school_year'];

                    ?>
                <h4 style="margin-bottom: 20px; margin-left: 25px; ">
                    School year: <?php echo $sy_row['school_year'];  ?>
                </h4></h1>

            <!-- uploading files session message -->
                <?php

          if (isset($_SESSION['upload'])): ?> 
            <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-success text-center" id="hide">
                <?php
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
                ?>
            </div>
          <?php endif?>

           <?php

          if (isset($_SESSION['error_curren_password'])): ?> 
            <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-danger text-center">
                <i class="fas fa-exclamation-triangle"></i>
                <?php
                echo $_SESSION['error_curren_password'];
                unset($_SESSION['error_curren_password']);
                ?>
            </div>
          <?php endif?>

           <?php

          if (isset($_SESSION['error_new_password'])): ?> 
            <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-danger text-center">
                <i class="fas fa-exclamation-triangle"></i>
                <?php
                echo $_SESSION['error_new_password'];
                unset($_SESSION['error_new_password']);
                ?>
            </div>
          <?php endif?>

           <?php

          if (isset($_SESSION['success_change'])): ?> 
            <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-success text-center">
                <i class="fas fa-check-circle"></i>
                <?php
                echo $_SESSION['success_change'];
                unset($_SESSION['success_change']);
                ?>
            </div>
          <?php endif?>

          <?php

          if (isset($_SESSION['error_create_new_password'])): ?> 
            <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-danger text-center">
                <i class="fas fa-exclamation-triangle"></i>
                <?php
                echo $_SESSION['error_create_new_password'];
                unset($_SESSION['error_create_new_password']);
                ?>
            </div>
          <?php endif?>
        <section id="grid-container" style="margin-top: 20px; width: 100%;">
          <div class="container" style="width: 100%;" >
            <div class="panel panel-default" style="width: 140%;">
   

         <div class="panel-heading" style="background: #374c9d;">
                <h4 class="panel-title">
                   <p style="padding-top: 10px; margin-left: 10px; color: white;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Settings</p>


          
            
          
        </h4>
       
      </div>
     
      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body"><strong></strong>
            <form method="post" action="teacher_profile.php" enctype="multipart/form-data">
                                <label  style="font-size: 18px;">Change Profile picture</label>
                                <div class="control-group">
                                <div class="controls">
                                    <input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
                                </div>
                                </div>
   
                         <button style="margin-left: 10px; margin-bottom: 10px; width: 150px; " class="btn btn-success" name="change"><i class="fas fa-id-card"></i> Change Profile </button>  
                 
                    </form>


                    <hr>


                            <div class="container-password">
                                <?php
                                $query = mysqli_query($conn,"select * from teacher where teacher_id = '$session_id'")or die(mysqli_error());
                                $row = mysqli_fetch_array($query);
                                ?>                              
                                        
                                    <form action="change_password.php"  method="post" id="change_password" class="form-horizontal">
                                        <label class="change-password">Change Password <i class="fas fa-key"></i></label>
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Current Password:</label>
                                            <div class="controls-pass">
                                            <input type="hidden" id="password" name="password" value="<?php echo $row['password']; ?>"  placeholder="Current Password">
                                            <input type="password" id="current_password" name="current_password"  placeholder="Current Password" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">New Password:</label>
                                            <div class="controls-new">
                                            <input type="password" id="new_password" name="new_password" placeholder="New Password" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Confirm Password:</label>
                                            <div class="controls">
                                            <input type="password" id="retype_password" name="confirm_password" placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                        <div class="control-group0">
                                            <div class="control">
                                            <button style="width: 170px;" type="submit" name="change" class="btn btn-primary"><i class="fas fa-key"></i> Change Password</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>

          
                            </div>
                        </div>

           
                 
  
            </div>
<!--     <?php include('footer.php'); ?> -->
        </div>
    <?php include('scripts.php'); ?>
          
                
                 


























      