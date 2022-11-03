	<section id="sidebar">
		<section class="title-container">
		<div class="teacher-logo">
				<div class="logo-one"> 


					  <?php
					  include('../admin/database.php');
                                    $student_query = mysqli_query($conn,"select * from student where student_id = $session_id") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($student_query)) {
                                    $id = $row['student_id'];
                                    
                                        ?>
                                    <tr>
                                       
                                   <td width="40"><img class="img-circle" src="../teacher/<?php echo $row['picture']; ?>" height="70" width="70"></td> 
                                                         
                                   
				
				
				</div>
			</div>
			
		</section>
		<h1 class="user-fullname"><?php echo $row['firstname']." ".$row['lastname'];  ?> </h1>		
		 <?php } ?>
		<hr class="seperator">
		<section class="links-container">
			<div class="links">
				<a class="links" href="home.php<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-arrow-left"></i>
				</div>
					<span>Back</span></a>
			</div>
			<div class="links">
				<a class="links" href="my_classmates.php<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-tachometer-alt"></i>
				</div>
				<span>Dashboard</span></a>
			</div>
			<div class="links">
				<a class="links" href="join_meeting.php<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-video"></i>
				</div>
					<span>Live Class</span></a>
			</div>
			
			<div class="links">
				<a class="links" href="quiz_list.php<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-bars"></i>
				</div>
				<span>Quiz</span></a>
			</div>
			<div class="links">
				<a class="links" href="announcement_student.php<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-info"></i>
				</div>
				<span>Announcement</span></a>
			</div>
			<div class="links ">
				<a class="links" href="downloadable_files.php<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-file-download"></i>
				</div>
				<span>Downloadable Files</span></a>
			</div>
			<div class="links active">
				<a class="links" href="assignment_files.php<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-book"></i>
				</div>
				<span>Assignments</span></a>
			</div>
			
			
		</section>	
	</section>
	<section id="main-dashboard-content">
		<section id="top-section">
 		<h3 style="margin-left: 25px; margin-top: 16px;"><img src="img/logo.jpg" style="clip-path: circle(); width: 30px; height: 30px; margin-right: 5px;">POC - LMS</h3>
			 <a href="student_logout.php" class="dropdown-item" style="color: black; margin-right: 20px;">
                  <i class="fas fa-sign-out-alt text-gray-400"></i>
                  Logout
                </a>
		</section>