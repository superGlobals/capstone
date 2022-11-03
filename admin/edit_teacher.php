<?php
session_start();
include("database.php");


if (isset($_POST['edit_teacher'])) {
	$teacher_id = $_POST['teacher_id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$department_id = $_POST['department'];

		mysqli_query($conn,"UPDATE `teacher` SET `firstname`='$firstname',`lastname`='$lastname',`department_id`='$department_id' WHERE teacher_id ='$teacher_id' ")or die(mysqli_error());	

		$username =$_SESSION['username'];
		$user_query = mysqli_query($conn,"select * from users where username = '$username'")or die(mysqli_error());
		$user_row = mysqli_fetch_array($user_query);
		$user_username = $user_row['username'];
		
mysqli_query($conn, "INSERT INTO `activity_log`(`date`, `username`,  `action`) VALUES (NOW(), '$username','Edit Teacher $lastname')")or die(mysqli_error());

	$_SESSION['update_message'] = 'Teacher updated successfully';
	header("location:teachers.php");
}
?>