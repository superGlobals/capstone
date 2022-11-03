<?php
	session_start();
	include('../admin/database.php');

	if(isset($_GET['id'])){
		$query = "DELETE FROM teacher_class WHERE teacher_class_id = '".$_GET['id']."'";
		$results = mysqli_query($conn, $query);
		
		if($results){
			$_SESSION['message_delete'] = 'Class deleted successfully!';
			header('location: home.php');

		}
		}
	?>