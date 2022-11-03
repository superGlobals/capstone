<?php
session_start();
include("database.php");

if (isset($_POST['add_department'])) {
	$department = $_POST['department'];
	$person = $_POST['person'];

	$query = mysqli_query($conn,"select * from department where department_name = '$department'")or die(mysqli_error());
	if (mysqli_num_rows($query) > 0) {
		$_SESSION['validate'] = 'Data Already Exist';
		header("location: department.php");
	}else{
		mysqli_query($conn,"INSERT INTO `department`(`department_name`, `p-incharge`) VALUES ('$department', '$person')")or die(mysqli_error());


		$username =$_SESSION['username'];
		$user_query = mysqli_query($conn,"select * from users where username = '$username'")or die(mysqli_error());
		$user_row = mysqli_fetch_array($user_query);
		$user_username = $user_row['username'];
		mysqli_query($conn, "INSERT INTO `activity_log`(`date`, `username`,  `action`) VALUES (NOW(), '$user_username','Add Department $department')")or die(mysqli_error());

		$_SESSION['message'] = 'Department successfully added';
		header("location: department.php");
	}
}
?>