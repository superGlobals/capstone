<?php
session_start();
include("database.php");

if (isset($_POST['edit_class'])) {
	$class_id = $_POST['class_id'];
	$class = $_POST['class'];

	mysqli_query($conn,"UPDATE `class` SET `class_name`='$class' WHERE class_id ='$class_id' ")or die(mysqli_error());

	mysqli_query($conn, "INSERT INTO `activity_log`(`date`, `username`,  `action`) VALUES (NOW(), '$username','Edit Subject $subjectcode')")or die(mysqli_error());

	$_SESSION['update_message'] = 'Class updated successfully';
	header('location: class.php');
}

?>