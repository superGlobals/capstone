<?php
session_start();
include("database.php");


if (isset($_POST['add_subject'])) {
	$subjectcode = $_POST['subjectcode'];
	$subjecttitle = $_POST['subjecttitle'];
	$units = $_POST['units'];
	$semester = $_POST['semester'];
	$description = $_POST['description'];

	$query = mysqli_query($conn,"select * from subject where subject_code = '$subjectcode' ")or die(mysqli_error());

	if (mysqli_num_rows($query)> 0){
		$_SESSION['validate'] = "Data Already Added!";
		header("location: subject.php");
	
	

	}else{
		mysqli_query($conn,"INSERT INTO `subject`(`subject_code`, `subject_title`, `description`, `unit`, `semester`) VALUES ('$subjectcode','$subjecttitle','$description','$units', '$semester')")or die(mysqli_error());


		$username =$_SESSION['username'];
		$user_query = mysqli_query($conn,"select * from users where username = '$username'")or die(mysqli_error());
		$user_row = mysqli_fetch_array($user_query);
		$user_username = $user_row['username'];
		mysqli_query($conn, "INSERT INTO `activity_log`(`date`, `username`,  `action`) VALUES (NOW(), '$user_username','Add Subject $subjectcode')")or die(mysqli_error());

	$_SESSION['message'] = "Succesfully Added";
	
  ?>
<script>
window.location = "subject.php";
</script>
<?php

	}
}
?>

									