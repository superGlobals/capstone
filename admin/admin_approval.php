<?php
session_start();
include('database.php');

// teacher query
if (isset($_POST['teacher_approve'])) {
	$teacher_id = $_POST['id'];

	$approve_query = mysqli_query($conn,"UPDATE teacher SET teacher_status = 'approved' WHERE teacher_id = '$teacher_id'");
	$_SESSION['approved'] = 'Approved successfully!';
	header("location:accounts_request.php");
}

if (isset($_POST['teacher_decline'])) {
	$teacher_id = $_POST['id'];

	$decline_query = mysqli_query($conn,"DELETE FROM teacher WHERE teacher_id = '$teacher_id'");
	$_SESSION['decline'] = 'Decline successfully!';
	header("location:accounts_request.php");
}

// student query
if (isset($_POST['student_approve'])) {
	$student_id = $_POST['id'];

	$approve_query = mysqli_query($conn,"UPDATE student SET student_status = 'approved' WHERE student_id = '$student_id'");
	$_SESSION['approved'] = 'Approved successfully!';
	header("location:student_account_request.php");
}

if (isset($_POST['student_decline'])) {
	$student_id = $_POST['id'];

	$decline_query = mysqli_query($conn,"DELETE FROM student WHERE student_id = '$student_id'");
	$_SESSION['decline'] = 'Decline successfully!';
	header("location:student_account_request.php");
}
?>