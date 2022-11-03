<?php
include("database.php");
session_start();

if (isset($_POST['add_sy'])) {
	$sy = $_POST['sy'];

	$query = mysqli_query($conn," SELECT * FROM schoolyear WHERE school_year = '$sy'")or die(mysqli_error());

	if (mysqli_num_rows($query) > 0) {
		$_SESSION['validate'] = 'SCHOOL YEAR ALREADY ADDED!';
		header("location:school_year.php");
	}else{

		mysqli_query($conn, "INSERT INTO `schoolyear`(`school_year`) VALUES ('$sy')")or die(mysqli_error());

		$username =$_SESSION['username'];
		$user_query = mysqli_query($conn,"select * from users where username = '$username'")or die(mysqli_error());
		$user_row = mysqli_fetch_array($user_query);
		$user_username = $user_row['username'];
		mysqli_query($conn, "INSERT INTO `activity_log`(`date`, `username`,  `action`) VALUES (NOW(), '$user_username','Add School Year $sy')")or die(mysqli_error());

		$_SESSION['message'] ='School Year Successfully added';
		header("location: school_year.php");
	}
}

?>