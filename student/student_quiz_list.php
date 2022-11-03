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
			<div class="links active">
				<a class="links" href="my_classmates.php<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-tachometer-alt"></i>
				</div>
				<span>Dashboard</span></a>
			</div>
			<div class="links">
				<a class="links" href="zoom_meeting.php<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-video"></i>
				</div>
					<span>Zoom Meeting</span></a>
			</div>
			<div class="links">
				<a class="links" href="<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-comments"></i>
				</div>
				<span>Message</span></a>
			</div>
			<div class="links">
				<a class="links" href="quiz_list.php<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-bars"></i>
				</div>
				<span>Quiz</span></a>
			</div>
			<div class="links">
				<a class="links" href="downloadables.php<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-file-download"></i>
				</div>
				<span>Downloadable Files</span></a>
			</div>
			<div class="links">
				<a class="links" href="assignment.php<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-book"></i>
				</div>
				<span>Assignments</span></a>
			</div>
			<div class="links">
				<a class="links" href="announcement.php<?php echo '?id='.$get_id; ?>">
				<div class="icon">
					<i class="fas fa-bullhorn"></i>
				</div>
				<span>Announcements</span></a>
			</div>
			<div class="links">
				<a class="links" href="calendar.php">
				<div class="icon">
					<i class="fas fa-calendar-alt"></i>
				</div>
				<span>Calendar</span></a>
			</div>
		</section>	
	</section>
	<section id="main-dashboard-content">
		<section id="top-section">
			<div class="input-box">
				<input placeholder="Search..." name="">
				<div>
					<i class="fas fa-search"></i>
				</div>
			</div>
			 <a href="student_logout.php" class="dropdown-item" style="color: black; margin-right: 20px;">
                  <i class="fas fa-sign-out-alt text-gray-400"></i>
                  Logout
                </a>
		</section>