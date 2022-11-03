<?php
session_start();
include("database.php");


if (isset($_POST['add_teacher'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$department_id = $_POST['department'];

	$query = mysqli_query($conn,"select * from teacher where firstname = '$firstname' and lastname = '$lastname'")or die(mysqli_error());
	if (mysqli_num_rows($query) > 0) {
		$_SESSION['validate'] = 'Data Already Exist!';
		header("location: teachers.php");
	}else{
		
		mysqli_query($conn,"INSERT INTO `teacher`(`firstname`, `lastname`, `department_id`, `picture`) VALUES ('$firstname','$lastname','$department_id', 'img/NO-IMAGE-AVAILABLE.jpg')")or die(mysqli_error());
		

		$username =$_SESSION['username'];
		$user_query = mysqli_query($conn,"select * from users where username = '$username'")or die(mysqli_error());
		$user_row = mysqli_fetch_array($user_query);
		$user_username = $user_row['username'];
		mysqli_query($conn, "INSERT INTO `activity_log`(`date`, `username`,  `action`) VALUES (NOW(), '$user_username','Add Teacher $firstname')")or die(mysqli_error());

		$_SESSION['message'] ='Teacher Successfully added';
		header("location: teachers.php");
	}
}
?>