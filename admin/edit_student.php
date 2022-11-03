<?php
session_start();
include("database.php");

if (isset($_POST['edit_student'])) {
	$student_id = $_POST['student_id'];
	$class = $_POST['class'];
	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];

	$query = mysqli_query($conn, "UPDATE `student` SET `firstname`='$firstname',`lastname`='$lastname',`class_id`='$class',`username`='$id' WHERE `student_id` = '$student_id'")or die(mysqli_error());

	$username =$_SESSION['username'];
		$user_query = mysqli_query($conn,"select * from users where username = '$username'")or die(mysqli_error());
		$user_row = mysqli_fetch_array($user_query);
		$user_username = $user_row['username'];
		mysqli_query($conn, "INSERT INTO `activity_log`(`date`, `username`,  `action`) VALUES (NOW(), '$user_username','Edit Student $firstname')")or die(mysqli_error());

	$_SESSION['update_message'] = 'Student updated successfully';
	header('location: student.php');
}
?>
