<?php
	session_start();
	include "database.php";

	if(isset($_GET['id'])){
		$query = "DELETE FROM department WHERE department_id = '".$_GET['id']."'";
		$results = mysqli_query($conn, $query);
		
		if($results){
			$_SESSION['message_delete'] = 'Department deleted successfully!';
			header('location: department.php');

		}
		}
	?>