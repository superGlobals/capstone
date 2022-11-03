<?php
include("include/session.php");
include("include/header.php");


?>
<?php $get_id = $_GET['id']; ?>
<?php $get_class_id = $_GET['get_id']; ?>
<?php include('classquiz_sidebar.php');?>

  <?php $class_query = mysqli_query($conn,"select * from teacher_class
  LEFT JOIN class ON class.class_id = teacher_class.class_id
  LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
  where teacher_class_id = '$get_id'")or die(mysqli_error());
  $class_row = mysqli_fetch_array($class_query);
  ?>
        
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Quiz Results</a></li>
    <li class="breadcrumb-item"><a href="#"><b><?php echo $class_row['class_name']; ?></b></a></li>
    <li class="breadcrumb-item"><a href="#"><b><?php echo $class_row['subject_code']; ?></b></a></li>
  </ol>
</nav>




<section id="grid-container" style="margin-top: 20px; width: 100%;">
          <div class="container" style="width: 100%;" >
            <div class="panel panel-default" style="width: 1080px;">
   

         <div style="background: #374c9d;" class="panel-heading">
                <h4 class="panel-title">
                   <p style="padding-top: 10px; margin-left: 10px; color: white;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Quiz Results</p>
        </h4>
       
      </div>
     
      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body"><strong></strong>
         
                
                 <form action="delete_class_quiz_function.php<?php echo '?id='.$get_id; ?>" method="post">
                    <table cellpadding="0" cellspacing="0" border="0" class="table"id="example">
                     <a class="btn btn-primary" href="class_quiz.php<?php echo '?id='.$get_id; ?>">Back</a>
                 <!--  <a style="margin-bottom: 20px;" data-toggle="modal" href="#backup_delete" id="delete"  class="btn btn-danger" name=""><i class="fas fa-trash-alt"></i></a> -->
                
                    <thead>
                            <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Quiz Score</th>
                        <th>Date Taken</th>
                        

                        <!-- <th>Status</th> -->
                        
                        </tr>
                    </thead>
                    <tbody>
                  <?php
                   $query = mysqli_query($conn,"select * from student_class_quiz LEFT JOIN student on student.student_id = student_class_quiz.student_id where class_quiz_id = '$get_class_id' ")or die(mysqli_error());
                    while($row = mysqli_fetch_array($query)){
                    $id  = $row['class_quiz_id'];
                  ?>                              
                    <tr id="del<?php echo $id; ?>">
                    <td width="30">
                      <!-- <input style="cursor: pointer;" id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"> -->
                    </td>
                     <td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
                     <td><?php  echo $row['grade_status']; ?></td>
                     <td><?php  echo $row['date_taken']; ?></td>
                    <!--  <td><textarea ><?php  echo $row['essay_answer']; ?></textarea></td> -->

                      <!-- <td><?php  echo $row['quiz_status']; ?></td> -->
                                                         
                                      
                                                                      
                    </tr>
                  <?php } ?>
                  
               

                    </tbody>
                  </table>
                  </form>


                        </div>
                          <?php 
 
  include("scripts.php");
  
   ?>