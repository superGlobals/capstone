<?php
session_start();
include("database.php");

if (isset($_POST['edit_sy'])) {
	$sy_id = $_POST['sy_id'];
	$sy = $_POST['sy'];

	mysqli_query($conn,"UPDATE `schoolyear` SET `school_year`='$sy' WHERE sy_id ='$sy_id' ")or die(mysqli_error());

	mysqli_query($conn, "INSERT INTO `activity_log`(`date`, `username`,  `action`) VALUES (NOW(), '$username','Edit School Year $sy')")or die(mysqli_error());

	$_SESSION['update_message'] = 'School Year updated successfully';
	header('location: school_year.php');
}

?>