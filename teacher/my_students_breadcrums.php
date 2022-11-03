
	<?php $class_query = mysqli_query($conn,"select * from teacher_class
	LEFT JOIN class ON class.class_id = teacher_class.class_id
	LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
	where teacher_class_id = '$get_id'")or die(mysqli_error());
	$class_row = mysqli_fetch_array($class_query);
	?>
				
	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  	<li class="breadcrumb-item"><a href="#">My Students</a></li>
    <li class="breadcrumb-item"><a href="#"><b><?php echo $class_row['class_name']; ?></b></a></li>
    <li class="breadcrumb-item"><a href="#"><b><?php echo $class_row['subject_code']; ?></b></a></li>
  </ol>
</nav>
