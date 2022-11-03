<?php
include("include/session.php");
include("include/header.php");
 include('../admin/database.php');
include("teacher_sidebar.php");
?>
		<h1 id="welcome-title"> <?php
                    $sy_query = mysqli_query($conn, "select * from schoolyear order by school_year DESC");
                    $sy_row = mysqli_fetch_array($sy_query);
                    $sy = $sy_row['school_year'];

                    ?>
                <h4 style="margin-bottom: 20px; margin-left: 25px; ">
                    School year: <?php echo $sy_row['school_year'];  ?>
                </h4></h1>


<!-- Add data session -->   
             <?php

          if (isset($_SESSION['message'])): ?> 
            <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-success text-center" id="hide">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
          <?php endif?>


<!-- delete data session -->
            <?php
            if (isset($_SESSION['message_delete'])): ?> 
              <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-danger text-center" id="hide">
                  <?php
                  echo $_SESSION['message_delete'];
                  unset($_SESSION['message_delete']);
                  ?>
              </div>
            <?php endif?>


<!-- update data session -->
            <?php
            if (isset($_SESSION['update_message'])): ?> 
              <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-success text-center" id="hide">
                  <?php
                  echo $_SESSION['update_message'];
                  unset($_SESSION['update_message']);
                  ?>
              </div>
            <?php endif?>


<!-- validate username session -->
             <?php
            if (isset($_SESSION['validate'])): ?> 
              <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-danger text-center" id="hide">
                  <?php
                  echo $_SESSION['validate'];
                  unset($_SESSION['validate']);
                  ?>
                  </div>
            <?php endif?>
		<section id="grid-container">
			<div class="container">
    <div class="panel panel-default">
      <div style="/*border-left: 15px solid #eba550;*/ background: #374c9d;" class="panel-heading">
        <h4 class="panel-title">
          <p style="padding-top: 10px; margin-left: 10px; color: white; " data-toggle="collapse" data-parent="#accordion" href="#collapse1">My Class
          </p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><strong></strong>
        	<?php $query = mysqli_query($conn,"select * from teacher_class
                    LEFT JOIN class ON class.class_id = teacher_class.class_id
                    LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
                    where teacher_id = '$session_id'  ")or die(mysqli_error());
                    $count = mysqli_num_rows($query);
                    
                    if ($count > 0){
                    while($row = mysqli_fetch_array($query)){
                    $id = $row['teacher_class_id'];
        
                    ?>
                    		<a id="del<?php echo $id; ?>" >
                        <a href="my_students.php<?php echo '?id='.$id; ?>">
                          <div class="box">
                            <img src="img/2.jpg">
                           <p class="class"><?php echo $row['class_name']; ?></p>
                        <p class="subject"><?php echo $row['subject_code']; ?></p>
                        <a href="#<?php echo $id; ?>" data-toggle="modal"><i class="fas fa-trash-alt"></i> Delete Class</a>
                          </div>
                        </a>
                        </a>
                       
                      
                     
                  <?php include("delete_modal.php"); ?>
                  <?php } }else{ ?>
                  <div class="alert alert-success"><i class="icon-info-sign"></i> Add Your Class to Display here</div>
                  <?php  } ?>
      </div>
    </div>
    </div>
  </div> 
			<div class="grid-item-two">
				<div class="grid-title">Add Class</div>
        <!-- adding class name query -->
				<form method="post" action="add_class.php" method="post">
                    <div class="control-group">
                      <label>Class Name:</label>
                      <div class="controls">
                      <input type="hidden" name="session_id" value="<?php echo $session_id; ?>">
                      <select class="form-select" name="class_id" aria-label="Default select example" required/>
                          <option selected></option>
                          <?php
                      $query = mysqli_query($conn,"select * from class order by class_name");
                      while($row = mysqli_fetch_array($query)){
                      
                      ?>
                         <option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name'];?></option>
                      <?php } ?>
                        </select>                                                  
                           </div>
                           </div> 

                      <!-- adding subject query --> 
                      <div class="control-group">
                      <label>Subject:</label>
                      <br>
                      <select class="form-select"  name="subject_id" aria-label="Default select example" required/>
                          <option selected></option>
                         <?php
                      $query = mysqli_query($conn,"select * from subject order by subject_code");
                      while($row = mysqli_fetch_array($query)){
                      
                      ?>
                      <option value="<?php echo $row['subject_id']; ?>"required><?php echo $row['subject_code'];?></option>
                      <?php } ?>
                      </select>
                    
                      <!-- school year query -->
                    <div class="control-group">
                      <label>School Year:</label>
                    <div class="controls">
                      <?php
                      $query = mysqli_query($conn,"select * from schoolyear order by school_year DESC");
                      $row = mysqli_fetch_array($query);
                      ?>  

                       <input style="width: 100px;" type="text" name="school_year" class="form-control"  name="school_year" value="<?php  echo $row['school_year']; ?>"  required>
                       <!-- save button -->
                       <button name="save" class="btn btn-success" style="margin-top: 10px; margin-left: 20px;"><i class="fas fa-plus-circle"></i>Add</button>
                        </form>

			</div>
			<!-- <div class="grid-item three">item 3</div>
			<div class="grid-item four">item 4</div> -->
		</section>
	</section>

  

	<?php 
  // include("footer.php");
	include("scripts.php");
	 ?>
