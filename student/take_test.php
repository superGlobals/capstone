<?php include('header_dashboard.php'); ?>
<?php include('include/session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<?php $class_quiz_id = $_GET['class_quiz_id']; ?>
<?php $quiz_id = $_GET['quiz_id']; ?>

<?php $query1 = mysqli_query($conn,"select * from student_class_quiz where student_id = '$session_id' and class_quiz_id = '$class_quiz_id' ")or die(mysqli_error());
	  $count = mysqli_num_rows($query1);
?>

<?php
if ($count > 0){
}else{
 mysqli_query($conn,"insert into student_class_quiz (class_quiz_id,student_id) values('$class_quiz_id','$session_id')");
}
 ?>


    <body>
		<?php include('quiz_list_sidebar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
										<?php $class_query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_class_id = '$get_id'")or die(mysqli_error());
										$class_row = mysqli_fetch_array($class_query);
										$class_id = $class_row['class_id'];
										$school_year = $class_row['school_year'];
										?>
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider"></span></li>
							<li><a href="#"><?php echo $class_row['subject_code']; ?></a> <span class="divider"></span></li>
							<li><a href="#">School Year: <?php echo $class_row['school_year']; ?></a> <span class="divider"></span></li>
							<li><a href="#"><b>Quiz</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">

							
							<?php
if($_GET['test'] == 'ok'){
/* $sqlp = mysqli_query($conn,"SELECT * FROM groupcode WHERE course_code = '".$row['course_code']."'"); */
$sqlp = mysqli_query($conn,"SELECT * FROM class_quiz WHERE class_quiz_id = '$class_quiz_id'")or die(mysqli_error());
$rowp = mysqli_fetch_array($sqlp);
/* mysqli_query($conn,"UPDATE students SET `time-left` = ".$rowp['time']." WHERE stud_id = '".$_SESSION['user_id']."'"); */
/* echo $rowp['time']; */
$x=0;
?>
										
<form action="take_test.php<?php echo '?id='.$get_id; ?>&<?php echo 'class_quiz_id='.$class_quiz_id; ?>&<?php echo 'test=done' ?>&<?php echo 'quiz_id='.$quiz_id; ?>" name="testform" method="POST" id="test-form">
	  <section id="grid-container">
            <div class="container" >
    <div class="panel panel-default" style="width: 90%;">
      <div class="panel-heading" style=" background: #374c9d;">
        <h4 class="panel-title">
          <p style="padding-top: 10px; margin-left: 10px; color: white; " data-toggle="collapse" data-parent="#accordion" href="#collapse1">Quiz Question
          </p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><strong></strong>
           
<?php
										$sqla = mysqli_query($conn,"select * FROM class_quiz 
										LEFT JOIN quiz ON quiz.quiz_id  = class_quiz.quiz_id
										where teacher_class_id = '$get_id' 
										order by date_added DESC ")or die(mysqli_error());
										/* $row = mysqli_fetch_array($sqla); */
										$rowa = mysqli_fetch_array($sqla);
					
										/* $rowa   = $row['quiz_id']; */
/* $sqla = mysqli_query($conn,"SELECT * FROM class_quiz WHERE course_code = '".$row['course_code']."'"); */

?>
										<h3>Test Title: <b><?php echo $rowa['quiz_title'];?></b></h3>
										<p><b>Description: <?php echo $rowa['quiz_description'];?></b></p>
										
										<!-- Time Remaining:<div id="timer">1</div> -->
										<!-- <div id="msg"></div> -->
					<script>
					jQuery(document).ready(function(){	
						jQuery(".questions").each(function(){
							jQuery(this).hide();
						});
						jQuery("#q_1").show();
					});
					</script>
										<script>
										jQuery(document).ready(function(){
										var nq = 0;
										var qn = 0;
											jQuery(".nextq").click(function(){
												qn = jQuery(this).attr('qn');
												nq = parseInt(qn) + 1;
												jQuery('#q_' + qn ).fadeOut();
												jQuery('#q_' + nq ).show();		
											});
										});
										</script>


<table class="questions-table table">
<tr>
<th>#</th>
<th>Question</th>
</tr>
<?php
	$sqlw = mysqli_query($conn,"SELECT * FROM quiz_question where quiz_id = '$quiz_id'  ORDER BY RAND()");
	$qt = mysqli_num_rows($sqlw); 
	while($roww = mysqli_fetch_array($sqlw)){
?>
<tr id="q_<?php echo $x=$x+1;?>" class="questions">
<td width="30" id="qa"><?php echo $x;?></td>
<td id="qa">
<?php echo $roww['question_text'];?>

<?php
if($roww['question_type_id']=='2'){
?>
	<input name="q-<?php echo $roww['quiz_question_id'];?>" value="True" type="radio"> True&nbsp;|&nbsp;<input name="q-<?php echo $roww['quiz_question_id'];?>" value="False" type="radio"> False


	<?php
	}else if($roww['question_type_id']=='1') {
	$sqly = mysqli_query($conn,"SELECT * FROM answer WHERE quiz_question_id = '".$roww['quiz_question_id']."'");
	while($rowy = mysqli_fetch_array($sqly)){
	if($rowy['choices'] == 'A') {
	?>
	A.)<input name="q-<?php echo $roww['quiz_question_id'];?>" value="A" type="radio"> <?php echo $rowy['answer_text'];?><br /><br />
	<?php } else if ($rowy['choices'] == 'B') {?>                                 
	B.) <input name="q-<?php echo $roww['quiz_question_id'];?>" value="B" type="radio"> <?php echo $rowy['answer_text'];?><br /><br />
	<?php } else if ($rowy['choices'] == 'C') {?>                                 
	C.) <input name="q-<?php echo $roww['quiz_question_id'];?>" value="C" type="radio"> <?php echo $rowy['answer_text'];?><br /><br />
	<?php } else if ($rowy['choices'] == 'D') {?>                                 
	D.) <input name="q-<?php echo $roww['quiz_question_id'];?>" value="D" type="radio"> <?php echo $rowy['answer_text'];?><br /><br />
	<?php
		}
	}
}
?>
<br/>
<button style="width: 150px;" onclick="return false;" qn="<?php echo $x;?>" class="nextq btn btn-success" id="next_<?php echo $x;?>">NEXT QUESTION <i class="fas fa-arrow-right"></i> <i class="icon-arrow-right"></i> </button>
<input type="hidden" name="x-<?php echo $x;?>" value="<?php echo $roww['quiz_question_id'];?>">
</td>
</tr>
<?php
	}
