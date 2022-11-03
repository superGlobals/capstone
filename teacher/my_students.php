<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>

<?php include('../admin/database.php');?>
   <?php $get_id = $_GET['id']; ?>
   <?php include('mystudent_sidebar.php');?>
<?php include('my_students_breadcrums.php'); ?>
        <section id="grid-container" style="margin-top: 20px; width: 100%;">
          <div class="container" style="width: 100%;" >
            <div class="panel panel-default" style="width: 140%;">
   

         <div style="background: #374c9d; padding: 10px;" class="panel-heading">
           <?php 
                $my_student = mysqli_query($conn,"SELECT * FROM teacher_class_student
                            LEFT JOIN student ON student.student_id = teacher_class_student.student_id 
                            INNER JOIN class ON class.class_id = student.class_id where teacher_class_id = '$get_id' order by lastname ")or die(mysqli_error());
                $count_my_student = mysqli_num_rows($my_student);?>
              <div style="display: inline-block; color: white; padding-left: 10px;" >Number of Students: <span class="badge badge-info" ><?php echo  $count_my_student; ?></span></div> 
               
                <h4 class="panel-title">

          
            
          
        </h4>
       
      </div>
     
      <div id="collapse1" class="panel-collapse collapse in">
        <form method="post" action="export.php<?php echo '?id='.$get_id ?>">
      <button type="submit" name="export" class="btn btn-success" title="Export Student Data to Excel" style="margin-left:70%; width: 150px; margin-top: 10px;"><i class="fas fa-file-excel"></i> Export to Excel</button>
    
   
         <a style=" margin-left: 10px; margin-top: 10px;" href="add_student.php<?php echo '?id='.$get_id; ?>" class="btn btn-primary"><i class="fas fa-plus-circle"></i></i> Add Student</a>
  </form>
        <div class="panel-body"><strong></strong>
           <?php
                            $my_student = mysqli_query($conn,"SELECT * FROM teacher_class_student
                            LEFT JOIN student ON student.student_id = teacher_class_student.student_id 
                            INNER JOIN class ON class.class_id = student.class_id where teacher_class_id = '$get_id' order by lastname ")or die(mysqli_error());
                            while($row = mysqli_fetch_array($my_student)){
                            $id = $row['teacher_class_student_id'];
                            ?>
                      <li id="del<?php echo $id; ?>">
                          <a href="#">
                            <div class="student-box">
                               <img id="student_avatar_class" src ="<?php echo $row['picture'] ?>" width="148" height="100" style="border: 3px solid white;"> 
                          </a>
                          <p style="font-size: 12px;" class="subject"><?php echo $row['firstname']; ?></p>
                          <p style="font-size: 12px;" class="class"><?php echo $row['lastname'];?></p>
                          <a  href="#<?php echo $id; ?>" data-toggle="modal"><i class="icon-trash"></i> Remove</a> 
                        </div>  
                      </li>
                       <?php include("remove_student_modal.php"); ?> 
                      <?php } ?>
                  </ul>
                  <script type="text/javascript">
                          $(document).ready( function() {
                            $('.remove').click( function() {
                            var id = $(this).attr("id");
                              $.ajax({
                              type: "POST",
                              url: "remove_student.php",
                              data: ({id: id}),
                              cache: false,
                              success: function(html){
                                $("#del"+id).fadeOut('fast', function(){ $(this).remove();}); 
                               $("#"+id).modal('hide');
                                setTimeout(function(){
                                window.location = 'my_students.php';
                                },2000)
        
                              }
                              });   
                              return false;
                            });       
                          });
                        </script>
                 
                 
        
      </div>
    </div>
    </div>
  </div> 
  <?php include('scripts.php'); ?>



























      