	<?php include('count.php'); ?>
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
				<a class="links" href="home.php">
				<div class="icon">
					<i class="fas fa-tachometer-alt"></i>
				</div>
				<span>Dashboard</span></a>
			</div>
			<?php $query = mysqli_query($conn,"select * from teacher_notification
				")or die(mysqli_error());
					$count = mysqli_num_rows($query);
									?>
												
			<div class="links">
				<a class="links" href="student_notification.php">
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
				<a class="links" href="student_settings.php">
				<div class="icon">
					<i class="fas fa-cog"></i>
				</div>
				<span>Settings</span></a>
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