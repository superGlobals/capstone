<?php
	session_start();
	include "database.php";

	if(isset($_GET['id'])){
		$query = "DELETE FROM subject WHERE subject_id = '".$_GET['id']."'";
		$results = mysqli_query($conn, $query);
		
		if($results){
			$_SESSION['message_delete'] = 'Subject deleted successfully!';
			header('location: subject.php');

		}
		}
	?>