<?php
	session_start();
	include "database.php";

	if(isset($_GET['id'])){
		$query = "DELETE FROM class WHERE class_id = '".$_GET['id']."'";
		$results = mysqli_query($conn, $query);
		
		if($results){
			$_SESSION['message_delete'] = 'Class deleted successfully!';
			header('location: class.php');

		}
		}
	?>