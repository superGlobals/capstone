<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('notification_sidebar.php');?>
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

           
        <section id="grid-container" style="margin-top: 20px; width: 100%;">
          <div class="container" style="width: 100%;" >
            <div class="panel panel-default" style="width: 130%;">
   

         <div style="background: #374c9d;" class="panel-heading">
                <h4 class="panel-title">
                   <p style="padding-top: 10px; margin-left: 10px; color: white;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Notification</p>
        </h4>
       
      </div>
     
      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body"><strong></strong>
          
            <form action="read_teacher.php<?php echo '?id='.$student_id; ?>" method="post">
            <?php  if($not_read == '0'){
                }else{  ?>
                  <button style="margin-bottom: 20px;" id="delete"  class="btn btn-primary" name="read"><i class="icon-check"></i> Read</button>
            
                <?php  }  ?>

        
          <?php $query = mysqli_query($conn,"select * from teacher_notification
          LEFT JOIN teacher_class on teacher_class.teacher_class_id = teacher_notification.teacher_class_id
          LEFT JOIN student on student.student_id = teacher_notification.student_id
          LEFT JOIN assignment on assignment.assignment_id = teacher_notification.assignment_id 
          LEFT JOIN class on teacher_class.class_id = class.class_id
          LEFT JOIN subject on teacher_class.subject_id = subject.subject_id
          where teacher_class.teacher_id = '$session_id'  order by  teacher_notification.date_of_notification DESC
          ")or die(mysqli_error());
          $count = mysqli_num_rows($query);
          if ($count  > 0){
          while($row = mysqli_fetch_array($query)){
          $student_id = $row['student_id'];
          $assignment_id = $row['assignment_id'];
          $get_id = $row['teacher_class_id'];
          $id = $row['teacher_notification_id'];
          $class_quiz = $row['class_quiz_id'];
          $date = $row['date_of_notification'];
          
          
          $query_yes_read = mysqli_query($conn,"select * from notification_read_teacher where notification_id = '$id' and teacher_id = '$session_id'")or die(mysqli_error());
          $read_row = mysqli_fetch_array($query_yes_read);
          
          // $yes = $read_row['student_read']; 
        
          ?>
                  <div class="post"  id="del<?php echo $id; ?>">
                    <?php  if ($read_row == 'yes'){
                    }else{ 
                    ?>
                      

                    <input id=""  style="cursor: pointer;"  name="selector[]" type="checkbox" value="<?php echo $id; ?>"> 
                    <?php  } ?> 
                      <strong>
                        <a style="text-decoration: none; color: black; padding: 10px;" href="<?php echo $row['link']; ?><?php echo '?id='.$get_id; ?>&<?php echo 'post_id='.$assignment_id; ?>">
                        <img class="img-circle" src="<?php echo $row['picture']; ?>" height="70" width="70">
                        <!-- <b style="color: green" > <?php echo $row['status']; ?></b>  -->
                        <?php echo $row['firstname']." ".$row['lastname'];  ?></strong>
                      <?php echo $row['notification']; ?> In <b><?php echo $row['fname']; ?></b>
                      
                      <?php echo $row['class_name']; ?> 
                      <?php echo $row['subject_code']; ?> 

                      
                   
                      <?php include_once('time_ago.php'); ?> 
                   <!--  <a id="dot"><i class="fas fa-circle"></i></a> -->
                      </a><i style="color: red;" class="far fa-bell"></i>&nbsp;<?php echo facebook_time_ago($date); ?> 
                    <hr>
                    <div class="pull-right">
                  
                    </div><?php
          } }else{
          ?>
          <div class="alert alert-info"><strong><i class="fas fa-bell-slash"></i> No Notifications Found</strong></div>
          <?php
          }
          ?>
                  
                      
                      </div>
        

          
          </form>
            
                                </div>
                            </div>
                        </div>
         
  
            </div>

        </div>
    <?php include('scripts.php'); ?>
          
          
                
                 


























      