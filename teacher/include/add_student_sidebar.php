	<section id="sidebar">
		<section class="title-container">
		<div class="teacher-logo">
				<div class="logo-one"> 


					  <?php
					  include('database.php');
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
			<div class="links active">
				<a class="links" href="home.php">
				<div class="icon">
					<i class="fas fa-tachometer-alt"></i>
				</div>
				<span>Dashboard</span></a>
			</div>
			<div class="links">
				<a class="links" href="teacher_quiz.php">
				<div class="icon">
					<i class="fas fa-bars"></i>
				</div>
				<span>Quiz</span></a>
			</div>
			<div class="links">
				<a class="links" href="zoom_meeting.php">
				<div class="icon">
					<i class="fas fa-video"></i>
				</div>
					<span>Zoom Meeting</span></a>
			</div>
			<div class="links">
				<a class="links" href="">
				<div class="icon">
					<i class="fas fa-comments"></i>
				</div>
				<span>Message</span></a>
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
				<a class="links" href="announcement.php">
				<div class="icon">
					<i class="fas fa-plus-circle"></i>
				</div>
				<span>Add Announcements</span></a>
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
			 <h3 style=" margin-left: 20px; margin-top: 16px;"><img src="img/logo.jpg" style="clip-path: circle(); width: 30px; height: 30px; margin-right: 5px;">POC - LMS</h3>
			 <a href="logout.php" class="dropdown-item" style="color: black; margin-right: 20px;">
                  <i class="fas fa-sign-out-alt text-gray-400"></i>
                  Logout
                </a>
		</section>