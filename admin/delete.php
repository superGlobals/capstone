<?php
	session_start();
	include "database.php";

	if(isset($_GET['id'])){
		$query = "DELETE FROM users WHERE id = '".$_GET['id']."'";
		$results = mysqli_query($conn, $query);
		
		if($results){
			$_SESSION['message_delete'] = 'User deleted successfully!';
			header('location: admin_users.php');

		}
		}
	?>