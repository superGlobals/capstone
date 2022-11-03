<?php
session_start();
include("database.php");

if (isset($_GET['id'])) {
	$query = "DELETE FROM teacher WHERE teacher_id = '".$_GET['id']."'";
	$results = mysqli_query($conn, $query);

	if ($results) {
		$_SESSION['message_delete'] = 'Teacher deleted successfully!';
		header("location: teachers.php");
	}
}

?>