?>
<tr>
<td></td>
<td>
<button style="width: 150px;" class="btn btn-primary" id="submit-test" name="submit_answer"><i class="icon-check"></i> Submit Answer</button>
<!-- <input type="submit" value="Submit My Answers"  class="btn btn-info" id="submit-test" name="submit_answer"><br /> -->
</td>
</tr>
</table>
<input type="hidden" name="x" value="<?php echo $x;?>">
</form>
<?php
} else if(isset($_POST['submit_answer'])){
	
	$x1 = $_POST['x'];
	$score = 0;


	for($x=1;$x<=$x1;$x++){
	
		$x2 = $_POST["x-$x"];
		$q = $_POST["q-$x2"];
		
		$sql = mysqli_query($conn,"SELECT * FROM quiz_question WHERE quiz_question_id = ".$x2."");
		$row = mysqli_fetch_array($sql);
		if($row['answer'] == $q) {
			$score= $score + 1;
		}
		
	} ?>

	
	<a class="btn btn-primary" href="quiz_list.php<?php echo '?id='.$get_id; ?>"><i class="icon-arrow-left"></i> Back</a>
	<center>
		<!-- <?php
		if (isset($_POST['essay'])) {
			$essay = $_POST['essay'];
			?>
			<script>
			window.location = 'quiz_list.php<?php echo '?id='.$get_id; ?>';
		</script>
		<?php
		}
		?> -->
		 <section id="grid-container" style="margin-top: 20px; width: 100%;">
          <div class="container" style="width: 100%;" >
            <div class="panel panel-default" style="width: 1080px;">
   

         <div style="background: #374c9d;" class="panel-heading">
                <h4 class="panel-title">
                   <p style="padding-top: 10px; margin-left: 10px; color: white;" data-toggle="collapse" data-parent="#accordion" href="#collapse1"></p>
        </h4>
       
      </div>
     
      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body"><strong></strong>
		<h3><br>Your score is <b><?php echo $score; ?> </b> out of <b><?php echo ($x-1); ?> </b><br/></h3>

		
		
		<!-- else{
	 "<h3><br>Your score is <b> echo $score; </b> out of <b>< echo ($x-1); </b><br/></h3>"

       }
		?> -->
	</center>
	<?php
	/* echo "Your Percentage Grade is : <b>".$per."%</b>"; */
	mysqli_query($conn,"UPDATE student_class_quiz SET `grade_status` = '".$score." out of ".($x-1)."', `total_grade` = '$score', 
		`date_taken` = NOW(),`quiz_status` = 'done' WHERE student_id = '$session_id' and class_quiz_id = '$class_quiz_id'")or die(mysqli_error());
	// mysqli_query($conn,"insert into teacher_notification (teacher_class_id,notification,date_of_notification,link,student_id,class_quiz_id) value('$get_id','Done taking quiz',NOW(),'class_quiz_result.php','$session_id','$class_quiz_id')")or die(mysqli_error());
	// mysqli_query($conn,"UPDATE `class_quiz` SET `status`= 'done' WHERE class_quiz_id = '$class_quiz_id'");
?>
<!-- <script>
	  window.location = 'quiz_list.php<?php echo '?id='.$get_id; ?>'; 
</script> -->
<?php
	} /* else { */
?>
<br />
<?php
/* $sql = mysqli_query($conn,"SELECT * FROM students WHERE stud_id = '".$_SESSION['user_id']."'");
$row = mysqli_fetch_array($sql);
	if(is_null($row['grade']) AND $row['time-left'] == 3600){ */
?>
<!--	<a href="?test=ok">Take the test now</a> -->
<?php
/* 	} else if(is_null($row['grade']) AND $row['time-left'] < 3600 AND $row['time-left'] > 0){ */
?>
<!--	<a href="?test=ok">Continue your test</a> -->
<?php
/* 	} else if(!is_null($row['grade'])){
		$sqlg = mysqli_query($conn,"SELECT * FROM groupcode WHERE course_code = '".$row['course_code']."'");
		$rowg = mysqli_fetch_array($sqlg);
		echo "You have already taken <b>".$rowg['course_title']."</b> - <b>".$rowg['course_code']."</b> test.";
	}
	if($row['grade']!=''){
		mysqli_query($conn,"UPDATE students SET `time-left` = 3600 WHERE stud_id = '".$_SESSION['user_id']."'");
		echo "<br />Your Grade for this Test is :  <b>".$row['grade']."</b>";		
	}
} */
?>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
							
	
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		
        </div>
		<?php include('scripts.php'); ?>
    </body>
</html>