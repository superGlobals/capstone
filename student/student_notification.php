<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('student_notification_sidebar.php');?>
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

           
        <section id="grid-container-notification">
          <div class="container-notification" >
            <div class="panel panel-default" >
         <div style="background: #374c9d;" class="panel-heading">
                <h4 class="panel-title">
                   <p style="padding-top: 10px; margin-left: 10px; color: white;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Notification</p>
        </h4>
       
      </div>
     
      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body"><strong></strong>
          
          <form action="read.php" method="post">
            <?php if($not_read == '0'){
                }else{ ?>
              <button id="delete"  class="btn btn-primary" name="read"><i class="icon-check"></i> Read</button>
                         <!--  <div class="pull-right">
              Check All <input type="checkbox"  name="selectAll" id="checkAll" />
                <script>
                $("#checkAll").click(function () {
                  $('input:checkbox').not(this).prop('checked', this.checked);
                });
                </script>    -->      
              </div>
  
                <?php } ?>
        
          <?php $query = mysqli_query($conn,"select * from teacher_class_student
          LEFT JOIN teacher_class ON teacher_class.teacher_class_id = teacher_class_student.teacher_class_id 
          LEFT JOIN class ON class.class_id = teacher_class.class_id 
          LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
          LEFT JOIN teacher ON teacher.teacher_id = teacher_class_student.teacher_id 
          JOIN notification ON notification.teacher_class_id = teacher_class.teacher_class_id   
          where teacher_class_student.student_id = '$session_id' order by notification.date_of_notification DESC
          ")or die(mysqli_error());
          $count = mysqli_num_rows($query);
          if ($count  > 0){
          while($row = mysqli_fetch_array($query)){
          $get_id = $row['teacher_class_id'];
          $picture = $row['picture'];
          $id = $row['notification_id'];
          $date = $row['date_of_notification'];
          
          
          $query_yes_read = mysqli_query($conn,"select * from notification_read where notification_id = '$id' and student_id = '$session_id'")or die(mysqli_error());
          $read_row = mysqli_fetch_array($query_yes_read);
          
          // $yes = $read_row['student_read'];
        
          ?>
                  <div class="post"  id="del<?php echo $id; ?>">
                    <?php if ($read_row == 'yes'){
                    }else{
                    ?>
                    <input style="margin-left: 10px; cursor: pointer;" id="" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>"> 
                    <?php } ?>  
                      <strong>
                        <a style="text-decoration: none; color: black; padding: 5px;" href="<?php echo $row['link']; ?><?php echo '?id='.$get_id; ?>">
                        <img class="img-circle" src="../teacher/<?php echo $row['picture']; ?>" height="70" width="70">
                        <?php echo 'Teacher'.' '. $row['firstname']." ".$row['lastname'];  ?></strong>
                      <?php echo $row['notification']; ?> In 
                      <strong>
                      <?php echo $row['class_name']; ?> 
                      <?php echo $row['subject_code']; ?> 
                      </strong>
                    <?php include_once('time_ago.php'); ?> 
                    <!-- <a id="dot"><i class="fas fa-circle"></i></a> -->
                      </a><i style="color: red;" class="far fa-bell"></i>&nbsp;<?php echo facebook_time_ago($date); ?>
                     
                    <hr style="width: 1000px; margin-left: 10px;">
                   
                    </div>
                      
                  
                      
          <?php
          } }else{
          ?>
          <div class="alert alert-info"><strong><i class="fas fa-bell-slash"></i> No Notifications Found</strong></div>
          <?php
          }
          ?>
          
          </form>
            
                                </div>
                            </div>
                        </div>
         
  
            </div>

        </div>
    <?php include('scripts.php'); ?>
          
          
                
                 


























      