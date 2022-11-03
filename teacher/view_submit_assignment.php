<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('../admin/database.php');?>
   <?php $get_id = $_GET['id']; ?>
  
<?php include('assignment_sidebar.php');?>
<?php 
    $post_id = $_GET['post_id'];
    if($post_id == ''){
    ?>
    <script>
    window.location = "assignment_student.php<?php echo '?id='.$get_id; ?>";
    </script>
    <?php
    }
  
 ?>
             
             <!-- breadcrumb -->
        
                    <?php $class_query = mysqli_query($conn,"select * from teacher_class
                    LEFT JOIN class ON class.class_id = teacher_class.class_id
                    LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
                    where teacher_class_id = '$get_id'")or die(mysqli_error());
                    $class_row = mysqli_fetch_array($class_query);
                    ?>
        
               <ul class="breadcrumb">
              <li><a href="#"><?php echo $class_row['class_name']; ?></a> </li>
              <li><a href="#"><?php echo $class_row['subject_code']; ?></a> </li>
              <li><a href="#">School Year: <?php echo $class_row['school_year']; ?></a> </li>
              <li><a href="#"><b>Uploaded Assignments</b></a></li>
            </ul>
             <!-- end breadcrumb -->
             <?php

          if (isset($_SESSION['message'])): ?> 
            <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-success text-center" id="hide">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
          <?php endif?>
            
            
                        <!-- block -->
                        <section id="grid-container">
      <div class="container">
    <div style="width: 95%;" class="panel panel-default">
      <div style="/*border-left: 15px solid #eba550;*/ background: #374c9d;" class="panel-heading">
        <h4 class="panel-title">
          <p style="padding-top: 10px; margin-left: 10px; color: white; " data-toggle="collapse" data-parent="#accordion" href="#collapse1">  <?php
                    $query1 = mysqli_query($conn,"select * FROM assignment where assignment_id = '$post_id'")or die(mysqli_error());
                    $row1 = mysqli_fetch_array($query1);
                  
                  ?>
                 Submitted Assignment in : <?php echo $row1['fname']; ?>
                  
                  <div id="">
          </p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><strong></strong>
                <a style="margin-bottom: 10px; margin-left: 90%;" class="btn btn-primary" href="assignment.php<?php echo '?id='.$get_id; ?>"><i class="fas fa-arrow-left"></i> Back</a>
                        
                        
        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
            
                    <thead>
                            <tr>
                        <th>Date Upload</th>
                        <th>File Name</th>
                        <th>Description</th>
                        <th>Submitted by:</th>
                        <th>Download</th>
                        <th></th>
                        </tr>
                        
                    </thead>
                    <tbody>
                      
                                  <?php
                   $query = mysqli_query($conn,"select * FROM student_send_assignment 
                                        LEFT JOIN student on student.student_id  = student_send_assignment.student_id
                                        where assignment_id = '$post_id'  order by student_assignment_id DESC")or die(mysqli_error());
                    while($row = mysqli_fetch_array($query)){
                    $id  = $row['student_assignment_id'];
                  ?>                              
                    <tr>
                     <td><?php echo $row['assignment_fdatein']; ?></td>
                                         <td><?php  echo $row['fname']; ?></td>
                                         <td><?php echo $row['fdesc']; ?></td>                                                                        
                                         <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>                                                                        
                                         <td><a title="Download Files" href="<?php echo $row['floc']; ?>"><i class="fas fa-download"></i></a></td>                                                                        
                                         <td width="140">
                     <form method="post" action="save_grade.php<?php echo '?id='.$get_id; ?>">
                     <input type="hidden" class="span4" name="id" value="<?php echo $id; ?>">
                     <input type="hidden" class="span4" name="post_id" value="<?php echo $post_id; ?>">
                     <input type="hidden" class="span4" name="get_id" value="<?php echo $get_id; ?>">
                     <textarea name="commend" value="<?php echo $row['teacher_commend'] ?>" placeholder="Comment your student" required></textarea>
                     <input style="width:82px;" type="text" placeholder="Score" name="grade" required value="<?php echo $row['grade']; ?>">
                     <button name="save" class="btn btn-success" id="btn_s"><i class="fas fa-save"></i>Save</button>
                     </form>
                     </td>                                                                        
                                </tr>
                         
             <?php } ?>
          
                              
                    </tbody>
                  </table>
                  </div>
                
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>

        
            </div>

        </div>
    <?php include('scripts.php'); ?>
    </body>
</html>