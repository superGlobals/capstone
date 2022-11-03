<?php
include("include/session.php");
include("include/header.php");


?>
<?php $get_id = $_GET['id']; ?>
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
            <div class="panel panel-default" style="width: 140%;">
   

         <div style="background: #374c9d;" class="panel-heading">
                <h4 class="panel-title">
                   <p style="padding-top: 10px; margin-left: 10px; color: white;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Quiz</p>
        </h4>
       
      </div>
     
      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body"><strong></strong>
         
                
                 <form action="delete_class_quiz_function.php<?php echo '?id='.$get_id; ?>" method="post">
                    <table cellpadding="0" cellspacing="0" border="0" class="table"id="example">
                 <!--  <a style="margin-bottom: 20px;" data-toggle="modal" href="#backup_delete" id="delete"  class="btn btn-danger" name=""><i class="fas fa-trash-alt"></i></a>
                  <?php include('modal_delete_class_quiz.php'); ?> -->
                    <thead>
                            <tr>
                        <th></th>
                        <th>Quiz title</th>
                        <th>Description</th>
                        <th>View Quiz Results</th>
                        <th>Date Added</th>
                        </tr>
                    </thead>
                    <tbody>
                     


                                  <?php
                    $query = mysqli_query($conn,"select * FROM class_quiz 
                    LEFT JOIN quiz ON quiz.quiz_id  = class_quiz.quiz_id
                    where teacher_class_id = '$get_id' 
                    order by date_added DESC")or die(mysqli_error());
                    while($row = mysqli_fetch_array($query)){
                    $id  = $row['class_quiz_id'];
                  ?>                              
                    <tr id="del<?php echo $id; ?>">
                    <td width="30">
                     <!--  <input style="cursor: pointer;" id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"> -->
                    </td>
                     <td><?php echo $row['quiz_title']; ?></td>
                     <td><?php  echo $row['quiz_description']; ?></td>
                     <td><a href="class_quiz_result.php<?php echo '?id='.$get_id.'&'.'get_id='.$id; ?>"><i class="fas fa-eye"></i> Quiz Result</a></td>
                     <td><?php echo $row['date_added']; ?></td>                                      
                                      
                                                                      
                    </tr>
                  <?php } ?>
                    </tbody>
                  </table>
                  </form>


                        </div>
                          <?php 
 
  include("scripts.php");
  
   ?>