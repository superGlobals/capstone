<?php
include('include/session.php');
include('../admin/database.php');

if (isset($_POST['change'])) {
	$password = $_POST['password'];
	$current_password = $_POST['current_password'];
	$new_password = $_POST['new_password'];
	$confirm_new_password = $_POST['confirm_password'];

	if ($password !== $current_password) {
		$_SESSION['error_curren_password'] = 'You Entered Wrong Current Password!';
		header("location: settings.php");
	}elseif ($new_password !== $confirm_new_password) {
		$_SESSION['error_new_password'] = 'New Password & Confirm password not matched!';
		header("location: settings.php");
	}elseif ($password == $new_password) {
		$_SESSION['error_create_new_password'] = 'Your new password cannot be the same as your current password!';
		header("location: settings.php");
	}elseif ($password == $current_password and $new_password == $confirm_new_password) {
		 mysqli_query($conn,"update teacher set password = '$new_password' where teacher_id = '$session_id'")or die(mysqli_error());
		 $_SESSION['success_change'] = 'You Successfully Change Your Password!';
		 header("location: settings.php");
	}
}

?>