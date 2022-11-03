<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('teacher_quiz_sidebar.php');?>
<?php include('../admin/database.php');?>
<body>
		
        <div class="container-fluid">
            <div class="row-fluid">
				<!-- <?php include('quiz_sidebar_teacher.php'); ?> -->
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
									<ul class="breadcrumb">
										<?php
										$school_year_query = mysqli_query($conn,"select * from schoolyear order by school_year DESC")or die(mysqli_error());
										$school_year_query_row = mysqli_fetch_array($school_year_query);
										$school_year = $school_year_query_row['school_year'];
										?>
											<li><a href="#"><b>My Class</b></a><span></span></li>
										<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a><span ></span></li>
										<li><a href="#"><b>AddQuizToClass</b></a></li>
									</ul>
						 <!-- end breadcrumb -->

						 <!-- Add data session -->   
             <?php

          if (isset($_SESSION['message'])): ?> 
            <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-success text-center" id="hide">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
          <?php endif?>
<section id="grid-container" style="margin-top: 20px; width: 100%;">
          <div class="container" style="width: 100%;" >
            <div class="panel panel-default" style="width: 1080px;">
   

         <div style="background: #374c9d;" class="panel-heading">
                <h4 class="panel-title">
                   <p style="padding-top: 10px; margin-left: 10px; color: white;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">AddQuiztoClass</p>
        </h4>


       
      </div>
      <a style="margin-top: 10px; margin-left: 90%;" class="btn btn-primary" href="teacher_quiz.php">Back</a>
      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body"><strong></strong>
 	
	  <form class="form-horizontal" method="post">
		<div class="control-group">
			<label class="control" for="inputEmail">Quiz Category</label>
			<div class="controls">
			<select style="width: 130px; cursor: pointer;" name="quiz_id">
			<option></option>
				<?php  $query = mysqli_query($conn,"select * from quiz where teacher_id = '$session_id'")or die(mysqli_error());
				while ($row = mysqli_fetch_array($query)){ $id = $row['quiz_id']; ?>
				<option value="<?php echo $id; ?>"><?php echo $row['quiz_title']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		<!-- <div class="control-group">
			<label class="control-label" for="inputPassword">Quiz Time (in minutes)</label>
			<div class="controls">
			<input type="text" class="span3" name="time" id="inputPassword" placeholder="Test Time" required>
			</div>
		</div> -->

				<table class="table" id="example">
                <th></th>
                <th>Class</th>
                <th>Subject</th>
                <th></th>
				
				<tbody>
					<?php $query = mysqli_query($conn,"select * from teacher_class
					LEFT JOIN class ON class.class_id = teacher_class.class_id
					LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
					where teacher_id = '$session_id' and school_year = '$school_year' ")or die(mysqli_error());
					$count = mysqli_num_rows($query);
					

					while($row = mysqli_fetch_array($query)){
					$id = $row['teacher_class_id'];

					?>
					<tr>
					<td width="30">
						<input style="cursor: pointer;" id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
					</td>
					<td><?php echo $row['class_name']; ?></td>
					<td><?php echo $row['subject_code']; ?></td>
					</tr>
					<?php } ?>
				</tbody>
				</table>
		
											
					<div class="control-group">
					<div class="controls">
					
					<button name="save" type="submit" class="btn btn-primary"><i class="icon-save"></i> Save</button>
					</div>
					</div>
					</form>
					
				
					
					<?php
					if (isset($_POST['save'])){
						$quiz_id = $_POST['quiz_id'];
						// $time = $_POST['time'] * 60;
						$id=$_POST['selector'];
						
								$name_notification  = 'Upload Quiz';
								
						$N = count($id);
						for($i=0; $i < $N; $i++)
						{
							mysqli_query($conn,"insert into class_quiz (teacher_class_id,quiz_id) values('$id[$i]','$quiz_id')")or die(mysqli_error());
							mysqli_query($conn,"insert into notification (teacher_class_id,notification,date_of_notification,link) value('$id[$i]','$name_notification',NOW(),'quiz_list.php')")or die(mysqli_error());
							$_SESSION['message'] = 'AddQuizToClass successfully';
						} ?>
						<script>
							window.location = 'teacher_quiz.php';
						</script>
						<?php
					}
					?>
 </div>
                    </div>
                </div>
            </div>
		<!-- <?php include('footer.php'); ?> -->
        </div>
		<?php include('scripts.php'); ?>
	</div>
	</div>
	</div>
	</div>
</div>
	</section>
    </body>
</html>