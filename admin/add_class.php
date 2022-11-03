<?php
include("includes/session.php");
include("database.php");

if (isset($_POST['add_class'])) {
	$classname = $_POST['classname'];

	$query = mysqli_query($conn,"SELECT * FROM class WHERE class_name = '$classname' ")or die(mysqli_error());

	if (mysqli_num_rows($query) > 0) {
		$_SESSION['validate'] = 'Data Already Exist';
		header("location: class.php");
	}else{
		mysqli_query($conn,"INSERT INTO `class`(`class_name`) VALUES ('$classname')")or die(mysqli_error());

		
		$username =$_SESSION['username'];
		$user_query = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'")or die(mysqli_error());
		$user_row = mysqli_fetch_array($user_query);
		$user_username = $user_row['username'];
		mysqli_query($conn, "INSERT INTO `activity_log`(`date`, `username`,  `action`) VALUES (NOW(), '$user_username','Add Class $classname')")or die(mysqli_error());

		$_SESSION['message'] ='Class Successfully added';
		header("location: class.php");
	}
}

?>