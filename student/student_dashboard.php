<?php
include("include/session.php");
include("include/header.php");
include('../admin/database.php');
include("student_sidebar.php");
?>
		<h1 id="welcome-title"> <?php
                    $sy_query = mysqli_query($conn, "select * from schoolyear order by school_year DESC");
                    $sy_row = mysqli_fetch_array($sy_query);
                    $sy = $sy_row['school_year'];

                    ?>
                <h3 style="margin-bottom: 20px; margin-left: 20px; ">
                    School year: <?php echo $sy_row['school_year'];  ?>
                </h3></h1>

		<section id="grid-container">
			<div class="container" >
    <div class="panel panel-default" style="width: 1080px;">
      <div class="panel-heading">
        <h4 class="panel-title">
          <p style="padding: 5px;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">My Class
          </p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><strong></strong>
       <?php $query = mysqli_query($conn,"select * from teacher_class_student
                            LEFT JOIN teacher_class ON teacher_class.teacher_class_id = teacher_class_student.teacher_class_id 
                            LEFT JOIN class ON class.class_id = teacher_class.class_id 
                            LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
                            LEFT JOIN teacher ON teacher.teacher_id = teacher_class.teacher_id
                            where student_id = '$session_id' and school_year = '$sy'
                            ")or die(mysqli_error());
                            $count = mysqli_num_rows($query);
                  ?>
                        
                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                
                      <a  id="da-thumbs" class="da-thumbs">
                          <?php
                            if ($count != '0'){
                            while($row = mysqli_fetch_array($query)){
                            $id = $row['teacher_class_id']; 
                          ?>
                      <a>
                        <a href="my_classmates.php<?php echo '?id='.$id; ?>">
                           <div class="box">
                              <img src="img/2.jpg">
                          <div>
                          
                          </div>
                        </a>
                        <p class="class"><?php echo $row['class_name']; ?></p>
                        <p class="subject"><?php echo $row['subject_code']; ?></p>
                        <p class="subject"><?php echo $row['firstname']." ".$row['lastname']?></p>
                          
                      </div>
                      </a>
                
      
                  <?php }}else{ ?>
                 <!--  <div class="alert alert-info"><i class="icon-info-sign"></i> You are currently not enroll to your class</div> -->
                  <?php } ?>  
                  </a>


      </div>
    </div>
    </div>
  </div> 
			
	</section>

	<?php 
	include("scripts.php");
	 ?>
