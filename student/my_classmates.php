<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('../admin/database.php');?>
   <?php $get_id = $_GET['id']; ?>
<?php include('my_classmate_sidebar.php');?>
<?php
                    include('../admin/database.php');

                    $sy_query = mysqli_query($conn, "select * from schoolyear order by school_year DESC");
                    $sy_row = mysqli_fetch_array($sy_query);
                    $sy = $sy_row['school_year'];

                    ?>
                <h4 style="margin-bottom: 20px; margin-left: 25px; ">
                    School year: <?php echo $sy_row['school_year'];  ?>
                </h4></h1>

       <section id="grid-container">
            <div class="container-classmate" >
    <div class="panel panel-default">
      <div class="panel-heading" style=" background: #374c9d;">
        <h4 class="panel-title">
          <p style="padding-top: 10px; margin-left: 10px; color: white; " data-toggle="collapse" data-parent="#accordion" href="#collapse1">My Classmate
          </p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><strong></strong>
         <?php
      
                            $my_student = mysqli_query($conn,"SELECT *
                            FROM teacher_class_student
                            LEFT JOIN student ON student.student_id = teacher_class_student.student_id
                            INNER JOIN class ON class.class_id = student.class_id where teacher_class_id = '$get_id' order by lastname ")or die(mysqli_error());
                            
                            while($row = mysqli_fetch_array($my_student)){
                            $id = $row['teacher_class_student_id'];
                            ?>
                            
                      <li id="del<?php echo $id; ?>">
                        <div class="student-box">
                               <img id="student_avatar_class" src ="../teacher/<?php echo $row['picture'] ?>" width="148" height="100" style="border: 3px solid white;"> 
                          </a>
                          <p style="font-size: 12px;" class="subject"><?php echo $row['firstname']; ?></p>
                          <p style="font-size: 12px;" class="class"><?php echo $row['lastname'];?></p>
                      </li>
                  <?php } ?>
                 
                 
        
      </div>
    </div>
    </div>
  </div> 
  <?php include('scripts.php'); ?>



























      