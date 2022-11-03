<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('../admin/database.php');?>
<?php include('include/add_student_sidebar.php');?>
<?php $get_id = $_GET['id']; ?>

        <div class="container-fluid">
            <div class="row-fluid">

                <div class="span9" id="content">
                     <div class="row-fluid">
					     <!-- breadcrumb -->
				<div class="pull-right">
								<a href="my_students.php<?php echo '?id='.$get_id; ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i>Back</a>
						</div>
										<?php $class_query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_class_id = '$get_id'")or die(mysqli_error());
										$class_row = mysqli_fetch_array($class_query);
										?>
				
					   
						<h4>Add Student</h4>

          <section id="grid-container" style="margin-top: 20px; width: 100%;">
          <div class="container" style="width: 100%;" >
            <div class="panel panel-default" style="width: 1080px;">
   

         <div style="background: #374c9d;" class="panel-heading">
                <h4 class="panel-title">
                   <p style="padding-top: 10px; margin-left: 10px; color: white;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Add Student</p>
        </h4>
       
      </div>
     
      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body"><strong></strong>

	<form method="post" action="">
		<button type="submit"  name="submit" style="margin-left: 85%; background: #4e73df; width: 150px; margin-top: 30px " class="btn btn-info"><i class="fas fa-plus-circle"></i>&nbsp;Add Student</button>
				<br>
				<br>

		<table id="example" class="display">

		<thead>

		<tr>

		    <th>Photo</th>
		    <th>Name</th>
		    <th>Course Year and Section</th> 	 	
		    <th></th>
		</tr>
		</thead>
		<tbody>

         <?php


		$a = 0 ;
		$query = mysqli_query($conn,"select * from student LEFT JOIN class on class.class_id = student.class_id where student_status = 'approved'") or die(mysqli_error());
		while ($row = mysqli_fetch_array($query)) {
        $id = $row['student_id'];
		$a++;
	
        ?>

		<tr>
		<input type="hidden" name="test" value="<?php echo $a; ?>">
        <td width="40"><img  class="img-rounded" src="<?php echo $row['picture']; ?>" height="70" width="70"></td>
        <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
		<td><?php echo $row['class_name']; ?></td> 

		<td width="80">
		<!-- <select name="add_student<?php echo $a; ?>" class="span12">
		<option></option>
		<option>Add</option>
		</select> -->
		<input class="checkbox" type="checkbox" name="add_student<?php echo $a; ?>" value="Add">
		<input type="hidden" name="student_id<?php echo $a; ?>" value="<?php echo $id; ?>">
		<input type="hidden" name="class_id<?php echo $a; ?>" value="<?php echo $get_id; ?>">
		<input type="hidden" name="teacher_id<?php echo $a; ?>" value="<?php echo $session_id; ?>">
		
		</td>
	
   <?php } ?>      
		
</tr>

</tbody>
</table>

</form>
						
  										
	<?php

if (isset($_POST['submit'])){

	$test = $_POST['test'];
	for($b = 1; $b <=  $test; $b++)
	{
	
	$test1 = "student_id".$b;
	$test2 = "class_id".$b;
	$test3 = "teacher_id".$b;
	$test4 = "add_student".$b;
	
	$id = $_POST[$test1];
	$class_id = $_POST[$test2];
	$teacher_id = $_POST[$test3];
	$Add = $_POST[$test4];
	
 	$query = mysqli_query($conn,"select * from teacher_class_student where student_id = '$id' and teacher_class_id = '$class_id' ")or die(mysqli_error());
	$count = mysqli_num_rows($query); 
	
 	if ($count > 0){ ?>
	<script>
	 alert('Student Already in the class'); 
	</script>
	<script>
	window.location = "add_student.php<?php echo '?id='.$get_id; ?>"; 
	</script>
	
	<?php
	}else  
	if($Add == 'Add'){
	
	mysqli_query($conn,"insert into teacher_class_student (student_id,teacher_class_id,teacher_id) values('$id','$class_id','$teacher_id') ")or die(mysqli_error());
	}else{
	}
?>
<script>
 window.location = "my_students.php<?php echo '?id='.$get_id; ?>"; 
</script>
	
	<?php
	}
	}
	?>
    </tbody>
</table>

        </div>
    </div>
</div>
<!-- /block -->
</div>
</div>

</div>
</div>
<?php include('scripts.php'); ?>
