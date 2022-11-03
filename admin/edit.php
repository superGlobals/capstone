<?php
	session_start();
	include "database.php";

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', username = '$username', password = '$password' WHERE id = '$id'";
		$results = mysqli_query($conn, $query);

			$_SESSION['update_message'] = 'User updated successfully';
			header('location: admin_users.php');
		
	
	
	}

	

?>