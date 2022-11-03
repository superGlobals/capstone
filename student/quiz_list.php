<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>

<?php include('../admin/database.php');?>
<?php $get_id = $_GET['id']; ?>
<?php include('quiz_list_sidebar.php');?>

  <?php $class_query = mysqli_query($conn,"select * from teacher_class 
    LEFT JOIN class ON class.class_id = teacher_class.class_id
    LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
    where teacher_class_id = '$get_id'")or die(mysqli_error());
    $class_row = mysqli_fetch_array($class_query);
    $class_id = $class_row['class_id'];
    $school_year = $class_row['school_year'];
    ?>
     <ul class="breadcrumb">
        <li><a href="#"><?php echo $class_row['class_name']; ?></a> </li>
        <li><a href="#"><?php echo $class_row['subject_code']; ?></a></li>
        <li><a href="#"><b>Quiz list</b></a></li>
    </ul>
                                    
<section id="grid-container">
            <div class="container-quiz" >
    <div class="panel panel-default">
      <div class="panel-heading" style=" background: #374c9d;">
        <h4 class="panel-title">
          <p style="padding-top: 10px; margin-left: 10px; color: white; " data-toggle="collapse" data-parent="#accordion" href="#collapse1">Quiz List
          </p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><strong></strong>

     <form action="" method="post">
        <table class="table" id="example">
        <thead>
                <tr>
            <th>Quiz Title</th>
            <th>Description</th>
            <th>Date Added</th>
            <th></th>
            
           </tr>
        </thead>
        <tbody>
                      <?php
       $query = mysqli_query($conn,"select * FROM class_quiz 
        LEFT JOIN quiz on class_quiz.quiz_id = quiz.quiz_id
        where teacher_class_id = '$get_id'  order by class_quiz_id DESC ")or die(mysqli_error());
        while($row = mysqli_fetch_array($query)){
        $id  = $row['class_quiz_id'];
        $quiz_id  = $row['quiz_id'];
       
        
       
      
        $query1 = mysqli_query($conn,"SELECT * FROM student_class_quiz WHERE class_quiz_id = '$id' AND student_id = '$session_id'")or die(mysqli_error());
        $row1 = mysqli_fetch_array($query1);
        // $grade = $row1['grade'];

      ?>                              
        <tr>                     
         <td><?php echo $row['quiz_title']; ?></td>
         <td><?php  echo $row['quiz_description']; ?></td>
         <td><?php echo $row['date_added']; ?></td>

         <td>
       <?php if ($row1 == ""){ ?>
          <a  data-placement="bottom" title="Take This Quiz" id="<?php echo $id; ?>Download" href="take_test.php<?php echo '?id='.$get_id ?>&<?php echo 'class_quiz_id='.$id; ?>&<?php echo 'test=ok' ?>&<?php echo 'quiz_id='.$quiz_id; ?>"><i class="fas fa-pencil-alt"></i> Take This Quiz</a>
        <?php }else{
          ?>
          <b>Already Taken Quiz</b>
        <?php } ?>
        </td>          
                <script type="text/javascript">
                $(document).ready(function(){
                  $('#<?php echo $id; ?>Take This Quiz').tooltip('show');
                  $('#<?php echo $id; ?>Take This Quiz').tooltip('hide');
                });
                </script>                    
        </tr>
 <?php } ?>
        </tbody>
      </table>
      </form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>

        </div>
    <?php include('scripts.php'); ?>
      


      </div>
    </div>
    </div>
  </div> 
            
    </section>