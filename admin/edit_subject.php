<?php
session_start();
include("database.php");

if (isset($_POST['edit_subject'])) {
	$subject_id = $_POST['subject_id'];
	$subjectcode = $_POST['subjectcode'];
	$subjecttitle = $_POST['subjecttitle'];
	$units = $_POST['units'];
	$semester = $_POST['semester'];
	$description = $_POST['description'];

	mysqli_query($conn,"UPDATE `subject` SET `subject_code`='$subjectcode',`subject_title`='$subjecttitle',`description`='$description',`unit`='$units',`semester`='$semester' WHERE subject_id ='$subject_id' ")or die(mysqli_error());


	$username =$_SESSION['username'];
		$user_query = mysqli_query($conn,"select * from users where username = '$username'")or die(mysqli_error());
		$user_row = mysqli_fetch_array($user_query);
		$user_username = $user_row['username'];
		
	mysqli_query($conn, "INSERT INTO `activity_log`(`date`, `username`,  `action`) VALUES (NOW(), '$username','Edit Subject $subjectcode')")or die(mysqli_error());

	$_SESSION['update_message'] = 'Subject updated successfully';
	header('location: subject.php');
}

?>