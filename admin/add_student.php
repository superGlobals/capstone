<?php
session_start();
include("database.php");


if (isset($_POST['add_student'])) {
	$section = $_POST['section'];
	$idnumber = $_POST['idnumber'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	

	$query = mysqli_query($conn, "SELECT * FROM student WHERE username = '$idnumber' ")or die(mysqli_error());

	if (mysqli_num_rows($query) > 0) {
		$_SESSION['validate'] = 'Data Already Exist!';
		header("location: student.php");
	}else{
		mysqli_query($conn, "INSERT INTO `student`(`firstname`, `lastname`, `class_id`, `username`, `picture`, `status`) VALUES ('$firstname','$lastname','$section','$idnumber','img/NO-IMG-AVAILABLE','Unregistered')")or die(mysqli_error());

		$username =$_SESSION['username'];
		$user_query = mysqli_query($conn,"select * from users where username = '$username'")or die(mysqli_error());
		$user_row = mysqli_fetch_array($user_query);
		$user_username = $user_row['username'];
		mysqli_query($conn, "INSERT INTO `activity_log`(`date`, `username`,  `action`) VALUES (NOW(), '$user_username','Add Student $firstname')")or die(mysqli_error());

		$_SESSION['message'] ='Student Successfully added';
		header("location: student.php");
	}
}

?>