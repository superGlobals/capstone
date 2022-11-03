<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('include/teacher_sidebar.php');?>
<?php include('../admin/database.php');?>
<?php $get_id = $_GET['id']; ?>
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
										<li><a href="#"><b>AddQuiz</b></a></li>
									</ul>
						 <!-- end breadcrumb -->

						 <!-- update data session -->
            <?php
            if (isset($_SESSION['update_message'])): ?> 
              <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-success text-center" id="hide">
                  <?php
                  echo $_SESSION['update_message'];
                  unset($_SESSION['update_message']);
                  ?>
              </div>
            <?php endif?>

 <section id="grid-container" style="margin-top: 20px; width: 100%;">
          <div class="container" style="width: 100%;" >
            <div class="panel panel-default" style="width: 1080px;">
   

         <div style="background: #374c9d;" class="panel-heading">
                <h4 class="panel-title">
                   <p style="padding-top: 10px; margin-left: 10px; color: white;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Edit Quiz</p>
        </h4>
       
      </div>

     
      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body"><strong></strong>
 	<div class="pull-right">
	<a style="background: #4e73df; color: white; margin-bottom: 10px;" href="teacher_quiz.php" class="btn"><i class="fas fa-arrow-left"></i> Back</a>
	</div>
									<?php
								$query = mysqli_query($conn,"select * from quiz where quiz_id = '$get_id'")or die(mysqli_error());
								$row  = mysqli_fetch_array($query);
								
								?>
									<form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Quiz Title</label>
											<div class="controls">
												<input type="hidden" name="quiz_id" value="<?php echo $row['quiz_id']; ?>" id="inputEmail" placeholder="Quiz Title">
											<input type="text" class="form-control"  name="quiz_title" value="<?php echo $row['quiz_title']; ?>" id="inputEmail" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" >Quiz Description</label>
											<div class="controls">
											<input type="text" class="form-control" name="description" value="<?php echo $row['quiz_description']; ?>"  required>
											</div>
										</div>										
										<div class="control-group">
										<div class="controls">										
										<button name="save" type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
										</div>
										</div>
										</form>	
										<?php
										if (isset($_POST['save'])){
										$quiz_id = $_POST['quiz_id'];
										$quiz_title = $_POST['quiz_title'];
										$description = $_POST['description'];
										mysqli_query($conn,"update quiz set quiz_title = '$quiz_title',quiz_description = '$description' where quiz_id = '$quiz_id'")or die(mysqli_error());
										$_SESSION['update_message'] = 'Quiz updated Successfully';
										?>

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
        </div>
		<?php include('scripts.php'); ?>
    </body>
</html>