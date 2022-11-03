<?php
session_start();
include("database.php");

if (isset($_POST['edit_department'])) {
	$department_id = $_POST['department_id'];
	$department = $_POST['department'];
	$person = $_POST['person'];

	mysqli_query($conn,"UPDATE `department` SET `department_name`='$department',`p-incharge`='$person' WHERE department_id ='$department_id' ")or die(mysqli_error());

	$username =$_SESSION['username'];
		$user_query = mysqli_query($conn,"select * from users where username = '$username'")or die(mysqli_error());
		$user_row = mysqli_fetch_array($user_query);
		$user_username = $user_row['username'];
		mysqli_query($conn, "INSERT INTO `activity_log`(`date`, `username`,  `action`) VALUES (NOW(), '$user_username','Edit Department $department')")or die(mysqli_error());

	$_SESSION['update_message'] = 'Department updated successfully';
	header('location: department.php');
}
?>