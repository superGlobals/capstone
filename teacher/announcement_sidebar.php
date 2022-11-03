<?php include('teacher_count.php'); ?>
	<section id="sidebar" >
		<section class="title-container">

		<div class="teacher-logo">
				<div class="logo-one"> 



					  <?php
					  include('../admin/database.php');
                                    $teacher_query = mysqli_query($conn,"select * from teacher where teacher_id = $session_id") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($teacher_query)) {
                                    $id = $row['teacher_id'];
                                    
                                        ?>
                                    <tr>
                                       
                                    <td width="40"><img class="img-circle" src="<?php echo $row['picture']; ?>" height="70" width="70"></td> 
                                                         
                                    
				
				</div>
			</div>
			
		</section>
		<h1 class="user-fullname"><?php echo $row['firstname']." ".$row['lastname'];  ?> </h1>	
		<?php } ?>
		<hr class="seperator">
		<section class="links-container">
			<div class="links ">
				<a class="links" href="home.php">
				<div class="icon">
					<i class="fas fa-tachometer-alt"></i>
				</div>
				<span>Dashboard</span></a>
			</div>							
			<div class="links">
				<a class="links" href="notification.php">
				<div class="icon">
					<i class="fas fa-bell"></i>
				</div>
				<span>Notification 
					<?php if($not_read == '0'){
				}else{ ?>
					<span style="background: red; padding: 4px;" class="badge badge-danger"><?php echo $not_read; ?></span>
				<?php } ?>
				</span></a>
			</div>
			<div class="links">
				<a class="links" href="teacher_quiz.php">
				<div class="icon">
					<i class="fas fa-bars"></i>
				</div>
				<span>Quiz</span></a>
			</div>
			 <div class="links active">
				<a class="links" href="announcement.php">
				<div class="icon">
					<i class="fas fa-plus-circle"></i>
				</div>
				<span>Add Announcement</span></a>
			</div>
					
			<div class="links">
				<a class="links" href="upload_files.php">
				<div class="icon">
					<i class="fas fa-file-upload"></i>
				</div>
				<span>Upload Downloadables</span></a>
			</div>
			<div class="links">
				<a class="links" href="upload_assignment.php">
				<div class="icon">
					<i class="fas fa-file-upload"></i>
				</div>
				<span>Upload Assignments</span></a>
			</div>
			
			
			<div class="links">
				<a class="links" href="settings.php">
				<div class="icon">
					<i class="fas fa-cog"></i>
				</div>
				<span>Settings</span></a>
			</div>
		</section>	
	</section>
	<section id="main-dashboard-content">
		<section id="top-section">
			<!-- <div class="input-box">
				<input placeholder="Search..." name="">
				<div>
					<i class="fas fa-search"></i>
				</div>
			</div> -->
			
		
			 <h3 style="margin-left: 25px; margin-top: 16px;"><img src="img/logo.jpg" style="clip-path: circle(); width: 30px; height: 30px; margin-right: 5px;">POC - LMS</h3>




	
			
			<!-- <?php $query = mysqli_query($conn,"select * from teacher_notification
					
					")or die(mysqli_error());
					$count = mysqli_num_rows($query);
					?>		
			<div class="" onclick="toggleNotifi()">
			<i style="cursor: pointer; font-size: 20px; margin-left: 700px;" class="fas fa-bell"></i> <span style="font-size: 17px; margin-left: -2px;  margin-bottom: 20px; color: red;" ><?php echo $count; ?></span>
		</div>

		<div class="notifi-box" id="box">
			<h2>Notifications <span><?php echo $count; ?></span></h2>
			<div class="notifi-item">
				
				
					<?php $query = mysqli_query($conn,"select * from teacher_notification
					LEFT JOIN teacher_class on teacher_class.teacher_class_id = teacher_notification.teacher_class_id
					LEFT JOIN student on student.student_id = teacher_notification.student_id
					LEFT JOIN assignment on assignment.assignment_id = teacher_notification.assignment_id 
					LEFT JOIN class on teacher_class.class_id = class.class_id
					LEFT JOIN subject on teacher_class.subject_id = subject.subject_id
					where teacher_class.teacher_id = '$session_id'  order by  teacher_notification.date_of_notification DESC
					")or die(mysqli_error());
					$count = mysqli_num_rows($query);
					while($row = mysqli_fetch_array($query)){
					$student_id = $row['student_id'];
					$assignment_id = $row['assignment_id'];
					$get_id = $row['teacher_class_id'];
					$id = $row['teacher_notification_id'];
					
					
				
					?>		
				<a style="text-decoration: none;" href="<?php echo $row['link']; ?><?php echo '?id='.$get_id; ?>&<?php echo 'post_id='.$assignment_id; ?>&<?php echo '?sid='.$student_id; ?>">	
				<img class="img-circle" src="<?php echo $row['picture']; ?>" height="70" width="70">
			
				<div class="text">
				
					
				   <h4><b><?php echo $row['firstname']." ".$row['lastname'];  ?></b></h4>
				   <p><?php echo $row['notification']; ?> In <b><?php echo $row['fname']; ?></b></p>
				   <p>
					<?php echo $row['class_name']; ?> 
					<?php echo $row['subject_code']; ?> 
			 
					</a></p>

					<br>
				
			    </div>
<?php } ?>
			</div> -->

			

		</div>

		
			 <a href="logout.php" class="dropdown-item" style="color: black; margin-right: 20px;">
                  <i class="fas fa-sign-out-alt text-gray-400"></i>
                  Logout
                </a>
		</section>
		