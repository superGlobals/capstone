<?php
	session_start();
	include "database.php";

	if(isset($_GET['id'])){
		$query = "DELETE FROM schoolyear WHERE sy_id = '".$_GET['id']."'";
		$results = mysqli_query($conn, $query);
		
		if($results){
			$_SESSION['message_delete'] = 'School year deleted successfully!';
			header('location: school_year.php');

		}
		}
	?>